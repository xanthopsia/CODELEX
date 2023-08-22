export {};

function truncateString(str: string, num: number): string {
    return str.slice(0,num);
}

console.log(truncateString("CODELEX", 4)); // Expected output: CODE
