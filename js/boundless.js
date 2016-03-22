//     Boundless.js 0.1
//     uw.edu/boundless

;(function () {
;/*
* Curtain.js - Create an unique page transitioning system
* ---
* Version: 2
* Copyright 2011, Victor Coulon (http://victorcoulon.fr)
* Released under the MIT Licence
*/

(function ( $, window, document, undefined ) {

    var pluginName = 'curtain',
        defaults = {
            scrollSpeed: 400,
            bodyHeight: 0,
            linksArray: [],
            mobile: false,
            scrollButtons: {},
            controls: null,
            curtainLinks: '.curtain-links',
            enableKeys: true,
            easing: 'swing',
            disabled: false,
            nextSlide: function() {},
            prevSlide: function() {}
        };

    // The actual plugin constructor
    function Plugin( element, options ) {
        var self = this;

        // Public attributes
        this.element = element;
        this.options = $.extend( {}, defaults, options) ;

        this._defaults = defaults;
        this._name = pluginName;
        this._ignoreHashChange = false;

        this.init();
    }

    Plugin.prototype = {
        init: function () {
            var self = this;

            // Cache element
            this.$element = $(this.element);
            this.$li = $(this.element).find('>li');
            this.$liLength = this.$li.length;
            self.$windowHeight = $(window).height();
            self.$elDatas = {};
            self.$document = $(document);
            self.$window = $(window);


            self.webkit = (navigator.userAgent.indexOf('Chrome') > -1 || navigator.userAgent.indexOf("Safari") > -1);
            $.Android = (navigator.userAgent.match(/Android/i));
            $.iPhone = ((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)));
            $.iPad = ((navigator.userAgent.match(/iPad/i)));
            $.iOs4 = (/OS [1-4]_[0-9_]+ like Mac OS X/i.test(navigator.userAgent));

            if($.iPhone || $.iPad || $.Android || self.options.disabled){
                this.options.mobile = true;
                this.$li.css({position:'relative'});
                this.$element.find('.fixed').css({position:'absolute'});
            }

            if(this.options.mobile){
               this.scrollEl =  this.$element;
            } else if($.mozilla || $.msie) {
                this.scrollEl = $('html');
            } else {
                this.scrollEl = $('body');
            }

            if(self.options.controls){
                self.options.scrollButtons['up'] =  $(self.options.controls).find('[href="#up"]');
                self.options.scrollButtons['down'] =  $(self.options.controls).find('[href="#down"]');

                if(!$.iOs4 && ($.iPhone || $.iPad)){
                    self.$element.css({
                        position:'fixed',
                        top:0,
                        left:0,
                        right:0,
                        bottom:0,
                        '-webkit-overflow-scrolling':'touch',
                        overflow:'auto'
                    });
                    $(self.options.controls).css({position:'absolute'});
                }
            }

            // When all image is loaded
            var callbackImageLoaded = function(){
                self.setDimensions();
                self.$li.eq(0).addClass('current');

                self.setCache();

                if(!self.options.mobile){
                    if(self.$li.eq(1).length)
                        self.$li.eq(1).nextAll().addClass('hidden');
                }

                self.setEvents();
                self.setLinks();
                self.isHashIsOnList(location.hash.substring(1));
            };

            if(self.$element.find('img').length)
                self.imageLoaded(callbackImageLoaded);
            else
                callbackImageLoaded();

        },
        // Events
        scrollToPosition: function (direction){
            var position = null,
                self = this;

            if(self.scrollEl.is(':animated')){
                return false;
            }

            if(direction === 'up' || direction == 'down'){
                // Keyboard event
                var $next = (direction === 'up') ? self.$current.prev() : self.$current.next();

                // Step in the current panel ?
                if(self.$step){

                    if(!self.$current.find('.current-step').length){
                        self.$step.eq(0).addClass('current-step');
                    }

                    var $nextStep = (direction === 'up') ? self.$current.find('.current-step').prev('.step') : self.$current.find('.current-step').next('.step');

                    if($nextStep.length) {
                        position = (self.options.mobile) ? $nextStep.position().top + self.$elDatas[self.$current.index()]['data-position'] : $nextStep.position().top + self.$elDatas[self.$current.index()]['data-position'];
                    }
                }

                position = position || ((self.$elDatas[$next.index()] === undefined) ? null : self.$elDatas[$next.index()]['data-position']);

                if(position !== null){
                    self.scrollEl.animate({
                        scrollTop: position
                    }, self.options.scrollSpeed, self.options.easing);
                }

            } else if(direction === 'top'){
                self.scrollEl.animate({
                    scrollTop:0
                }, self.options.scrollSpeed, self.options.easing);
            } else if(direction === 'bottom'){
                self.scrollEl.animate({
                    scrollTop:self.options.bodyHeight
                }, self.options.scrollSpeed, self.options.easing);
            } else {
                var index = $("#"+direction).index(),
                    speed = Math.abs(self.currentIndex-index) * (this.options.scrollSpeed*4) / self.$liLength;

                self.scrollEl.animate({
                    scrollTop:self.$elDatas[index]['data-position'] || null
                }, (speed <= self.options.scrollSpeed) ? self.options.scrollSpeed : speed, this.options.easing);
            }

        },
        scrollEvent: function() {
            var self = this,
                docTop = self.$document.scrollTop();

            if(docTop < self.currentP && self.currentIndex > 0){
                // Scroll to top
                // self._ignoreHashChange = true;

                if(self.$current.prev().attr('id'))
                    self.setHash(self.$current.prev().attr('id'));

                self.$current
                    .removeClass('current')
                    .css( (self.webkit) ? {'-webkit-transform': 'translateY(0px) translateZ(0)'} : {marginTop: 0} )
                    .nextAll().addClass('hidden').end()
                    .prev().addClass('current').removeClass('hidden');

                self.setCache();
                self.options.prevSlide();

            } else if(docTop < (self.currentP + self.currentHeight)){

                // Animate the current pannel during the scroll
                if(self.webkit)
                    self.$current.css({'-webkit-transform': 'translateY('+(-(docTop-self.currentP))+'px) translateZ(0)' });
                else
                    self.$current.css({marginTop: -(docTop-self.currentP) });

                // If there is a fixed element in the current panel
                if(self.$fixedLength){
                    var dataTop = parseInt(self.$fixed.attr('data-top'), 10);

                    if(docTop + self.$windowHeight >= self.currentP + self.currentHeight){
                        self.$fixed.css({
                            position: 'fixed'
                        });
                    } else {
                        self.$fixed.css({
                            position: 'absolute',
                            marginTop: Math.abs(docTop-self.currentP)
                        });
                    }
                }

                // If there is a step element in the current panel
                if(self.$stepLength){
                    $.each(self.$step, function(i,el){
                        if(($(el).position().top+self.currentP) <= docTop+5 && $(el).position().top + self.currentP + $(el).height() >= docTop+5){
                            if(!$(el).hasClass('current-step')){
                                self.$step.removeClass('current-step');
                                $(el).addClass('current-step');
                                return false;
                            }
                        }
                    });
                }


                if(self.parallaxBg){
                    self.$current.css({
                        'background-position-y': docTop * self.parallaxBg
                    });
                }

                if(self.$fade.length){
                    self.$fade.css({
                        'opacity': 1-(docTop/ self.$fade.attr('data-fade'))
                    });
                }

                if(self.$slowScroll.length){
                    self.$slowScroll.css({
                        'margin-top' : (docTop / self.$slowScroll.attr('data-slow-scroll'))
                    });
                }

            } else {
                // Scroll bottom
                // self._ignoreHashChange = true;
                if(self.$current.next().attr('id'))
                    self.setHash(self.$current.next().attr('id'));

                self.$current.removeClass('current')
                    .addClass('hidden')
                    .next('li').addClass('current').next('li').removeClass('hidden');

                self.setCache();
                self.options.nextSlide();
            }

        },
        scrollMobileEvent: function() {
            var self = this,
                docTop = self.$element.scrollTop();

            if(docTop+10 < self.currentP && self.currentIndex > 0){

                // Scroll to top
                self._ignoreHashChange = true;

                if(self.$current.prev().attr('id'))
                    self.setHash(self.$current.prev().attr('id'));

                self.$current.removeClass('current').prev().addClass('current');
                self.setCache();
                self.options.prevSlide();
            } else if(docTop+10 < (self.currentP + self.currentHeight)){

                // If there is a step element in the current panel
                if(self.$stepLength){
                    $.each(self.$step, function(i,el){
                        if(($(el).position().top+self.currentP) <= docTop && (($(el).position().top+self.currentP) + $(el).outerHeight()) >= docTop){
                            if(!$(el).hasClass('current-step')){
                                self.$step.removeClass('current-step');
                                $(el).addClass('current-step');
                            }
                        }
                    });
                }

            } else {

                // Scroll bottom
                self._ignoreHashChange = true;
                if(self.$current.next().attr('id'))
                    self.setHash(self.$current.next().attr('id'));

                self.$current.removeClass('current').next().addClass('current');
                self.setCache();
                self.options.nextSlide();
            }


        },
        // Setters
        setDimensions: function(){
            var self = this,
                levelHeight = 0,
                cover = false,
                height = null;

            self.$windowHeight = self.$window.height();

            this.$li.each(function(index) {
                var $self = $(this);
                cover = $self.hasClass('cover');

                if(cover){
                    $self.css({height: self.$windowHeight, zIndex: 999-index})
                        .attr('data-height',self.$windowHeight)
                        .attr('data-position',levelHeight);

                    self.$elDatas[$self.index()] = {
                        'data-height': parseInt(self.$windowHeight,10),
                        'data-position': parseInt(levelHeight, 10)
                    };

                    levelHeight += self.$windowHeight;

                } else{
                    height = ($self.outerHeight() <= self.$windowHeight) ? self.$windowHeight : $self.outerHeight();
                    $self.css({minHeight: height, zIndex: 999-index})
                        .attr('data-height',height)
                        .attr('data-position',levelHeight);

                     self.$elDatas[$self.index()] = {
                        'data-height': parseInt(height, 10),
                        'data-position': parseInt(levelHeight, 10)
                    };

                    levelHeight += height;
                }

                if($self.find('.fixed').length){
                    var top = $self.find('.fixed').css('top');
                    $self.find('.fixed').attr('data-top', top);
                }
            });
            if(!this.options.mobile)
                this.setBodyHeight();
        },
        setEvents: function() {
            var self = this;

            $(window).on('resize', function(){
                self.setDimensions();
            });

            if(self.options.mobile) {
                self.$element.on('scroll', function(){
                    self.scrollMobileEvent();
                });
            } else {
                self.$window.on('scroll', function(){
                    self.scrollEvent();
                });
            }

            if(self.options.enableKeys) {
                self.$document.on('keydown', function(e){
                    if(e.keyCode === 38 || e.keyCode === 37) {
                        self.scrollToPosition('up');
                        e.preventDefault();
                        return false;
                    }
                    if(e.keyCode === 40 || e.keyCode === 39){
                        self.scrollToPosition('down');
                        e.preventDefault();
                        return false;
                    }
                    // Home button
                    if(e.keyCode === 36){
                        self.scrollToPosition('top');
                        e.preventDefault();
                        return false;
                    }
                    // End button
                    if(e.keyCode === 35){
                        self.scrollToPosition('bottom');
                        e.preventDefault();
                        return false;
                    }
                });
            }

            if(self.options.scrollButtons){
                if(self.options.scrollButtons.up){
                    self.options.scrollButtons.up.on('click', function(e){
                        e.preventDefault();
                        self.scrollToPosition('up');
                    });
                }
                if(self.options.scrollButtons.down){
                    self.options.scrollButtons.down.on('click', function(e){
                        e.preventDefault();
                        self.scrollToPosition('down');
                    });
                }
            }

            if(self.options.curtainLinks){
                $(self.options.curtainLinks).on('click', function(e){
                    e.preventDefault();
                    var href = $(this).attr('href');

                    if(!self.isHashIsOnList(href.substring(1)) && position)
                        return false;
                    var position = self.$elDatas[$(href).index()]['data-position'] || null;

                    if(position){
                        self.scrollEl.animate({
                            scrollTop:position
                        }, self.options.scrollSpeed, self.options.easing);
                    }
                    return false;
                });
            }

            self.$window.on("hashchange", function(event){
                if(self._ignoreHashChange === false){
                    self.isHashIsOnList(location.hash.substring(1));
                }
                self._ignoreHashChange = false;
            });
        },
        setBodyHeight: function(){
            var h = 0;

            for (var key in this.$elDatas) {
               var obj = this.$elDatas[key];
               h += obj['data-height'];
            }

            this.options.bodyHeight = h;
            $('body').height(h);
        },
        setLinks: function(){
            var self = this;
            this.$li.each(function() {
                var id = $(this).attr('id') || 0;
                self.options.linksArray.push(id);
            });
        },
        setHash: function(hash){
            // "HARD FIX"
            el = $('[href=#'+hash+']');
            el.parent().siblings('li').removeClass('active');
            el.parent().addClass('active');

            if(history.pushState) {
                history.pushState(null, null, '#'+hash);
            }
            else {
                location.hash = hash;
            }
        },
        setCache: function(){
            var self = this;
            self.$current = self.$element.find('.current');
            self.$fixed = self.$current.find('.fixed');
            self.$fixedLength = self.$fixed.length;
            self.$step = self.$current.find('.step');
            self.$stepLength = self.$step.length;
            self.currentIndex = self.$current.index();
            self.currentP = self.$elDatas[self.currentIndex]['data-position'];
            self.currentHeight = self.$elDatas[self.currentIndex]['data-height'];

            self.parallaxBg = self.$current.attr('data-parallax-background');
            self.$fade = self.$current.find('[data-fade]');
            self.$slowScroll = self.$current.find('[data-slow-scroll]');

        },
        // Utils
        isHashIsOnList: function(hash){
            var self = this;
            $.each(self.options.linksArray, function(i,val){
                if(val === hash){
                    self.scrollToPosition(hash);
                    return false;
                }
            });
        },
        readyElement: function(el,callback){
          var interval = setInterval(function(){
            if(el.length){
              callback(el.length);
              clearInterval(interval);
            }
          },60);
        },
        imageLoaded: function(callback){
            var self = this,
                elems = self.$element.find('img'),
                len   = elems.length,
                blank = "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==";

            elems.bind('load.imgloaded',function(){
                if (--len <= 0 && this.src !== blank || $(this).not(':visible')){
                    elems.unbind('load.imgloaded');
                    callback.call(elems,this);
                }
            }).each(function(){
                if (this.complete || this.complete === undefined){
                    var src = this.src;
                    this.src = blank;
                    this.src = src;
                }
            });
        }
    };



    $.fn[pluginName] = function ( options ) {
        return this.each(function () {
            if (!$.data(this, 'plugin_' + pluginName)) {
                $.data(this, 'plugin_' + pluginName, new Plugin( this, options ));
            }
        });
    };


})( jQuery, window, document );
;// Baseline setup
// --------------

// Establish the root object `window`.
var root = this

// Create a safe reference to the BOUNDLESS object which will be used to establish the global UW object.
var  BOUNDLESS = function(obj)
{
    if ( obj instanceof BOUNDLESS ) return obj

    if ( ! this instanceof BOUNDLESS ) return new BOUNDLESS(obj)

    this._wrapped = obj
};

// Establish the global UW object `window.BOUNDLESS`
root.BOUNDLESS = BOUNDLESS


// Current version
BOUNDLESS.VERSION = '0.1'
;BOUNDLESS.TransitionEvents = 'transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd';
// List out the classes that each component searches for
BOUNDLESS.AnimationDuration = 1000

BOUNDLESS.App = Backbone.Model.extend({

  attributes : {
    'map' : false,
    'instagram' : false
  },

  initialize : function() {
    this.on('change:map', BOUNDLESS.initialize )
  }

})

BOUNDLESS.begin = function() {
  BOUNDLESS.app = new BOUNDLESS.App()
  BOUNDLESS.map = new BOUNDLESS.Map()
  BOUNDLESS.gallery = new BOUNDLESS.Gallery()
  // BOUNDLESS.navigation = new BOUNDLESS.Navigation()
  BOUNDLESS.page = []
  BOUNDLESS.pages = new BOUNDLESS.Pages( PAGES )
  BOUNDLESS.pages.each( function( page ) {
    BOUNDLESS.page[ page.get('slug') ] = new BOUNDLESS.Page({ el: '.page .' + page.get('slug') , model: page })
  })
  BOUNDLESS.analytics = new BOUNDLESS.Analytics()
}

BOUNDLESS.initialize = function()
{
  BOUNDLESS.search = new BOUNDLESS.Search()
  BOUNDLESS.scroll = new BOUNDLESS.Scroll()

  // Simple scripts for the map dropdown and the video player
  jQuery('ul.uw-select').on( 'click' , 'li.inactive', BOUNDLESS.map.handleClickListItems )
  jQuery( 'a.play').click( function() {
    $('#boundless-video').hide()
    var player = new YT.Player( 'boundless-video', {
      videoId : '0GFF0LcHfec',
      player_vars : {
        'rel' : 0,
        'controls' : 0,
        'modestbranding' : 1,
        'wmode' : 'transparent'
      },
      width : $(window).width(),
      height: $(window).height(),
      events : {
        onReady :  function( event ) {
          event.target.playVideo()
          $('#boundless-video').hide().fadeIn()
          $('#close-boundless-video').show()
        }
      }
    })
    return false;
  } )

  $('#close-boundless-video').click( function() {
    $('#boundless-video').fadeOut(function() {
      $(this).replaceWith('<div id="boundless-video"/>')
    })
    $(this).hide()
  })
}


jQuery(document).ready( BOUNDLESS.begin )

;
BOUNDLESS.Beginning = Backbone.View.extend({

  el : 'body',

  events : {
  },

  initialize : function() {
    // _.bindAll(this, 'unblur')
    // this.$el.children('div.slide').hide()
    // BOUNDLESS.router.mprogress.start()
    // this.$el.imagesLoaded( this.unblur )

    // TODO: when do we load the map?
      // BOUNDLESS.uwtiles = new BOUNDLESS.UWTiles()
      // BOUNDLESS.map = new BOUNDLESS.Map()
      // BOUNDLESS.map.on('googlemaploaded', this.unblur )
      BOUNDLESS.initialize()

  },

  // unblur : function() {
  //   BOUNDLESS.router.mprogress.end()
  //   this.$el.find('#boundless-slide .overlay').fadeIn( BOUNDLESS.AnimationDuration, BOUNDLESS.initialize )
  // }





})
;// Navigation View
BOUNDLESS.Navigation = Backbone.View.extend({

  el : '.navigation',

  hidden : false,

  events : {
  },

  initialize : function( options )
  {
  },

})
;BOUNDLESS.Search = Backbone.View.extend({

  el : 'li.search',

  searchBar : 'input.search-bar',

  events : {
    'click' : 'expandTheSearchBar'
  },

  initialize : function()
  {
    _.bindAll(this, 'expandTheSearchBar')
    this.$searchBar = $(this.searchBar)

  },

  expandTheSearchBar : function ()
  {
    this.$searchBar.toggleClass('open')
  }

});//BOUNDLESS.Mobile is a utility class that does general mobile specific things
//and makes whether or not this is a mobile experience available to other classes

BOUNDLESS.Mobile = function (){

  this.checkMobile = function() {
    this.win_height = window.outerHeight;
    this.win_width = window.outerWidth;
    this.is_mobile = (this.win_width <= MOBILE_BREAKPOINT);
  };

  resized = function() {
    this.checkMobile();
    if (this.is_mobile){
      //manipulate slide height here? Make it same (min) height as boundless slide
      $('#slide').height($('#boundless-slide').height());
    }
    else {
      $('#slide').removeAttr('style');
    }
  }.bind(this);

  var MOBILE_BREAKPOINT = 768;
  resized();
  $(window).resize(resized);
}
;BOUNDLESS.UWTiles = Backbone.View.extend({

  name : 'UW Campus',

  alt  : 'UW Map',

  tileSize : new google.maps.Size( 256, 256 ),

  maxZoom : 19,

  minZoom : 1,

  scrollwheel : false,

  streetViewControl : false,

  initialize : function() {},

  getTile: function( coord, zoom, ownerDocument ) {

    var div = ownerDocument.createElement('DIV');

    if(!this.withinLoadingBounds( coord, zoom ) )
    {
        div.style.width = '256px';
        div.style.height = '256px';
        div.style.background = '#FFFFFF';
        return div;
    }

    var img = ownerDocument.createElement('IMG');
    img.src = 'http://www.washington.edu/wp-content/themes/maps/tiles/' + zoom + '_' + coord.x + '_' + coord.y + '.png';

    img.onerror = function()
    {
      div.removeChild(img);
      div.style.width = '256px';
      div.style.height = '256px';
      div.style.background = '#FFFFFF';
    }

    div.appendChild(img);
    return div;

  },

  withinLoadingBounds : function( coord, zoom ) {

    return !(  coord.x > Math.floor(84049/Math.pow(2,19-zoom)) ||
                  coord.x < Math.floor(83996/Math.pow(2,19-zoom))  ||
                  coord.y < Math.floor(182980/Math.pow(2,19-zoom)) ||
                  coord.y > Math.floor(183017/Math.pow(2,19-zoom))
    );
  }

});// Video slide view

BOUNDLESS.Video = Backbone.View.extend({

  template :
     '<div class="title-blurb">' +
     '<h2 class="video-title"><%= title %></h2>' +
      '<div class="blurb"><%= text %></div>' +
    '</div>' +
    '<button class="play" aria-controls="video<%= video %>">' +
      '<span class="top"></span>' +
      '<span class="left"></span>' +
      '<span class="bottom"></span>' +
     '</button>' +
    '<div class="behind boundless-youtube" id="video<%= video %>" aria-label="Video: <%= title %>"></div>',

  tagname   : 'div',
  id        : 'video',
  className : 'fullscreen',

  is_playing: false,
  preRemove : false,

  events : {
    'click button.play': 'buttonClick',
    'keyup': 'checkEscape'
  },

  initialize : function ( options ) {
    _.bindAll(this,
        'render',
        // 'data_prep',
        'buttonClick',
        'checkEscape',
        'onReady',
        'onStateChange',
        'youtube_iframe',
        'buttonTransitionDone',
        'iframeTransitionDone'
      );

    //this is the instantiated collection
    this.slug = options.slug;
    this.collection = new BOUNDLESS.Video.Collection( VIDEOS );
    this.render()

  },

  render : function () {

    this.model = this.collection.findWhere({'slug': this.slug})

    if ( ! this.model ) return console.error( 'There is no model with slug ' + this.slug )

    this.$el.css({'background-image': 'url("' + this.model.get('image') + '")' }).addClass( this.slug )

    var template = _.template( this.template, this.model.toJSON() )

    BOUNDLESS.replaceSlide( this.$el.html(template) );

    this.youtube_iframe();
    this.$button = this.$el.find('button.play');

  },

  youtube_iframe : function () {
    var player_vars = {
      'rel'           : 0,
      'controls'      : 0,
      'modestbranding': 1,
      'wmode'         : 'transparent',
    }
    this.uwplayer = new YT.Player('video' + this.model.get('video'), {
      videoId: this.model.get('video'),
      playerVars: player_vars,
      width : '100%',
      height: '100%',
      events: {
          //these events will call functions in the view
         'onReady': this.onReady,
         'onStateChange': this.onStateChange,
         'onError' : this.onError
      }
    });
    this.$iframe = this.$el.find('#video' + this.model.get('video'));
    this.trigger('slideloaded');
  },

  onError : function( error ) {
      console.error( 'There was an error: ' + error )
  },

  onReady: function () {
    this.$button.on(BOUNDLESS.TransitionEvents, this.buttonTransitionDone);
    this.$iframe.on(BOUNDLESS.TransitionEvents, this.iframeTransitionDone);
    // this.on('preRemove', this.stopVideo);

    if ( this.slug === 'boundless') this.buttonClick()
  },

  onStateChange: function (player_state) {
    if (player_state.data === 0){
      if (this.is_playing){
        this.stopVideo();
      }
    }
  },

  buttonClick: function(event) {
    if ( event ) event.stopPropagation();
    if (this.is_playing){
      this.stopVideo();
    }
    else {
      this.playVideo();
    }
  },

  checkEscape: function (event){
    if (this.is_playing){
      if (event.keyCode == 27){
        event.preventDefault();
        this.stopVideo();
      }
    }
  },

  playVideo: function () {
    this.$button.addClass('close');
  },

  buttonTransitionDone: function (event) {
    //all transitions trigger this, including outline (as in focus change)
    //allow opacity and top to progress
    if (['right', 'opacity'].indexOf(event.originalEvent.propertyName) == -1){
      //early return if conditions not met
      return;
    }
    if (this.$button.hasClass('close')){
      this.$iframe.removeClass('behind');
      this.uwplayer.loadVideoById(this.model.get('video'));
      this.is_playing = true;
      this.preRemove = true;
      this.$button.focus();
    }
    else {
      this.trigger('removeReady');
    }
  },

  stopVideo: function (callback) {
    if (this.is_playing) {
      if ( this.slug === 'boundless' ) {
        Backbone.history.navigate('', {trigger:true})
        $('body').removeClass('video-active')
        return
      }
      this.uwplayer.stopVideo();
      this.is_playing = false;
      this.preRemove = false;
      this.$iframe.addClass('behind');
    }
  },

  iframeTransitionDone: function () {
    if (this.$iframe.hasClass('behind')){
      this.$button.removeClass('close');
      $('body').removeClass('video-active');

    }
    else {
      $('body').addClass('video-active');
    }
  },
});


BOUNDLESS.Video.API = Backbone.Model.extend({

  defaults : {
    apiReady : false
  },

  initialize : function()
  {
    _.bindAll( this, 'ready' )
    if ( YT && YT.Player ) {
      this.ready()
      return
    }
    window.onYouTubeIframeAPIReady = this.ready
  },

  ready: function() {
    this.set( 'apiReady', true )
  }

})

BOUNDLESS.Video.Model = Backbone.Model.extend({});

BOUNDLESS.Video.Collection = Backbone.Collection.extend({

  // url : '?json=boundless_video.get_videos',

  initialize: function () {
    _.bindAll( this, 'ready' )

    this.api = new BOUNDLESS.Video.API()

    if ( this.api.get('apiReady') ) this.ready()
    else this.api.on('change:apiReady', this.ready )

    this.on('error', this.error )
  },

  ready : function()
  {
    // putting fetch into the change:apiReady
    // this.fetch()
  },

  error: function()
  {
    console.error( 'There was an error fetching the videos' )
  }

});

;// Page view
BOUNDLESS.Page = Backbone.View.extend({

  template : '<div id=\'<%= page.slug %>\' class="container">'+
    '<h3><%= page.title %></h3>' +
    '<%= page.content %>' +
  '</div>',

  initialize : function( options ) {
    this.render()
  },

  render : function() {
    this.$el.html( _.template( this.template, { page: this.model.toJSON() } ) )
    if( this.model.get('image') ) { this.$el.css('background', 'url(' + this.model.get('image') + ')' ) }
  }

})


BOUNDLESS.Pages = Backbone.Collection.extend({
})
;// Map Point View
BOUNDLESS.Map = Backbone.View.extend({

  // The element to put the Google Map
  el : '.map',

  // className : 'slide',

  // tagName : 'div',

  listItems :
      '<div class="map-navigator"><h2 class="map-title">Seattle landmarks</h2>' +
      '<select class="points-of-interest uw-select">' +
      '<% _.each( points, function(point) { %>' +
        '<option data-marker="<%= point.title %>"><span><%= point.title  %></span>' +
      '<% }) %>' +
      '</select>',

//  overlays: '<h2 class="map-title">Campus Icons and Hidden Gems</h2>' +
//            '<a class="explore-more" href="https://www.uw.edu/maps">Explore more</a>',


  events : {
  },

  markers : [],

   // Google Map settings for the map and the marker
  settings : {
    name : 'campusmap',
    // These bounds are hardcoded to the coordinates that the branded map encompass
    allowedBounds : new google.maps.LatLngBounds(
                    new google.maps.LatLng( 47.647523,-122.325039 ),
                    new google.maps.LatLng( 47.664983,-122.290106 )
    ),
    allowedZoom: 16,

    map: {
      zoom: 17,
      scrollwheel: false,
      panControl: false,
      zoomControl: true,
      zoomControlOptions : {
        style: google.maps.ZoomControlStyle.SMALL,
        position: google.maps.ControlPosition.LEFT_CENTER
      },
      scaleControl : true,
      mapTypeControl: false,
      streetViewControl : false,
      draggable : true,
      center: new google.maps.LatLng( 47.653851681095, -122.30780562698 ),
      minZoom:1,
      maxZoom:19,
      disableDoubleClickZoom : false,
      styles : [
    {
        "featureType": "landscape.natural",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#e0efef"
            }
        ]
    },
    {
      "featureType": "poi",
      "elementType": "labels",
      "stylers": [{
        "visibility": "off"
      }]

    },
    {
      "featureType": "poi.business",
      "elementType": "labels",
      "stylers": [
          {
              "visibility": "off"
          }
      ]
    },
    {
        "featureType": "road",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.attraction",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#c5dac6"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#c5dac6"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#c5c6c6"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#fbfaf7"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#fbfaf7"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#acbcc9"
            }
        ]
    }
]
      // setMapTypeId:  google.maps.MapTypeId.ROADMAP,
      // mapTypeControl : false
    },
    icon : {
      purple : {
        url : $(window).width() < 768 ? 'wp-content/themes/be-boundless/less/svg/map-dot.png' : 'wp-content/themes/be-boundless/less/svg/map-marker-dark.png',
        size : new google.maps.Size(85, 85),
        origin: new google.maps.Point(0,0),
        anchor: new google.maps.Point( 42.5, 42.5 )
      },
      gold : {
        url : $(window).width() < 768 ? 'wp-content/themes/be-boundless/less/svg/map-dot-gold.png' : 'wp-content/themes/be-boundless/less/svg/map-marker-gold-light.png',
        size : new google.maps.Size(85, 85),
        origin: new google.maps.Point(0,0),
        anchor: new google.maps.Point( 42.5, 42.5 )
      }
    },
    marker: {
      // animation: google.maps.Animation.DROP,
    }


  },

  // Initialize the map.
  // This is executed by the router and only when the route is in place
  initialize : function( options )
  {
    _.bindAll( this,
      'delegateGoogleMapEvents',
      'handleClickListItems',
      'putMarkersOnMap',
      'removeInfoWindows',
      'render',
      'showOverlays'
    )
    this.points = new BOUNDLESS.Map.Points( POINTS )
    this.render()
  },

  // Render the map
  render : function() {
    // BOUNDLESS.replaceSlide( this.el )
    // $('#slides').append( this.el )
    this.map = new google.maps.Map( this.el, this.settings.map )
    this.delegateGoogleMapEvents()

    this.infowindow = new BOUNDLESS.Map.InfoWindow( this.map )

    this.bounds = new google.maps.LatLngBounds()
    this.points.each( this.putMarkersOnMap );
    this.map.fitBounds(this.bounds);
    this.showOverlays();


  },

  // Displays a list of the Points of Interest
  showOverlays : function() {
//    this.$el.append(this.overlays);
    this.$el.append( _.template( this.listItems, { points: this.points.toJSON() } ) )
  },

  handleClickListItems: function( e )
  {
      var markerTitle = $(e.target).html()
          , marker = this.markers[ markerTitle ]

      $(e.currentTarget).addClass('active').siblings().removeClass('active')
      google.maps.event.trigger( marker, 'click' )
  },

  // Delegate the Google map events to the Backbone view
  delegateGoogleMapEvents : function()
  {
    google.maps.event.addListener( this.map, "click", this.removeInfoWindows )

    google.maps.event.addListener( this.map, "dragstart", this.removeInfoWindows )
    google.maps.event.addListener( this.map, "zoom_changed", this.removeInfoWindows )
    google.maps.event.addListenerOnce( this.map, "idle", function() {
      BOUNDLESS.app.set( 'map', true )
    })
  },


  // Put each vanilla marker on the map and extend the map bounds to show them
  putMarkersOnMap : function( information )
  {
      var marker = new google.maps.Marker( this.settings.marker )
              , latlng = new google.maps.LatLng( information.get( 'coordinate' ).latitude, information.get( 'coordinate' ).longitude )

      this.bounds.extend( latlng )

      marker.setPosition(  latlng )
      marker.setTitle( information.get('title') )
      //marker.setText( information.get('text') )
      marker.setMap( this.map )

      marker.setIcon( information.get('slug') === 'uw' ? this.settings.icon.gold : this.settings.icon.purple  )

      marker.set( 'information', information )

      this.markers[ information.get('title') ] = marker

      // Has to be binded like this to maintain scope in Google Maps Marker object
      google.maps.event.addListener( marker, 'click', _.bind( function() {
        this.handleClickMarker( marker )
      }, this ) )

  },

  // Handle the clicking of the marker
  handleClickMarker : function( marker )
  {
    this.$el.find( 'li[data-marker="'+marker.getTitle() + '"]' ).addClass('active').siblings().removeClass('active')
    this.map.panTo( marker.getPosition() )
    this.infowindow.render( marker )
    this.infowindow.segueIn()
  },

  removeInfoWindows : function()
  {
    $('.infowindow').removeClass('open')
  },

})

