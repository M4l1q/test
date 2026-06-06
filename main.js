const canvas = document.getElementById('gameCanvas');
const ctx = canvas.getContext('2d');

function gameLoop(timestamp) {
    const deltaTime = timestamp - lastTime;
    lastTime = timestamp;

    game.update(deltaTime);
    game.render();

    requestAnimationFrame(gameLoop);
}

let lastTime = performance.now();
const game = new Game();

game.init();
requestAnimationFrame(gameLoop);
