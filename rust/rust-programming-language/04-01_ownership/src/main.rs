fn main() {
    let mut s = String::from("hello");

    s.push_str(", world!");

    println!("{}", s);

    let s1 = String::from("hello");
    let _s2 = s1;

    println!("{}, world!", s1);
}
