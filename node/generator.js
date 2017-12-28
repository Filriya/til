function *generator() {
  yield 1;
  console.log('hoge');
  yield 2;
  console.log('fuga');
  return 3;
  console.log('piyo');
}

const g = generator();
console.log(g.next());
console.log(g.next());
console.log(g.next());
