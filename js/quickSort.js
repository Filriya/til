const array = [3, 0, 8, 4, 1, 5, 6]

const quickSort = function(array) {
  if (array.length <= 1) {
    return array
  }
  const pivot = array.shift()
  const lists = array.reduce((acc, val) => {
    if (pivot > val) {
      acc.lower.push(val)
    } else {
      acc.upper.push(val)
    }
    return acc
  }, {lower: [], upper: []})
  return [...quickSort(lists.lower), pivot, ...quickSort(lists.upper)]
}

console.log(quickSort(array))
