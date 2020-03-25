pub struct Node {
    pub key: Option<usize>,
    pub prev: Option<Box<Node>>,
    pub next: Option<Box<Node>>,
}

pub struct LinkedList {
    pub head: Box<Node>,
}

impl Default for LinkedList {
    fn default() -> Self {
        LinkedList {
            head: Box::new(Node {
                key: None,
                prev: None,
                next: None,
            }),
        }
    }
}
impl LinkedList {
    pub fn insert(&self, key: usize) {
        let mut cur = &self.head;

        while let Some(cur) = &cur.next {}

        let next = Box::new(Node {
            key: Some(key),
            prev: Some(*cur),
            next: None,
        });

        cur.next = Some(next);
    }
    pub fn listSearch(key: usize) {}
}