// Map Point Model
BOUNDLESS.Map.Point = Backbone.Model.extend({})

// Map Point Collection
BOUNDLESS.Map.Points = Backbone.Collection.extend({

  model : BOUNDLESS.Map.Point,

  initialize : function() {},

  error: function( error ) {}

})
;// Gallery View
BOUNDLESS.Gallery = Backbone.View.extend({

  el : '.gallery',

  events : {
    'scroll'   : 'close',
    'click li' : 'open'
  },

  settings : {
    itemSelector: 'li',
    transitionDuration : 0
  },

  template :
  '<div class="container">' +
    '<ul id="grid" class="masonry">' +
    '<% _.each( images, function( image ) { %> ' +
     '<li class="segue" ><img width="100%" src="<%= image.src.url %>" />' +
    ' <% }) %>' +
    '</ul>' +
  '</div>',

  templateInstagram :
  '<div class="container">' +
  '<h4> UW on <a href="https://instagram.com/uofwa/?hl=en" title="Instagram">Instagram</a></h4>' +
    '<ul id="grid" class="masonry">' +
    '<% _.each( images, function( image ) { %> ' +
     '<li class="segue" ><a href="<%= image.link %>" target="_blank" title="A UW instagram image"><img src="<%= image.images.standard_resolution.url %>" height="<%= image.images.standard_resolution.height %>" width="<%= image.images.standard_resolution.width %>" /></a>' +
    ' <% }) %>' +
    '</ul>' +
  '</div>',

  templateOverlay : '',

  // This is executed by the router and only when the route is in place
  initialize : function( options )
  {
    _.bindAll( this,
      // 'animateImageIn',
      'render',
      'open',
      'close',
      'removeInactive',
      'setMasonry',
      'setDimensions',
      'getImagePosition'
    )
    // this.images = new BOUNDLESS.Gallery.Images()
    // this.images.on( 'sync', this.render )
    this.instagram = new BOUNDLESS.Gallery.Instagram()
    this.instagram.on( 'sync', this.render )
  },

  render : function()
  {
    console.log(this.$el)
    $('#gallery-1').prepend( _.template( this.templateInstagram, {images : this.instagram.toJSON() }) )
    BOUNDLESS.app.set( 'instagram', true )
    this.$el.attr('data-height', 10000)

    // this.$el.imagesLoaded( this.el, this.setMasonry )
    // this.$el.find('li').on('inview', this.animateImageIn )
  },

  setMasonry : function( images )
  {
    this.trigger('slideloaded')
    this.$grid = this.$el.find('#grid');

    this.masonry = new Masonry( this.$grid.get(0), this.settings )

    this.images.each( this.setDimensions )
  },

  // animateImageIn : function(e, isInView, visiblePartX, visiblePartY)
  // {
  //   // TODO: reset the images that move off the bottom on scroll up
  //   if ( isInView )
  //     $(e.currentTarget).removeClass('segue');
  // },

  setDimensions : function( model, index )
  {
    var $element = this.$el.find('li').eq( index )

    $element.attr({ id: model.cid })

    var original = {
      width : $element.width(),
      left : $element.position().left,
      top : $element.position().top
    } ,

    dimensions = _.extend( {
      translateZ: "0px",
      width : $element.width(),
      left : 0,
    }, this.getImagePosition( $element ) )

    model.set( {'dimensions' : dimensions, 'original' : original } )

  },

  open : function(e){

    var $this = $( e.currentTarget )
    , model = this.images.get( $this.attr('id'))
    , open = this.images.findWhere({ open : true } )

    // todo : shouldn't need the open variable here
    if ( open ) {
      this.close()
      return false
    }

    model.set( 'open', true )
    $this
      .addClass('active')
      .velocity( _.extend( model.get('dimensions'),  { top :  this.$el.scrollTop() } ), 500 )
      .siblings().addClass('inactive')


    return false
  },

  close : function()
  {
    var open = this.images.findWhere({ open : true } )

    if ( open )
    {
      open.set( 'open', false )
      return this.$grid.find('#'+open.cid).velocity( 'reverse', this.removeInactive )
    }

  },

  removeInactive : function()
  {
    this.$('li').removeClass('active inactive')
  },

  getImagePosition : function( element )
  {
    var adjust = ( this.$grid.width() / element.width() ) * element.height() > $(window).outerHeight() * 0.8
    , width       =  adjust ? ( element.width() / element.height() ) * $(window).outerHeight() * 0.8 : this.$grid.width()
    , left           = adjust ? ( this.$grid.width() - width  - 30 ) / 2 : 0
    return  { width : width, left : left }
  },

})

