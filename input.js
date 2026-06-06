class InputSystem {
    constructor() {
        this.keys = {};
        this.inputBuffer = [];
        this.bufferSize = 10;
        this.bufferLife = 100;
        this.lastInputTime = 0;
        this.player = null;
        this.game = null;

        this.setupEventListeners();
    }

    setupEventListeners() {
        window.addEventListener('keydown', (event) => {
            if (!this.keys[event.code]) {
                this.keys[event.code] = true;
                this.addToBuffer(event.code, true);
            }

            if (['ArrowUp', 'ArrowDown', 'ArrowLeft', 'ArrowRight', 'KeyW', 'KeyA', 'KeyS', 'KeyD'].includes(event.code)) {
                event.preventDefault();
            }
        });

        window.addEventListener('keyup', (event) => {
            this.keys[event.code] = false;
            this.addToBuffer(event.code, false);
        });
    }

    addToBuffer(code, pressed) {
        const now = performance.now();

        this.inputBuffer.push({
            code: code,
            pressed: pressed,
            time: now
        });

        if (this.inputBuffer.length > this.bufferSize) {
            this.inputBuffer.shift();
        }

        this.lastInputTime = now;
    }

    isKeyPressed(code) {
        return this.keys[code] === true;
    }

    getDirection() {
        let dx = 0;
        let dy = 0;

        if (this.isKeyPressed('KeyW') || this.isKeyPressed('ArrowUp')) dy -= 1;
        if (this.isKeyPressed('KeyS') || this.isKeyPressed('ArrowDown')) dy += 1;
        if (this.isKeyPressed('KeyA') || this.isKeyPressed('ArrowLeft')) dx -= 1;
        if (this.isKeyPressed('KeyD') || this.isKeyPressed('ArrowRight')) dx += 1;

        if (dx !== 0 && dy !== 0) {
            const factor = 0.7071;
            dx *= factor;
            dy *= factor;
        }

        return { dx, dy };
    }

    setPlayer(player) {
        this.player = player;
    }

    setGame(game) {
        this.game = game;
    }

    update(deltaTime) {
        const now = performance.now();

        while (this.inputBuffer.length > 0 && now - this.inputBuffer[0].time > this.bufferLife) {
            this.inputBuffer.shift();
        }

        if (this.player && this.game) {
            const { dx, dy } = this.getDirection();

            if (dx !== 0 || dy !== 0) {
                const speed = 150;
                const moveX = dx * speed * (deltaTime / 1000);
                const moveY = dy * speed * (deltaTime / 1000);

                const newX = this.player.x + moveX;
                const newY = this.player.y + moveY;

                const playerGrid = pixelToGrid(newX, newY);
                const gridCols = this.game.width / this.game.gridSize;
                const gridRows = this.game.height / this.game.gridSize;

                if (playerGrid.x >= 0 && playerGrid.x < gridCols &&
                    playerGrid.y >= 0 && playerGrid.y < gridRows) {
                    this.player.x = newX;
                    this.player.y = newY;
                } else {
                    const halfSize = (this.player.size || 8);
                    const clampedX = clamp(newX, halfSize, this.game.width - halfSize);
                    const clampedY = clamp(newY, halfSize, this.game.height - halfSize);

                    if (clampedX !== this.player.x || clampedY !== this.player.y) {
                        if (clampedX !== newX) moveX = 0;
                        if (clampedY !== this.player.y) moveY = 0;

                        this.player.x = clampedX;
                        this.player.y = clampedY;
                    }
                }

                this.player.vx = dx;
                this.player.vy = dy;
                this.player.isMoving = true;
            } else {
                this.player.isMoving = false;
                this.player.vx = 0;
                this.player.vy = 0;
            }
        }
    }

    hasActiveInput() {
        const now = performance.now();
        return this.inputBuffer.some(input => now - input.time <= this.bufferLife);
    }

    getBufferStats() {
        return {
            size: this.inputBuffer.length,
            maxSize: this.bufferSize,
            hasActive: this.hasActiveInput()
        };
    }
}

window.InputSystem = InputSystem;
