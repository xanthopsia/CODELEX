export {};

const repeatString = (str: string, num: number): string => {
    return str.repeat(num);
}

console.log(repeatString("a", 4)); // Expected output: 'aaaa'
console.log(repeatString("b", 5)); // Expected output: 'bbbbb'
