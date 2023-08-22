/**
 * Stack
 *
 * Create a stack data structure. The stack
 * should be a class with methods 'push', 'pop', and
 * 'peek'.  Adding an element to the stack should
 * store it until it is removed.
 *
 * Examples:
 * const s = new Stack();
 * s.push(1);
 * s.push(2);
 * s.pop(); // returns 2
 * s.pop(); // returns 1
 */

class Stack {
  private items: number[];

  constructor() {
    this.items = [];
  }

  push(n: number) {
    this.items.push(n);
  }

  pop(): number {
    if (this.isEmpty()) {
      throw new Error("Stack is empty");
    }
    return this.items.pop()!;
  }

  peek(): number {
    if (this.isEmpty()) {
      throw new Error("Stack is empty");
    }
    return this.items[this.items.length - 1];
  }

  private isEmpty(): boolean {
    return this.items.length === 0;
  }
}

export { Stack };
