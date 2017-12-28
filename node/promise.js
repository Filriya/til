
function wait(time) {
  return new Promise((resolve, reject) => {
      setTimeout(() => {
          resolve(`wait: ${time}`);
      }, time);
  });
}

wait(3000).then((value) => {
    console.log(value);
    return `finish ${value}`;
}).then((value) => {
    console.log(value);
    return 'hoge';
}).then((value) => {
    console.log(value);
});

//promiss なしの例
//
//function getUrl(url) {
//  $.ajax({
//      url: url
//  }).done(function() {
//      console.log("success");
//  }).fail(function() {
//      console.error("error");
//  });
//}
//function getFirstItem(callback) {
//  getUrl("/items", function(err, items) {
//      if (err) {
//        return callback(err);
//      }
//
//      getUrl("/items/" + items[0].id, function(err, detail) {
//          if (err) {
//            return callback(err);
//          }
//          callback(null, detail);
//      })
//  });
//}
//
//getFirstItem(function(err, item) {
//    if (err) {
//      console.error(e);
//      return
//    }
//    successProcess(item);
//});

//promiss ありの例
//
//function getUrl(url) {
//  return new Promise((resolve, reject) => {
//      let xhr = XMLHttpRequest();
//      xhr.open("GET", url);
//      xhr.onload = () => {
//        if (xhr.status === 200) {
//          resolve(xhr.response);
//        } else {
//          reject(new Error(xhr.statusText));
//        }
//      };
//      xhr.onerror = () => {
//        reject(new Error(xhr.statusText));
//      };
//      xhr.send();
//  });
//}
//
//function getFirstItem() {
//  return getUrl("/items").then((items) => {
//      return getUrl("/items/" + items[0].id);
//  });
//}
//
//getFirstItem().then((item) => {
//    successProcess(item);
//}).catch((e) => {
//    console.error(e);
//});
