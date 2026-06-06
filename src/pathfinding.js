/**
 * A* Pathfinding for grid-based game navigation
 * Supports dynamic obstacle checking via callback
 */
export class Pathfinding {
  /**
   * @param {number} gridWidth - Number of columns in the grid
   * @param {number} gridHeight - Number of rows in the grid
   * @param {boolean} allowDiagonal - Whether agents can move diagonally (default: false)
   */
  constructor(gridWidth = 32, gridHeight = 32, allowDiagonal = false) {
    this.gridWidth = gridWidth;
    this.gridHeight = gridHeight;
    this.allowDiagonal = allowDiagonal;
    this.heuristic = this.manhattanDistance;
  }

  /**
   * Find path from start to end coordinates
   * @param {{x: number, y: number}} start - Start grid position {x, y}
   * @param {{x: number, y: number}} end - End grid position {x, y}
   * @param {function(x: number, y: number): boolean} isObstacle - Callback returning true if position is blocked
   * @returns {{x: number, y: number}[]} Array of grid coordinates making up the path, or empty array if no path
   */
  findPath(start, end, isObstacle) {
    // Validate inputs
    if (!this.isValidNode(start) || !this.isValidNode(end)) {
      return [];
    }

    // Already at destination
    if (start.x === end.x && start.y === end.y) {
      return [{ x: end.x, y: end.y }];
    }

    // Check if destination is blocked
    if (isObstacle && isObstacle(end.x, end.y)) {
      return [];
    }

    const openList = [];
    const closedSet = new Set();
    const nodeMap = new Map();

    // Node types for tracking
    const createNode = (x, y, parent = null) => {
      const key = `${x},${y}`;
      const existing = nodeMap.get(key);
      if (existing && existing.g <= (parent ? this.getDistance(parent, { x, y }) : 0)) {
        return existing;
      }

      const g = parent ? parent.g + this.getDistance(parent, { x, y }) : 0;
      const h = this.heuristic({ x, y }, end);

      return {
        x,
        y,
        g,
        h,
        f: g + h,
        parent,
        key
      };
    };

    // Initialize start node
    const startNode = createNode(start.x, start.y);
    openList.push(startNode);
    nodeMap.set(startNode.key, startNode);

    const maxIterations = this.gridWidth * this.gridHeight * 2;
    let iterations = 0;

    while (openList.length > 0 && iterations < maxIterations) {
      iterations++;

      // Find node with lowest f cost
      let bestIndex = 0;
      for (let i = 1; i < openList.length; i++) {
        if (openList[i].f < openList[bestIndex].f ||
            (openList[i].f === openList[bestIndex].f && openList[i].h < openList[bestIndex].h)) {
          bestIndex = i;
        }
      }

      const current = openList[bestIndex];

      // Reached destination
      if (current.x === end.x && current.y === end.y) {
        return this.reconstructPath(current);
      }

      // Move current from open to closed
      openList.splice(bestIndex, 1);
      closedSet.add(current.key);

      // Get neighbors
      const neighbors = this.getNeighbors(current);
      for (const neighbor of neighbors) {
        const neighborKey = `${neighbor.x},${neighbor.y}`;

        // Already evaluated
        if (closedSet.has(neighborKey)) continue;

        // Check if obstacle
        if (isObstacle && isObstacle(neighbor.x, neighbor.y)) continue;

        const gScore = current.g + this.getDistance(current, neighbor);

        const existingNode = nodeMap.get(neighborKey);
        const inOpenList = openList.some(n => n.key === neighborKey);

        if (!inOpenList) {
          // New node - add to open list
          const node = createNode(neighbor.x, neighbor.y, current);
          node.g = gScore;
          node.f = node.g + node.h;
          openList.push(node);
          nodeMap.set(neighborKey, node);
        } else if (existingNode && gScore < existingNode.g) {
          // Found better path to existing node
          existingNode.g = gScore;
          existingNode.f = existingNode.g + existingNode.h;
          existingNode.parent = current;
        }
      }
    }

    // No path found
    return [];
  }

