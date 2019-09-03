Array.from(Array(100), (val,i) => {
  let str = ''
  if ((i + 1) % 3 === 0) { str += "Fizz" }
  if ((i + 1) % 5 === 0) { str += "Buzz" }
  if (str) {
    console.log(str)
  } else {
    console.log(i + 1)
  }
})
