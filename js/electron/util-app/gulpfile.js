'use strict';

/**
 * [BUILD TOOLS - MINIMALISTIC SASS COMPILER]
 *
 * Configured by Attila Bakos
 */

// Load user/developer configuration file:
const userConfig = require( './userConfig' );
// Gulp notifier environment variable:
process.env.DISABLE_NOTIFIER = userConfig.gulpPopUps();

// Gulp plugins
const gulp = require( 'gulp' );
const concat = require( 'gulp-concat' );
const sourcemaps = require( 'gulp-sourcemaps' );
const sass = require( 'gulp-sass' );
const notify = require( 'gulp-notify' );
const autoprefixer = require( 'gulp-autoprefixer' );
const sassLint = require( 'gulp-sass-lint' );

// Node packages
const del = require( 'del' );

/**
 * Compile and compress SCSS files into CSS,
 * prefix the code when needed,
 * and attach sourcemap
 */
gulp.task(
	'styles', () => {
		return gulp.src([ userConfig.devSassFiles() ])
		.pipe( sourcemaps.init() )
		.pipe(
			sass( { outputStyle: 'compressed' } )
				.on( 'error', sass.logError )
		)
		.pipe(
			autoprefixer({
				grid: true,
				cascade: false
			})
		)
		.pipe( sourcemaps.write( '/' ) )
		.pipe( gulp.dest( userConfig.buildCssFolder() ) ) // Place the processed stylesheet in here
		.pipe(
			notify({
				"title": " styles ",
				"message": "Compile, compress, prefix, attach sourcemaps.\nTask complete!",
				"onLast": true,
				"sound": userConfig.gulpSoundSwitch()
			})
		)
	}
);

/**
 * Lint SASS for development
 */
gulp.task(
	'sasslint', () => {
		return gulp.src([ userConfig.devSassFiles() ])
		.pipe(
			sassLint({
				options: {
					"formatter": userConfig.sassLintDisplay(),
					"cache-config": true
				},
				configFile: userConfig.sassLintConfig()
			})
		)
		.pipe( sassLint.format() )
		.pipe(
			notify({
				"title": " sasslint ",
				"message": "Sass lint task complete!",
				"onLast": true,
				"sound": userConfig.gulpSoundSwitch(),
			})
		)
	}
);

/**
 * Clean the 'build' directory
 */
gulp.task(
	'clean', (done) => {
		return del([ 'build/*' ]);
		done();
	}
);

/**
 * Default task with sourcemaps
 */
gulp.task(
	'default',
	gulp.series(
		gulp.parallel( 'clean' ),
		gulp.parallel( 'styles' ),

		function watcher(done) {
			gulp.watch([ 'src/dev/scss/**/*.s+(a|c)ss' ], gulp.parallel( 'styles', 'sasslint' ) );
			done();
		}
	)
);
