module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    concat: {
      options: {
        separator: ';',
        sourceMap: false
      },
      dist: {
        libraries: [
          // 'js/libraries/jquery.transit.min.js',
          // 'js/libraries/jquery.inview.js',
          // 'js/libraries/imagesloaded.js',
          // 'js/libraries/masonry.pkgd.js',
          'js/libraries/curtain.js',
        ],
        theme : [
          'js/core.js',
          'js/init.js',
          'js/beginning.js',
          'js/navigation.js',
          'js/search.js',
          'js/mobile.js',
          'js/uwtiles.js',
          'js/video.js',
          'js/page.js',
          'js/map.js',
          'js/gallery.js',
          'js/infowindow.js',
          'js/utilities.js',
          // 'js/router.js',
          'js/analytics.js',
          'js/scroll.js',
        ],
        campaign : [
          'campaign/js/header.js',
          'immersive-stories/js/common.js',
          'immersive-stories/js/education.js',
          'immersive-stories/js/farmer-brown.js',
          'campaign/js/main.js',
          'immersive-stories/js/education-map.js',
          'https://unpkg.com/leaflet@1.0.0-rc.2/dist/leaflet.js',
          'https://cdnjs.cloudflare.com/ajax/libs/chroma-js/1.2.1/chroma.min.js',
        ],
        animationLibraries : [  
         'campaign/ScrollMagic-master/js/lib/highlight.pack.js', 
         'campaign/scroll-converter/scroll-converter.min.js', 
         'campaign/ScrollMagic-master/js/lib/greensock/TweenMax.min.js', 
         'campaign/ScrollMagic-master/scrollmagic/uncompressed/ScrollMagic.js', 
         'campaign/ScrollMagic-master/scrollmagic/uncompressed/plugins/animation.gsap.js',
         'campaign/ScrollMagic-master/scrollmagic/uncompressed/plugins/debug.addIndicators.js' 
        ],
        src: [ 'js/intro.js', '<%= concat.dist.libraries %>', '<%= concat.dist.theme %>', 'js/outro.js' ],
        dest: 'js/boundless.js'
      }
    },
    uglify: {
      options: {
        sourceMap: false,
        // sourceMapIncludeSources: true,
        // sourceMapIn: 'js/.tmp.boundless.js.map'
        banner: '/*! <%= pkg.name %> <%= grunt.template.today() %> */\n'
      },
      dist: {
        files: {
          'js/boundless.min.js': ['<%= concat.dist.dest %>'],
          'immersive-stories/js/common.min.js': ['immersive-stories/js/common.js'],
          'immersive-stories/js/farmer-brown.min.js': ['immersive-stories/js/farmer-brown.js'],
          'immersive-stories/js/education.min.js': [
              'immersive-stories/js/leaflet.js',
              'immersive-stories/js/chroma.min.js',
              'immersive-stories/js/education-map.js',
              'immersive-stories/js/education.js', 
              'immersive-stories/js/common.js',
              'immersive-stories/js/medium-lightbox.js',
          ],
          'campaign/js/main.min.js': [
              'campaign/js/main.js',
          ],
          // Commented out to speed up Grunt / Add back in to remove files from library
          'campaign/js/animationLibraries.min.js': ['<%= concat.dist.animationLibraries %>'],
        }
      }
    },
    jshint: {
      files: [ 'gruntfile.js', '<%= concat.dist.theme %>', '<%= concat.dist.campaign %>'],
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
          title: 'Grunt accomplished',
          message: 'Thumbs up'
        }
      }
    },
    less: {
        app: {
	        options: {
	         compress: true,
                sourceMap: false,
                sourceMapFilename: 'style.css.map',
                sourceMapURL: 'style.css.map'
        	    },
        	    files: {
                'style.css': 'less/style.less',
                'immersive-stories/css/common.css': 'immersive-stories/less/common.less',
                'immersive-stories/css/farmer-brown.css': 'immersive-stories/less/farmer-brown.less',
                'immersive-stories/css/education.css': 'immersive-stories/less/education.less',
                'immersive-stories/css/education-map.css': 'immersive-stories/less/education-map.less',
                'immersive-stories/css/leadership.css': 'immersive-stories/less/leadership.less',
                'campaign/css/campaign-style.css': 'campaign/**/*.less',
                'campaign/css/header.css': 'campaign/less/header.less',
                'passion/css/tiles.css': 'passion/less/tiles.less'
        	    }
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
      js: {
        files: [
          '<%= concat.dist.src %>', 
          '<%= concat.dist.campaign %>', 
          // Commented out to speed up Grunt / Add back in to remove files from library
          '<%= concat.dist.animationLibraries %>'
        ],
        tasks: ['js']
      },
      css : {
        files: ['less/*.less', 'immersive-stories/less/*.less', 'campaign/less/*.less', 'passion/less/*.less'],
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
