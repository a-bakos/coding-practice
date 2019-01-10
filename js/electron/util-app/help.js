const {app} = require('electron').remote

document.getElementById('app-control--exit').addEventListener('click', () => {
	app.quit()
})
