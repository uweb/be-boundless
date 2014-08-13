<div class="uw-charts">
  <div class="container">

    <div class="row">

      <div class="col-md-3">
        <canvas id="about-the-uw" width="250" height="250"></canvas>
      </div>
      <div class="col-md-3">
        <h4> About the UW </h4>

        <div class="row legend" style="margin-top:40px;">
          <span class="box" style="background-color:#FFF"></span>

          Other

        </div>

        <div class="row legend">
          <span class="box" style="background-color:#D0C5AF"></span>

          Out of state

        </div>

        <div class="row legend">
          <span class="box" style="background-color:#B8A988"></span>

          In-state students

        </div>

      </div>
      <div class="col-md-4 col-md-offset-2">
        <h4> Interesting items about the UW </h4>
        <img src="https://dl.dropboxusercontent.com/u/9658902/bar-chart.jpg" />
        <!-- <canvas id="interesting-uw" width="350" height="250"></canvas> -->
      </div>

      <div class="uw-fast-facts">
        <span>Fast Facts</span>
      </div>

    </div>


    <script src="wp-content/themes/boundless/js/chart.js"></script>
    <script type="text/javascript">

    var donut = [
      {
          value: 10,
          color:"#FFF",
          // highlight: "#FF5A5E",
          label: "Other"
      },
      {
          value: 20,
          color: "#D0C5AF",
          // highlight: "#5AD3D1",
          label: "Out of state"
      },
      {
          value: 70,
          color: "#B8A988",
          // highlight: "#FFC870",
          label: "In-state students"
      }
    ]
    , options = {
        showTooltips: false
    };

    var ctx = document.getElementById('about-the-uw').getContext("2d")
      , donut = new Chart( ctx ).Doughnut(donut, options);

    var bar = {
        labels: ["First thing", "Second", "Third", "Fourth"],
        datasets: [
            {
                label: "My First dataset",
                // fillColor: "rgba(220,220,220,0.5)",
                // strokeColor: "rgba(220,220,220,0.8)",
                // highlightFill: "rgba(220,220,220,0.75)",
                // highlightStroke: "rgba(220,220,220,1)",
                data: [65, 59, 80, 81]
            }
        ]
    }, options = {
      scaleShowLabels : false,
      showTooltips: false,
      scaleShowGridLines: false,
      barStrokeWidth: 1,
      barValueSpacing: 20
    }

    // var ctx = document.getElementById('interesting-uw').getContext("2d")
    //   , barchart = new Chart( ctx ).Bar( bar, options);


    </script>
  </div>
</div>
