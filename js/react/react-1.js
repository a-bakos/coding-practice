/*
There's a more compact way to write conditionals in JSX: the ternary operator.

The ternary operator works the same way in React as it does in regular
JavaScript. However, it shows up in React surprisingly often.

Recall how it works: you write x ? y : z, where x, y, and z are all JavaScript
expressions. When your code is executed, x is evaluated as either true or
false. If x evaluates to true, then the entire ternary operator returns y.
If x evaluates to false, then the entire ternary operator returns z. Here's a
nice explanation if you need a refresher.

Here's how you might use the ternary operator in a JSX expression:
*/

var headline = (
  <h1>
    { age >= drinkingAge ? 'Buy Drink' : 'Do Teen Stuff' }
  </h1>
);

/*
In the above example, if age is greater than or equal to drinkingAge, then
headline will equal <h1>Buy Drink</h1>. Otherwise, headline will equal
<h1>Do Teen Stuff</h1>.
*/