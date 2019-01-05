// This file is required by the index.html file and will
// be executed in the renderer process for that window.
// All of the Node.js APIs are available in this process.

console.log("Log message from renderer")

const {ipcRenderer} = require('electron')

// send message to main process on channel 1
ipcRenderer.send('channel1', 'hello from the renderer process')

// listen for the response from main
ipcRenderer.on('channel1', (e, args) => {
	console.log(args)
})

ipcRenderer.on('private', (e, args) => {
	console.log(args)
})
