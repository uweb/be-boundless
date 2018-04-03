<?php
    $meta = '';
    $styles = "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/campaign/css/header.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/common.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/comotion.css' type='text/css' media='all' />";
    $scripts = "<script src='" . get_stylesheet_directory_uri() . "/campaign/js/animationLibraries.min.js' type='text/javascript'></script><script src='" . get_stylesheet_directory_uri() . "/immersive-stories/js/comotion.min.js' type='text/javascript'></script>";
    $storyCodes = '';
    $storyAppeal = 'When you support the CoMotion Innovation Fund, you can help projects with great potential create real-world impact.';
    get_header("campaign-v2");
?>

<!-- INSERT SCROLL BAR -->
<div id="scrollbar"><span></span><img class="grayW" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/comotion/W-Logo_gray.png' ?>"></div>

<div id="immersive-body">

	<section class="intro" id="intro-vid">
    <div id="vid-overlay"></div>
    <button id="pause">Pause</button>
    <video autoplay loop muted playsinline class="media" data-object-fit poster="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/comotion/HEADER.jpg' ?>" class="fullscreen-bg__video" id="full-bg-video">
      <source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/video/comotion/COMO_HEADER_TL_V4.mp4' ?>" type="video/mp4">
    </video>
    <div class="intro-body">
      <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-1 col-md-offset-1 col-lg-offset-2" id='intro-text'>
          <h1>Redefining reality</h1>
          <span class="udub-slant"><span></span></span>
          <p>At its home in CoMotion Labs, virtual content studio Electric Dream Factory is helping shape the future of an industry — and everyone is included.</p>
        </div><!-- .col-xs-8 .col-sm-8 .col-md-8 .col-lg-8 .col-xs-offset-1 .col-md-offset-1 .col-lg-offset-2 #intro-text -->
      </div><!-- .row -->
    </div><!-- .intro-body -->
    <section class="scrollit read-more">
      <p>Scroll Down</p>
      <div class="mouse">
        <div class="scroll"></div>
      </div><!-- .mouse -->
    </section><!-- .scrollit .read-more -->
  </section><!-- .intro #intro-vid -->

	<main id="main_content">
    <section class="text-block start white">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 copy">
            <p>In many respects, CoMotion Labs @ HQ looks like you’d expect a startup incubator to look. Glass-walled conference rooms with idea maps sketched on whiteboards. Entrepreneurs in T-shirts with futuristic company names hanging above their desks: BiNomial. Pixel Fyzz. WiBiotic.</p>

            <p>But then you see a woman with what looks like a black brick strapped over her eyes: a virtual reality headset. Depending on the startup, she could be exploring a virtual shopping experience, an architectural rendering of the inside of a building, or a rotating model of a human heart that will be used to educate patients.</p>

            <p>She may even be watching a 360-degree film created by <a href="http://www.electricdreamfactory.com/">Electric Dream Factory</a>, a content studio that works with diverse creatives to tell stories through <span data-tooltip><span><span class="close">X</span><b>Virtual reality:</b> 360-degree video and/or computer-generated simulations that immerse users in a different world. Examples of VR hardware range from Google Cardboard to Oculus Rift headsets.</span>virtual</span>, <span data-tooltip><span><span class="close">X</span><b>Augmented reality:</b> Technology that overlays digital information onto the real world in real time.</span>augmented</span> and <span data-tooltip><span><span class="close">X</span><b>Mixed reality:</b> Like AR, MR combines digital information with the real world. The two terms are often used interchangeably, but a key distinction is that MR allows the physical and digital worlds to interact in real time — so virtual objects are treated as if they are actually present.</span>mixed reality</span>.</p>

            <p>Founded by producer Lacey Leavitt, ’03, and editor Joe Jacobs, Electric Dream Factory moved into this workspace in 2016. Since then, they’ve created several virtual reality films — and as they harness the power of technology to help storytellers from different backgrounds make an impact on audiences, they’re benefiting from a startup incubator that shares their philosophy of <span data-tooltip><span><span class="close">X</span><b>Inclusive innovation:</b> The philosophy that including people from all backgrounds strengthens innovation and changes lives for the better. Creating a space and opportunity for this cross-pollination of ideas is core to the UW’s Innovation Imperative — an integrated approach that will drive positive change in our state and beyond.</span>inclusive innovation</span>.</p>

            <p>CoMotion Labs is part of CoMotion, the University of Washington’s collaborative innovation hub, a place that's about much more than technology — it’s about the people technology serves.</p>

            <div class="callout right">
              <div class="float">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/comotion/LACEY_PHOTO_1.jpg" alt="" class="image1">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/comotion/LACEY_PHOTO_2.jpg" alt="" class="image2">
                <p class="caption no-cap">LACEY LEAVITT / CHIEF EXECUTIVE OFFICER<!-- , ELECTRIC DREAM FACTORY --></p>
              </div>
              <blockquote class="quote">With XR, we have the opportunity to set our intentions from the very beginning — to commit to being inclusive from the get-go.</blockquote>
            </div>
            <div class="callout left">
              <div class="float">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/comotion/JOE_PHOTO_1.jpg" alt="" class="image1">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/comotion/JOE_PHOTO_2.jpg" alt="" class="image2">
                <p class="caption no-cap">JOE JACOBS / CREATIVE TECHNICAL OFFICER<!-- , ELECTRIC DREAM FACTORY --></p>
              </div>
              <blockquote class="quote">This technology is really moldable right now. The concrete is not even close to set. We’re still sculpting it.</blockquote>
            </div>
            <h2>Virtual reality gets real</h2>
            <p>Leavitt and Jacobs, who’ve been friends since they worked on a student film together as undergraduates, both went on to cut their teeth in the New York City film industry. While Leavitt gained valuable experience there, she also learned a lesson that informed how — and where — she would shape her career.</p>

            <p>“The New York and L.A. film industries are very male-dominated,” she says. “I just didn’t see being able to make a career like the one I wanted.”</p>

            <p>Eventually, both Leavitt and Jacobs made their way back to Seattle, where they teamed up in 2015 to form the company they now call Electric Dream Factory. It wasn’t long before they took another plunge: In addition to continuing their work on feature films, they ventured into <span data-tooltip><span><span class="close">X</span><b>Cross reality:</b> Any experience that combines digital and “real,” or physical, reality. This term is often used to encompass virtual-, augmented- and mixed-reality technology.</span>cross reality</span> (XR) filmmaking, with a focus on virtual reality (VR).</p>

            <p>Jacobs was interested in how this rapidly developing technology could open up new storytelling possibilities. “I wandered into it with curiosity,” he says. “What’s the potential here?”</p>

            <p>VR’s ability to create empathy  — by putting viewers in the midst of 360-degree, virtual world — was a major motivating factor for Leavitt: “It allows you to bring people into somebody else’s point of view,” she says.</p>

            <p>Electric Dream Factory’s first VR short did just that. “Ch’aak’ S’aagi” (“Eagle Bone”), directed by Native American filmmaker and actress Tracy Rector, combines Pacific Northwest scenery, traditional Tlingit dance and a freestyle spoken-word meditation on the modern indigenous experience. Soon after, the studio produced “Potato Dreams,” a VR documentary about writer and director Wes Hurley’s struggles while growing up gay in the Soviet Union. Both films use their virtual environment to forge a deeper connection between viewer and subject, and Electric Dream Factory plans to create many more.</p>

          </div><!-- .col-md-10 .col-md-offset-1 .copy -->
        </div><!-- .row -->
      </div><!-- .container -->
    </section><!-- .text-block .start .white -->


    <!--Expanding block -->
    <section class="text-block" id="expanding">
      <div class="container">
        <!-- [slide deck image] -->
        <img class="slide1" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/comotion/SLIDE_1.png' ?>">
        <!-- [slide deck image flipped] -->
        <img class="slide2" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/comotion/SLIDE_2.png' ?>">
          <div class="row">
              <div class="col-md-10 col-md-offset-1 copy expandable-container">
                  <div class="visible-part">
                    <h2 class="big-big">What is VR?</h2>

                     <p>Virtual reality isn’t a new idea, but the technology that makes it possible is quickly catching up to experiences we’ve long dreamed of creating. From low-tech toys to high-tech headsets, here are a few examples of devices that have brought the virtual world into our lives.</p>

                     <div style="text-align: center"><a id="expander" class="expander" href="#" role="button">Show more</a></div>
                  </div>
                  <div class="hidden-part">
                    <div class="row">
                      <div class="col-md-6 col-sm-4 col-xs-10 col-sm-offset-0 col-xs-offset-1">
                        <!-- [stereoscope image] -->
                        <img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/comotion/STEREOSCOPE.png' ?>">
                      </div>
                      <div class="item-desc col-md-6 col-sm-8 col-xs-10 col-sm-offset-0 col-xs-offset-1"> 
                        <h3>Late 19th century</h3>
                        <span>Stereoscope</span>
                        <p>In 1838, British physicist Sir Charles Wheatstone publishes a paper explaining how the mind combines images from each eye to create depth perception. He coins it the “stereoscope,” and by the mid-19th century it has been adapted for handheld use and gained significant popularity.</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 col-sm-4 col-xs-10 col-sm-offset-0 col-xs-offset-1">
                        <!-- [view master image] -->
                        <img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/comotion/VIEWMASTER.png' ?>">
                      </div>
                      <div class="item-desc col-md-6 col-sm-8 col-xs-10 col-sm-offset-0 col-xs-offset-1">
                        <h3>1939</h3>
                        <span>View-Master</span>
                        <p>Introduced in 1939 at the New York World’s Fair, the View-Master soon becomes a household toy that whisks people to destinations and scenes around the world. Shown at left is a Model G, circa 1959-1977.</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 col-sm-4 col-xs-10 col-sm-offset-0 col-xs-offset-1">
                        <!-- [Google cardboard image] -->
                        <img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/comotion/GOOGLE_CARDBOARD.png' ?>">
                      </div>
                      <div class="item-desc col-md-6 col-sm-8 col-xs-10 col-sm-offset-0 col-xs-offset-1">
                        <h3>2014</h3>
                        <span>Google Cardboard</span>
                        <p>Harnessing the smartphone’s power and small size, Google releases Google Cardboard, a DIY headset that offers a lightweight, relatively inexpensive way to experience virtual reality.</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 col-sm-4 col-xs-10 col-sm-offset-0 col-xs-offset-1">
                        <!-- [HTC VIVE image] -->
                        <img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/comotion/HTC_VIVE.png' ?>">
                      </div>
                      <div class="item-desc col-md-6 col-sm-8 col-xs-10 col-sm-offset-0 col-xs-offset-1">
                        <h3>2016</h3>
                        <span>HTC VIVE SteamVR</span>
                        <p>One of several commercial VR headsets in 2016, the SteamVR is part of a watershed moment in the progress of virtual technology.</p>
                      </div>
                    </div>
                    <div style="text-align: center"><a class="expander less" href="#" role="button">Show less</a></div>
                  </div>
              </div>
          </div>
    </div>
  </section>

  <section class="text-block start white small-top">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 copy">
            <h2>Incubating the future</h2>
            <p>Behind the scenes, Electric Dream Factory productions are supported by resources and guidance from the UW’s CoMotion Labs, which helps companies navigate the startup world.</p>

            <p>Across the room from Electric Dream Factory’s desks is a virtual reality space, sponsored by Booz Allen, that gives innovators the opportunity to test their projects using cutting-edge technology. Workshops and learning opportunities are a constant presence, too. “The classes in startup fundamentals have been amazing,” says Leavitt.</p> 

            <p>Electric Dream Factory also participated in DubPitch, a philanthropically supported event that gives select CoMotion startups the chance to share their stories with local investors. In addition, Leavitt and Jacobs have connected with CoMotion Labs’ entrepreneurs in residence, who volunteer their time to consult with startups about intellectual property, business plans and more.</p>

            <p>The net effect of these resources? Startups can pour more energy into what they do best: building and creating. For Leavitt and Jacobs, that means more time spent shaping the virtual landscape — and helping others tell their stories in original, immersive ways.</p>

            <h2>Empowering diverse storytellers</h2>
            <p>In the spirit of inclusive innovation, Electric Dream Factory is developing a program that aims to support diverse storytelling through equipment access, training and mentorship opportunities, and project funding.</p> 
            <p>“Especially now, as we’re part of pioneering what XR filmmaking is, you want people from a variety of backgrounds and experiences to come to the table,” says Leavitt.</p>

            <p>On the horizon for Electric Dream Factory are films by artists who explore topics as wide-ranging as black female sexuality, the importance of support in the LGBTQ community, and economic disparity.</p> 

            <p>“I think XR is going to be a very big part of our future,” says Leavitt, whose experience as a woman filmmaker in New York still powers her mindset. “It’s important for anyone who has any modicum of power to think about how we can make our industry inclusive.”</p>

          </div><!-- .col-md-10 .col-md-offset-1 .copy -->
        </div><!-- .row -->
      </div><!-- .container -->
    </section><!-- .text-block .start .white -->

