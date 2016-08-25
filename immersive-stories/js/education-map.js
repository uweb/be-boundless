function mapInit(){

    //init map to specific geo coordinates and zoom level
    var mymap = L.map('mapid').setView([47.45, -121.8], 9);
    //disable scroll to zoom
    mymap.scrollWheelZoom.disable();

    //create light background map from mapshaper
    L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/light-v9/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoidXd3ZWJ0ZWFtIiwiYSI6ImNpcjNyM20zcjAwMTcxN25tOXIycTc1a3MifQ.wCpOJcC1QNSVgkWYhzDHWw', {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
        maxZoom: 15,
        minZoom: 9,
    }).addTo(mymap);


    //add district lines to map from geojson file
    $.ajax({
    dataType: "json",
    url: "/cms/wp-content/themes/be-boundless/immersive-stories/img/education/districts.json",
    success: function(e) {
        L.geoJson(e, {
            filter: filterDistrict,
            onEachFeature: onEachDistrict,
            style: styleDistrict
        }).addTo(mymap);
    }
    }).error(function() {});


    //add legend for cloropleth to map
    var legend = L.control({position: 'bottomright'});
    legend.onAdd = legendAdd;
    legend.addTo(mymap);


    //add school sites to map from cloropleth
    $.ajax({
    dataType: "json",
    url: "/cms/wp-content/themes/be-boundless/immersive-stories/img/education/schools.geojson",
    success: function(e) {
        school_sites = L.geoJson(e, {
            filter: filterSchool,
            onEachFeature: onEachSchool,
            //style: styleSchool
            pointToLayer: schoolPoints
        });
    }
    }).error(function() {});

    //filter points out by zoom
    mymap.on('zoomend', function (e) {
        var currentZoom = mymap.getZoom();
        switch (currentZoom) {
            case 15:
            case 14:
            case 13:
            case 12:
            case 11:
             school_sites.addTo(mymap);
            break;
            default:
             mymap.removeLayer(school_sites);
            break;
        }
    });



    //make new icon
    function schoolPoints(feature, latlng) {
        var icon = new L.Icon({ 
                            iconSize: [40, 40],
                            iconAnchor: [20, 40],
                            popupAnchor:  [0, -40],
                            iconUrl: '/cms/wp-content/themes/be-boundless/immersive-stories/img/education/education-map-marker.png'
                        });
        return L.marker(latlng, {icon: icon});

    }

    //color for cloropleth
    function getColor(e) {
        var colored = chroma.scale(['#00FF00', '#FFFF00', '#FF0000']).domain([0, 25, 100]);
        return colored(e).hex();
    } 

    //add color of cloropleth to districts
    function styleDistrict(feature) {
        return {
            fillColor: getColor(feature.properties.freeredlunch),
            tabIndex: 0
        };
    }

    //filter districts on whether they have info
    function filterDistrict(feature, layer) {
        return feature.properties.freeredlunch;
    }

    //filter school on whether they have coordinates
    function filterSchool(feature, layer) {
        return (feature.geometry.coordinates[0] !== 0);
    }

    //for adding district pop-up
    function onEachDistrict(feature, layer) {
        layer.bindPopup(getDistrictPopup(feature));
        console.log(layer);
        console.log(layer.Path);
    }

    //for adding school pop-up
    function onEachSchool(feature, layer) {
        layer.bindPopup(getSchoolPopup(feature));
    }

    //district pop up box
    function getDistrictPopup(data) {
        white = Math.round(data.properties.PercentWhite);
        nonWhite = 100 - white; 
        return "<div class='popupbox'><table width='200px'>" + 
                    "<tr class='district-name row'><td colspan='4'>" + data.properties.NAME + "</td></tr>" +
                    "<tr class='lunch data row'><td class='percent'>" + Math.round(data.properties.freeredlunch) + "%" + "</td><td colspan='3' class='label'>Free / reduced lunch</td></tr>" +
                    "<tr class='grad data row'><td class='percent'>" + Math.round(data.properties.GradRate) + "%" + "</td><td colspan='3' class='label'>Graduation rate</td></tr>" +
                    "<tr class='esl data row'><td class='percent'>" + Math.round(data.properties.ESL) + "%" + "</td><td colspan='3' class='label'>ESL</td></tr>" +
                    "<tr class='graph row'>" + 
                        "<td rowspan='5' colspan='4' class='nonWhite'>" + "<div class='containerGraph'>" +
                            "<div class='bar' style='width:" + nonWhite + "%;'><p>" + nonWhite + "%</p></div>" +
                            "<p class='tag'>Students of color</p>" + "</div>" +
                        "</td>" +
                    "</tr>" +
                    "</table></div>";
    }

    //district pop up box
    function getSchoolPopup(data) {
        white = Math.round(data.properties.PercentWhite);
        nonWhite = 100 - white; 
        UWCand = data.properties.UWPrincipals + data.properties.UWSI + data.properties.UWTeachers;
        popup = "<div class='popupbox'><table width='220px'>" + 
                    "<tr class='district-name row'><td colspan='4'>" + data.properties.School + "</td></tr>" +
                    "<tr class='lunch data row'><td class='percent'>" + Math.round(data.properties.PercentFreeorReducedPricedMeals) + "%" + "</td><td colspan='3' class='label'>Free / reduced lunch</td></tr>";
        popup += (data.properties.GraduationRate === 0) ? "" : "<tr class='grad data row'><td class='percent'>" + Math.round(data.properties.GraduationRate) + "%" + "</td><td colspan='3' class='label'>Graduation rate</td></tr>";
        popup +=    "<tr class='esl data row'><td class='percent'>" + Math.round(data.properties.PercentESL) + "%" + "</td><td colspan='3' class='label'>ESL</td></tr>";
        popup += (UWCand === 0) ? "" : "<tr class='cand data row'><td class='percent'>" + UWCand + "</td><td colspan='3' class='label'>UW leadership candidates</td></tr>";
        popup +=    "<tr class='graph row'>" + 
                        "<td rowspan='5' colspan='4' class='nonWhite'>" + "<div class='containerGraph'>" +
                            "<div class='bar' style='width:" + nonWhite + "%;'><p>" + nonWhite + "%</p></div>" +
                            "<p class='tag'>Students of color</p>" + "</div>" +
                        "</td>" +
                    "</tr>" +
                    "</table></div>";
        return popup;
    }

    //create cloropleth scale
    function legendAdd(map) {

        var div = L.DomUtil.create('div', 'info legend'),
            grades = [0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100],
            labels = [];

        // loop through our density intervals and generate a label with a colored square for each interval
        for (var i = 0; i < grades.length; i++) {
            div.innerHTML +=
                '<i style="background:' + getColor(grades[i]) + '">' + ((i === 0) ? '<p>0</p>' : '') + ((i === 10) ? '<p class="hundred">100</p>' : '')  + '</i> ';
        }
        div.innerHTML += '<br/>' + '<p class="lunchLabel">FREE / REDUCED LUNCH</p>';

        return div;
    }

}
