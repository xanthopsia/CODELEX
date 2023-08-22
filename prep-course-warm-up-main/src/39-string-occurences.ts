export {};

const count = (text: string, word: string): number => {
    const words = text.toLowerCase().split(' ');
    const normalizedWord = word.toLowerCase();
    
    return words.filter(w => w === normalizedWord).length;
  };
  

console.log(count("The quick brown fox jumps over the lazy dog", "the")); // Expected output: 2
console.log(count("The quick brown fox jumps over the lazy dog", "fox")); // Expected output: 1
