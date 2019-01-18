/**
 * --------------------------
 *
 * Minimalistic Sass Compiler
 *
 * --------------------------
 */

// Sass + CSS folder structure
const sassFiles     = 'src/dev/scss/**/*.s+(a|c)ss'; // Sass src files
const cssFolder     = 'src/build/css'; // CSS destination
const sassLintRules = '.sass-lint.yml'; // Sass lint config file

const sassLintFormat = 'stylish';
let gulpNotifications = true; // 'true' or 'false'
const gulpSounds = true; // 'true' or 'false'

// Do not edit below this line.

if (gulpNotifications === true) {
	gulpNotifications = '';
} else if (gulpNotifications === false) {
	gulpNotifications = true;
}

module.exports = {
	sassLintDisplay: () => { return sassLintFormat; },
	gulpSoundSwitch: () => { return gulpSounds; },
	gulpPopUps:      () => { return gulpNotifications; },
	devSassFiles:    () => { return sassFiles; },
	buildCssFolder:  () => { return cssFolder; },
	sassLintConfig:  () => { return sassLintRules },
}
