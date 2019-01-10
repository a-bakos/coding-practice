// Modules to control application life and create native browser window
const electron = require('electron')

const {
	app,
	BrowserWindow,
	session,
	dialog,
	globalShortcut,
	Menu,
	MenuItem,
	Tray,
	ipcMain } = electron

// Electron Reload package -- remove this for the production app
require('electron-reload')(__dirname)

const windowStateKeeper = require('electron-window-state')

// Keep a global reference of the window object, if you don't, the window will
// be closed automatically when the JavaScript object is garbage collected.
let mainWindow

function createWindow () {
	// Get display dimensions
	const { width, height } = electron.screen.getPrimaryDisplay().workAreaSize
	console.log(width, height)

	const appWidth = 100

	let winState = windowStateKeeper({
		defaultWidth: appWidth,
		defaultHeight: height
	})

	// Create the browser window.
	mainWindow = new BrowserWindow({
		width: winState.width,
		height: height,
		backgroundColor: '#000',
		x: width - appWidth,
		y: 0,
		movable: false,
		resizable: false,
		minimizable: true,
		fullscreenable: false,
		frame: false
	})

	// and load the index.html of the app.
	mainWindow.loadFile(`${__dirname}/app.html`)
	// Open the DevTools.
	mainWindow.webContents.openDevTools()

	// Emitted when the window is closed.
	mainWindow.on('closed', () => {
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
})

// Quit when all windows are closed.
app.on('window-all-closed', () => {
	// On macOS it is common for applications and their menu bar
	// to stay active until the user quits explicitly with Cmd + Q
	if (process.platform !== 'darwin') {
		app.quit()
	}
})

app.on('activate', () => {
	// On macOS it's common to re-create a window in the app when the
	// dock icon is clicked and there are no other windows open.
	if (mainWindow === null) {
		createWindow()
	}
})

// In this file you can include the rest of your app's specific main process
// code. You can also put them in separate files and require them here.
