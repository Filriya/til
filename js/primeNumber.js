const input = 100


const list = [...Array(100).keys()]
  .map(x => x + 1)

const spliceByValue = (list, value) => {
  if (list.indexOf(value) >= 0) {
    list.splice(list.indexOf(value), 1)
  }
}

spliceByValue(list, 1)

const max = Math.ceil(Math.sqrt(input))
for ( let i = 2; i < max; i++) {
  if (list.indexOf(i) >= 0) {
    let k = 2
    while (k * i <= input) {
      spliceByValue(list, k * i)
      k++
    }
  }
}

console.log(list)

