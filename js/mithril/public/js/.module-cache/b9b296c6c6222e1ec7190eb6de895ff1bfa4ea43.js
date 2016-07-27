var todo = {
  controller: function() {},
  view: function() {}
};

todo.Todo = function(data) {
  this.description = m.prop(data.description);
  this.done = m.prop(false);
}

todo.TodoList = Array;

todo.vm = {
  init: function() {
    todo.vm.list = new todo.TodoList();
    todo.vm.description = m.prop('');

    todo.vm.add = function(description) {
      if(description()) {
        todo.vm.list.push(new todo.Todo({description: description()}));
        todo.vm.description("");
      }
    }
  }
}

todo.controller = function() {
  todo.vm.init()
}

todo.view = function() {
  return require('./view.msx'); 
}

m.render(document, todo.view());

