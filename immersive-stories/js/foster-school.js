$(function(){

  var body = document.getElementsByTagName('body')[0];
  var controllerFoster = new ScrollMagic.Controller();
  var slideshowFlag = true;
  var $windowHeight = $(window).height();

  currentController = controllerFoster;

    var introMedicine = new ScrollMagic.Scene({
      triggerElement: '#intro-vid',
      triggerHook: 0,
      duration: '100%',
    })
    .setPin('.intro', {pushFollowers: false})
    .setClassToggle("body", 'medicineIntro')
    .setTween('#intro-text', 1, { opacity: 0, transform: 'translateY(-100px)', ease: Power0.easeIn })
    .on('enter',function(){
      $('video').get(0).play()
    })
    .addTo(controllerFoster);
    $(window).resize(function(){
        introMedicine.update(true);
    });

    var addSlideshow = new ScrollMagic.Scene({
      triggerElement: '.profile',
      triggerHook: 1,
    })
    .on("enter", function(){
      if ( slideshowFlag ) {
        $('.foster-slideshow').slick({
          lazyLoad: 'ondemand',
          useTransform: true,
          dots: true,
          infinite: false,
          speed: 300,
          slidesToShow: 1,
          slidesToScroll: 1,
        });    
        slideshowFlag = false;
      }
  
    })
    .addTo(controllerFoster);

    
    // Map

    var strokeLength = Math.round(document.querySelector('.path').getTotalLength() * 1.3),
        strokeDashoffset = strokeLength,
        miles = document.getElementById('counter'),
        $busMapHeight = $(".bus-map").height();

    function applyStroke() {
      TweenMax.set($(".path"), { strokeDashoffset:strokeDashoffset });
    }

    var tl2 = new TimelineMax();
        tl2.to($(".bus-map"), 4, { onUpdate:applyStroke })

    var map = new ScrollMagic.Scene({
        triggerElement: ".bus-map",
        duration: $windowHeight - ($busMapHeight * 0.5),
        offset: $busMapHeight * 0.9,
        triggerHook: 1,
        reverse: true
    })
    .setTween(tl2)
    .on('progress', function(e){
      strokeDashoffset = (1 - e.progress) * strokeLength;
      miles.innerHTML = Math.round(e.progress * 144);
    })
    .addTo(controllerFoster);
    $(window).resize(function(){
        map.duration($(window).height());
        map.update(true);
    });


    // Parallax photos 

    var picsParallax = new TimelineMax ()
          .add([
            TweenMax.to('.inset-pics', 1,    { transform: 'translateY(-50px)', ease: Power0.easeIn }),
            TweenMax.to('.inset-pics div:nth-child(2)', 1,    { transform: 'translateY(-50px)', ease: Power0.easeIn }),
            TweenMax.to('.inset-pics div:nth-child(3)', 1,    { transform: 'translateY(-100px)', ease: Power0.easeIn, delay: 0.5 }),
          ])

    var cloudMoon = new ScrollMagic.Scene({
      triggerElement: '.inset-pics',
      triggerHook: 1,
      offset: 0,
      duration: '150%',
      reverse: true
    })
    .setTween(picsParallax)
    .addTo(controllerFoster)


    // var studentpic3 = new ScrollMagic.Scene({
    //   triggerElement: "#profile-3",
    //   triggerHook: 0.7,
    //   duration: '80%',
    // })
    // .setTween(TweenMax.to('#profile-3 .col-a img', 1, { scaleX:2, scaleY:2, ease: Power0.easeIn }))
    // .addTo(controllerFoster);

    $( ".pause" ).click(function(e) { 
      var $this = $(e.target);        
      var $vid = $(e.target).parent().find('video');
      if( $vid.get(0).paused ) { $vid.get(0).play() } else { $vid.get(0).pause() }
      $this.toggleClass('paused');
    });


    // 47.60, 122.33




    // var testData = {
    //   max:1,
    //   data:[
    //     {lat:47.435597,lng:-122.277349,count:2}, // 47.435597, -122.277349  Academy of Citizenship and Empowerment  Seatac  2
    //     {lat:47.880940,lng:-122.178467,count:1}, // 47.880940, -122.178467 Archbishop Murphy High School Everett 47.9790° N, 122.2021  1
    //     {lat:47.267849,lng:-122.222378,count:1}, // 47.267849, -122.222378 Auburn Riverside  Auburn  1
    //     {lat:47.238586,lng:-122.485314,count:2}, // 47.238586, -122.485314 Bellarmine Preparatory School Tacoma  2
    //     {lat:47.605242,lng:-122.198590,count:3}, // 47.605242, -122.198590 Bellevue High School  Bellevue  3    
    //     {lat:47.437132,lng:-122.328119,count:1}, // 47.437132, -122.328119 Big Picture High School Seatac  1
    //     {lat:47.760937,lng:-122.219047,count:1}, // 47.760937, -122.219047 Bothell High School Bothell 1
    //     {lat:47.050617,lng:-122.935167,count:1}, // 47.050617, -122.935167 Capital High School Olympia 1
    //     {lat:47.924939,lng:-122.221528,count:2}, // 47.924939, -122.221528 Cascade High School Everett 2
    //     {lat:47.201369,lng:-122.543520,count:1}, // 47.201369, -122.543520 Charles Wright Academy  Tacoma  1
    //     {lat:47.530149,lng:-122.366184,count:2}, // 47.530149, -122.366184 Chief Sealth International  Seattle, SW 2
    //     {lat:47.552231,lng:-122.314178,count:8}, // 47.552231, -122.314178 Cleveland High School Seattle, S  8
    //     {lat:47.231138,lng:-122.355165,count:1}, // 47.231138, -122.355165 Columbia Jr High School Fife  1
    //     {lat:47.221480,lng:-122.549627,count:1}, // 47.221480, -122.549627 Curtis Senior High School Tacoma  1
    //     {lat:47.317168,lng:-122.368029,count:2}, // 47.317168, -122.368029 Decatur High School Federal Way 2
    //     {lat:46.589830,lng:-120.564586,count:1}, // 46.589830, -120.564586 Eisenhower High School  Yakima  1
    //     {lat:47.500018,lng:-122.345188,count:1}, // 47.500018, -122.345188 Evergreen (HS3) Seattle, SW 1
    //     {lat:47.327305,lng:-122.314217,count:2}, // 47.327305, -122.314217 Federal Way High  Federal Way 2
    //     {lat:47.291210,lng:-122.321576,count:1}, // 47.291210, -122.321576 Federal Way Public Academy  Federal Way 1
    //     {lat:47.474954,lng:-122.279908,count:9}, // 47.474954, -122.279908 Foster  Tukwila 9
    //     {lat:47.576334,lng:-122.293387,count:12}, // 47.576334, -122.293387 Franklin  Seattle, S  12
    //     {lat:47.500040,lng:-122.345295,count:3}, // 47.500040, -122.345295 Health Sciences and Human Services  Seattle, SW 3
    //     {lat:47.465835,lng:-122.330327,count:1}, // 47.465835, -122.330327 Highline High School  Burian  1
    //     {lat:47.626291,lng:-122.304155,count:3}, // 47.626291, -122.304155 Holy Names Academy  Seattle, E  3
    //     {lat:47.741555,lng:-122.222126,count:5}, // 47.741555, -122.222126 Inglemoor High School Kenmore 5
    //     {lat:47.726524,lng:-122.337581,count:5}, // 47.726524, -122.337581 Ingraham  Seattle, NW 5
    //     {lat:47.628949,lng:-122.123988,count:1}, // 47.628949, -122.123988 Interlake High School Bellevue  1
    //     {lat:47.522543,lng:-122.028011,count:1}, // 47.522543, -122.028011 Issaquah High School  Issaquah  1
    //     {lat:47.478215,lng:-122.331933,count:1}, // 47.478215, -122.331933 John F. Kennedy Catholic High School  Burian  1
    //     {lat:47.715388,lng:-122.198879,count:2}, // 47.715388, -122.198879 Juanita Kirkland  2
    //     {lat:47.478360,lng:-122.332147,count:2}, // 47.478360, -122.332147 Kennedy Catholic High School  Burian  2
    //     {lat:47.373926,lng:-122.207102,count:7}, // 47.373926, -122.207102 Kent Meridian Kent  7
    //     {lat:47.331469,lng:-122.057209,count:1}, // 47.331469, -122.057209 Kentlake Senior High School Kent  1
    //     {lat:47.416654,lng:-122.174084,count:3}, // 47.416654, -122.174084 Kentridge Kent  3
    //     {lat:47.370751,lng:-122.120171,count:1}, // 47.370751, -122.120171 Kentwood Highschool Kent  1
    //     {lat:47.479564,lng:-122.117560,count:1}, // 47.479564, -122.117560 Liberty High School Renton  1
    //     {lat:47.225607,lng:-122.441536,count:1}, // 47.225607, -122.441536 Lincoln High School Tacoma  1
    //     {lat:47.454204,lng:-122.167659,count:1}, // 47.454204, -122.167659 Lindbergh High School Renton  1
    //     {lat:47.833568,lng:-122.239831,count:3}, // 47.833568, -122.239831 lynnwood high school  Lynnwood  3
    //     {lat:47.845515,lng:-122.314762,count:1}, // 47.845515, -122.314762 Meadowvale High School  Lynnwood  1
    //     {lat:47.399648,lng:-122.307093,count:5}, // 47.399648, -122.307093 Mount Rainier Des Moines  5
    //     {lat:48.420466,lng:-122.327991,count:4}, // 48.420466, -122.327991 Mount Vernon High School  Mount Vernon  4
    //     {lat:47.801659,lng:-122.288326,count:1}, // 47.801659, -122.288326 Mountlake Terrace Highschool  Mountlake Terrace 1
    //     {lat:47.399906,lng:-122.307859,count:1}, // 47.399906, -122.307859 Mt. Rainier High School Des Moines  1
    //     {lat:47.707521,lng:-122.295237,count:1}, // 47.707521, -122.295237 Nathan Hale Seattle, NE 1
    //     {lat:47.052245,lng:-122.832218,count:2}, // 47.052245, -122.832218 North Thurston High School  Lacey 2
    //     {lat:47.608134,lng:-122.325252,count:3}, // 47.608134, -122.325252 odea  Seattle, E  3
    //     {lat:47.018600,lng:-122.884451,count:1}, // 47.018600, -122.884451 Olympia High School Olympia 1
    //     {lat:46.823339,lng:-119.166310,count:1}, // 46.823339, -119.166310 Othello High School Othello (E Washington)  1
    //     {lat:47.191442,lng:-122.302211,count:2}, // 47.191442, -122.302211 Puyallup  Puyallup  2
    //     {lat:47.520629,lng:-122.300690,count:3}, // 47.520629, -122.300690 Raisbeck Aviation Seattle, S  3
    //     {lat:47.481762,lng:-122.212077,count:1}, // 47.481762, -122.212077 Renton High School  Renton  1
    //     {lat:47.677019,lng:-122.313526,count:2}, // 47.677019, -122.313526 Roosevelt High School Seattle, NE 2
    //     {lat:47.608735,lng:-122.152240,count:1}, // 47.608735, -122.152240 Sammamish High School Sammamish 1
    //     {lat:47.613866,lng:-122.312578,count:1}, // 47.613866, -122.312578 Seattle Academy of Arts and Sciences  Seattle, C  1
    //     {lat:47.641511,lng:-122.316854,count:1}, // 47.641511, -122.316854 Seattle Preparatory School  Seattle, C  1
    //     {lat:47.740485,lng:-122.303323,count:4}, // 47.740485, -122.303323 Shorecrest High School  Shoreline, E  4
    //     {lat:47.755362,lng:-122.350356,count:12}, // 47.755362, -122.350356 Shorewood Shoreline, W  12
    //     {lat:46.178602,lng:-119.195997,count:1}, // 46.178602, -119.195997 Southridge High School  Kennewick 1
    //     {lat:47.613542,lng:-122.326184,count:2}, // 47.613542, -122.326184 The Northwest School  Seattle, C  2
    //     {lat:47.693801,lng:-122.069231,count:1}, // 47.693801, -122.069231 The Overlake School Redmond 1
    //     {lat:47.344501,lng:-122.279248,count:3}, // 47.344501, -122.279248 Thomas Jefferson  Auburn  3
    //     {lat:47.277985,lng:-122.314414,count:1}, // 47.277985, -122.314414 Todd Beamer High School Federal Way 1
    //     {lat:47.686846,lng:-122.300655,count:1}, // 47.686846, -122.300655 University Prep Seattle, NE 1
    //     {lat:47.891925,lng:-122.237639,count:1}, // 47.891925, -122.237639 Voyager Middle School Everett 1
    //     {lat:47.576881,lng:-122.384153,count:4}, // 47.576881, -122.384153 West Seattle High School  Seattle, SW 4

    
    //   ]
    // };


    // var baseLayer = L.tileLayer(
    //   'https://api.mapbox.com/styles/v1/mapbox/light-v9/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoidXd3ZWJ0ZWFtIiwiYSI6ImNpcjNyM20zcjAwMTcxN25tOXIycTc1a3MifQ.wCpOJcC1QNSVgkWYhzDHWw',
    //   {
    //     maxZoom: 18
    //   }
    // );

    // var cfg = {
    //   // radius should be small ONLY if scaleRadius is true (or small radius is intended)
    //   // if scaleRadius is false it will be the constant radius used in pixels
    //   "radius": 0.15,
    //   "maxOpacity": 0.7, 
    //   // scales the radius based on map zoom
    //   "scaleRadius": true, 
    //   // if set to false the heatmap uses the global maximum for colorization
    //   // if activated: uses the data maximum within the current map boundaries 
    //   //   (there will always be a red spot with useLocalExtremas true)
    //   "useLocalExtrema": false,
    //   // which field name in your data represents the latitude - default "lat"
    //   latField: 'lat',
    //   // which field name in your data represents the longitude - default "lng"
    //   lngField: 'lng',
    //   // which field name in your data represents the data value - default "value"
    //   valueField: 'count'
    // };


    // var heatmapLayer = new HeatmapOverlay(cfg);

    // var map = new L.Map('mapid', {
    //   center: new L.LatLng(47.43, -120.90),
    //   zoom: 7,
    //   layers: [baseLayer, heatmapLayer]
    // });

    // heatmapLayer.setData(testData);




    // flexibility(document.getElementById('intro-vid'));

})

