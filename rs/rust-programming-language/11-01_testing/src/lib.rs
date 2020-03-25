pub fn add_two(a: i32) -> i32 {
    a + 2
}
pub fn greeting(name: &str) -> String {
    // こんにちは、{}さん！
    format!("Hello {}!", name)
}

pub struct Guess {}

impl Guess {
    pub fn new(value: u32) -> Guess {
        if value < 1 || value > 100 {
            //予想値は1から100の間でなければなりません
            panic!("Guess value must be between 1 and 100, got {}.", value);
        }

        Guess {}
    }
}

pub fn prints_and_returns_10(a: i32) -> i32 {
    //{}という値を得た
    println!("I got the value {}", a);
    10
}

#[cfg(test)] // cargo test を走らせたときだけコンパイルして実行される
mod tests {
    use super::*;

    #[test]
    fn exploration() {
        assert_eq!(2 + 2, 4);
    }

    #[test]
    #[should_panic(expected = "Make this test fail")]
    fn another() {
        panic!("Make this test fail");
    }

    #[test]
    fn it_adds_two() {
        assert_eq!(4, add_two(2));
    }

    #[test]
    fn greeting_contains_name() {
        let result = greeting("Carol");
        assert!(result.contains("Carol"));
    }

    #[test]
    // 予想値は100以下でなければなりません
    #[should_panic(expected = "Guess value must be between 1 and 100, got 200")]
    fn greater_than_100() {
        Guess::new(200);
    }

    #[test]
    fn this_test_will_pass() {
        let value = prints_and_returns_10(4);
        assert_eq!(10, value);
    }

    #[test]
    fn this_test_will_fail() {
        let value = prints_and_returns_10(8);
        assert_eq!(5, value);
    }

    #[test]
    #[ignore]
    fn expensive_test() {
        // 実行に1時間かかるコード
        // code that takes an hour to run
    }
}
