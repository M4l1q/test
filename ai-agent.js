class AIAgent {
  constructor(options = {}) {
    this.gridSize = options.gridSize || 32;
    this.worldWidth = options.worldWidth || 32;
    this.worldHeight = options.worldHeight || 32;
    this.speed = options.speed || 1;
    this.visionRadius = options.visionRadius || 8;
    this.chaseThreshold = options.chaseThreshold || 12;
    this.stateHistory = [];
    this.maxHistoryLength = options.maxHistoryLength || 100;

    this.x = options.startX ?? Math.floor(Math.random() * this.worldWidth);
    this.y = options.startY ?? Math.floor(Math.random() * this.worldHeight);
    this.state = 'wander';
    this.targetX = this.x;
    this.targetY = this.y;
    this.patrolPath = options.patrolPath || [];

    this._patrolIndex = 0;
    this.collisionGrid = options.collisionGrid || null;
    this.playerPosition = null;
  }

  setCollisionGrid(grid) {
    this.collisionGrid = grid;
  }

  setPlayerPosition(pos) {
    this.playerPosition = pos;
  }

  getState() {
    return this.state;
  }

  getPosition() {
    return { x: this.x, y: this.y };
  }

  distanceTo(targetX, targetY) {
    const dx = this.x - targetX;
    const dy = this.y - targetY;
    return Math.sqrt(dx * dx + dy * dy);
  }

  isWithinVision(targetX, targetY) {
    return this.distanceTo(targetX, targetY) <= this.visionRadius;
  }

  isObstacle(gridX, gridY) {
    if (!this.collisionGrid) return false;
    if (gridX < 0 || gridX >= this.worldWidth || gridY < 0 || gridY >= this.worldHeight) return true;
    return this.collisionGrid[gridY]?.[gridX] === true;
  }

  _recordState() {
    this.stateHistory.push({
      state: this.state,
      x: this.x,
      y: this.y,
      targetX: this.targetX,
      targetY: this.targetY,
      timestamp: Date.now(),
    });
    if (this.stateHistory.length > this.maxHistoryLength) {
      this.stateHistory.shift();
    }
  }

  _changeState(newState) {
    if (this.state !== newState) {
      this.state = newState;
      this._recordState();
    }
  }

  _decideState() {
    if (!this.playerPosition) {
      this._changeState('wander');
      return;
    }

    const distance = this.distanceTo(this.playerPosition.x, this.playerPosition.y);
    const canSeePlayer = this.isWithinVision(this.playerPosition.x, this.playerPosition.y);

    if (distance <= this.visionRadius / 2) {
      this._changeState('chase');
    } else if (canSeePlayer && distance <= this.chaseThreshold) {
      this._changeState('chase');
    } else if (this.patrolPath.length > 0 && this.state === 'patrol') {
      this._changeState('patrol');
    } else {
      this._changeState('wander');
    }
  }

  _moveToward(targetX, targetY) {
    const dx = targetX - this.x;
    const dy = targetY - this.y;
    const dist = Math.sqrt(dx * dx + dy * dy);

    if (dist === 0) return false;

    const stepX = (dx / dist) * this.speed;
    const stepY = (dy / dist) * this.speed;

    const nextX = this.x + stepX;
    const nextY = this.y + stepY;

    const gridX = Math.round(nextX);
    const gridY = Math.round(nextY);

    if (this.isObstacle(gridX, gridY)) {
      return false;
    }

    this.x = Math.max(0, Math.min(this.worldWidth - 1, nextX));
    this.y = Math.max(0, Math.min(this.worldHeight - 1, nextY));
    return true;
  }

  _updateIdle() {
    this._decideState();
  }

  _updatePatrol() {
    if (this.patrolPath.length === 0) {
      this._changeState('wander');
      return;
    }

    const nextPatrol = this.patrolPath[this._patrolIndex];
    const dist = this.distanceTo(nextPatrol.x, nextPatrol.y);

    if (dist < this.speed) {
      this._patrolIndex = (this._patrolIndex + 1) % this.patrolPath.length;
    }

    const target = this.patrolPath[this._patrolIndex];
    this.targetX = target.x;
    this.targetY = target.y;

    const moved = this._moveToward(this.targetX, this.targetY);
    if (!moved) {
      this._patrolIndex = (this._patrolIndex + 1) % this.patrolPath.length;
    }

    this._decideState();
  }

  _updateChase() {
    if (!this.playerPosition) {
      this._changeState('wander');
      return;
    }

    const distance = this.distanceTo(this.playerPosition.x, this.playerPosition.y);

    if (distance > this.chaseThreshold || !this.isWithinVision(this.playerPosition.x, this.playerPosition.y)) {
      this._changeState('wander');
      return;
    }

    this.targetX = this.playerPosition.x;
    this.targetY = this.playerPosition.y;
    this._moveToward(this.targetX, this.targetY);
  }

  _updateWander() {
    if (this.distanceTo(this.targetX, this.targetY) < this.speed) {
      this.targetX = Math.random() * (this.worldWidth - 1);
      this.targetY = Math.random() * (this.worldHeight - 1);
    }

    const moved = this._moveToward(this.targetX, this.targetY);
    if (!moved) {
      this.targetX = Math.random() * (this.worldWidth - 1);
      this.targetY = Math.random() * (this.worldHeight - 1);
    }

    this._decideState();
  }

  update() {
    const prevState = this.state;

    switch (this.state) {
      case 'idle':
        this._updateIdle();
        break;
      case 'patrol':
        this._updatePatrol();
        break;
      case 'chase':
        this._updateChase();
        break;
      case 'wander':
        this._updateWander();
        break;
      default:
        this._changeState('wander');
    }

    if (prevState !== this.state) {
      this._recordState();
    }
  }

  getHistory() {
    return [...this.stateHistory];
  }

  getLastHistoryEntry() {
    return this.stateHistory[this.stateHistory.length - 1] || null;
  }
}

if (typeof module !== 'undefined' && module.exports) {
  module.exports = AIAgent;
}
