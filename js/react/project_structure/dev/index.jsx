import React from "react";
import ReactDOM from "react-dom";

var HelloWorld = React.createClass({
  render: function() {
    return (
      <p>Hello, {this.props.greetTarget}!</p>
    );
  }
});

ReactDOM.render(
  <div>
    <HelloWorld greetTarget="Iron Man" />
    <HelloWorld greetTarget="BatMan" />
    <HelloWorld greetTarget="SuperMan" />
    <HelloWorld greetTarget="SpiderMan" />
    <HelloWorld greetTarget="CatwoMan" />
  </div>,
  document.querySelector(".container")
);