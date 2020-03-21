fn main() {
    let _n: i64 = read_i64().unwrap();
    let i1: i64 = read_i64().unwrap();

    let mut max: i64 = i1;
    let mut min: i64 = i1;
    let mut prev_v: i64 = i1;
    let mut max_diff: i64 = 0 - i64::pow(10, 9);

    while let Ok(v) = read_i64() {
        if v < min {
            min = v;
            max = v;
            max_diff = if v - prev_v > max_diff {
                v - prev_v
            } else {
                max_diff
            }
        } else if v >= max {
            max = v;
            max_diff = if max - min > max_diff {
                max - min
            } else {
                max_diff
            }
        }
        prev_v = v;
    }
    println!("{}", max_diff);
}

fn read() -> String {
    let mut buf = String::new();
    let input = std::io::stdin();

    input.read_line(&mut buf).unwrap();

    buf
}

fn read_i64() -> Result<i64, std::num::ParseIntError> {
    read().trim().parse::<i64>()
}
