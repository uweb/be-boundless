module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    notify: {
      watch: {
        options: {
          title: 'Dun\' Grunted',
          message: 'All is good'
        }
      }
    },
    less: {
        production: {
          options: {
            cleancss: true
      },
      // files: {
      //  'style.css': 'less/index.less'
      // }
    },
    development: {
      files: {
        'passion/css/tiles.dev.css': 'passion/less/tiles.less'
      }
    }
    },
    watch: {
      config : {
        files : ['gruntfile.js'],
        options : {
          reload: true
        }
      },
      css: {
        files: ['passion/less/*.less'],
        tasks: ['css']
      }
    }
  });

  grunt.loadNpmTasks('grunt-notify');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');


  grunt.registerTask('default', ['notify', 'less']);
  grunt.registerTask( 'css', ['less', 'notify'] );

};
