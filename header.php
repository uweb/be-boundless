<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> <?php wp_title(' | ',TRUE,'right'); bloginfo('name'); ?> </title>
        <meta charset="utf-8">
        <meta name="description" content="<?php bloginfo('description', 'display'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php wp_head(); ?>

        <!--[if lt IE 9]>
            <script src="<?php bloginfo("template_directory"); ?>/assets/ie/js/html5shiv.js" type="text/javascript"></script>
            <script src="<?php bloginfo("template_directory"); ?>/assets/ie/js/respond.js" type="text/javascript"></script>
            <link rel='stylesheet' href='<?php bloginfo("template_directory"); ?>/assets/ie/css/ie.css' type='text/css' media='all' />
        <![endif]-->

    </head>
    <body <?php body_class(); ?>>

    <div id="thin-strip">
        <ul>
            <li><a href="#" title="Facebook" class="facebook">Facebook</a>
            <li><a href="#" title="Twitter" class="twitter">Twitter</a>
            <li><a href="#" title="Instagram" class="instagram">Instagram</a>
            <li><a href="uw.edu/students" title="Students">Students</a>
            <li><a href="uw.edu/parents" title="Parents">Parents</a>
            <li><a href="uw.edu/facultystaff" title="Faculty &amp; Staff">Faculty &amp; Staff</a>
            <li><a href="uw.edu/alumni" title="Alumi">Alumni</a>
        </ul>
    </div>