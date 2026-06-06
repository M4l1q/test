function drawSprite(ctx, sprite, x, y, scale = 1, options = {}) {
  const rotation = options.rotation || 0;
  const alpha = options.alpha !== undefined ? options.alpha : 1;
  const tint = options.tint || null;
  const flipH = options.flipH || false;
  const flipV = options.flipV || false;

  if (!sprite || !sprite.ready || !sprite.canvas) return;

  ctx.save();

  ctx.globalAlpha = alpha;
  ctx.imageSmoothingEnabled = false;

  const width = sprite.getWidth() * scale;
  const height = sprite.getHeight() * scale;

  if (flipH || flipV) {
    ctx.save();
    ctx.translate(flipH ? x + width : x, flipV ? y + height : y);
    ctx.scale(flipH ? -1 : 1, flipV ? -1 : 1);
    ctx.drawImage(
      sprite.canvas,
      0,
      0,
      sprite.getWidth(),
      sprite.getHeight(),
      0,
      0,
      Math.ceil(width),
      Math.ceil(height)
    );
    ctx.restore();
  } else {
    if (rotation !== 0) {
      const centerX = x + width / 2;
      const centerY = y + height / 2;
      ctx.translate(centerX, centerY);
      ctx.rotate(rotation * Math.PI / 180);
      ctx.translate(-centerX, -centerY);
    }
    ctx.drawImage(
      sprite.canvas,
      0,
      0,
      sprite.getWidth(),
      sprite.getHeight(),
      Math.floor(x),
      Math.floor(y),
      Math.ceil(width),
      Math.ceil(height)
    );
  }

  if (tint && !(flipH || flipV)) {
    ctx.globalCompositeOperation = 'source-atop';
    ctx.fillStyle = tint;
    ctx.fillRect(x, y, width, height);
    ctx.globalCompositeOperation = 'destination-over';
  }

  ctx.restore();
}

function drawSpriteRotated(ctx, sprite, x, y, scale, angleDegrees) {
  drawSprite(ctx, sprite, x, y, scale, { rotation: angleDegrees });
}

function clearCanvas(ctx, canvas, color = null) {
  ctx.save();
  if (color) {
    ctx.fillStyle = color;
    ctx.fillRect(0, 0, canvas.width, canvas.height);
  } else {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
  }
  ctx.restore();
}

function setupPixelPerfectCanvas(canvas) {
  const ctx = canvas.getContext('2d');
  ctx.imageSmoothingEnabled = false;
  ctx.mozImageSmoothingEnabled = false;
  ctx.webkitImageSmoothingEnabled = false;
  ctx.msImageSmoothingEnabled = false;
  return ctx;
}

function drawGrid(ctx, width, height, cellSize, color = 'rgba(255,255,255,0.1)') {
  ctx.save();
  ctx.strokeStyle = color;
  ctx.lineWidth = 1;

  for (let x = 0; x <= width; x += cellSize) {
    ctx.beginPath();
    ctx.moveTo(x + 0.5, 0);
    ctx.lineTo(x + 0.5, height);
    ctx.stroke();
  }

  for (let y = 0; y <= height; y += cellSize) {
    ctx.beginPath();
    ctx.moveTo(0, y + 0.5);
    ctx.lineTo(width, y + 0.5);
    ctx.stroke();
  }

  ctx.restore();
}

export { drawSprite, drawSpriteRotated, clearCanvas, setupPixelPerfectCanvas, drawGrid };