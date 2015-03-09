module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    concat: {
      options: {
        separator: ';',
        sourceMap: true
      },
      dist: {
        libraries: [
          // 'js/libraries/jquery.transit.min.js',
          'js/libraries/jquery.inview.js',
          'js/libraries/imagesloaded.js',
          'js/libraries/masonry.pkgd.js',
        ],
        theme : [
          'js/core.js',
          'js/init.js',
          'js/beginning.js',
          'js/interaction.js',
          'js/search.js',
          'js/uwtiles.js',
          'js/video.js',
          'js/map.js',
          'js/gallery.js',
          'js/infowindow.js',
          'js/utilities.js',
          'js/router.js',
        ],
        src: [ 'js/intro.js', '<%= concat.dist.libraries %>', '<%= concat.dist.theme %>', 'js/outro.js' ],
        dest: 'js/.tmp.boundless.js'
      }
    },
    uglify: {
      options: {
        sourceMap: true,
        sourceMapIncludeSources: true,
        sourceMapIn: 'js/.tmp.boundless.js.map'
        // banner: '/*! <%= pkg.name %> <%= grunt.template.today() %> */\n'
      },
      dist: {
        files: {
          'js/boundless.js': ['<%= concat.dist.dest %>'],
        }
      }
    },
    jshint: {
      files: [ 'gruntfile.js', '<%= concat.dist.theme %>' ],
      options: {
        asi: true,
        smarttabs: true,
        laxcomma: true,
        lastsemic: true,
        // options here to override JSHint defaults
        globals: {
          jQuery: true,
          console: true,
          module: true,
          document: true
        }
      }
    },
    notify: {
      watch: {
        options: {
          title: 'Done',
          message: 'All is good'
        }
      }
    },
    less: {
        app: {
	        options: {
		        compress: true,
            sourceMap: true,
            sourceMapFilename: 'boundless.css.map',
            sourceMapURL: 'boundless.css.map'
			    },
			    files: {
				    'boundless.css': 'less/style.less'
			    }
		    },
        pages : {
	        options: {
		        compress: true
          },
          files: {
            'style.css': 'pages_less/style.less'
          }
        },
        pages_dev: {
          files: {
          'style.dev.css': 'pages_less/style.less'
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
      js: {
        files: ['<%= concat.dist.src %>'],
        tasks: ['js']
      },
      app_css: {
        files: ['less/*.less'],
        tasks: ['app_css']
      },
      page_css: {
        files: ['pages_less/*.less'],
        tasks: ['page_css']
      }
    }
  });

  grunt.loadNpmTasks('grunt-notify');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');


  grunt.registerTask( 'default', ['jshint', 'concat', 'uglify', 'notify', 'less']);
  grunt.registerTask( 'js', ['jshint', 'concat', 'uglify', 'notify' ]);
  grunt.registerTask( 'css', ['less', 'notify'] );
  grunt.registerTask( 'app_css', ['less:app', 'notify'] );
  grunt.registerTask( 'page_css', ['less:pages', 'less:pages_dev', 'notify'] );
  grunt.registerTask( 'app', ['less:app', 'js'] );

};
