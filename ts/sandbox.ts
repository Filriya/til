Array.from(Array(100), (v, k) => k + 1)
  .map((value) => {
    return (value % 15 === 0) ? "FizzBuzz" : (
      (value % 3 === 0) ? "Fizz" : (
        (value % 5 === 0) ? "Buzz" : value
      )
    )
  })
  .forEach((value) => console.log(value))

const input = 100
let i = 0
let j = 0
let k = 0

while (i < input) {
  i++
  j++
  k++

  while (j === 3 && k === 5) {
    console.log("FizzBuzz")
    j = 3
    k = 5
    continue
  }

  while (j === 3) {
    console.log("Fizz")
    j = 3
    continue
  }

  while (k === 5) {
    console.log("Buzz")
    k = 5
    continue
  }
    console.log(i)
}
