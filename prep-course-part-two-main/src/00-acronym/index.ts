/**
 * Convert a phrase to its acronym.
 *
 * Techies love their TLA (Three Letter Acronyms)!
 *
 * Help generate some jargon by writing a program that converts a long name like Portable Network Graphics to its acronym (PNG).
 */

function parse(input: string): string {
  const words = input.split(/\s+|[-_]/).filter(word => word.length > 0);
  const acronym = words.map(word => word[0].toUpperCase()).join('');
  return acronym;
}

  
export { parse };
