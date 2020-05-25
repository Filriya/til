use super::SortOrder;

pub fn sort<T: std::cmp::Ord>(x: &mut [T], order: &SortOrder) -> Result<(), String> {
    if x.len().is_power_of_two() {
        match *order {
            SortOrder::Ascending => do_sort(x, true),
            SortOrder::Descending => do_sort(x, false),
        };
        Ok(())
    } else {
        Err(format!("The length of x is not a power of two. (x.len(): {})", x.len()))
    }
}

fn do_sort<T: std::cmp::Ord>(x: &mut [T], up: bool) {
    if x.len() > 1 {
        let mid_point = x.len() / 2;
        do_sort(&mut x[..mid_point], true);
        do_sort(&mut x[mid_point..], false);
        sub_sort(x, up);
    }
}

fn sub_sort<T: std::cmp::Ord>(x: &mut [T], up: bool) {
    if x.len() > 1 {
        compare_and_swap(x, up);
        let mid_point = x.len() / 2;
        sub_sort(&mut x[..mid_point], up);
        sub_sort(&mut x[mid_point..], up);
    }
}

fn compare_and_swap<T: std::cmp::Ord>(x: &mut [T], up: bool) {
    let mid_point = x.len() / 2;
    for i in 0..mid_point {
        if (x[i] > x[mid_point + i]) == up {
            x.swap(i, mid_point + i);
        }
    }
}

#[cfg(test)]
mod tests {
    use super::sort;
    use crate::SortOrder::*;

    #[test]
    fn sort_ascending() {
        let mut x = vec!["A", "d", "B",  "c", "C", "b", "D", "a"];
        assert_eq!(sort(&mut x, &Ascending), Ok(()));
        assert_eq!(x, vec!["A", "B", "C", "D", "a", "b", "c", "d"]);
    }

    #[test]
    fn sort_descending() {
        let mut x = vec!["A", "d", "B",  "c", "C", "b", "D", "a"];
        assert_eq!(sort(&mut x, &Descending), Ok(()));
        assert_eq!(x, vec!["d", "c", "b", "a", "D", "C", "B", "A"]);
    }

    #[test]
    fn sort_to_fail() {
        let mut x = vec![10, 30, 11];
        assert!(sort(&mut x, &Ascending).is_err());
    }
}

