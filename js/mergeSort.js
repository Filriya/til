const array = [3, 0, 8, 4, 1, 5, 6]

const mergeSort = function(array) {

  if (array.length <= 1) {
    return array
  }

  const middle = Math.round(array.length / 2)

  const left = array.slice(0, middle)
  const right = array.slice(middle)

  return merge(mergeSort(left), mergeSort(right))
}

const merge = function(array1, array2) {
  const result = []
  for (let i = 0, len = array1.length; i < len; i++) {
    while (array2.length > 0 && array1[i] >= array2[0]) {
      result.push(array2.shift())
    }
    result.push(array1[i])
  }

  for (let i = 0, len = array2.length; i < len; i++) {
    result.push(array2.shift())
  }

  return result
}

console.log(mergeSort(array))
