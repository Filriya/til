use Node;

fn main() {
    // stack();
    // queue_sample();
    loop {
        let v = read::<String>();
        if v.is_empty() {
            break;
        }
        println!("var: {}", v);
    }
    println!("end");
}

fn linked_list_sample() {}

fn stack_sample() {
    let vec = read_vec::<String>();

    let mut stack: Vec<isize> = Vec::new();

    for v in vec {
        if v == "+" {
            let pop_1 = stack.pop().unwrap();
            let pop_2 = stack.pop().unwrap();
            stack.push(pop_2 + pop_1);
        } else if v == "-" {
            let pop_1 = stack.pop().unwrap();
            let pop_2 = stack.pop().unwrap();
            stack.push(pop_2 - pop_1);
        } else if v == "*" {
            let pop_1 = stack.pop().unwrap();
            let pop_2 = stack.pop().unwrap();
            stack.push(pop_2 * pop_1);
        } else {
            stack.push(v.parse::<isize>().unwrap());
        }
    }
    println!("{}", stack.pop().unwrap());
}

fn queue_sample() {
    let vec1 = read_vec::<usize>();
    let n = vec1[0];
    let q = vec1[1];
    let mut cnt = 0;

    let mut vec2 = read_vec2::<String>(n);

    while !vec2.is_empty() {
        let mut rev = vec2.clone();
        rev.reverse();
        vec2.clear();

        while !rev.is_empty() {
            let mut v = rev.pop().unwrap();
            let time = v[1].parse::<usize>().unwrap();

            if time > q {
                v[1] = (time - q).to_string();
                vec2.push(v);
                cnt += q;
            } else {
                cnt += time;
                println!("{} {}", v[0], cnt);
            }
        }
    }
}

fn read<T: std::str::FromStr>() -> T {
    let mut s = String::new();
    std::io::stdin().read_line(&mut s).ok();
    s.trim().parse().ok().unwrap()
}

fn read_vec<T: std::str::FromStr>() -> Vec<T> {
    read::<String>()
        .split_whitespace()
        .map(|e| e.parse().ok().unwrap())
        .collect()
}

fn read_vec2<T: std::str::FromStr>(n: usize) -> Vec<Vec<T>> {
    (0..n).map(|_| read_vec()).collect()
}

fn write_vec<T: ToString>(vec: Vec<T>) {
    let str_vec: Vec<String> = vec.iter().map(|x| x.to_string()).collect();
    println!("{}", str_vec.join(" "));
}
