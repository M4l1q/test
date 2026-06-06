import { Input } from './input.js';
import { Camera } from './camera.js';
import { Sprite } from './sprite.js';
import { AIAgent } from './ai-agent.js';
import { Pathfinding } from './pathfinding.js';

class Game {
  constructor() {
    this.canvas = document.getElementById('gameCanvas');
    this.ctx = this.canvas.getContext('2d');
    this.ctx.imageSmoothingEnabled = false;

    this.WORLD_WIDTH = 512;
    this.WORLD_HEIGHT = 512;
    this.TILE_SIZE = 32;
    this.GRID_SIZE = 16;

    this.lastTime = 0;
    this.running = false;

    this.input = new Input();
    this.camera = new Camera(this.WORLD_WIDTH, this.WORLD_HEIGHT);

    this.player = {
      x: this.TILE_SIZE * 2,
      y: this.TILE_SIZE * 2,
      width: this.TILE_SIZE,
      height: this.TILE_SIZE,
      speed: 150,
      color: '#4CAF50'
    };

    this.obstacles = [];
    this.generateObstacles();

    this.agents = [];
    this.initAgents();

    this.pathfinding = new Pathfinding(this.GRID_SIZE, this.TILE_SIZE);
  }

  generateObstacles() {
    for (let i = 0; i < 40; i++) {
      const x = Math.floor(Math.random() * this.GRID_SIZE) * this.TILE_SIZE;
      const y = Math.floor(Math.random() * this.GRID_SIZE) * this.TILE_SIZE;
      if (Math.abs(x - this.player.x) > this.TILE_SIZE * 3 &&
          Math.abs(y - this.player.y) > this.TILE_SIZE * 3) {
        this.obstacles.push({ x, y, width: this.TILE_SIZE, height: this.TILE_SIZE });
      }
    }
  }

  initAgents() {
    const sprites = [
      Sprite.createPixelSprite(32, 32, Array(32).fill(null).map(() =>
        Array(32).fill(null).map((_, i) => i < 100 ? '#FF5722' : null))),
      Sprite.createPixelSprite(32, 32, Array(32).fill(null).map(() =>
        Array(32).fill(null).map((_, i) => i < 100 ? '#2196F3' : null))),
      Sprite.createPixelSprite(32, 32, Array(32).fill(null).map(() =>
        Array(32).fill(null).map((_, i) => i < 100 ? '#FF9800' : null)))
    ];

    for (let i = 0; i < 3; i++) {
      let ax, ay;
      do {
        ax = Math.floor(Math.random() * this.GRID_SIZE) * this.TILE_SIZE;
        ay = Math.floor(Math.random() * this.GRID_SIZE) * this.TILE_SIZE;
      } while (Math.abs(ax - this.player.x) < this.TILE_SIZE * 4 &&
               Math.abs(ay - this.player.y) < this.TILE_SIZE * 4);

      this.agents.push(new AIAgent(ax, ay, this.TILE_SIZE, sprites[i % sprites.length]));
    }
  }

  start() {
    if (this.running) return;
    this.running = true;
    this.lastTime = performance.now();
    requestAnimationFrame((t) => this.loop(t));
  }

  stop() {
    this.running = false;
  }

  loop(currentTime) {
    if (!this.running) return;

    const dt = Math.min((currentTime - this.lastTime) / 1000, 0.1);
    this.lastTime = currentTime;

    this.update(dt);
    this.render();

    requestAnimationFrame((t) => this.loop(t));
  }

  update(dt) {
    this.handleInput(dt);
    this.camera.follow(this.player, this.canvas.width, this.canvas.height);
    this.updateAgents(dt);
  }

  handleInput(dt) {
    const input = this.input.getState();
    let dx = 0;
    let dy = 0;

    if (input.keys['KeyW'] || input.keys['ArrowUp']) dy -= 1;
    if (input.keys['KeyS'] || input.keys['ArrowDown']) dy += 1;
    if (input.keys['KeyA'] || input.keys['ArrowLeft']) dx -= 1;
    if (input.keys['KeyD'] || input.keys['ArrowRight']) dx += 1;

    if (dx !== 0 || dy !== 0) {
      const len = Math.sqrt(dx * dx + dy * dy);
      dx /= len;
      dy /= len;

      const newX = this.player.x + dx * this.player.speed * dt;
      const newY = this.player.y + dy * this.player.speed * dt;

      if (!this.checkCollision(newX, this.player.y, this.player.width, this.player.height)) {
        this.player.x = Math.max(0, Math.min(this.WORLD_WIDTH - this.player.width, newX));
      }
      if (!this.checkCollision(this.player.x, newY, this.player.width, this.player.height)) {
        this.player.y = Math.max(0, Math.min(this.WORLD_HEIGHT - this.player.height, newY));
      }
    }
  }

