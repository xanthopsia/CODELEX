export {};

/**
 * Write a function that removes an element form array.
 * The function must:
 *  - NOT change the original array
 *  - return a new array with the first item matching `valueToRemove` removed
 */

// You are allowed to edit only this function
function remove(arr: any[], valueToRemove: any): any[] {
  const indexToRemove = arr.indexOf(valueToRemove); // no check if indexToRemove is -1
    return arr.slice(0, indexToRemove).concat(arr.slice(indexToRemove + 1));

  // If valueToRemove is not found, return the original array
  return arr;
}

const numbers = [1, 2, 3];
const names = ["John", "Alice", "Ellen"];

const newNumbers = remove(numbers, 2);
const newNames = remove(names, "Ellen");

console.log(newNumbers);
console.log(newNames);

/* 
  Expected output:
  
      [1, 3]
      [John, Alice]
*/
