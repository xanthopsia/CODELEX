/**
 * Reverse Integer
 *
 * For given integer return an integer that is the reverse
 * ordering of numbers.
 *
 * Examples:
 * reverseInt(15) === 51
 * reverseInt(981) === 189
 * reverseInt(500) === 5
 * reverseInt(-15) === -51
 * reverseInt(-90) === -9
 */

function reverse(int: number): number {
    const reversedString = Math.abs(int).toString().split("").reverse().join("");
    const reversedInt = parseInt(reversedString);
    
    return int < 0 ? -reversedInt : reversedInt;
}

export { reverse };
