class Sprite {
    constructor(config = {}) {
        this.pixelData = config.pixelData || null;
        this.palette = config.palette || [];
        this.frameWidth = config.frameWidth || 16;
        this.frameHeight = config.frameHeight || 16;
        this.frames = config.frames || 1;
        this.currentFrame = 0;
        this.frameTime = config.frameTime || 100;
        this.lastFrameTime = 0;
        this.loop = config.loop !== undefined ? config.loop : true;
        this.canvas = null;
        this.ctx = null;
        this.ready = false;
    }

    loadFromGrid(gridData, palette) {
        this.pixelData = gridData;
        this.palette = palette || [];
        this._buildCanvas();
        return this;
    }

    loadFromPaletteString(paletteString, width = this.frameWidth, height = this.frameHeight) {
        const colorMap = {};
        this.palette.forEach((color, index) => {
            colorMap[String(index)] = color;
        });

        const rows = paletteString.trim().split('\n');
        this.pixelData = rows.map(row => {
            const pixels = [];
            for (let i = 0; i < row.length; i++) {
                const char = row[i];
                if (colorMap[char]) {
                    pixels.push(colorMap[char]);
                } else if (char === ' ' || char === '.') {
                    pixels.push(null);
                } else if (colorMap[char.toLowerCase()]) {
                    pixels.push(colorMap[char.toLowerCase()]);
                } else {
                    pixels.push(null);
                }
            }
            return pixels;
        });

        this._buildCanvas();
        return this;
    }

    loadFromImageData(imageData, width, height) {
        this.frameWidth = width;
        this.frameHeight = height;
        this.pixelData = [];

        const totalHeight = (imageData.height !== undefined ? imageData.height : height * this.frames);
        for (let y = 0; y < totalHeight; y++) {
            const row = [];
            for (let x = 0; x < width; x++) {
                const index = (y * width + x) * 4;
                const r = imageData[index];
                const g = imageData[index + 1];
                const b = imageData[index + 2];
                const a = imageData[index + 3];
                if (a < 10) {
                    row.push(null);
                } else {
                    row.push(`rgba(${r},${g},${b},${a / 255})`);
                }
            }
            this.pixelData.push(row);
        }

        this._buildCanvas();
        return this;
    }

    _buildCanvas() {
        this.canvas = document.createElement('canvas');
        this.canvas.width = this.frameWidth;
        this.canvas.height = this.frameHeight;
        this.ctx = this.canvas.getContext('2d');
        this.ready = true;
        this._drawFrame(0);
    }

    _drawFrame(frameIndex) {
        if (!this.ctx || !this.pixelData) return;

        this.ctx.clearRect(0, 0, this.frameWidth, this.frameHeight);
        this.ctx.imageSmoothingEnabled = false;

        const pixelSize = 1;
        const rowOffset = frameIndex * this.frameHeight;
        for (let y = 0; y < this.frameHeight; y++) {
            const pixelRowIndex = rowOffset + y;
            for (let x = 0; x < this.frameWidth; x++) {
                const color = this.pixelData[pixelRowIndex] ? this.pixelData[pixelRowIndex][x] : null;
                if (color) {
                    this.ctx.fillStyle = color;
                    this.ctx.fillRect(x * pixelSize, y * pixelSize, pixelSize, pixelSize);
                }
            }
        }
    }

    update(deltaTime) {
        if (this.frames <= 1) return;

        this.lastFrameTime += deltaTime;
        if (this.lastFrameTime >= this.frameTime) {
            this.lastFrameTime -= this.frameTime;
            this.currentFrame++;

            if (this.currentFrame >= this.frames) {
                if (this.loop) {
                    this.currentFrame = 0;
                } else {
                    this.currentFrame = this.frames - 1;
                }
            }

            this._drawFrame(this.currentFrame);
        }
    }

    setFrame(frameIndex) {
        if (frameIndex < 0 || frameIndex >= this.frames) return;
        this.currentFrame = frameIndex;
        this._drawFrame(this.currentFrame);
    }

    reset() {
        this.currentFrame = 0;
        this.lastFrameTime = 0;
        this._drawFrame(0);
    }

    getWidth() {
        return this.frameWidth;
    }

    getHeight() {
        return this.frameHeight;
    }
}

window.Sprite = Sprite;