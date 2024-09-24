export function currencyEUR(value) {
  return new Intl.NumberFormat('el-GR', { style: 'currency', currency: 'EUR' })
    .format(value);
}

/*export default function currencyUSD(value) {
  return new Intl.NumberFormat('en-US', {style: 'currency', currency: 'USD'})
    .format(value);
}*/
