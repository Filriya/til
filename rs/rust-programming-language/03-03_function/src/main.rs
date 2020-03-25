fn main() {
    println!("Hello, world!");

    func(5);
    func2();

    let z = plus_one(3);
    println!("The value or z is: {}", z);
}

fn func(x: i32) {
    println!("The value or x is: {}", x);
}

fn func2() {
    let y = {
        let x = 3;
        x + 1
    };

    println!("The value of y is: {}", y);
}

fn plus_one(x: i32) -> i32 {
    x + 1
}
