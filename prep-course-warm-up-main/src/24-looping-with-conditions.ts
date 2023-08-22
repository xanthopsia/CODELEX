export {};

function onlyTheAces(arr: string[], wordToFilter: string = "Ace"): string[] {
    return arr.filter(word => (word === wordToFilter))
}

console.log(onlyTheAces(["Ace", "King", "Queen", "Jack", "Ace"])); // Expected result: ['Ace', 'Ace']
