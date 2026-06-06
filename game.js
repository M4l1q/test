class Game {
    constructor() {
        this.canvas = document.getElementById('gameCanvas');
        this.ctx = this.canvas.getContext('2d');
        this.width = 512;
        this.height = 512;
        this.gridSize = 32;
        this.gridCols = this.width / this.gridSize;
        this.gridRows = this.height / this.gridSize;
        this.input = new InputSystem();
        this.player = {
            x: 256,
            y: 256,
            size: 6,
            color: '#00ff88',
            vx: 0,
            vy: 0,
            isMoving: false,
            gridX: 8,
            gridY: 8
        };
    }

    init() {
        this.ctx.imageSmoothingEnabled = false;
        this.input.setPlayer(this.player);
        this.input.setGame(this);
    }

    update(deltaTime) {
        this.input.update(deltaTime);
    }

    render() {
        this.ctx.fillStyle = '#1a1a2e';
        this.ctx.fillRect(0, 0, this.width, this.height);

        this.drawGrid();
        this.drawMinimap();
        this.drawPlayer();
    }

    drawGrid() {
        this.ctx.strokeStyle = '#16213e';
        this.ctx.lineWidth = 1;

        for (let x = 0; x <= this.width; x += this.gridSize) {
            this.ctx.beginPath();
            this.ctx.moveTo(x, 0);
            this.ctx.lineTo(x, this.height);
            this.ctx.stroke();
        }

        for (let y = 0; y <= this.height; y += this.gridSize) {
            this.ctx.beginPath();
            this.ctx.moveTo(0, y);
            this.ctx.lineTo(this.width, y);
            this.ctx.stroke();
        }
    }

    drawMinimap() {
        const minimapX = this.width - 100;
        const minimapY = 10;
        const minimapWidth = 90;
        const minimapHeight = 90;
        const cellSize = minimapWidth / Math.max(this.gridCols, this.gridRows);

        this.ctx.fillStyle = 'rgba(0, 0, 0, 0.5)';
        this.ctx.fillRect(minimapX, minimapY, minimapWidth, minimapHeight);
        this.ctx.strokeStyle = '#00ff88';
        this.ctx.lineWidth = 1;
        this.ctx.strokeRect(minimapX, minimapY, minimapWidth, minimapHeight);

        this.ctx.fillStyle = 'rgba(22, 33, 62, 0.8)';
        for (let x = 0; x < this.gridCols; x++) {
            for (let y = 0; y < this.gridRows; y++) {
                this.ctx.fillRect(
                    minimapX + x * cellSize + 1,
                    minimapY + y * cellSize + 1,
                    cellSize - 1,
                    cellSize - 1
                );
            }
        }

        this.ctx.fillStyle = '#00ff88';
        const playerGrid = pixelToGrid(this.player.x, this.player.y, this.gridSize);
        this.ctx.fillRect(
            minimapX + playerGrid.x * cellSize + 1,
            minimapY + playerGrid.y * cellSize + 1,
            cellSize - 1,
            cellSize - 1
        );
    }

    drawPlayer() {
        this.ctx.fillStyle = this.player.color;

        const size = this.player.size;
        this.ctx.fillRect(
            this.player.x - size,
            this.player.y - size,
            size * 2,
            size * 2
        );

        if (this.player.isMoving) {
            const dir = this.input.getDirection();
            this.ctx.fillStyle = 'rgba(0, 255, 136, 0.3)';

            const dirX = Math.round(dir.dx * size);
            const dirY = Math.round(dir.vy * size);

            this.ctx.beginPath();
            this.ctx.arc(this.player.x + dirX * size, this.player.y + dirY * size, size * 0.8, 0, Math.PI * 2);
            this.ctx.fill();
        }

        const gx = Math.floor(this.player.x / this.gridSize);
        const gy = Math.floor(this.player.y / this.gridSize);
        if (gx !== this.player.gridX || gy !== this.player.gridY) {
            this.player.gridX = gx;
            this.player.gridY = gy;
        }
    }

    worldToScreen(worldX, worldY) {
        return {
            x: worldX,
            y: worldY
        };
    }

    screenToWorld(screenX, screenY) {
        return {
            x: screenX,
            y: screenY
        };
    }

    screenToGrid(screenX, screenY) {
        return pixelToGrid(screenX, screenY, this.gridSize);
    }
}

window.Game = Game;
