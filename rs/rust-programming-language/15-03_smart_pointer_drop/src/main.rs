use std::mem::drop;

struct CustomSmartPointer {
    data: String,
}

impl Drop for CustomSmartPointer {
    fn drop(&mut self) {
        println!("Dropping CustomSmartPointer with data '{}'", self.data)
    }
}

fn main() {
    let _c = CustomSmartPointer {
        data: String::from("my stuff"),
    };
    let _d = CustomSmartPointer {
        data: String::from("other stuff"),
    };

    let _e = CustomSmartPointer {
        data: String::from("some data"),
    };

    println!("CustomSmartPointers created.");

    drop(_e);

    println!("Main end");
}
