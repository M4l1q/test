const Sprite = {
  draw(ctx, sprite, x, y, scale) {
    const s = scale || 1;
    ctx.imageSmoothingEnabled = false;
    if (sprite.image) {
      ctx.drawImage(sprite.image, x, y, sprite.width * s, sprite.height * s);
    } else if (sprite.pixelData) {
      for (let py = 0; py < sprite.height; py++) {
        for (let px = 0; px < sprite.width; px++) {
          const color = sprite.pixelData[py][px];
          if (color) {
            ctx.fillStyle = color;
            ctx.fillRect(x + px * s, y + py * s, s, s);
          }
        }
      }
    }
  }
};

const SpriteLoader = {
  createPixelSprite(width, height, pixelData) {
    return {
      width,
      height,
      pixelData
    };
  }
};
