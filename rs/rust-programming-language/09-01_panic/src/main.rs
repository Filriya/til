use std::fs::File;
use std::io;
use std::io::ErrorKind;
use std::io::Read;

fn main() {
    // panic!("crash and burn"); // Error
    let _v = vec![1, 2, 3];
    // v[99]; // Error

    let f = File::open("hello.txt");

    let _f = match f {
        Ok(file) => file,
        Err(ref error) if error.kind() == ErrorKind::NotFound => match File::create("hello.txt") {
            Ok(fc) => fc,
            Err(e) => panic!("Tried to create file but there was a problem: {:?}", e),
        },
        Err(error) => {
            panic!("There was a problem opening the file: {:?}", error);
        }
    };

    // let _f = File::open("hello2.txt").unwrap(); //error
    // let _f = File::open("hello2.txt").expect("Failed to open hello.txt"); // error
}

fn read_username_from_file() -> Result<String, io::Error> {
    let f = File::open("hello.txt");

    let mut f = match f {
        Ok(file) => file,
        Err(e) => return Err(e),
    };

    let mut s = String::new();

    match f.read_to_string(&mut s) {
        Ok(_) => Ok(s),
        Err(e) => Err(e),
    }
}

fn read_username_from_file2() -> Result<String, io::Error> {
    let f = File::open("hello.txt")?;
    let mut s = String::new();

    f.read_to_string(&mut s)?;
    Ok(s)
}

fn read_username_from_file3() -> Result<String, io::Error> {
    let mut s = String::new();

    File::open("hello.txt")?.read_to_string($mut s)?;
    Ok(s)
}
