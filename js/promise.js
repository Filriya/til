function resolveFunc() {
  return new Promise(function (resolve, reject) {
      setTimeout(function () {
          resolve('Async Hello world');
      }, 1000);
  });
}

function rejectFunc() {
  return new Promise(function (resolve, reject) {
      setTimeout(function () {
          reject('reject !!!');
      }, 1000);
  });
}

resolveFunc().then(value => console.log(value))
rejectFunc().catch(error => console.log(error))





function taskA () {
  throw new Error('Error');
  console.log("TaskA");
}

function taskB () {
  console.log("TaskB");
}

function onRejectted(error) {
  console.log("error = " + error);
}

var promise = Promise.resolve();
promise
.then(taskA)
.then(taskB)
.catch(onRejectted);




var taskA = new Promise(function(resolve, reject) {
  setTimeout(function () {
    console.log('taskA');
    resolve();
  }, 16);
});

var taskB = new Promise(function(resolve, reject) {
  setTimeout(function () {
    console.log('taskB');
    resolve();
  }, 10);
});

var before = new Date();
Promise.all([taskA, taskB]).then(function () {
  var after = new Date();
  var result = after.getTime() - before.getTime();
  console.log(result);
});
