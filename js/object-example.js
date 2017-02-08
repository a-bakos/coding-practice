// This is an example object
// Eloquent JS book:
var day1 = {
  squirrel: false,
  events: ["work", "touched tree", "pizza", "running", "television"]
};



// Mark Myers book

// You can create an object without any properties:
var objectName = {};

// If you want to create a property now and assign it a value later, you can
// create it with a value of undefined:
objectName.property = undefined;

var plan1 = {
  name: "basic", // name -> property (of the object); "basic" -> value (of the object's property)
  price: 3.99,
  space: 100,
  transfer: 1000,
  pages: 10
};

// Now let's add one more property:
plan1.discountMonths = [6, 7, 11];

// This statement assigns the third element of the array to the month variable:
var month = plan1.discountMonths[2];

// To change the value of an object's property, a simple assignment
plan1.name = "medium";