  checkCollision(x, y, w, h) {
    for (const obs of this.obstacles) {
      if (x < obs.x + obs.width && x + w > obs.x &&
          y < obs.y + obs.height && y + h > obs.y) {
        return true;
      }
    }
    return false;
  }

  updateAgents(dt) {
    for (const agent of this.agents) {
      const distToPlayer = Math.hypot(
        this.player.x - agent.x,
        this.player.y - agent.y
      );

      if (distToPlayer < 150) {
        const path = this.pathfinding.findPath(
          { x: Math.floor(agent.x / this.TILE_SIZE), y: Math.floor(agent.y / this.TILE_SIZE) },
          { x: Math.floor(this.player.x / this.TILE_SIZE), y: Math.floor(this.player.y / this.TILE_SIZE) },
          (gx, gy) => this.isObstacleAt(gx, gy)
        );

        if (path && path.length > 1) {
          const next = path[1];
          const targetX = next.x * this.TILE_SIZE;
          const targetY = next.y * this.TILE_SIZE;
          const dx = targetX - agent.x;
          const dy = targetY - agent.y;
          const len = Math.sqrt(dx * dx + dy * dy);

          if (len > 0) {
            agent.x += (dx / len) * agent.speed * dt;
            agent.y += (dy / len) * agent.speed * dt;
          }
        }
      } else if (distToPlayer < 250) {
        agent.state = 'chase';
        const dx = this.player.x - agent.x;
        const dy = this.player.y - agent.y;
        const len = Math.sqrt(dx * dx + dy * dy);
        if (len > 0) {
          agent.x += (dx / len) * agent.speed * dt;
          agent.y += (dy / len) * agent.speed * dt;
        }
      } else {
        agent.state = 'wander';
        if (!agent.wanderTarget || Math.hypot(
          agent.wanderTarget.x * this.TILE_SIZE - agent.x,
          agent.wanderTarget.y * this.TILE_SIZE - agent.y
        ) < this.TILE_SIZE) {
          agent.wanderTarget = {
            x: Math.floor(Math.random() * this.GRID_SIZE),
            y: Math.floor(Math.random() * this.GRID_SIZE)
          };
        }
        const dx = agent.wanderTarget.x * this.TILE_SIZE - agent.x;
        const dy = agent.wanderTarget.y * this.TILE_SIZE - agent.y;
        const len = Math.sqrt(dx * dx + dy * dy);
        if (len > 0) {
          agent.x += (dx / len) * agent.speed * 0.5 * dt;
          agent.y += (dy / len) * agent.speed * 0.5 * dt;
        }
      }

      agent.x = Math.max(0, Math.min(this.WORLD_WIDTH - agent.width, agent.x));
      agent.y = Math.max(0, Math.min(this.WORLD_HEIGHT - agent.height, agent.y));
    }
  }

  isObstacleAt(gx, gy) {
    if (gx < 0 || gx >= this.GRID_SIZE || gy < 0 || gy >= this.GRID_SIZE) return true;
    const px = gx * this.TILE_SIZE;
    const py = gy * this.TILE_SIZE;
    for (const obs of this.obstacles) {
      if (obs.x === px && obs.y === py) return true;
    }
    return false;
  }

  render() {
    this.ctx.fillStyle = '#1a1a2e';
    this.ctx.fillRect(0, 0, this.canvas.width, this.canvas.height);

    this.ctx.save();
    this.camera.apply(this.ctx);

    this.ctx.strokeStyle = '#333';
    this.ctx.lineWidth = 0.5;
    for (let x = 0; x <= this.WORLD_WIDTH; x += this.TILE_SIZE) {
      this.ctx.beginPath();
      this.ctx.moveTo(x, 0);
      this.ctx.lineTo(x, this.WORLD_HEIGHT);
      this.ctx.stroke();
    }
    for (let y = 0; y <= this.WORLD_HEIGHT; y += this.TILE_SIZE) {
      this.ctx.beginPath();
      this.ctx.moveTo(0, y);
      this.ctx.lineTo(this.WORLD_WIDTH, y);
      this.ctx.stroke();
    }

    for (const obs of this.obstacles) {
      this.ctx.fillStyle = '#555';
      this.ctx.fillRect(obs.x, obs.y, obs.width, obs.height);
      this.ctx.strokeStyle = '#777';
      this.ctx.strokeRect(obs.x, obs.y, obs.width, obs.height);
    }

    Sprite.draw(this.ctx, this.player.sprite || { width: this.player.width, height: this.player.height },
      this.player.x, this.player.y, 1);

    for (const agent of this.agents) {
      Sprite.draw(this.ctx, agent.sprite, agent.x, agent.y, 1);
    }

    this.ctx.restore();
  }
}

export { Game };
