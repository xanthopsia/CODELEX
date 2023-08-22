export {};

/**
 * The good ol' this.. Possibly the most confusing topic in the whole language
 * and one that interviewers often use to make you (me) feel miserable in interviews 😭
 * If you find the docs (https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/this)
 * also confusing, try some of these resources:
 *  - https://www.freecodecamp.org/news/javascript-this-keyword-binding-rules/
 *  - https://dmitripavlutin.com/gentle-explanation-of-this-in-javascript/
 *  - https://www.youtube.com/watch?v=Pi3QC_fVaD0 (JavaScript this Keyword Explained In 3 Minutes)
 *  - https://www.youtube.com/watch?v=YOlr79NaAtQ (What is THIS in JavaScript? in 100 seconds)
 */

interface Circle {
  radius: number;
  area(): number;
  perimeter(): number;
}

function Circle(this: Circle, radius: number) {
  this.radius = radius;
}

Circle.prototype.area = function(this: Circle): number {
  return Math.PI * this.radius ** 2;
};

Circle.prototype.perimeter = function(this: Circle): number {
  return 2 * Math.PI * this.radius;
};

const c = new (Circle as any)(3); // Type casting to avoid type errors
console.log("Area =", c.area().toFixed(2)); // Expected output: Area = 28.27
console.log("Perimeter =", c.perimeter().toFixed(2)); // Expected output: Perimeter = 18.85