fn main() {
    let mut x = 5;
    println!("this val {}", x);

    x = 6;
    println!("this val {}", x);

    const MAX_POINTS: u32 = 100_000;
    println!("this val {}", MAX_POINTS);

    let y = 5;
    let y = y + 1;
    let y = y * 3;
    println!("The value of y is: {}", y);

    // NG: error[E0282]: type annotations needed
    //let guess = "42".parse().expect("Not a number");

    // OK
    // let guess: u32 = "42".parse().expect("Not a number");

    // 数値リテラル	例
    // 10進数	98_222
    // 16進数	0xff
    // 8進数	0o77
    // 2進数	0b1111_0000
    // バイト (u8だけ)	b'A'

    let tup: (i32, f64, u8) = (500, 6.4, 1);

    let (a, b, c) = tup;

    println!("The value of a is: {}", a);
    println!("The value of b is: {}", b);
    println!("The value of c is: {}", c);

    println!("The value of a is: {}", tup.0);
    println!("The value of b is: {}", tup.1);
    println!("The value of c is: {}", tup.2);



}
