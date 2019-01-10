const {app, BrowserWindow} = require('electron').remote

document.getElementById('app-control--exit').addEventListener('click', () => {
	// Change this to close only the child window instance
	app.quit()
})
