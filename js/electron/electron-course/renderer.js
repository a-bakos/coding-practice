// This file is required by the index.html file and will
// be executed in the renderer process for that window.
// All of the Node.js APIs are available in this process.

console.log("Log message from renderer")

const {ipcRenderer} = require('electron')
const {dialog, app} = require('electron').remote

// send message to main process on channel 1
ipcRenderer.send('channel1', 'hello from the renderer process')

ipcRenderer.send('channel-object', {
	name: 'attila',
	age: 29,
	learning: 'electron'
})

// listen for the response from main
ipcRenderer.on('channel1', (e, args) => {
	console.log(args)
})

ipcRenderer.on('private', (e, args) => {
	console.log(args)
})

dialog.showMessageBox({
	message: 'Are you sure you want to quit?',
	buttons: ['Yes', 'No']
}, (buttonIndex) => {
	if ( buttonIndex == 0 ) app.quit()
})
