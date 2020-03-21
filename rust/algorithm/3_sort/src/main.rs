fn main() {
    // insertion_sort();
    bubble_sort();
}

fn bubble_sort() {
    let _n = read::<usize>();
    let mut vec = read_vec::<usize>();

    let mut i = _n;
    let mut count = 0;

    while i > 0 {
        for j in 0..i - 1 {
            if vec[j] > vec[j + 1] {
                vec.swap(j, j + 1);
                count += 1;
            }
        }
        i -= 1;
    }
    write_vec(&vec);
    println!("{}", count);
}

fn insertion_sort() {
    let _n = read::<usize>();
    let mut vec = read_vec::<usize>();

    for i in 0.._n {
        let mut j = i;

        while j > 0 {
            if vec[j - 1] > vec[j] {
                vec.swap(j - 1, j);
            }
            j -= 1;
        }
        write_vec(&vec);
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

fn write_vec<T: ToString>(vec: &[T]) {
    let str_vec: Vec<String> = vec.iter().map(|x| x.to_string()).collect();
    println!("{}", str_vec.join(" "));
}
