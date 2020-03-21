class Student {
  fullName: string;
  constructor(public firstName: string, public middleInitial: string, public lastName: string) {
    this.fullName = firstName + " " + middleInitial + " " + lastName;
  }
}

interface Person {
  firstName: string;
  lastName: string;
}

function greeter(person: Person) {
  return "Hello, " + person.firstName + " " + person.lastName
}

// let user = "Jane User"
// let user = [1, 2, 3]
// let user = {
//   firstName: "Takeshi",
//   lastName: "Fujii",
// }

let user = new Student("Takeshi", "Fujii", "Kudan")

console.log(user)

let user2 = {'firstName': 'hoge', 'lastName': 'fuga'}

console.log(greeter(user2))


