const array = [3, 0, 8, 4, 1, 5, 6]

for (let i = 1, len = array.length; i < len; i++) {
  for (let j = i; j > 0; j--) {
    if ( array[j] < array[j - 1] ) {
      var temp = array[j]
      array[j] = array[j - 1]
      array[j - 1] = temp
    } else {
      break
    }
  }
}

console.log(array)
