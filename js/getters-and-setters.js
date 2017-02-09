/**
 * When specifying an interface, it is possible to include properties that are
 * not methods. We could have defined minHeight and minWidth to simply hold
 * numbers. But that'd have required us to compute them in the constructor,
 * which adds code there that isn't strictly relevant to constructing the
 * object.
 * This has led some people to adopt a principle of never including non-method
 * properties in interfaces. Rather than directly access a simple value
 * property, they'd use getSomething and setSomething methods to read and write
 * the property.
 */

var pile = {
  elements: ["eggshell", "orange peel", "worm"],
  get height(){
    return this.elements.length;
  },
  set height(value) {
    console.log("Ignoring attempt to set height to", value);
  }
};

console.log(pile.height);
// -> 3
pile.height = 100;
// -> Ignoring attempt to set height to 100