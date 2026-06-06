class Game {
    constructor() {
        this.canvas = document.getElementById('gameCanvas');
        this.ctx = this.canvas.getContext('2d');
        this.width = 512;
        this.height = 512;
        this.gridSize = 32;
        this.gridCols = this.width / this.gridSize;
        this.gridRows = this.height / this.gridSize;
    }

    init() {
        this.ctx.imageSmoothingEnabled = false;
    }

    update(deltaTime) {
    }

    render() {
        this.ctx.fillStyle = '#1a1a2e';
        this.ctx.fillRect(0, 0, this.width, this.height);

        this.drawGrid();
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
}

window.Game = Game;
