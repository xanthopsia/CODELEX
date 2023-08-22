export {};

/**
 * Currency Formatting
 *
 * The business is now breaking into the Brazilian market
 * Write a new function for converting to the Brazilian real
 * They have also decided that they should add a 1% fee to all foreign transactions
 *
 * Additional Challange:
 * Find a way to add 1% to all currency conversions
 * (think about the DRY (don't repeat yourself) principle)
 * You are allowed to create your own functions
 * and use them in place of convertToUSD() and convertToBRL()
 */


function convertCurrency(price: number, rate: number): number {
    return (price * rate);

}

function addFee(price: number, fee: number = 0.01): number {
    return (price + price*fee);
}

function formatPrice(price: number): string {
    return price.toFixed(2);
}

const product = "You don't know JS";
const price = 12.5;
const RATE_USD = 1.23;
const RATE_BRL = 4.56;

console.log("Product: " + product);
console.log("Price: $" + formatPrice(addFee(convertCurrency(price,RATE_USD))));
console.log("Price: R$" + formatPrice(addFee(convertCurrency(price,RATE_BRL))));

/* Expected output:

    > Product: You don't know JS
    > Price: $?
    > Price: R$?

*/
