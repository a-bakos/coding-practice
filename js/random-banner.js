/**
 * Random image generation
 *
 * Assume that bannerArray exists.
 * This line uses the Math.random() function multiplied by the number of
 * elements in the bannerArray array to calculate a random number between 0 and
 * the number of elements in the array. Then it places the result into the
 * randomNum variable.
 */

var randomNum = Math.floor(Math.random() * bannerArray.length);