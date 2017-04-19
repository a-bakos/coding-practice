// Conditional printing

var React = require('react');
var ReactDOM = require('react-dom');

var fiftyFifty = Math.random() < 0.5;

// React.createClass call begins here:
var TonightsPlan = React.createClass({
  render: function () {
  var happening;
  if (fiftyFifty == true) {
    happening = "Tonight I'm going out WOOO";
  } else {
  	happening = "Tonight I'm going to bed WOOO";
	}

	return <h1>{happening}</h1>;
  }
});

ReactDOM.render(
<TonightsPlan />,
document.getElementById('app'));