  /**
   * Get valid neighboring grid cells
   * @private
   */
  getNeighbors(node) {
    const neighbors = [];
    const directions = [
      { x: 0, y: -1 }, { x: 1, y: 0 }, { x: 0, y: 1 }, { x: -1, y: 0 }
    ];

    if (this.allowDiagonal) {
      directions.push(
        { x: 1, y: -1 }, { x: 1, y: 1 }, { x: 0, y: 1 }, { x: -1, y: 1 },
        { x: -1, y: -1 }, { x: 1, y: -1 }, { x: -1, y: 1 }, { x: 1, y: 1 }
      );
      // Remove duplicates from 8-dir push
      directions.length = 0;
      directions.push(
        { x: 0, y: -1 }, { x: 1, y: 0 }, { x: 0, y: 1 }, { x: -1, y: 0 },
        { x: 1, y: -1 }, { x: 1, y: 1 }, { x: -1, y: 1 }, { x: -1, y: -1 }
      );
    }

    for (const dir of directions) {
      const nx = node.x + dir.x;
      const ny = node.y + dir.y;

      if (this.isValidNode({ x: nx, y: ny })) {
        neighbors.push({ x: nx, y: ny });
      }
    }

    return neighbors;
  }

  /**
   * Reconstruct path from end node by following parent pointers
   * @private
   */
  reconstructPath(endNode) {
    const path = [];
    let current = endNode;

    while (current) {
      path.unshift({ x: current.x, y: current.y });
      current = current.parent;
    }

    return path;
  }

  /**
   * Manhattan distance heuristic (for 4-directional movement)
   */
  manhattanDistance(a, b) {
    return Math.abs(a.x - b.x) + Math.abs(a.y - b.y);
  }

  /**
   * Euclidean distance heuristic
   */
  euclideanDistance(a, b) {
    return Math.sqrt(Math.pow(a.x - b.x, 2) + Math.pow(a.y - b.y, 2));
  }

  /**
   * Get movement cost between two adjacent nodes
   * @private
   */
  getDistance(a, b) {
    const dx = Math.abs(a.x - b.x);
    const dy = Math.abs(a.y - b.y);

    if (dx === 1 && dy === 1) {
      return 1.4142; // Diagonal movement cost
    }
    return 1; // Cardinal movement cost
  }

  /**
   * Check if position is within grid bounds
   * @private
   */
  isValidNode(pos) {
    return pos.x >= 0 && pos.x < this.gridWidth &&
           pos.y >= 0 && pos.y < this.gridHeight;
  }

  /**
   * Mark a grid cell as an obstacle for pathfinding
   * @param {function(x: number, y: number): boolean} isObstacle
   * @param {{x: number, y: number}} cellPos
   */
  markObstacle(isObstacle, cellPos) {
    // This is a helper - actual obstacle checking is done via callback
    console.warn('Obstacle marking is done via isObstacle callback in findPath()');
  }

  /**
   * Smooth a path by removing unnecessary waypoints
   * @param {{x: number, y: number}[]} path - Raw path from findPath
   * @param {function(x1: number, y1: number, x2: number, y2: number): boolean} lineOfSight - Optional callback to check visibility
   * @returns {{x: number, y: number}[]} Smoothed path
   */
  smoothPath(path, lineOfSight) {
    if (path.length <= 2) return path;

    const smoothed = [path[0]];
    let current = 0;

    while (current < path.length - 1) {
      let furthest = current + 1;

      // Find furthest reachable node
      for (let i = path.length - 1; i > current + 1; i--) {
        if (!lineOfSight || lineOfSight(
          path[current].x, path[current].y,
          path[i].x, path[i].y
        )) {
          furthest = i;
          break;
        }
      }

      smoothed.push(path[furthest]);
      current = furthest;
    }

    return smoothed;
  }
}

export default Pathfinding;
