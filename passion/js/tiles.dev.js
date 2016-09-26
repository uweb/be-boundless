$(window).load(function(){    

    // $( function() {

      var qsRegex,
          $searcher_wrap = $( "#searcher_wrap" ),
          $searcher = $( "#searcher" ),
          $window = $( window ).height(),
          $window_width = $( window ).width(),
          $filter = $('#filter');

      // init Isotope
      var $grid = $('.grid').isotope({
        itemSelector: '.grid-item',
        percentPosition: true,
        masonry: {
          columnWidth: '.grid-sizer'
        },
        filter: '.featured',
      });

      // Remove overlay once all is loaded
      $grid.one( 'arrangeComplete', function() {
        $('#overlay').fadeOut(300, function(){
          $(this).remove();
        });
      });
    
     // Fire isotope initially
     $grid.isotope();

//ADJUST THIS FUNCTION FOR THE NEW SEARCH
      // use value of search field to filter
     var $quicksearch = $('.quicksearch').keyup( debounce( function() {
       qsRegex = new RegExp( $quicksearch.val(), 'gi' );
       $grid.isotope({
         filter: function() {
           var $this = $(this);
           var search = qsRegex ? $this.text().match( qsRegex ) : true;
           return search && $this.is( ':not(.title-card)' );
         }
       });
     }, 200 ) );

      // Function to replace the image with the high-rest one
      function imageSwitch(el){
        var $this = el;
        $this.find('.front').css('background-image', 'url(' + $this.data('img') + ')');
      }

      // Find featured images and give them high-res images;
      $('.featured').each( function(i, els){
        var el = $(els);
        imageSwitch(el);
      }) 

      // Reusable scroll to position

      function scrollIt(el){
        var $offset = ( $window - el.height() ) / 2
            // Scroll the tile to the top if mobile, otherwise center the tile on desktop
            $mobile = $window_width < 768 ? 50 : $offset 

        $grid.one( 'arrangeComplete', function() {
          $('html, body').animate({
            scrollTop: ( el.offset().top - $mobile )
          }, 900); 
        });
      }         



      // Main portion that opens and closes the 
      $grid.on( 'click', '.grid-item', function() {
        var $this = $(this),
            dataCheck = $this.data('name'),
            dataName = dataCheck && '#name=' + dataCheck;
        if( !$this.hasClass('open') && !$this.hasClass('special') ) {
          $('.grid-item').removeClass('open')
          $this.addClass('open');
          // Switch image
          imageSwitch($this);              
          // Scroll-to portion
          scrollIt($this)
          // Add data attribute 'name' to URL has
          window.location.hash = dataName;          
        } else {
          $this.removeClass('open')
        }
        $grid.isotope();                
      });              

      // // bind filter button click
      // $filter.on( 'click', 'button', function() {
      //   var filterValue = $( this ).attr('data-filter');
      //   $grid.isotope({ filter: filterValue });
      // }); 

      // // Clear select menus and re-isotope
      // $('#clear').on('click', function(el){
      //   el.preventDefault();
      //   // Clear selects, open class, and hash
      //   $('select').prop('selectedIndex',0);
      //   $('.grid-item').removeClass('open');
      //   $filter.removeClass('select_active')
      //   window.location.hash = '';          
      //   $grid.isotope({ filter: ':not(.title-card)' });
      // })

      // // bind filter on select change
      // $filter.on( 'change', 'select', function() {
      //   // get filter value from option value
      //   var filterValue = this.value;
      //   $filter.addClass('select_active')

      //   // use filterFn if matches value
      //   filterValue = filterValue;
      //   $grid.isotope({ filter: filterValue });
      // });

      // // change is-checked class on buttons
      // $filter.each( function( i, buttonGroup ) {
      //   var $buttonGroup = $( buttonGroup );
      //   $buttonGroup.on( 'click', 'button', function() {
      //     $buttonGroup.find('.is-checked').removeClass('is-checked');
      //     $(this).addClass('is-checked');
      //   });
      // }); 
//ADJUST THIS FUNCTION FOR NEW SEARCH FIELD
      // Search field
      $('#searcher').on('click', function(el){  

        el.preventDefault();  
        $searcher_wrap.find('input').focus();
        $searcher_wrap.toggleClass('active_search'); 

        if ( $searcher.hasClass('is-checked') ) {
          $searcher_wrap.find('input').val('')
          $('.quicksearch').keyup();                  
        }
        $searcher.toggleClass('is-checked');
      })

      // Close on escape
      $(document).on('keyup',function(evt) {
          if (evt.keyCode == 27 && $( "#searcher" ).hasClass('is-checked')) {
            $searcher_wrap.toggleClass('active_search');
            $searcher.toggleClass('is-checked');
            $searcher_wrap.find('input').val('')
          }
      });

      // Triggers open upon return key
      $(document).keypress(function(e) {
          if(e.which == 13) {
              $(e.target).trigger('click')
          }
      });

//THIS FUNCTION NEEDS WORK FOR SCHOOLS TO USE
      // Open by URL hash
      if(location.hash.match(/^#name/)) {

          var hashName = location.hash.substring(6),
              $dataName = $('*[data-name="' + hashName + '"]');

          $dataName.toggleClass('open');
          $grid.isotope();

          // Replace with high quality image
          imageSwitch($dataName);

          // Scroll-to portion
          scrollIt($dataName)          

      }               


      // Search through category tags
      $('.tags').on('click', 'a', function(els){
        var $this = $(this),
            el = els;
            $text = $this.text();

        el.preventDefault();
        // Stop propagation, otherwise it will bubble and want to close the slide
        el.stopPropagation();        
        $filter.addClass('select_active');
        $grid.isotope({
          filter: function() {
            return $text ? $(this).find('.tags').text().match( $text ) : true;
          }
        });
      })

   //  });
   //  
   
   //FYP - Reveal filters under categories
   $('.fyp-filter-triggers').on('click', function(e){
      $('hr').addClass('reduce');
      $('ul.fyp-filters.show').removeClass('show');
      $('#'+e.currentTarget.dataset.name).addClass('show');
   })

   //FYP - Click filter sorts the boxes
   $('.fyp-filter-click').on('click', function(e){
      var filterValue = $( this ).attr('data-filter');
      $('.module-hero-image').addClass('hide');
      $('.FYP-home-button').addClass('show');
      $grid.isotope({ filter: '.' + filterValue });
   })

   $('.FYP-home-button').on('click', function(e){
      $('.module-hero-image').removeClass('hide');
      $(this).removeClass('show');
      $grid.isotope({ filter: '.featured' });
   })

   $('.give-link').on('click', function(e){
      var allocCode = $( this ).attr('data-code');
      $('.FYP-home-button').removeClass('show');
      $('body').prepend('<div class="fyp-give-widget-container">' +
                          '<a class="FYP-give-widget-exit"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="46.75px" height="46.812px" viewBox="0 0 46.75 46.812" enable-background="new 0 0 46.75 46.812" xml:space="preserve"><g><line fill="none" stroke="#FFF" stroke-miterlimit="10" x1="1.011" y1="1.001" x2="46.011" y2="46.001"/><line fill="none" stroke="#FFF" stroke-miterlimit="10" x1="46.011" y1="1.001" x2="1.011" y2="46.001"/></g></svg></a> ' +
                          '<iframe src="https://online.gifts.washington.edu/secure/makeagift/givingOpps.aspx?source_typ=3&source=' + allocCode + '&frame_buster=false" title="Giving at the UW" id="UWFOnlineGivingForm" frameborder="0" scrolling="yes" onload="try{document.domain=\'washington.edu\'}catch(e){}" style="display: block; min-width: 662px; height: 763px;"></iframe>' +
                        '</div>');

      $('.FYP-give-widget-exit').on('click', function(e){
          $('.FYP-home-button').addClass('show');
          $('.fyp-give-widget-container').remove();
       });
   })


});  

// Debounce so filtering doesn't happen every millisecond
function debounce( fn, threshold ) {
  var timeout;
  return function debounced() {
    if ( timeout ) {
      clearTimeout( timeout );
    }
    function delayed() {
      fn();
      timeout = null;
    }
    timeout = setTimeout( delayed, threshold || 100 );
  }
}

// IE10 fix for select menu issue
if ("onpropertychange" in document && !!window.matchMedia) {
  $("html").addClass("ie10");
}

