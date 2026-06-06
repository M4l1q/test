class Player {
    constructor() {
        this.x = 16;
        this.y = 16;
        this.speed = 3;
        this.gridSize = 32;
        this.sprite = this._createRedSprite();
    }

    _createRedSprite() {
        const sprite = new Sprite({ frameWidth: 16, frameHeight: 16 });
        const pixelData = [];
        for (let y = 0; y < 16; y++) {
            const row = [];
            for (let x = 0; x < 16; x++) {
                if (x >= 4 && x < 12 && y >= 4 && y < 12) {
                    row.push('#ff0000');
                } else {
                    row.push(null);
                }
            }
            pixelData.push(row);
        }
        sprite.loadFromGrid(pixelData);
        return sprite;
    }

    update(deltaTime, input, collisionGrid) {
        if (input.up) this.y = Math.max(0, this.y - this.speed * deltaTime / 16);
        if (input.down) this.y = Math.min(31, this.y + this.speed * deltaTime / 16);
        if (input.left) this.x = Math.max(0, this.x - this.speed * deltaTime / 16);
        if (input.right) this.x = Math.min(31, this.x + this.speed * deltaTime / 16);
    }

    getPosition() {
        return { x: this.x, y: this.y };
    }
}

window.Player = Player;