// Gallery Image Model
BOUNDLESS.Gallery.Image = Backbone.Model.extend({

  defaults  : {
    open : false,
    original : {},
    dimensions : {}
  }

})

// Gallery Images Collection
BOUNDLESS.Gallery.Images = Backbone.Collection.extend({

  url : '?json=gallery.get_gallery',

  model : BOUNDLESS.Gallery.Image,

  initialize : function()
  {
    this.on( 'error', this.error )
    this.fetch()
  },

  parse : function( data )
  {
    if ( data.status == 'error' )
      return this.error( data.error )

    return data[0].images
  },

  error: function( error )
  {
    console.error('There was an error retrieving the gallery: ' + error);
  }



})

BOUNDLESS.Gallery.Instagram = Backbone.Collection.extend({

    defaults : {
        access_token : "201177297.467ede5.d8b1026bbfa741fc8c8d2b391de72fb4",
        client_id : "d9d55d56f8814f8e83b6492803e9b773",
        user_id : 201177297,
        count: 6
    },

    url: function () {
      return "https://api.instagram.com/v1/users/" + this.defaults.user_id + "/media/recent";
    },

    initialize: function() {
      this.fetch({ data: this.defaults, dataType: 'jsonp', crossDomain: true } );
    },

    parse : function( response ) {
      return response.data
    }

})
;// Boundless Map Information Window
// Each marker gets it's own attached window for now.
// Alternative is one window that moves around from marker to marker.
BOUNDLESS.Map.InfoWindow = function( map )
{

  this.div = document.createElement('div')
  this.div.className = 'infowindow'
  this.open = false

  // this.point = point
  this.setMap( map )

}

