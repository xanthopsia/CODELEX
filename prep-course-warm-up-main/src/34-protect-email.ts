export {};

function protectEmail(email: string): string {
  const parts = email.split('@');
  const username = parts[0];
  const domain = parts[1];

  if (username.length <= 2) {
    return '...@' + domain;
  }

  if (username.length > 2 && username.length <= 5) {
    return username.slice(0,2) + '...@' + domain;
  }
  const hiddenUsername = username.slice(0, 3) + '...';

  return hiddenUsername + '@' + domain;
}

console.log(protectEmail("secret123@codelex.io")); // Expected result: sec...@codelex.io
console.log(protectEmail("example@example.com")); // Expected result: exa...@example.com
console.log(protectEmail('12345@example.com')); // Expected result: 12...@example.com
console.log(protectEmail('12@example.com')); // Expected result: ...@example.com
