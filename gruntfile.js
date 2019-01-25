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
          'immersive-stories/js/scholarship.js',
          'immersive-stories/js/tacoma.js',
          'immersive-stories/js/dentistry.js',
          'immersive-stories/js/public-health.js',
          'immersive-stories/js/evans-school.js',
          'immersive-stories/js/nursing.js',
          'immersive-stories/js/built-env.js',
          'immersive-stories/js/foster-school.js',
          'immersive-stories/js/ischool.js',
          'immersive-stories/js/ica.js',
          'immersive-stories/js/engineering.js',
          'immersive-stories/js/medicine.js',
          'immersive-stories/js/arts.js',
          'immersive-stories/js/bothell.js',
          'immersive-stories/js/farmer-brown.js',
          //'immersive-stories/js/environment.js',
          'immersive-stories/js/socialwork.js',
          'immersive-stories/js/pharmacy.js',
          'immersive-stories/js/lovejoy.js',
          'immersive-stories/js/law.js',
          'immersive-stories/js/libraries.js',
          'immersive-stories/js/homepage-plus.js',
          'immersive-stories/js/comotion.js',
          'immersive-stories/js/puerto-rico.js',
          'immersive-stories/js/stars.js',
          'immersive-stories/js/oceanography-research.js',
          'campaign/js/main.js',
          'immersive-stories/js/education-map.js',
          'https://npmcdn.com/leaflet@1.0.0-rc.2/dist/leaflet.js',
          'https://cdnjs.cloudflare.com/ajax/libs/chroma-js/1.2.1/chroma.min.js',
        ],
        animationLibraries : [
         'campaign/ScrollMagic-master/js/lib/highlight.pack.js',
         'campaign/scroll-converter/scroll-converter.min.js',
         'campaign/ScrollMagic-master/js/lib/greensock/TweenMax.min.js',
         'campaign/ScrollMagic-master/scrollmagic/uncompressed/ScrollMagic.js',
         'campaign/ScrollMagic-master/scrollmagic/uncompressed/plugins/animation.gsap.js',
         'campaign/ScrollMagic-master/scrollmagic/uncompressed/plugins/debug.addIndicators.js',
         'campaign/ScrollMagic-master/js/lib/greensock/plugins/CSSPlugin.min.js',
         'campaign/ScrollMagic-master/js/lib/greensock/plugins/CSSRulePlugin.min.js'
        ],
        environmentLibraries : [
          'immersive-stories/js/libraries/jquery.easings.min.js',
          'immersive-stories/js/libraries/scrolloverflow.min.js',
          'immersive-stories/js/libraries/fullpage.fadingEffect.min.js',
          'immersive-stories/js/libraries/jquery.fullpage.extensions.min.js'
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
        // banner: '/*! <%= pkg.name %> <%= grunt.template.today() %> */\n'
      },
      dist: {
        files: {
          'js/boundless.min.js': ['<%= concat.dist.dest %>'],
          'immersive-stories/js/common.min.js': ['immersive-stories/js/common.js'],
          'immersive-stories/js/farmer-brown.min.js': [
            'immersive-stories/js/farmer-brown.js',
            'immersive-stories/js/slick.js',
            'immersive-stories/js/common.js'
          ],
          'immersive-stories/js/education.min.js': [
              'immersive-stories/js/common.js',
              'immersive-stories/js/leaflet.js',
              'immersive-stories/js/chroma.min.js',
              'immersive-stories/js/education-map.js',
              'immersive-stories/js/education.js',
              'immersive-stories/js/medium-lightbox.js',
          ],
          'immersive-stories/js/scholarship.min.js': [
              'immersive-stories/js/common.js',
              'immersive-stories/js/scholarship.js',
          ],
          'immersive-stories/js/tacoma.min.js': [
              'immersive-stories/js/common.js',
              'immersive-stories/js/tacoma.js',
          ],
          'immersive-stories/js/dentistry.min.js': [
              'immersive-stories/js/common.js',
              'immersive-stories/js/dentistry.js',
          ],
          'immersive-stories/js/public-health.min.js': [
              'immersive-stories/js/common.js',
              'immersive-stories/js/public-health.js',
              'immersive-stories/js/lity.js',
              'immersive-stories/js/objectFitPolyfill.basic.js',
          ],
          'immersive-stories/js/evans-school.min.js': [
              'immersive-stories/js/common.js',
              'immersive-stories/js/evans-school.js',
              'immersive-stories/js/objectFitPolyfill.basic.js',
          ],
          'immersive-stories/js/nursing.min.js': [
              'immersive-stories/js/common.js',
              'immersive-stories/js/nursing.js',
              'immersive-stories/js/lity.js',
              'immersive-stories/js/slick.js',
              'immersive-stories/js/objectFitPolyfill.basic.js',
          ],
          'immersive-stories/js/built-env.min.js': [
              'immersive-stories/js/common.js',
              'immersive-stories/js/lity.js',
              'immersive-stories/js/built-env.js',
              'immersive-stories/js/objectFitPolyfill.basic.js',
          ],
          'immersive-stories/js/environment.min.js': [
              'immersive-stories/js/common.js',
              'immersive-stories/js/lity.js',
              //'immersive-stories/js/environment.js',
              'immersive-stories/js/slick.js',
              'immersive-stories/js/objectFitPolyfill.basic.js',
          ],
          'immersive-stories/js/foster-school.min.js': [
              'immersive-stories/js/common.js',
              // Popup video
              'immersive-stories/js/lity.js',
              // Leaflet
              //'immersive-stories/js/libraries/heatmap.min.js',
              //'immersive-stories/js/libraries/leaflet-heatmap.js',
              'immersive-stories/js/foster-school.js',
              // Slideshow
              'immersive-stories/js/slick.js',
              'immersive-stories/js/objectFitPolyfill.basic.js',
          ],
          'immersive-stories/js/ischool.min.js': [
              'immersive-stories/js/common.js',
              // Popup video
              'immersive-stories/js/lity.js',
              // Leaflet
              'immersive-stories/js/ischool.js',
              // Slideshow
              'immersive-stories/js/slick.js',
              'immersive-stories/js/objectFitPolyfill.basic.js',
          ],
          'immersive-stories/js/ica.min.js': [
              'immersive-stories/js/common.js',
              // Popup video
              'immersive-stories/js/lity.js',
              // Leaflet
              'immersive-stories/js/ica.js',
              // Slideshow
              'immersive-stories/js/slick.js',
              'immersive-stories/js/objectFitPolyfill.basic.js',
          ],
          'immersive-stories/js/engineering.min.js': [
              'immersive-stories/js/common.js',
              // Slideshow
              'immersive-stories/js/slick.js',
              'immersive-stories/js/engineering.js',
          ],
          'immersive-stories/js/arts.min.js': [
              'immersive-stories/js/common.js',
              'immersive-stories/js/arts.js',
              'immersive-stories/js/arts/ofi.browser.js'
          ],
          'immersive-stories/js/bothell.min.js': [
              'immersive-stories/js/common.js',
              'immersive-stories/js/bothell.js',
              'immersive-stories/js/medium-lightbox.js',
              'immersive-stories/js/lity.js',
          ],
          'immersive-stories/js/medicine.min.js': [
              'immersive-stories/js/common.js',
              'immersive-stories/js/medicine.js',
          ],
          'immersive-stories/js/socialwork.min.js': [
              'immersive-stories/js/common.js',
              // 'immersive-stories/js/lazyload.js',
              'immersive-stories/js/lity.js',
              'immersive-stories/js/socialwork.js',
          ],
          'immersive-stories/js/pharmacy.min.js': [
              'immersive-stories/js/common.js',
              'immersive-stories/js/lity.js',
              'immersive-stories/js/slick.js',
              'immersive-stories/js/pharmacy.js',
          ],
          'immersive-stories/js/lovejoy.min.js': [
            'immersive-stories/js/common.js',
            'immersive-stories/js/lity.js',
            'immersive-stories/js/lovejoy.js',
          ],
          'immersive-stories/js/law.min.js': [
            'immersive-stories/js/common.js',
            'immersive-stories/js/lity.js',
            'immersive-stories/js/slick.js',
            'immersive-stories/js/law.js',
          ],
          'immersive-stories/js/libraries.min.js': [
              'immersive-stories/js/common.js',
              'immersive-stories/js/lity.js',
              'immersive-stories/js/slick.js',
              'immersive-stories/js/libraries.js',
              'immersive-stories/js/libraries/animsition.min.js',
          ],
          'immersive-stories/js/homepage-plus.min.js': [
              'immersive-stories/js/common.js',
              'immersive-stories/js/lity.js',
              'immersive-stories/js/slick.js',
              'immersive-stories/js/homepage-plus.js',
          ],
          'immersive-stories/js/comotion.min.js': [
            'immersive-stories/js/common.js',
            'immersive-stories/js/lity.js',
            'immersive-stories/js/comotion.js',
          ],
          'immersive-stories/js/puerto-rico.min.js': [
            'immersive-stories/js/common.js',
            'immersive-stories/js/lity.js',
            'immersive-stories/js/slick.js',
            'immersive-stories/js/puerto-rico.js',
            'immersive-stories/js/libraries/animsition.min.js',
          ],
          'immersive-stories/js/stars.min.js': [
            'immersive-stories/js/common.js',
            'immersive-stories/js/lity.js',
            'immersive-stories/js/slick.js',
            'js/libraries/prognroll.js',
            'immersive-stories/js/stars.js',
          ],
          'immersive-stories/js/oceanography-research.min.js': [
              'immersive-stories/js/common.js',
              'js/libraries/prognroll.js',
              'immersive-stories/js/lity.js',
              'immersive-stories/js/slick.js',
              'immersive-stories/js/oceanography-research.js',
          ],
          'campaign/js/main.min.js': [
            'campaign/js/main.js',
          ],
          // Commented out to speed up Grunt / Add back in to remove files from library
          'campaign/js/animationLibraries.min.js': ['<%= concat.dist.animationLibraries %>'],
          'passion/js/tiles.js':['passion/js/tiles.dev.js'],
          'immersive-stories/js/environmentLibraries.min.js': ['<%= concat.dist.environmentLibraries %>']
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
        },
        ignores: [
          'js/core.js'
        ]
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
                'immersive-stories/css/scholarship.css': 'immersive-stories/less/scholarship.less',
                'immersive-stories/css/tacoma.css': 'immersive-stories/less/tacoma.less',
                'immersive-stories/css/dentistry.css': 'immersive-stories/less/dentistry.less',
                'immersive-stories/css/public-health.css': 'immersive-stories/less/public-health.less',
                'immersive-stories/css/evans-school.css': 'immersive-stories/less/evans-school.less',
                'immersive-stories/css/nursing.css': 'immersive-stories/less/nursing.less',
                'immersive-stories/css/built-env.css': 'immersive-stories/less/built-env.less',
                'immersive-stories/css/foster-school.css': 'immersive-stories/less/foster-school.less',
                'immersive-stories/css/ischool.css': 'immersive-stories/less/ischool.less',
                'immersive-stories/css/ica.css': 'immersive-stories/less/ica.less',
                'immersive-stories/css/medicine.css': 'immersive-stories/less/medicine.less',
                'immersive-stories/css/arts.css': 'immersive-stories/less/arts.less',
                'immersive-stories/css/bothell.css': 'immersive-stories/less/bothell.less',
                'immersive-stories/css/engineering.css': 'immersive-stories/less/engineering.less',
                'immersive-stories/css/education-map.css': 'immersive-stories/less/education-map.less',
                'immersive-stories/css/leadership.css': 'immersive-stories/less/leadership.less',
                'immersive-stories/css/environment.css': 'immersive-stories/less/environment.less',
                'immersive-stories/css/environment-old.css': 'immersive-stories/less/environment-old.less',
                'immersive-stories/css/socialwork.css': 'immersive-stories/less/socialwork.less',
                'immersive-stories/css/pharmacy.css': 'immersive-stories/less/pharmacy.less',
                'immersive-stories/css/lovejoy.css': 'immersive-stories/less/lovejoy.less',
                'immersive-stories/css/law.css': 'immersive-stories/less/law.less',
                'immersive-stories/css/libraries.css': 'immersive-stories/less/libraries.less',
                'immersive-stories/css/homepage-plus.css': 'immersive-stories/less/homepage-plus.less',
                'immersive-stories/css/comotion.css': 'immersive-stories/less/comotion.less',
                'immersive-stories/css/puerto-rico.css': 'immersive-stories/less/puerto-rico.less',
                'immersive-stories/css/stars.css': 'immersive-stories/less/stars.less',
                'immersive-stories/css/oceanography-research.css': 'immersive-stories/less/oceanography-research.less',
                'campaign/css/campaign-style.css': 'campaign/**/*.less',
                'campaign/css/header.css': 'campaign/less/header.less',
                'campaign/css/campaignv2-style.css': 'campaign/less/campaignv2-style.less',
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
          '<%= concat.dist.animationLibraries %>',
          'passion/js/tiles.dev.js',
          '<%= concat.dist.environmentLibraries %>'
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
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');


  grunt.registerTask( 'default', ['jshint', 'concat', 'uglify', 'notify', 'less']);
  grunt.registerTask( 'js', ['jshint', 'concat', 'uglify', 'notify' ]);
  grunt.registerTask( 'css', ['less', 'notify'] );

};