// Extend the Google Maps Overlay View
BOUNDLESS.Map.InfoWindow.prototype = new google.maps.OverlayView()

BOUNDLESS.Map.InfoWindow.prototype.render = function( marker )
{

  var overlayProjection = this.getProjection()
      , point = marker.getPosition()
      , info  = marker.get('information')
      , position = overlayProjection.fromLatLngToDivPixel( point)
      , padding = 40

  if ( this.div.className.indexOf('open') != -1 )
    this.div.className += ' switch'

  this.div.innerHTML = _.template(
    '<div class="image-mask">' +
      '<div class="image">' +
         '<img src="<%= _.first(info.get("image")) %>" title="<%= info.get("title") %>" />' +
        '<h3><%= info.get("title") %></h3>' +
      '</div>' +
    '</div>' +
    '<div class="text">'+
      '<p><%= info.get("text") %></p>' +
      '<% if (info.get("cta").text) { %>' +
      '<p class="boundless-button">' +
        '<span>' +
          '<a href="<%= info.get("cta").url %>"><%= info.get("cta").text %></a>' +
        '</span>' +
      '</p>' +
      '<% } %>' +
      '<span class="close"></span>' +
      '<span class="open"></span>' +
    '</div>' +
    '<div class="arrow"></div>',
    { info : info }
  );

  this.div.style.top  = position.y - ( this.div.offsetHeight + padding ) + 'px'
  this.div.style.left = position.x - this.div.offsetWidth / 2 + 'px'

  BOUNDLESS.analytics.trigger('infowindowready');
}

