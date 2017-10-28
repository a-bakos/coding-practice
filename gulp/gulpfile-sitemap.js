/**
 * Sitemap generation
 */
gulp.task('sitemap', () => {
	const sitemap = require('gulp-sitemap');
	return gulp.src(['*.html', '*.php'], {
		read: false
		})
		.pipe(sitemap({
			siteUrl: site_url,
			//changefreq: 'yearly'
			//['always', 'hourly', 'daily', 'weekly', 'monthly', 'yearly', 'never']
			lastmod: Date.now()
		}))
		.pipe(gulp.dest('./'));
});

/**
 * XML validation
 */

gulp.task('xml', function () {
	const xmlValidator = require('gulp-xml-validator');
	return gulp.src('build/sitemap.xml')
		.pipe(xmlValidator())
});
