module.exports = [
	{
		label: 'App menu label',
		submenu: [
			{
				label: 'Submenu label',
				click: () => { console.log('Hello from menu item') },
				accelerator: 'Shift+Alt+G'
			}
		]
	},
	{
		label: 'App menu label 2',
		submenu: [
			{
				label: 'Toggle dev tools',
				role: 'toggledevtools'
			},
			{
				label: 'Submenu label 2',
			},
		]
	},
	{
		label: 'Roles',
		submenu: [
			{role: 'undo'},
			{role: 'redo'},
			{role: 'copy'},
			{role: 'paste'}
		]
	}
]
