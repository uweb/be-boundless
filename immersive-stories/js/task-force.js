$(function () {

    /*************************
     *  Scroll progress bar  *
     *************************/
    $("#main_content").prognroll();

    // $("#scrollbar").hide(); //hide your div initially
    var topOfOthIntro = $("#intro-vid").offset().top;  //set manually for example
    var introHeight = $("#intro-vid").outerHeight(); //gets height of header
        $(window).scroll(function() {
            if($(window).scrollTop() > ( topOfOthIntro + introHeight ) ) { //scrolled past the other div?
                 $("#scrollbar").addClass('active'); //reached the desired point -- show div
            } else {
                 $("#scrollbar").removeClass('active'); //reached the desired point -- hide div
            }
        });

    // detect if mobile browser. regex -> http://detectmobilebrowsers.com
    var isMobile = (function(a){return /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);

    if(isMobile){ $('#immersive-body').addClass("no-hover"); }


     $('.slick').slick({
         lazyLoad: 'ondemand',
         useTransform: true,
         dots: true,
         infinite: true,
         speed: 300,
         fade: true,
         slidesToShow: 1,
         slidesToScroll: 1,
         mobileFirst: true,
     });


    // prevent accessibility link from scrolling to top
    $(".click").click(function(e){
        e.preventDefault();
    });

    /*************************
     *  World Map/Leaflet    *
     *************************/
    $(document).ready(function() {
      // init map to specific geo coordinates and zoom level
      var mymap = L.map('tfMap').setView([25.634535, 2.568381], 2);

      // disable scroll to zoom
      mymap.scrollWheelZoom.disable();

      // create dark background map from mapbox.com
      L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/dark-v10/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
        accessToken: 'pk.eyJ1IjoidGpzdXciLCJhIjoiY2p1MDlncjBoMjlieTQzb2Z2dHl6bTlzeSJ9.AJNARjc7P6rWDCpx2sOKDw'
      }).addTo(mymap);

      // point location data
      var geojsonData = {
        "type": "FeatureCollection",
        "features": [
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [4.897976, 52.37454]},
            "properties": {"location": "Amsterdam"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-122.623736, 48.502012]},
            "properties": {"location": "Anacortes"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-97.743699, 30.271129]},
            "properties": {"location": "Austin"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [134.755, -24.776109]},
            "properties": {"location": "Australia"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [4.66696, 50.640735]},
            "properties": {"location": "Belgium"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-122.192337, 47.614422]},
            "properties": {"location": "Bellevue"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-122.47886, 48.754402]},
            "properties": {"location": "Bellingham"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-122.272743, 37.871593]},
            "properties": {"location": "Berkeley"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-74.076103, 4.598077]},
            "properties": {"location": "Bogot&aacute;, Columbia", "jobTitle": "Country Operation Director"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-71.058291, 42.360253]},
            "properties": {"location": "Boston"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [4.351697, 50.846557]},
            "properties": {"location": "Brussels"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-58.437076, -34.607562]},
            "properties": {"location": "Buenos Aires"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [31.243666, 30.048819]},
            "properties": {"location": "Cairo, Egypt", "jobTitle": "Humanitarian/Development Professional"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-122.495027, 48.162548]},
            "properties": {"location": "Camano Island"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-107.991707, 55.066692]},
            "properties": {"location": "Canada"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [18.417396, -33.928992]},
            "properties": {"location": "Cape Town, South Africa", "jobTitle": "Key Populations Senior Technical Advisor"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-87.624421, 41.875555]},
            "properties": {"location": "Chicago"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-73.783892, 2.889443]},
            "properties": {"location": "Columbia"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-71.537476, 43.207178]},
            "properties": {"location": "Concord, NH"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [17.011895, 45.564344]},
            "properties": {"location": "Croatia"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [33.145129, 34.982302]},
            "properties": {"location": "Cyprus"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [88.263908, 27.039490]},
            "properties": {"location": "Darjeeling, India", "jobTitle": "Sales and Marketing Manager"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [10.333328, 55.670249]},
            "properties": {"location": "Denmark"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-104.984703, 39.739154]},
            "properties": {"location": "Denver"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [55.188761, 25.07501]},
            "properties": {"location": "Dubai"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-122.377495, 47.810574]},
            "properties": {"location": "Edmonds"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-0.54024, 52.795479]},
            "properties": {"location": "England"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-122.33931, 47.313494]},
            "properties": {"location": "Federal Way"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-122.33931, 47.313494]},
            "properties": {"location": "Federal Way"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [6.146601, 46.201756]},
            "properties": {"location": "Geneva, Switzerland", "jobTitle": "International Medical Secretariat Officer"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-122.33931, 47.313494]},
            "properties": {"location": "Federal Way"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [10.423447, 51.08342]},
            "properties": {"location": "Germany"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [105.85247, 21.02921]},
            "properties": {"location": "Hanoi"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-157.975203, 21.216044]},
            "properties": {"location": "Hawaii"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [106.701756, 10.775844]},
            "properties": {"location": "Ho Chi Minh"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [114.184916, 22.350627]},
            "properties": {"location": "Hong Kong"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [19.506094, 47.181759]},
            "properties": {"location": "Hungary"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-18.105901, 64.984182]},
            "properties": {"location": "Iceland"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [78.667743, 22.351115]},
            "properties": {"location": "India"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-7.97946, 52.865196]},
            "properties": {"location": "Ireland"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [28.965165, 41.009633]},
            "properties": {"location": "Istanbul, Turkey", "jobTitle": "Professional Business Coach and Trainer"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [12.674297, 42.638426]},
            "properties": {"location": "Italy"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-110.761815, 43.479965]},
            "properties": {"location": "Jackson, WI"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-110.761815, 43.479965]},
            "properties": {"location": "Jackson, WI"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [139.239418, 36.574844]},
            "properties": {"location": "Tokyo, Japan", "jobTitle": "Consultant"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-110.761815, 43.479965]},
            "properties": {"location": "Jackson, WI"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [34.860794, 30.90294]},
            "properties": {"location": "Jeruselam"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-159.320748, 22.074286]},
            "properties": {"location": "Kapaa, HI"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-122.244015, 47.75732]},
            "properties": {"location": "Kenmore"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-122.192025, 47.685957]},
            "properties": {"location": "Kirkland"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [101.713636, 3.154687]},
            "properties": {"location": "Kuala Lumpur"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-115.149225, 36.166286]},
            "properties": {"location": "Las Vegas"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-77.036526, -12.062106]},
            "properties": {"location": "Lima"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-0.127647, 51.507322]},
            "properties": {"location": "London"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-118.244476, 34.054935]},
            "properties": {"location": "Los Angeles"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [98.569928, 16.713379]},
            "properties": {"location": "Mae Sot"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [120.97997, 14.590622]},
            "properties": {"location": "Manilla"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-71.106164, 42.41843]},
            "properties": {"location": "Medford, MA"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-80.193659, 25.774266]},
            "properties": {"location": "Miami"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-121.896431, 36.598339]},
            "properties": {"location": "Monterey, CA"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [34.914498, -19.302233]},
            "properties": {"location": "Mozambique"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [36.817245, -1.283253]},
            "properties": {"location": "Nairobi"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [5.534607, 52.237989]},
            "properties": {"location": "Netherlands"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-73.986614, 40.730646]},
            "properties": {"location": "New York"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-122.165794, 47.537704]},
            "properties": {"location": "Newcastle"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [10.739111, 59.913269]},
            "properties": {"location": "Oslo, Norway", "jobTitle": "Research Assistant"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-122.165794, 47.537704]},
            "properties": {"location": "Newcastle"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-118.141449, 34.149551]},
            "properties": {"location": "Pasadena"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [104.999927, 35.000074]},
            "properties": {"location": "China"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-75.045851, -6.86997]},
            "properties": {"location": "Peru"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-75.165222, 39.952583]},
            "properties": {"location": "Philadelphia"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [95.216667, 18.816667]},
            "properties": {"location": "Pyay, Myanmar", "jobTitle": "Peace Corps Volunteer"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-122.20345, 47.479908]},
            "properties": {"location": "Renton"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-122.506947, 47.299485]},
            "properties": {"location": "Ruston"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [2.204531, 48.8426]},
            "properties": {"location": "Saint Cloud, FR"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-117.162771, 32.717421]},
            "properties": {"location": "San Diego"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-122.419236, 37.779281]},
            "properties": {"location": "San Francisco"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-118.491508, 34.010929]},
            "properties": {"location": "Santa Monica"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-46.633308, -23.550520]},
            "properties": {"location": "S&atilde;o Paulo, Brazil", "jobTitle": "CFO/Investor Relations"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [18.386687, 43.851977]},
            "properties": {"location": "Sarajevo"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-122.330062, 47.603832]},
            "properties": {"location": "Seattle, Washington", "jobTitle": "Ship's officer"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-14.452961, 14.475061]},
            "properties": {"location": "Senegal"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [126.978291, 37.566679]},
            "properties": {"location": "Seoul"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [121.488892, 31.225344]},
            "properties": {"location": "Shanghai"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [49.083416, 8.367677]},
            "properties": {"location": "Somalia", "jobTitle": "Deputy Director Horn of Africa"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [22.937506, -30.559483]},
            "properties": {"location": "South Africa"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [127.940856, 36.558191]},
            "properties": {"location": "South Korea"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-117.421226, 47.657943]},
            "properties": {"location": "Spokane"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-78.427788, 38.13208]},
            "properties": {"location": "Springfield, VA"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [18.071094, 59.325117]},
            "properties": {"location": "Stockholm"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [8.231974, 46.798562]},
            "properties": {"location": "Switzerland"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-122.439875, 47.24958]},
            "properties": {"location": "Tacoma"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [121.56368, 25.03752]},
            "properties": {"location": "Taipei"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [100.83273, 14.897192]},
            "properties": {"location": "Thailand"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [9.053553, 48.523616]},
            "properties": {"location": "Tubingen"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-3.276575, 54.702355]},
            "properties": {"location": "United Kingdom"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-122.46067, 47.44805]},
            "properties": {"location": "Vashon"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-122.46067, 47.44805]},
            "properties": {"location": "Vashon"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-77.036646, 38.894955]},
            "properties": {"location": "Washington, D.C.", "jobTitle": "Senior Quantitative Analyst"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [174.776230, -41.286461]},
            "properties": {"location": "Wellington, New Zealand", "jobTitle": "Senior Quantitative Analyst"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [-120.310349, 47.42346]},
            "properties": {"location": "Wentachee"}
          },
          { "type": "Feature",
            "geometry": {"type": "Point", "coordinates": [139.636768, 35.444991]},
            "properties": {"location": "Yokohama"}
          },
        ]
      };

      // circle styling
      var geojsonMarkerStyle = {
        radius: 3,
        fillColor: "#f88379",
        color: "#f88379",
        weight: 1,
        opacity: 1,
        fillOpacity: 0.8
      };

      function onEachFeature(feature, layer) {
        // if there is a job title, add it as a permanent tooltip
        if (feature.properties && feature.properties.jobTitle) {
          layer.bindTooltip('<div class="job-title">' + feature.properties.jobTitle + '</div><div class="location">' + feature.properties.location + '</div>', {
            permanent: true,
            direction: 'top',
          });
        }
      }

      // add geoJSON to map
      L.geoJSON(geojsonData, {
        pointToLayer: function (feature, latlng) {
          return L.circleMarker(latlng, geojsonMarkerStyle);
        },
        onEachFeature: onEachFeature
      }).addTo(mymap);
    });

  // header map areas
  function toggleBars() {
    $('#area-1').fadeIn(1000).fadeOut(5000).delay(1000)
    $('#area-2').fadeIn(2000).fadeOut(5000).delay(2000)
    $('#area-4').fadeIn(3000).fadeOut(5000).delay(3000)
    $('#area-3').fadeIn(4000).fadeOut(5000).delay(4000)
    $('#area-5').fadeIn(5000).fadeOut(5000).delay(5000)
    $('#area-10').fadeIn(5000).fadeOut(5000).delay(6000)
    $('#area-6').fadeIn(7000).fadeOut(5000).delay(7000)
    $('#area-9').fadeIn(8000).fadeOut(5000).delay(8000)
    $('#area-7').fadeIn(9000).fadeOut(5000).delay(9000)
    $('#area-8').fadeIn(10000).fadeOut(5000).delay(10000)
    setTimeout(function(){
        toggleBars();
    }, 10);
  }

  toggleBars();

  //$('#area-2').hide();


});
