module.exports=function(grunt) {
	//configure tasks
	grunt.initConfig({
		pkg:grunt.file.readJSON('package.json'),
		concat: {
			build: {
				src: [
					'src/js/vendor/modernizr.js',
					'src/js/vendor/jquery.validate.min.js',
					// 'src/js/vendor/bootstrap/jquery.js',
			        'src/js/vendor/bootstrap/affix.js',
			        'src/js/vendor/bootstrap/transistion.js',
			        // 'src/js/vendor/bootstrap/tooltip.js',
			        // 'src/js/vendor/bootstrap/alert.js',
			        'src/js/vendor/bootstrap/button.js',
			        'src/js/vendor/bootstrap/carousel.js',
			        'src/js/vendor/bootstrap/collapse.js',
			        'src/js/vendor/bootstrap/dropdown.js',
			        'src/js/vendor/bootstrap/modal.js',
			        // 'src/js/vendor/bootstrap/popover.js',
			        // 'src/js/vendor/bootstrap/scrollspy.js',
         		 	'src/js/vendor/bootstrap/tab.js',
					'src/js/vendor/slick.min.js',
					'src/js/vendor/aos.js',
					'src/js/vendor/jquery.magnific-popup.min.js',
					'src/js/vendor/jquery.matchHeight-min.js',
					'src/js/vendor/parallax.min.js',
					'src/js/vendor/nav.js',
					'src/js/main.js',
				],
				dest: 'src/js/script.js',
			},
		},
		uglify: {
			options: {
				banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
			},
			build: {
				files: {
					'js/script.min.js' : ['src/js/script.js'],
				},
			},
		},
		watch: {
			scripts: {
				files: ['src/**/*.js'],
				tasks: ['default']
			}
		},
	});

	//load plugins
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	// grunt.loadNpmTasks('grunt-contrib-imagemin');

	//register tasks
	grunt.registerTask('default', ['concat:build', 'uglify:build']);
};