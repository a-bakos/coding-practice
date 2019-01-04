// Modules to control application life and create native browser window
const { app, BrowserWindow, session, dialog, globalShortcut } = require('electron')

require("electron-reload")(__dirname)

const windowStateKeeper = require("electron-window-state")

console.log( 'main js executing' );

// Keep a global reference of the window object, if you don't, the window will
// be closed automatically when the JavaScript object is garbage collected.
let mainWindow

function showDialog() {

	// dialog.showOpenDialog({
	// 	defaultPath: 'C:/',
	// 	buttonLabel: 'Select this item',
	// 	properties: [
	// 		'openFile',
	// 		'multiSelections',
	// 		'createDirectory'
	// 	]
	// }, (openPath) => {
	// 	console.log(openPath)
	// })

	// Save dialog
	// dialog.showSaveDialog({
	// 	defaultPath: '/'
	// }, (filename) => {
	// 	console.log(filename)
	// })

	let buttons = ['Yes', 'No', 'Maybe']

	dialog.showMessageBox({
		buttons: buttons,
		title: 'Electron message',
		detail: 'Detailed message'
	}, (buttonIndex) => {
		console.log(buttonIndex)
	})
}

function createWindow () {

	let winState = windowStateKeeper({
		defaultWidth: 1200,
		defaultHeight: 600
	})

	// Create the browser window.
	mainWindow = new BrowserWindow({
		width: winState.width,
		height: winState.height,
		backgroundColor: '#eee',
		x: winState.x,
		y: winState.y,
		minWidth: 400,
		minHeight: 400,
	})

	globalShortcut.register('g', () => {
		console.log('user pressed g')
	})

	//setTimeout(showDialog, 1000)

	winState.manage(mainWindow)

	// and load the index.html of the app.
	mainWindow.loadFile('index.html')

	console.log(mainWindow.id);

	let mainSession = mainWindow.webContents.session

	console.log(mainSession);

	// Open the DevTools.
	mainWindow.webContents.openDevTools()

	// Emitted when the window is closed.
	mainWindow.on('closed', function () {
		// Dereference the window object, usually you would store windows
		// in an array if your app supports multi windows, this is the time
		// when you should delete the corresponding element.
		mainWindow = null
	})
}

// This method will be called when Electron has finished
// initialization and is ready to create browser windows.
// Some APIs can only be used after this event occurs.
app.on('ready', createWindow)

// Quit when all windows are closed.
app.on('window-all-closed', function () {
	// On macOS it is common for applications and their menu bar
	// to stay active until the user quits explicitly with Cmd + Q
	if (process.platform !== 'darwin') {
		app.quit()
	}
})

app.on('activate', function () {
	// On macOS it's common to re-create a window in the app when the
	// dock icon is clicked and there are no other windows open.
	if (mainWindow === null) {
		createWindow()
	}
})

// In this file you can include the rest of your app's specific main process
// code. You can also put them in separate files and require them here.
