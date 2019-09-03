const array = [3, 0, 8, 4, 1, 5, 6]

for (let i = 0, len = array.length; i < len; i++) {
  for (let j = 0; j < len - i; j++) {
    if (array[j] > array[j + 1]) {
      const temp = array[j]
      array[j] = array[j + 1]
      array[j + 1] = temp
    }
  }
}

console.log(array)
