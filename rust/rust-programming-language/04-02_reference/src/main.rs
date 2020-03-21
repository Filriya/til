fn main() {
    let s1 = String::from("hello");

    let len = calculate_length(s1);

    // '{}'の長さは、{}です
    println!("The length of '{}' is {}.", s1, len);

    let mut s2 = String::from("hello");
    change(&mut s2);
    println!("{}", s2);

    // 特定のデータに対しては、 一つしか可変な参照を持てない
    // let mut s3 = String::from("hoge");
    // let r1 = &mut s3;
    // let r2 = &mut s3;
    //
    // println!("{}, {}", r1, r2);

    // 不変な参照をしている間は、可変な参照をすることはできません
    // let mut s4 = String::from("hello");
    //
    // let r1 = &s4; // 問題なし
    // let r2 = &s4; // 問題なし
    // let r3 = &mut s4; // 大問題！
    // println!("{}, {}, {}", r1, r2, r3);

    // let reference_to_nothing = dangle();
}

fn calculate_length(s: str) -> usize {
    s.len()
}

fn change(some_string: &mut String) {
    some_string.push_str(", world");
}

// sは、dangle内で生成されているので、dangleのコードが終わったら、sは解放される
// fn dangle() -> &String {
//     let s = String::from("hello");
//
//     &s
// }
