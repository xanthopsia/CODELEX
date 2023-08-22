/**
 * Pyramid
 *
 * Write a function that accepts a positive number N.
 * The function should print a pyramid shape
 * with N levels using the # character.
 *
 * Examples:
 * pyramid(1) = '#'
 *
 * pyramid(2) = ' # '
 *              '###'
 *
 * pyramid(3) = '  #  '
 *              ' ### '
 *              '#####'
 */

function pyramid(n: number) {
    const midpoint = Math.floor((2 * n - 1) / 2);
  
    for (let row = 0; row < n; row++) {
      let level = "";
  
      for (let column = 0; column < 2 * n - 1; column++) {
        if (midpoint - row <= column && midpoint + row >= column) {
          level += "#";
        } else {
          level += " ";
        }
      }
  
      console.log(level);
    }
  }  

export { pyramid };
