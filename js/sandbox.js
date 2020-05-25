const hoge = async () => {
  let count = 0
  try {
    return 'hoge'
  } finally {
    count++
    console.log(count)
  }
}

const main = async () => {
  const h = await hoge()
  console.log(h)
}

main()
