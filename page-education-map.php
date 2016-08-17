<?php get_template_part('header', 'campaign'); ?>

<div id="immersive-body">

<div class="intro" id="intro-slide">
  <div class="intro-body">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-xs-8 col-xs-offset-1" id='intro-text'>
            <h1>Bridging the education gap</h1>
            <p>In South Seattle and South King County, the UW College of Education is working to close achievement gaps in schools – and open all doors for young learners.</p>
        </div>
      </div>      
    </div>
  </div>
  <a class="read-more" href="#main_content">Read the story</a>
</div>


<main id="main_content">
  
<div class="school-zoom">
  <div class="school-pic">


<!-- <video  class="fullscreen-bg__video" id="schoolVideo" tabindex="0" autobuffer="autobuffer" preload="preload">
  <source type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/video/education/chrome.webm' ?>"></source>
  <p>Sorry, your browser does not support the &lt;video&gt; element.</p>
</video> -->

  </div>



  <p class="blurb1">They greet each other with hugs. As they work, they share stories — funny stories, sad stories.</p>
  <p class="blurb2">And to the communities they serve. And, in the process, tackling the pervasive isolation that underlies many of the issues they face.</p>

</div>


  <section>
    
    <div id="mapid"></div>

  </section>

</main>








 <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri() . '/campaign/css/header.css' ?>' type='text/css' media='all' />
 <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri() . '/immersive-stories/css/common.css' ?>' type='text/css' media='all' />
 <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri() . '/immersive-stories/css/education.css' ?>' type='text/css' media='all' />




 <!-- **** Map **** -->   

 <link rel="stylesheet" href="https://npmcdn.com/leaflet@1.0.0-rc.2/dist/leaflet.css" />  
 <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/css/education-map.css' ?>" />

 <style>
	#campaign-header {
		display: none;
	}
	#immersive-body div.scrollmagic-pin-spacer div.intro {
		display: none;
	}
	#immersive-body div.school-zoom{
		display: none;
	}


 </style>


</div>


 <!-- **** JS **** -->      

 <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/js/animationLibraries.min.js' ?>" type="text/javascript"></script>

 <script src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/js/education.min.js' ?>" type="text/javascript"></script>
 <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/js/header.js' ?>" type="text/javascript"></script>

<script type="text/javascript"> 	mapInit(); </script>
 



</body>
</html>
