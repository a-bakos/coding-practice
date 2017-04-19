/*
Let's make a render function with some logic in it.
On lines 1 and 2, import React and ReactDOM.

2.
On line 20, declare a new variable named Friend.
Set Friend equal to a component class, made with React.createClass().
Pass an object to React.createClass().
Give this object one property. Make the property's name render.
Make the property's value this function:

function () {
  return (
    <div>
    </div>
  );
}

3.
Inside the body of the render function, before the return statement, declare a new variable named friend.
Set friend equal to either friends[0], friends[1], or friends[2], depending on which friend sounds most appealing to you.

4.
Inside of the return statement, inside of the <div></div>, write a nested <h1></h1>.
Inside of the <h1></h1>, inject friend.title.

5.
Still inside of the <div></div>, make a new line after the <h1></h1>.
On the new line, write an <img />.
Give the <img /> an attribute of src={friend.src}.

6.
At the bottom of the file, use ReactDOM.render to render an instance of Friend. Use the example code as a guide.
*/

var React = require('react');
var ReactDOM = require('react-dom');

var friends = [
  {
    title: "Yummmmmmm",
    src: "https://s3.amazonaws.com/codecademy-content/courses/React/react_photo-monkeyweirdo.jpg"
  },
  {
    title: "Hey Guys!  Wait Up!",
    src: "https://s3.amazonaws.com/codecademy-content/courses/React/react_photo-earnestfrog.jpg"
  },
  {
    title: "Yikes",
    src: "https://s3.amazonaws.com/codecademy-content/courses/React/react_photo-alpaca.jpg"
  }
];

// New component class starts here:
var Friend = React.createClass({
  render: function() {
    var friend = friends[0];
    return (
    	<div>
        <h1>{friend.title}</h1>
        <img src={friend.src} />
      </div>
    );
  }
});

ReactDOM.render(
  <Friend />,
  document.getElementById('app')
);