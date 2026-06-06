class Input {
  constructor() {
    this.keys = {};
    this.inputBuffer = [];
    this.maxBuffer = 5;

    window.addEventListener('keydown', (e) => {
      if (!this.keys[e.code]) {
        this.inputBuffer.push({ code: e.code, time: performance.now() });
        if (this.inputBuffer.length > this.maxBuffer) {
          this.inputBuffer.shift();
        }
      }
      this.keys[e.code] = true;
      e.preventDefault();
    });

    window.addEventListener('keyup', (e) => {
      this.keys[e.code] = false;
    });
  }

  getState() {
    return {
      keys: { ...this.keys },
      buffer: [...this.inputBuffer]
    };
  }

  consumeBuffer() {
    if (this.inputBuffer.length > 0) {
      return this.inputBuffer.shift();
    }
    return null;
  }
}
