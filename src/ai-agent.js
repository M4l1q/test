class AIAgent {
  constructor(x, y, tileSize, sprite) {
    this.x = x;
    this.y = y;
    this.width = tileSize;
    this.height = tileSize;
    this.speed = 80;
    this.state = 'wander';
    this.sprite = sprite;
    this.wanderTarget = null;
    this.stateHistory = [];
  }

  update(dt, game) {
    this.stateHistory.push({
      state: this.state,
      x: this.x,
      y: this.y,
      time: performance.now()
    });
    if (this.stateHistory.length > 10) {
      this.stateHistory.shift();
    }

    if (this.decideState(game)) {
      this.executeState(dt, game);
    }
  }

  decideState(game) {
    const dist = Math.hypot(game.player.x - this.x, game.player.y - this.y);
    const oldState = this.state;

    if (dist < 120) {
      this.state = 'chase';
    } else if (dist < 220) {
      this.state = 'patrol';
    } else {
      this.state = 'wander';
    }

    return oldState !== this.state;
  }

  executeState(dt, game) {
    switch (this.state) {
      case 'chase':
        this.chase(game, dt);
        break;
      case 'patrol':
        this.patrol(game, dt);
        break;
      case 'wander':
        this.wander(dt, game);
        break;
    }
  }

  chase(game, dt) {
    const dx = game.player.x - this.x;
    const dy = game.player.y - this.y;
    const len = Math.sqrt(dx * dx + dy * dy);
    if (len > 0) {
      const nx = (dx / len) * this.speed * dt;
      const ny = (dy / len) * this.speed * dt;
      if (!game.checkCollision(this.x + nx, this.y, this.width, this.height)) {
        this.x += nx;
      }
      if (!game.checkCollision(this.x, this.y + ny, this.width, this.height)) {
        this.y += ny;
      }
    }
  }

  patrol(_game, dt) {
    this.wander(dt, _game);
  }

  wander(dt, game) {
    if (!this.wanderTarget || Math.hypot(
      this.wanderTarget.x * game.TILE_SIZE - this.x,
      this.wanderTarget.y * game.TILE_SIZE - this.y
    ) < game.TILE_SIZE) {
      this.wanderTarget = {
        x: Math.floor(Math.random() * game.GRID_SIZE),
        y: Math.floor(Math.random() * game.GRID_SIZE)
      };
    }

    const tx = this.wanderTarget.x * game.TILE_SIZE;
    const ty = this.wanderTarget.y * game.TILE_SIZE;
    const dx = tx - this.x;
    const dy = ty - this.y;
    const len = Math.sqrt(dx * dx + dy * dy);
    if (len > 0) {
      const nx = (dx / len) * this.speed * 0.5 * dt;
      const ny = (dy / len) * this.speed * 0.5 * dt;
      if (!game.checkCollision(this.x + nx, this.y, this.width, this.height)) {
        this.x += nx;
      }
      if (!game.checkCollision(this.x, this.y + ny, this.width, this.height)) {
        this.y += ny;
      }
    }
  }
}

export { AIAgent };
