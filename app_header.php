<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> <?php wp_title(' | ',TRUE,'right'); bloginfo('name'); ?> </title>
        <meta charset="utf-8">
        <meta name="description" content="<?php bloginfo('description', 'display'); ?>">
        <meta name="viewport" content="width=device-width">

        <?php wp_head(); ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        <link rel='stylesheet' href='<?php bloginfo("stylesheet_directory"); ?>/loading-bar/mprogress.css'/>
        <script src='<?php bloginfo("stylesheet_directory"); ?>/loading-bar/mprogress.min.js'></script>

        <script src="//cdn.jsdelivr.net/velocity/1.2.2/velocity.min.js"></script>


        <!--[if lt IE 9]>
            <script src="<?php bloginfo("template_directory"); ?>/assets/ie/js/html5shiv.js" type="text/javascript"></script>
            <script src="<?php bloginfo("template_directory"); ?>/assets/ie/js/respond.js" type="text/javascript"></script>
            <link rel='stylesheet' href='<?php bloginfo("template_directory"); ?>/assets/ie/css/ie.css' type='text/css' media='all' />
        <![endif]-->

    </head>
    <body <?php body_class(); ?>>

    <div id="thin-strip">
        <a class="wordmark" href="http://uw.edu" tabindex="-1" title="University of Washington Home">Home</a>
        <form action="//www.washington.edu/search/" method="get">
            <input type="search" name="q" class="search-bar" placeholder="Search"  autocomplete="off" />
        </form>
        <ul>
            <li class="facebook"><a href="https://www.facebook.com/UofWA" title="Facebook">Facebook</a>
            <li class="twitter"><a href="https://twitter.com/uw" title="Twitter">Twitter</a>
            <li class="instagram"><a href="http://instagram.com/uofwa" title="Instagram">Instagram</a>
            <li><a href="uw.edu/students" class="slash" title="Students">Students</a>
            <li><a href="uw.edu/parents" class="slash" title="Parents">Parents</a>
            <li><a href="uw.edu/facultystaff" class="slash" title="Faculty &amp; Staff">Faculty &amp; Staff</a>
            <li><a href="uw.edu/alumni" class="slash" title="Alumi">Alumni</a>
            <li class="search fui-search"> <a href="#search" title="Search">Search</a>
        </ul>
    </div>
