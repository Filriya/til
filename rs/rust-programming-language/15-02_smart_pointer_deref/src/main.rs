struct MyBox<T>(T);

impl<T> MyBox<T> {
    fn new(x: T) -> MyBox<T> {
        MyBox(x)
    }
}

use std::ops::Deref;

impl<T> Deref for MyBox<T> {
    type Target = T;

    fn deref(&self) -> &T {
        &self.0
    }
}

fn hello(name: &str) {
    println!("Hello, {}", name)
}

fn main() {
    let v1 = 5;
    let v2 = &v1;
    let v3 = Box::new(v1);
    let v4 = MyBox::new(v1);

    assert_eq!(5, v1);
    assert_eq!(5, *v2);
    assert_eq!(5, *v3);
    assert_eq!(5, *v4);

    let m = MyBox::new(String::from("Rust"));
    hello(&m); // 自動で参照が外される
}
