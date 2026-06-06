class Pathfinding {
  constructor(options = {}) {
    this.worldWidth = options.worldWidth || 32;
    this.worldHeight = options.worldHeight || 32;
    this.collisionGrid = options.collisionGrid || null;
  }

  setCollisionGrid(grid) {
    this.collisionGrid = grid;
  }

  isObstacle(x, y) {
    if (x < 0 || x >= this.worldWidth || y < 0 || y >= this.worldHeight) return true;
    return this.collisionGrid?.[y]?.[x] === true;
  }

  manhattanDistance(x1, y1, x2, y2) {
    return Math.abs(x1 - x2) + Math.abs(y1 - y2);
  }

  findPath(startX, startY, endX, endY) {
    if (this.isObstacle(startX, startY) || this.isObstacle(endX, endY)) {
      return null;
    }

    if (startX === endX && startY === endY) {
      return [{ x: endX, y: endY }];
    }

    const openSet = [];
    const closedSet = new Set();

    const startNode = {
      x: startX,
      y: startY,
      g: 0,
      h: this.manhattanDistance(startX, startY, endX, endY),
      f: this.manhattanDistance(startX, startY, endX, endY),
      parent: null
    };

    openSet.push(startNode);

    const directions = [
      { x: 0, y: -1 },
      { x: 1, y: 0 },
      { x: 0, y: 1 },
      { x: -1, y: 0 },
      { x: -1, y: -1 },
      { x: 1, y: -1 },
      { x: -1, y: 1 },
      { x: 1, y: 1 }
    ];

    while (openSet.length > 0) {
      let current = openSet[0];
      let currentIndex = 0;

      for (let i = 0; i < openSet.length; i++) {
        if (openSet[i].f < current.f) {
          current = openSet[i];
          currentIndex = i;
        }
      }

      openSet.splice(currentIndex, 1);
      closedSet.add(`${current.x},${current.y}`);

      if (current.x === endX && current.y === endY) {
        const path = [];
        let node = current;
        while (node !== null) {
          path.unshift({ x: node.x, y: node.y });
          node = node.parent;
        }
        return path;
      }

      for (const dir of directions) {
        const neighborX = current.x + dir.x;
        const neighborY = current.y + dir.y;

        if (this.isObstacle(neighborX, neighborY)) continue;

        const neighborKey = `${neighborX},${neighborY}`;
        if (closedSet.has(neighborKey)) continue;

        const gScore = current.g + (Math.abs(dir.x) + Math.abs(dir.y) === 2 ? 1.414 : 1);
        let neighbor = openSet.find(n => n.x === neighborX && n.y === neighborY);
        const tentativeG = current.g + (Math.abs(dir.x) + Math.abs(dir.y) === 2 ? 1.414 : 1);

        if (!neighbor || tentativeG < gScore) {
          if (!neighbor) {
            neighbor = {
              x: neighborX,
              y: neighborY,
              g: tentativeG,
              h: this.manhattanDistance(neighborX, neighborY, endX, endY),
              f: tentativeG + this.manhattanDistance(neighborX, neighborY, endX, endY),
              parent: current
            };
            openSet.push(neighbor);
          } else {
            neighbor.g = tentativeG;
            neighbor.f = tentativeG + neighbor.h;
            neighbor.parent = current;
          }
        }
      }
    }

    return null;
  }

  findNextStep(startX, startY, endX, endY) {
    const path = this.findPath(startX, startY, endX, endY);
    if (path && path.length > 1) {
      return path[1];
    }
    return path && path.length === 1 ? path[0] : null;
  }
}

if (typeof module !== 'undefined' && module.exports) {
  module.exports = Pathfinding;
}