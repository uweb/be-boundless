<nav role="navigation" aria-label="footer links">
    <ul class="footer-links">
        <li><a href="http://www.uw.edu/accessibility">Accessibility</a></li>
        <li><a href="http://uw.edu/home/siteinfo/form">Contact Us</a></li>
        <li><a href="http://www.washington.edu/jobs">Jobs</a></li>
        <li><a href="http://www.washington.edu/safety">Campus Safety</a></li>
        <li><a href="http://myuw.washington.edu/">My UW</a></li>
        <li><a href="http://www.washington.edu/rules/wac">Rules Docket</a></li>
        <li><a href="http://www.washington.edu/online/privacy/">Privacy</a></li>
        <li><a href="http://www.washington.edu/online/terms/">Terms</a></li>
    </ul>
</nav>

<p class="dateMarker">&copy; <?php echo date("Y"); ?> University of Washington  |  Seattle, WA</p>



<?php

if($_SERVER['HTTP_HOST'] != 'localhost'){
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-15747328-1', 'auto');
        ga('send', 'pageview');
        </script>
    }
?>