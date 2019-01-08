// This file is required by the index.html file and will
// be executed in the renderer process for that window.
// All of the Node.js APIs are available in this process.

const {app} = require('electron').remote

document.getElementById('app-control--exit').addEventListener('click', () => {
	app.quit()
})

function inFocusSound(sound) {
	const soundToggle = document.getElementById( 'sound-toggle--' + sound )
	const soundPath = new Audio(__dirname + '/sounds/infocus-' + sound + '.ogg')

	soundToggle.addEventListener('click', () => {
		if ( soundToggle.parentElement.classList.contains( 'sound-selector__sound--active' ) ) {
			soundToggle.parentElement.classList.remove( 'sound-selector__sound--active' )
			soundPath.pause()
		} else {
			soundToggle.parentElement.classList.add( 'sound-selector__sound--active' )
			soundPath.play();
		}
	})
}

inFocusSound('cafe')
inFocusSound('garden')
inFocusSound('night')
inFocusSound('fire')
inFocusSound('city')
inFocusSound('snow')
inFocusSound('water')
inFocusSound('dawn')
inFocusSound('pond')
inFocusSound('wind')
