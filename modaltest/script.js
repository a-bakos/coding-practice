jQuery(document).ready(function($) {
	function closeModal(){	$( '.modal' ).hide(); }
	$( '.modal__close' ).on( 'click', function() { closeModal(); });
});

/**
 * The concept:
 * On a page there are boxes that are dynamically generated based on
 * user input through Advanced Custom Fields.
 * Each of these boxes have corresponding contents for a modal window to be
 * displayed (certainly, also based on user input).
 *
 * The number of these boxes is unknown and they are generated with no unique
 * identifiers.
 *
 * So we utilize JS, who, after the DOM is loaded, finds the boxes and the
 * modals, appends a unique class to both "groups" and ties them together.
 *
 * At the end, the user can add as many of these boxes as they want in the
 * WP admin of this page, and when clicks on them on the front-end, the related
 * content is displayed in a modal.
 *
 * closeModal() is handled by jQuery above
 */

// Get all of the print ref boxes
var print_ref_boxes = document.getElementsByClassName("print_ref_container");
// Also get all of the modals
var print_ref_modals = document.querySelectorAll(".modal");

var print_ref_list;
var modal_list;

var counter = 1;
var global_count = 0;

// Iterate over the selector nodelist and append a class with a counter
function iterateAndAppendClass(selectors, storeInArray, classToAppend) {
	for (var i = 0; i < selectors.length; i++) {
		storeInArray = selectors[i];
		storeInArray.classList.add(classToAppend + "-" + counter);
		counter++;
	}
	counter = 1; // set back to one so the next function call starts from 1
}

iterateAndAppendClass(print_ref_modals, modal_list, "modal_count");
iterateAndAppendClass(print_ref_boxes, print_ref_list, "print_ref_count");

function eventAppender(counter) {
	var p_ref = document.querySelector(".print_ref_count-" + counter);
	// Only append the event listener if the element exists:
	if (typeof(p_ref) != 'undefined' && p_ref != null) {
		var modal = document.querySelector(".modal_count-" + counter);
		p_ref.addEventListener("click", function(event) {
			event.preventDefault();
			modal.style.display = "flex";
		});
	}
}

// Dynamically append event listeners
for (var m = 0; m < print_ref_modals.length; m++) {
	global_count++;
	eventAppender(global_count);
}
