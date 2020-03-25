fn main() {
    let v1: Vec<i32> = Vec::new();
    let v2 = vec![1, 2, 3];

    let mut v3 = Vec::new();
    v3.push(5);
    v3.push(6);
    v3.push(7);

    let v = vec![1, 2, 3, 4, 5];
    let third: &i32 = &v[2];

    for i in &v {
        println!("{}", i);
    }

    let mut s = String::new();

    let data = "initial contents";
    let s = data.to_string();

    let s = String::from("initial contents");

    let mut s = String::from("foo");
    let s2 = "bar";

    s.push_str(s2);

    println!("s is {}", s);
    println!("s2 is {}", s2);

    let s1 = String::from("Hello, ");
    let s2 = String::from("world!");
    let s3 = s1 + &s2;

    println!("s3 is {}", s3);

    let s1 = String::from("tic");
    let s2 = String::from("tac");
    let s3 = String::from("toe");

    let s = format!("{}-{}-{}", s1, s2, s3);

    println!("s is {}", s);

    for c in "はひふへほ".chars() {
        println!("{}", c);
    }

    use std::collections::HashMap;

    let mut scores = HashMap::new();

    scores.insert(String::from("Blue"), 10);
    scores.insert(String::from("Yello"), 50);
    // scores.insert(String::from("Red"), "red"); // error

    let teams = vec![String::from("Blue"), String::from("yello")];
    let initial_scores = vec![10, 50];
    let scores2: HashMap<_, _> = teams.iter().zip(initial_scores.iter()).collect();

    for (key, value) in &scores {
        println!("{}, {}", key, value);
    }

    let mut scores3 = HashMap::new();

    scores3.insert(String::from("Blue"), 10);
    scores3.insert(String::from("Blue"), 25);

    println!("{:?}", scores3);

    let mut scores4 = HashMap::new();
    scores4.entry(String::from("Blue")).or_insert(10);
    scores4.entry(String::from("Blue")).or_insert(50);

    println!("{:?}", scores4);

    let text = "hello world wonderful world";

    let mut map = HashMap::new();

    for word in text.split_whitespace() {
        let count = map.entry(word).or_insert(0);
        *count += 1;
    }

    println!("{:?}", map);
}
