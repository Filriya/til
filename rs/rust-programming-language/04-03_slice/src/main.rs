fn main() {
    let s = String::from("hello world");

    let hello = &s[0..5];
    let world = &s[6..11];

    println!("{}, {}", world, hello);

    let s2 = String::from("hello world");
    let word2 = first_word(&s2);

    println!("{}", word2);

    let s3 = "hello world";
    let word3 = first_word(s3);

    println!("{}", word3);
}

fn first_word(s: &str) -> &str {
    let bytes = s.as_bytes();

    for (i, &item) in bytes.iter().enumerate() {
        if item == b' ' {
            return &s[0..i];
        }
    }

    &s[..]
}
