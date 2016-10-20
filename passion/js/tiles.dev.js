//Stuff that needs to be fired immediately
$(document).ready(function() {

   $('body').on('click', '.fyp-filter-triggers', function(e){
      e.preventDefault();
      $('hr').addClass('reduce');
      $('ul.fyp-filters.show').removeClass('show');
      $('#'+e.currentTarget.dataset.name).addClass('show');
      $('.flip-container.active').removeClass('active');
      $( e.currentTarget ).find('.flip-container').addClass('active');
      
   })


   $('#fyp-search-button').on('click', function(e){
    e.preventDefault();
    $('html, body').animate({
            scrollTop: ( $("#fyp-search-button").offset().top)
          }, 900);
   })




})



$(window).load(function(){    

    
//GA Tracking Script 
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-15747328-7', 'auto');
ga('send', 'pageview');

      var qsRegex,
          $searcher_wrap = $( "#searcher_wrap" ),
          $searcher = $( "#searcher" ),
          $window = $( window ).height(),
          $window_width = $( window ).width(),
          $filter = $('#filter');
          //$lastLocation = 0;

      // init Isotope
      var $grid = $('.grid').isotope({
        itemSelector: '.grid-item',
        percentPosition: true,
        masonry: {
          columnWidth: '.grid-sizer'
        },
        filter: '.featured',
        getSortData : {
          selected : function( $item ){
            $item = $( $item );
            // sort by selected first, then by original order
            return ( $item.hasClass('open') ? -1 : 0 ) + $item.data('sort');
          }
        },
        sortBy : 'selected'
      });

      var $searchgrid = $('.search-grid').isotope({
                              itemSelector: '.grid-item',
                              percentPosition: true,
                              masonry: {
                                columnWidth: '.grid-sizer'
                              }
                            });

      // Remove overlay once all is loaded
      $grid.one( 'arrangeComplete', function() {
        // $('#overlay').fadeOut(300, function(){
        //   $(this).remove();
        // });
        $('.grid').removeClass('hide');
      });
    
     // Fire isotope initially
     $grid.isotope();
     $('.grid').removeClass('hide');

      
     //FYP - Click filter sorts the boxes
     $('body').on('click', '.fyp-filter-click', function(e){
        e.preventDefault();
        var filterValue = $( this ).attr('data-filter');
        
        $prevSelect = $('.grid-item.open:not(.search-more):not(.filter-item)');
        $prevSelect.removeClass('open');
        $grid.isotope( 'updateSortData', $prevSelect );
        
        $grid.isotope({ filter: '.' + filterValue + ':not(.unit-small)' });
        $('html, body').animate({
              scrollTop: ( $(".fyp-search").offset().top)// - parseInt( $("#main-content").css("margin-top").replace("px", "") ) )
            }, 900);
        //ADDS #URL
        dataCheck = $( this ).data('filter'),
        dataName = dataCheck && '#' + dataCheck;
        
        window.location.hash = dataName;

        ga('send', 'event', $(this).attr('data-category'), 'Click', $(this).attr('data-label'));
     })


//ADJUST THIS FUNCTION FOR THE NEW SEARCH
      // use value of search field to filter
     var $quicksearch = $('.quicksearch').keyup( debounce( function() {
      if($quicksearch.val().length > 1){
         qsRegex = new RegExp( $quicksearch.val(), 'gi' );
         $grid.isotope({
           filter: function() {
             var $this = $(this);
             var search = qsRegex ? $this.text().match( qsRegex ) : true;
             return (search && $this.is( ':not(.unit-item):not(.filter-item)' )) || $this.is( '.search-more' );
           }
         });
          if($('.grid-item.search-more').hasClass('open')){
            $('.grid-item.search-more').removeClass('open');
            $('.fyp-search-more-label').removeClass('hide');
            $('.fyp-no-results-label').addClass('hide');
            $grid.isotope();
          }
          // $searchgrid.isotope( 'remove', $('.grid-item.search-item') );
          // $searchgrid.isotope( 'remove', $('.grid-sizer.search-item') );
          $('.search-grid').empty();
          if( $grid.data('isotope').filteredItems.length < 5) {
            $('.search-more').trigger('click');
          }
         //$('#empty').addClass('active');
      } //else {
      //   $('#empty').trigger('click'); 
      // }
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
      $grid.on( 'click', '.grid-item:not(.filter-item):not(.search-more):not(.open)', function() {
        var $this = $(this);
            // dataCheck = $this.data('name'),
            // dataName = dataCheck && '#name=' + dataCheck;
        if( !$this.hasClass('special') && !$this.hasClass('search-more') && !$this.hasClass('fyp-units') ) {
          $prevSelect = $('.grid-item.open:not(.search-more):not(.filter-item)');
          $prevSelect.removeClass('open');
          $grid.isotope( 'updateSortData', $prevSelect ); 
          $this.addClass('open');
          $grid.isotope( 'updateSortData', $this);
          // Switch image
          imageSwitch($this);              
          // Scroll-to portion
          scrollIt($this)
          // Add data attribute 'name' to URL has
          // window.location.hash = dataName;          
        } 
        $grid.isotope();                
      });              

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
        $prevSelect = $('.grid-item.open:not(.search-more):not(.filter-item)');
        $prevSelect.removeClass('open');
        $grid.isotope( 'updateSortData', $prevSelect );
        $grid.isotope();
      })

      //DO WE WANT THIS???
      // $('#searcher').on('keyup', function(e){
      //   $('html, body').animate({
      //       scrollTop: ( $("#searcher").offset().top - $("#campaign-header").height() )
      //     }, 900);
      // })

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
              e.preventDefault();
              $(e.target).trigger('click')
          }
      });
   
   
   $('.empty-fund').on('click', function(e){
      e.preventDefault();
      e.stopPropagation();
      //close the fund
      $prevSelect = $('.grid-item.open:not(.search-more):not(.filter-item)');
      $prevSelect.removeClass('open');
      $grid.isotope( 'updateSortData', $prevSelect );
      $grid.isotope();
   })

   // Check for empty
  function isEmpty( el ){
    return !$.trim(el.html())
  }

   $('body').on('click', '.give-link', function(e){
      e.preventDefault(); 
      // var urlParam = location.hash.split("appeal=");
      // var appeal = urlParam[1] ? ( "&appeal=" + urlParam[1].split("&")[0] ) : "";
      var allocCode = $( this ).attr('data-code');
      //var source = (allocCode != "") ? 'https://online.gifts.washington.edu/secure/makeagift/givingOpps.aspx?nobanner=true&source_typ=3&source=' + allocCode + appeal + '' : 'https://online.gifts.washington.edu/secure/?nobanner=true&tab=0' + appeal + '';
      var source = (allocCode != "") ? 'https://online.gifts.washington.edu/secure/makeagift/givingOpps.aspx?nobanner=true&source_typ=3&source=' + allocCode + '&appeal=17XFP' : 'https://online.gifts.washington.edu/secure/?nobanner=true&tab=0&appeal=17XFP';

      $('#give-iframe').empty();

      $('<iframe>', {
        src: source,
        frameborder: 0,
        width: '100%',
        height: '100%',
      }).appendTo('#give-iframe');
      
      if($('#give-now')[0].innerHTML === 'Give now'){
        $('#give-now')[0].innerHTML = 'Close';
      } 

      $('body').toggleClass('give-modal-active');

      ga('send', 'event', 'Give Now Button', 'Click', allocCode);
   })


   $('.unit-small').on('click', function(e){
      e.preventDefault();
      var filterValue = $( this ).attr('data-name');
      //$('#empty').trigger('click'); 
      //
      $prevSelect = $('.grid-item.open:not(.search-more):not(.filter-item)');
      $prevSelect.removeClass('open');
      $grid.isotope( 'updateSortData', $prevSelect );
      //
      //$('.module-hero-image').addClass('hide');
      //$('#empty').addClass('active-filter');
      //$('#empty').addClass('active');
      $grid.isotope({ filter: '.' + filterValue + ':not(.unit-small)' });
   });


   //search api call for more search results
   $('.search-more').on('click', function(e){
      e.preventDefault();
      e.stopPropagation();
      $searchTerm = $('#searcher').val();
      $prevSelect = $('.grid-item.open:not(.search-more):not(.filter-item)');
      $prevSelect.removeClass('open');
      $grid.isotope( 'updateSortData', $prevSelect ); 
      // $grid.isotope();
      $.getJSON('http://service.gifts.washington.edu/OnlineAllocation/Search/' + $searchTerm + '?callback=?', function(data) {
          //console.log(data);
          //$('.grid-item.search-more').addClass('hide');
          if(data.length == 0){
            $('.fyp-search-more-label').addClass('hide');
            $('.fyp-no-results-label').removeClass('hide');
          } else {
            $('.fyp-search-more-label').removeClass('hide');
            $('.fyp-no-results-label').addClass('hide');
          }
          var searchItems = new Array();
          if( !$('.grid-sizer.search-item').length ) {  
            searchItems.push($('<li class="grid-sizer search-item"></li>')); //this is adding multiple on changed searches
          }
          data.forEach(function(fund){
            var alloc        = fund.Key,
                title        = fund.Name,
                desc         = fund.Description,
                shortDesc    = (desc.length < 100) ? desc : (desc.substr(0,100) + "...");
            searchItems.push($(
                '<li tabindex="0" class="flip-container grid-item search-item ">' +
                '  <div class="flipper" role="button">' +
                '    <div class="front">' +
                '      <p>' + title + '</p>' +
                '    </div>' +
                '    <div class="back">' +
                '      <h3>' + title + '</h3>' +
                //'      <!-- <p class="back-unit-name">ASSOCIATED UNIT???</p> -->' +
                '      <p class="short-desc">' + shortDesc + '</p>' +
                '    </div>' +
                '    <div tabindex="0" class="full-bio">' +
                '      <h2>' + title + '</h2>' +
                '      <div class="bio-text">' +
                '        <p>' + desc + '</p>' +
                '      </div>' +
                '      <div class="give-button">' +
                '        <a href="#" class="give-link" data-code="' + alloc + '">Give Now</a>' +
                '      </div>' +
                '      <button class="empty-fund">' +
                '        Close current fund' +
                '        <svg aria-hidden="true" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="34.147px" height="37.833px" viewBox="0 0 34.147 37.833" enable-background="new 0 0 34.147 37.833" xml:space="preserve">' +
                '          <line fill="none" stroke="#A7A9AC" stroke-width="2" stroke-miterlimit="10" x1="9.616" y1="8.449" x2="31.782" y2="30.614"></line>' +
                '          <line fill="none" stroke="#A7A9AC" stroke-width="2" stroke-miterlimit="10" x1="31.782" y1="8.449" x2="9.616" y2="30.614"></line>' +
                '        </svg>' +
                '      </button>' +
                '    </div>' +
                '  </div>' +
                '</li>'));
            
          });
          
          $('ul.search-grid').empty();
          $('ul.search-grid').append(searchItems);
          $searchgrid.isotope('reloadItems');
          $('.grid-item.search-more').addClass('open');
          $grid.isotope();  
          $searchgrid.isotope();  
       
          $('.search-grid').on( 'click', '.search-item', function() {
                  var $this = $(this);
                  if( !$this.hasClass('open')) {
                    $('.grid-item:not(.search-more)').removeClass('open')
                    $this.addClass('open');
                    $searchgrid.isotope();     
                    // Scroll-to portion
                    //scrollIt($this);          
                  }                 
             });
          $('.empty-fund').on('click', function(e){
              e.preventDefault();
              e.stopPropagation();
              //close the fund
              $prevSelect = $('.search-item.open:not(.search-more)');
              $prevSelect.removeClass('open');
              $searchgrid.isotope();
           });

          
      });
      
      
   });


//THIS FUNCTION NEEDS WORK FOR SCHOOLS TO USE
      // Open by URL hash
      if(location.hash != '') {

          //var hashName = location.hash.substring(1).split("&")[0];
          var hashName = location.hash.substring(1);

          //if(!hashName.includes('appeal=')) {

              //$dataName = $('*[data-filter="' + hashName + '"]');

              //$dataName.trigger('click'); //This doesnt work for pillars and such that aren't click filters on page...
                  //console.log('clicked');
              //$('#empty').addClass('active');
              $grid.isotope({ filter: '.' + hashName + ':not(.unit-small)' });
              $('html, body').animate({
                    scrollTop: ( $(".fyp-search").offset().top)// - parseInt( $("#main-content").css("margin-top").replace("px", "") ) )
                  }, 900);
          //}

          
      } 
  

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



