const promiseA = new Promise((resolve, reject) => {
  resolve('hoge');
})

const promiseB = new Promise((resolve, reject) => {
  resolve(new Promise((res, rej) => {
    res('hoge')
  }))
})

// console.log(promiseA)
// console.log(promiseB)

console.log(promiseA.then(data => data + data).then(data => console.log(data)))
console.log(promiseB.then(data => data + data).then(data => console.log(data)))


.then((data) => {
  return 5
})

.then((data) => {
  return () => {return 5}
})

.then((data) => {
  return new Promise((res, rej) => {
    setTimeout(() => {
      res()
    }, 100)
  }
}.then() {
}

