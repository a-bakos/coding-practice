// Modules to control application life and create native browser window
const { app, BrowserWindow, session, dialog, globalShortcut, Menu, MenuItem, Tray, ipcMain } = require('electron')

require("electron-reload")(__dirname)

const windowStateKeeper = require("electron-window-state")

console.log( 'main js executing' );

// Keep a global reference of the window object, if you don't, the window will
// be closed automatically when the JavaScript object is garbage collected.
let mainWindow,
	tray


ipcMain.on('channel1', (e, args) => {
	console.log(args)
	e.sender.send('channel1', 'message received on main process')
})

ipcMain.on('channel-object', (e, args) => {
	console.log(args.name + " is learning " + args.learning)
})

function createTray() {
	tray = new Tray('taryicon.png')
	tray.setToolTip('This is the tray icon')

	const trayMenu = new Menu.buildFromTemplate( require('./trayMenu.js') )

	tray.setContextMenu(trayMenu)

	tray.on('click', () => {
		mainWindow.isVisible() ? mainWindow.hide() : mainWindow.show()
	})
}

// Create App Menu
let mainMenu = Menu.buildFromTemplate( require('./mainMenu.js') )
let contextMenu = Menu.buildFromTemplate( require('./contextMenu.js') )

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
		globalShortcut.unregister('g')
		console.log('g has been unregistered')
	})

	//setTimeout(showDialog, 1000)

	mainWindow.webContents.on('did-finish-load', () => {
		mainWindow.webContents.send('private', 'Message sent from main process to main window')
	})

	winState.manage(mainWindow)

	// and load the index.html of the app.
	mainWindow.loadFile('index.html')

	console.log(mainWindow.id);

	let mainSession = mainWindow.webContents.session

	console.log(mainSession);

	// Open the DevTools.
	mainWindow.webContents.openDevTools()

	// Context menu
	mainWindow.webContents.on('context-menu', (e) => {
		e.preventDefault()
		contextMenu.popup({})
	})

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
app.on('ready', () => {
	createWindow()
	Menu.setApplicationMenu(mainMenu)
	createTray()
})

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
