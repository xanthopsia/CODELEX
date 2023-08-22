/**
 * Max Char
 *
 * For given string return the character that is most
 * commonly used in the string.
 *
 * Examples:
 * maxChar("abcccccccd") === "c"
 * maxChar("apple 1231111") === "1"
 */

function maxChar(str: string): string {
    const charMap: { [char: string]: number } = {};
    let maxCount = 0;
    let maxChar = '';
  
    for (let i = 0; i < str.length; i++) {
      const char = str[i];
      charMap[char] = charMap[char] + 1 || 1;
  
      if (charMap[char] > maxCount) {
        maxCount = charMap[char];
        maxChar = char;
      }
    }
  
    return maxChar;
  }
  
  export { maxChar };