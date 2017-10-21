"use strict";

var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var jshint = require('gulp-jshint');
var del = require('del');

gulp.task('hello', function helloInternal() {
	console.log('Hello gulp');
});

gulp.task('scripts', function scriptsInternal() {
	return gulp.src('scripts/**/*.js')
		.pipe(concat('bundle.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest('dist'));
});

gulp.task('test', function testInternal() {
	return gulp.src('scripts/**/.js')
		.pipe(jshint())
		.pipe(jshint.reporter('default'))
		.pipe(jshint.reporter('fail'));
});

gulp.task('clean', function cleanInternal() {
	return del(['dist']);
});

gulp.task('default',
    gulp.series('clean',
        gulp.parallel(
        	'hello',
			'scripts',
			'test'
		)
	)
);