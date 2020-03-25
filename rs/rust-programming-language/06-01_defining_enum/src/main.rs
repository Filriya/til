fn main() {
    println!("Hello, world!");

    let home = IpAddr::V4(127, 0, 0, 1);
    let loopback = IpAddr::V6(String::from("::1"));

    println!("{:#?}, {:#?}", home, loopback);

    println!("{}", value_in_cents(Coin::Penny));
    println!("{}", value_in_cents(Coin::Nickel));
    println!("{}", value_in_cents(Coin::Dime));

    let alabama_coin = Coin::Quarter(UsState::Alabama);
    println!("{}", value_in_cents(alabama_coin));

    let five = Some(5);
    let _six = plus_one(five);
    let _none = plus_one(None);

    let some_u8_value = Some(0u8);
    if let Some(3) = some_u8_value {
        println!("three");
    }
}

#[derive(Debug)]
enum IpAddr {
    V4(u8, u8, u8, u8),
    V6(String),
}

enum Coin {
    Penny,
    Nickel,
    Dime,
    Quarter(UsState),
}

#[derive(Debug)]
enum UsState {
    Alabama,
}

fn value_in_cents(coin: Coin) -> u32 {
    match coin {
        Coin::Penny => {
            println!("Lucky Penny!");
            1
        }
        Coin::Nickel => 5,
        Coin::Dime => 10,
        Coin::Quarter(state) => {
            println!("State quater from {:?}", state);
            25
        }
    }
}

fn plus_one(x: Option<i32>) -> Option<i32> {
    match x {
        None => None,
        Some(i) => Some(i + 1),
    }
}