<!-- 360 YOUTUBE VIDEO #1 56.25-->
    <section id="slideplay1" class="slideplay frame">
        <div class="fader show">
            <!-- <section class="possible"><h2>Possible</h2></section> -->
            <div class="icon">
              <img alt="360 video icon" src="<?php echo get_stylesheet_directory_uri() .'/immersive-stories/img/comotion/360.png' ?>" />
              <a role="button" class="click" href="#">Meet the minds </br>behind Electric Dream Factory</a>
            </div>
            <!-- <a role="button" class="click" href="#">Click To Play</a> -->
            <img alt="Fabric" src="<?php echo get_stylesheet_directory_uri() .'/immersive-stories/img/comotion/VIDEO1.jpg' ?>" />
        </div>
        <div class="boundless-video"></div>
    </section>

<!-- 360 YOUTUBE VIDEO #2 -->

  <!--   <section id="slideplay2" class="slideplay frame">
        <div class="fader show">
            <div class="icon">
              <img alt="360 video icon" src="<?php echo get_stylesheet_directory_uri() .'/immersive-stories/img/comotion/360.png' ?>" />
              <a role="button" class="click" href="#">Watch the work </br>of Electric Dream Factory</a>
            </div>
            <img alt="Fabric" src="<?php echo get_stylesheet_directory_uri() .'/immersive-stories/img/comotion/VIDEO2.jpg' ?>" />
        </div>
        <div class="boundless-video"></div>
    </section>
 -->


  <section class="text-block start white">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 copy">
            <h2>Expanding impact: CoMotion and CoMotion Labs</h2>
            <p><b><a href="https://comotion.uw.edu/">CoMotion</a></b> seeks to expand the economic and social impact of the UW community by fostering innovation transfer, which helps researchers make the leap from idea to impact; creating strategic partnerships, such as the <a href="https://gix.uw.edu/">Global Innovation Exchange</a> and <a href="https://catalyst.amazon.com/uw/">Amazon Catalyst</a>; and encouraging innovative thinking through workshops, trainings and events for the UW and our broader community.

            <p>Faculty and student research cultivates groundbreaking ideas at the University of Washington. But without financial support, there’s a gap between research and real-world output. Helping researchers cross this gap is the CoMotion Innovation Fund, explains Vikram Jandhyala, executive director of CoMotion and vice president for innovation strategy at the UW.

            <p>“These are robust ideas that have benefited from years of research but need guidance and focused resources to make people’s lives better,” he says. “It’s a critical path for the future success of these breakthroughs.”<p>

            <p><b><a href="https://comotion.uw.edu/what-we-do/comotion-labs/home/">CoMotion Labs</a></b> — a self-sustaining, membership-supported program of CoMotion — is a multi-industry startup incubator that hosts more than 90 companies inside and outside the UW community. With three locations on the UW campus in Seattle, as well as a virtual lab in Spokane, CoMotion Labs provides startups with learning programs, mentoring, networking and space. It also helps connect innovators with resources in a variety of industries, including engineering, IT, life sciences, medical devices, clean tech, blockchain, artificial intelligence, and augmented and virtual reality.</p>
          </div><!-- .col-md-10 .col-md-offset-1 .copy -->
        </div><!-- .row -->
      </div><!-- .container -->
    </section><!-- .text-block .start .white -->

	</main><!-- #main_content -->
	<div id="popup"></div>
</div><!-- #immersive-body -->

<?php
    include(locate_template('include-giving.php'));//ADD CUSTOM PHOTO
    get_template_part('footer', 'campaign-v2');
?>
