document.getElementById
document.getElementsByClassName
document.getElementsByName
document.getElementsByTagName

/*indexOf
selectedIndex
parseFloat
parseInt
pop
push
shift
unshift
splice
innerHTML*/

// ----------------------------------------------------------------------------

/*
Finding segments:

  indexOf()
  The indexOf method finds only the first instance of the segment you're
  looking for.

  To find the last instance of a segment in a string, use
  lastIndexOf()

  example:
*/
  var firstChar = text.indexOf("Something");
  // If the segment doesn't exist, the method assigns -1 to the variable

// ----------------------------------------------------------------------------

// Finding a character at a location
charAt()

// ----------------------------------------------------------------------------

// Replacing characters, /w example
replace()
var newText = text.replace("Text to be replaced", "Text to be inserted");

/* In this example above, only the first instance of a string is replaced.
If you want to replace all instances,use global replace flag. */
var newText = tex.treplace(/Text to be replaced/g, "text to be inserted");

/string/g -> global replace

// ----------------------------------------------------------------------------

// Rounding numbers

// Here's the code that rounds it to the nearest integer
var numberOfStars = Math.round(scoreAvg); // M must be capped
/* The function rounds up when the decimal is .5. It rounds 1.5 to 2.
 * It rounds -1.5 to -1.
 */

/*
 * ceil -> ceiling
 * To force JS to round up to the nearest integer, use ceil.
 * The following code rounds .00001 to 1.
 */
var scoreAvg = Math.ceil(.00001);
/**
 * It rounds -.0001 up to 0, 1.00001 up to 2.
 */

/**
 * floor
 * To force JS to round down to the nearest integer, use floor.
 * The following code rounds .99999 down to 0.
 */
var scoreAvg = Math.floor(.9999);
/**
 * It rounds -.0000001 down to -1.
 */

// ----------------------------------------------------------------------------