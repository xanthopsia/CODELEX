/**
 * Vowels
 *
 * Write a function which returns number of vowels in given string.
 *
 * Examples:
 * vowels('aeiou') === 5
 * vowels('Adam') === 2
 * vowels('Hello there!') === 4
 */
function vowels(s: string): number {
    const vowelsArray = ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"];
    const charArray = s.split("");
    let vowelCount = 0;

    for (let i = 0; i < charArray.length; i++) {
        if (vowelsArray.includes(charArray[i])) {
            vowelCount++;
        }
    }

    return vowelCount;
}

export { vowels };
