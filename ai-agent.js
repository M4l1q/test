class AIAgent {
    constructor(options = {}) {
        this.gridSize = options.gridSize || 32;
        this.worldWidth = options.worldWidth || 32;
        this.worldHeight = options.worldHeight || 32;
        this.speed = options.speed || 1;
        this.visionRadius = options.visionRadius || 8;
        this.chaseThreshold = options.chaseThreshold || 12;

        this.x = options.startX ?? Math.floor(Math.random() * this.worldWidth);
        this.y = options.startY ?? Math.floor(Math.random() * this.worldHeight);
        this.state = 'wander';
        this.targetX = this.x;
        this.targetY = this.y;
        this.patrolPath = options.patrolPath || [];

        this._patrolIndex = 0;
        this.collisionGrid = null;
        this.playerPosition = null;
        this.pathfinder = null;
        this.currentPath = null;
    }

    setPathfinder(pathfinder) {
        this.pathfinder = pathfinder;
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

    _updatePatrol() {
        if (this.patrolPath.length === 0) {
            this.state = 'wander';
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
    }

    _moveAlongPath() {
        if (!this.currentPath || this.currentPath.length === 0) return false;

        const target = this.currentPath[0];
        const gridX = Math.round(this.x);
        const gridY = Math.round(this.y);

        if (gridX === target.x && gridY === target.y) {
            this.currentPath.shift();
            if (this.currentPath.length === 0) return false;
            return this._moveAlongPath();
        }

        const dx = target.x - this.x;
        const dy = target.y - this.y;
        const dist = Math.sqrt(dx * dx + dy * dy);

        if (dist === 0) return false;

        const stepX = (dx / dist) * this.speed;
        const stepY = (dy / dist) * this.speed;

        const nextX = this.x + stepX;
        const nextY = this.y + stepY;

        const nextGridX = Math.round(nextX);
        const nextGridY = Math.round(nextY);

        if (this.isObstacle(nextGridX, nextGridY)) {
            this.currentPath = null;
            return false;
        }

        this.x = Math.max(0, Math.min(this.worldWidth - 1, nextX));
        this.y = Math.max(0, Math.min(this.worldHeight - 1, nextY));
        return true;
    }

    _updateChase() {
        if (!this.playerPosition) {
            this.state = 'wander';
            return;
        }

        const startGridX = Math.round(this.x);
        const startGridY = Math.round(this.y);

        if (!this.currentPath || this.currentPath.length === 0) {
            if (this.pathfinder) {
                this.currentPath = this.pathfinder.findPath(
                    startGridX, startGridY,
                    this.playerPosition.x, this.playerPosition.y
                );
            }
        }

        const distance = this.distanceTo(this.playerPosition.x, this.playerPosition.y);

        if (distance > this.chaseThreshold || !this.isWithinVision(this.playerPosition.x, this.playerPosition.y)) {
            this.state = 'wander';
            this.currentPath = null;
            return;
        }

        this.targetX = this.playerPosition.x;
        this.targetY = this.playerPosition.y;

        if (this.currentPath && this.currentPath.length > 0) {
            this._moveAlongPath();
        } else {
            this._moveToward(this.targetX, this.targetY);
        }
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
    }

    update() {
        const distance = this.distanceTo(this.playerPosition?.x ?? 0, this.playerPosition?.y ?? 0);

        if (this.playerPosition && this.isWithinVision(this.playerPosition.x, this.playerPosition.y) && distance <= this.chaseThreshold) {
            this.state = 'chase';
        } else if (this.patrolPath.length > 0) {
            this.state = 'patrol';
        } else {
            this.state = 'wander';
        }

        switch (this.state) {
            case 'patrol':
                this._updatePatrol();
                break;
            case 'chase':
                this._updateChase();
                break;
            case 'wander':
                this._updateWander();
                break;
        }
    }
}

window.AIAgent = AIAgent;