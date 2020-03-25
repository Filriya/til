fn main() {
    let number = 3;

    if number < 5 {
        println!("condition was true"); // 条件は真でした
    } else {
        println!("condition was false"); // 条件は偽でした
    }

    let condition = true;
    let number = if condition { 5 } else { 6 };

    println!("The value of number is: {}", number);

    let mut number = 3;

    while number != 0 {
        println!("{}!", number);

        number -= 1;
    }

    // 発射！
    println!("LIFTOFF!!!");

    let a = [10, 20, 30, 40, 50];

    for element in a.iter() {
        // 値は{}です
        println!("the value is: {}", element);
    }

    for number in (1..4).rev() {
        println!("{}", number);
    }
    println!("LIFTOFF!!!");
}
