const array = [3, 0, 8, 4, 1, 5, 6]

for (let i = 0, len = array.length; i < len; i++) {
  let min = i
  for (let j = i + 1; j < len; j++) {
    if (array[min] > array[j]) {
      min = j
    }
  }
  if (min !== i) {
    const temp = array[i]
    array[i] = array[min]
    array[min] = temp
  }
}

console.log(array)
