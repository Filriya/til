type Counter = {
  (start: number): string
  interval: number
  reset() :void
}

// interface Counter {
//   (start: number): string
//   interval: number
//   reset() :void
// }

const getCounter = () => {
  const counter = ((start: number) => {}) as Counter
  counter.interval = 123
  counter.reset = () => {}
  return counter
}

const callable = getCounter()
callable(10)
callable.reset()
callable.interval = 5.0


class Point {
  x: number
  y: number
}

interface Shape {
  area(): number
}

type Perimeter = {
  perimeter(): number
}

type RectangleShape = (Shape | Perimeter) & Point

// error
// class Rectangle implements RectangleShape {
//   x = 2
//   y = 3
//   area() {
//     return this.x * this.y
//   }
// }

const rectangle: RectangleShape = {
  x: 12,
  y: 133,
  perimeter() {
    return 2 * (rectangle.x * rectangle.y)
  },
  area() {
    return rectangle.x * rectangle.y
  },
}

// これはOK
interface BoxInterface {
  height: number
  width: number
}

interface BoxInterface {
  scale: number
}

const boxInterface: BoxInterface = { height: 10, width: 20, scale: 30 }

// これはNG
// typeはモジュールスコープで一意
type BoxType = {
  height: number
  width: number
}

type BoxType = {
  scale: number
}

const boxType: BoxType = { height: 10, width: 20, scale: 30 }
