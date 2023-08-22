/**
 * Second Largest
 *
 * Array of numbers are passed in the function, your task is to find the second largest number.
 */

function secondLargest(array: number[]): number {
    if (array.length < 2) {
      throw new Error("Array should have at least two numbers");
    }
  
    let largest = -Infinity;
    let secondLargest = -Infinity;
  
    for (const num of array) {
      if (num > largest) {
        secondLargest = largest;
        largest = num;
      } else if (num > secondLargest && num !== largest) {
        secondLargest = num;
      }
    }
  
    if (secondLargest === -Infinity) {
      throw new Error("No second largest element found");
    }
  
    return secondLargest;
  }  

export { secondLargest };
