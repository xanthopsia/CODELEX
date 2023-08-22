/**
 * Steps
 *
 * Write a function that accepts a positive number N.
 * The function should prints a step shape
 * with N levels using the '#' character.
 *
 * Examples:
 * steps(2) = '# '
 *            '##'
 *
 * steps(3) = '#  '
 *            '## '
 *            '###'
 *
 * steps(4) = '#   '
 *            '##  '
 *            '### '
 *            '####'
 */

function steps(n: number) {
    for (let row = 0; row < n; row++) {
      let stair = '';
  
      for (let col = 0; col < n; col++) {
        if (col <= row) {
          stair += '#';
        } else {
          stair += ' ';
        }
      }
  
      console.log(stair);
    }
  }
  

export { steps };
