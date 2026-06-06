class Camera {
  constructor(worldWidth, worldHeight) {
    this.worldWidth = worldWidth;
    this.worldHeight = worldHeight;
    this.x = 0;
    this.y = 0;
  }

  follow(target, canvasWidth, canvasHeight) {
    this.x = target.x + target.width / 2 - canvasWidth / 2;
    this.y = target.y + target.height / 2 - canvasHeight / 2;

    this.x = Math.max(0, Math.min(this.worldWidth - canvasWidth, this.x));
    this.y = Math.max(0, Math.min(this.worldHeight - canvasHeight, this.y));
  }

  apply(ctx) {
    ctx.translate(-Math.floor(this.x), -Math.floor(this.y));
  }
}
