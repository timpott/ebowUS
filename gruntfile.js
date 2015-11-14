module.exports = function(grunt) {
	
	grunt.initConfig({
	pkg: grunt.file.readJSON('package.json'),
		sass: {                             
			dist: {                         
				options: {                       
					style: 'compact'
      			},
	  				files: {                         
		  				'wp-content/themes/ebowus/css/main.css' : 'wp-content/themes/ebowus/css/sass/main.scss'      
      				}
    		}
  		},
  		watch: {
	  		css: {
		  		files: '**/*.scss',
		  		tasks: ['sass']
	  		}
  		}
	});

grunt.loadNpmTasks('grunt-contrib-sass');
grunt.loadNpmTasks('grunt-contrib-watch');

grunt.registerTask('default', ['sass']);
grunt.registerTask('default', ['watch']);

}