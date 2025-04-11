function createPerson(name, age, address) {
  return {
    name,
    age: age,
    address: address,
  }
}
person1 = createPerson('abrar', 34, 'address')
console.log(person1)

function contructerFunctionPerson(name, age) {
  ;(this.name = name), (this.age = age)
}

person3 = new contructerFunctionPerson('abver', 324)

console.log(person3.age)