BOUNDLESS.Map.InfoWindow.prototype.segueIn = function()
{
  this.div.style.display = 'inline'

  if ( this.div.className.indexOf('open') === -1 )
    this.div.className += ' open'

  this.map.panBy(0, (this.div.offsetHeight / -2));
  this.div.className = this.div.className.replace( ' switch' , '' )
}

// Called when the overlay.setMap function is called
BOUNDLESS.Map.InfoWindow.prototype.onAdd = function()
{
  var panes = this.getPanes()
  // this.div.style.display = 'inline'
  panes.floatPane.appendChild( this.div )
}

//  Positions the window in the correct location based on the marker's coordinates
BOUNDLESS.Map.InfoWindow.prototype.draw = function() {}

// Called when the overlay.setMap(null) is called
BOUNDLESS.Map.InfoWindow.prototype.onRemove = function()
{
  this.div.style.display = 'none'
  this.div.className = 'infowindow'
}
;BOUNDLESS.getSlide = function() {
  this.$slide = this.$slide || $('#slide')
  return this.$slide
}

BOUNDLESS.replaceSlide = function( newSlide )
{
  this.getSlide().html( newSlide )
};BOUNDLESS.Analytics = function () {
  _.extend(this, Backbone.Events);

  $('#nav-wrap li').on({
    click: function () {
      ga('send', 'event', 'Boundless', 'click', 'Navigation item: ' + this.id);
    }
  });

  $('a#static.play').on({
    click: function (){
      ga('send', 'event', 'Boundless', 'click', "Home brand video played");
    }
  });

  $('.boundless-button a').on({
    click: function () {
      //console.log(this.innerHTML);
      ga('send', 'event', 'Boundless', 'click', 'Main CTA clicked: ' + this.innerHTML + '- ' + this.href);
    }
  });

  this.on('slideloaded', function () {
    // needs to get attached and detached for slides as well
    $('#slide .boundless-button a').on({
      click: function () {
        ga('send', 'event', 'Boundless', 'click', 'Slide CTA clicked: ' + this.innerHTML + '- ' + this.href);
      }
    });

    //only relevant in slides
    $('#slide button.play').on({
      click: function (){
        if(!$(this).hasClass('close')){
          var video = $(this).attr('aria-controls');
          ga('send', 'event', 'Boundless', 'click', 'Slide video played: ' + $(video).attr('aria-label'));
        }
      }
    });
  });

  this.on('infowindowready', function () {
    $('.infowindow .boundless-button a').on({
      click: function () {
        ga('send', 'event', 'Boundless', 'click', 'Map Point CTA clicked: ' + this.innerHTML + '- ' + this.href);
      }
    });
  });

  this.ready = true;
}
;// Navigation View
BOUNDLESS.Scroll = Backbone.View.extend({

  el : window,

  events : {
  	'scroll' : 'scroller'
  },

  initialize : function( options )
  {

    var intializeMap = true;
    this.$BoundlessSlide = $('#boundless-slide')

    this.$MobileCheck =  $('#dots').css('display') == 'none' ? true : false;

	$('.curtains').curtain({
           curtainLinks : '#dots a',
        	nextSlide: function(){
      			// Figure out how to roll this into one function
      			var currentSlideElement = $('.slide.current'),
                      currentSlide = currentSlideElement.index()
      			dots = $('#dots li')

      			dots.removeClass('current-dot').eq(currentSlide).addClass('current-dot')

                      if ( currentSlideElement.next().attr('id') === 'map' && intializeMap )
                      {
                      // Make sure the map fits the full screen tile
                        var initialMarker = BOUNDLESS.map.points.findWhere({ slug: 'uw' })
                        BOUNDLESS.map.handleClickMarker( BOUNDLESS.map.markers[ initialMarker.get( 'title' )] )
                        google.maps.event.trigger( BOUNDLESS.map.map, 'resize' )
                        intializeMap = false;
                      }


        	},
        	prevSlide: function() {
    			// Figure out how to roll this into one function
      			var currentSlide = $('.slide.current').index(),
      			dots = $('#dots li')

      			dots.each(function(){
      				dots.removeClass('current-dot')
      				dots.eq(currentSlide).addClass('current-dot')
      			})
        	}
	});


  (function(){
  	// Figure out how to roll this into one function
  		var currentSlide = $('.slide.current').index(),
  		dots = $('#dots li')

  		dots.each(function(){
  			dots.removeClass('current-dot')
  			dots.eq(currentSlide).addClass('current-dot')
  		})
  })();

  },


  scroller: function(){



  	// Set up variables for function
  	var parentSlide = this.$BoundlessSlide,
  		midGround = $('.midground'),
  		homepageText = $('.homepage-text'),

  		offsets = parentSlide.offset().top,
  		scrollTop = this.$el.scrollTop(),
  		scrollAmount = offsets - scrollTop,

  		midGroundDistance = Math.abs(scrollAmount / 2);
  		homepageTextDistance = Math.abs(scrollAmount / 1);


  	if(parentSlide.hasClass('current') && !this.$MobileCheck) {

  		var distanceToTop = scrollAmount / 4,
  			bgPos = "center " + distanceToTop + "px";

  		// parentSlide.css('background-position', bgPos)

  		// Midground
  		midGround.css('transform','translateY(' + midGroundDistance + 'px)')

  		// Homepage Text
  		homepageText.css({
  			'transform'	: 'translateY(' + homepageTextDistance + 'px)'
  		})

  		// Fade in and out the homepage text [ Could be done with class switch? ]
        if(scrollTop <10){
          	homepageText.fadeIn("slow");
  		  } else if ( !this.$MobileCheck ) {
          	homepageText.fadeOut("slow");
   		 }

   		// Fixes scrollTop not rendering properly when top of page is scrolled to
   		if(scrollTop === 0){
   			midGround.css({ 'transform' : 'translateY(0px)' })
   			homepageText.css({ 'transform'	: 'translateY(0px)' })
   		}

  	}

        // if ( $('#tagboard').data().position < $(window).scrollTop() )
        // {
        //   $('.tagboard-embed').css( {'overflow': 'scroll', 'height': 1000} )
        // } else {
        //   $('.tagboard-embed').css( {'overflow': 'hidden', 'height': 1000 } )
        // }


  }


})
;}).call(this)
