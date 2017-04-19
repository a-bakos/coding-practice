/*
The word this gets used in React a lot!

You are especially likely to see this inside of an object that is being passed to React.createClass. Here's an example:
*/
var IceCreamGuy = React.createClass({
  food: 'ice cream',

  render: function () {
    return <h1>I like {this.food}.</h1>;
  }
});

/*
In the code, what does this mean?

this refers to the instructions object being passed to React.createClass.

this has two properties: food, and render. this.food will evaluate to "ice cream."

There's nothing React-specific about this behaving in this way! However, in React you will see this used in this way almost constantly.

If you aren't totally comfortable with this in JavaScript, here is a good resource.
*/