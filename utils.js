function gridToPixel(gridX, gridY, gridSize = 32) {
    return {
        x: gridX * gridSize,
        y: gridY * gridSize
    };
}

function pixelToGrid(pixelX, pixelY, gridSize = 32) {
    return {
        x: Math.floor(pixelX / gridSize),
        y: Math.floor(pixelY / gridSize)
    };
}

function distance(x1, y1, x2, y2) {
    return Math.sqrt((x2 - x1) ** 2 + (y2 - y1) ** 2);
}

function clamp(value, min, max) {
    return Math.max(min, Math.min(max, value));
}

function randomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
