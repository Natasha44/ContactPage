/**File Name: Gruntfile.js
	Author Name: Natasha Whitehead
	Website Name: Natasha Whitehead's Portfolio Website
	File Discription: This is the JavaScript of the file which allows the slider to work.*/

/*global module */
module.exports = function( grunt ) {
  
  'use strict';

  grunt.initConfig({

    uglify: {
      options: {
        mangle: {
          except: ['Swipe']
        }
      },
      dist: {
        files: {
          'build/swipe.min.js': 'swipe.js'
        }
      }
    }

  });

  // build
  grunt.loadNpmTasks('grunt-contrib');
  grunt.registerTask('build', 'uglify');
  grunt.registerTask('default', 'build');

};