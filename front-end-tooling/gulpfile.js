"use strict";

var gulp = require('gulp');
var concat = require('gulp-concat');

gulp.task('test', function testInternal() {
	console.log('Hello gulp');
});

gulp.task('scripts', function scriptsInternal() {
	return gulp.src('scripts/**/*.js')
		.pipe(concat('bundle.js'))
		.pipe(gulp.dest('dist'));
});