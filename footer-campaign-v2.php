<?php
global $scripts;
?>
		<div class="cv2-footer">
			<div class="row">
				<div class="col-md-5 col-lg-5 col-lg-offset-1 cv2-connect">
					<div class="cv2-col-inner">
						<h4>Connect with us</h4>
						<nav aria-label="social networking">
							<ul class="cv2-list-social list-inline">
								<li><a class="icon-sm facebook" href="http://www.facebook.com/UofWA">Facebook</a></li>
								<li><a class="icon-sm twitter" href="http://twitter.com/UW">Twitter</a></li>
								<li><a class="icon-sm youtube" href="http://www.youtube.com/user/uwhuskies">YouTube</a></li>
								<li><a class="icon-sm linkedin" href="http://www.linkedin.com/company/university-of-washington">LinkedIn</a></li>
								<?php /*<li><a class="icon-sm tumblr" href="http://uofwa.tumblr.com/">Tumblr</a></li>
								<li><a class="icon-sm pinterest" href="http://www.pinterest.com/uofwa/">Pinterest</a></li>
								<li><a class="icon-sm google" href="https://plus.google.com/+universityofwashington/posts">Google+</a></li>
								<li><a class="icon-sm instagram" href="http://instagram.com/uofwa">Instagram</a></li>*/?>
							</ul>
						</nav>
					</div><!-- .cv2-col-inner -->
				</div><!-- .col-md-5 .col-lg-5 .col-lg-offset-1 .cv2-connect -->
				<div class="col-md-7 col-lg-5 cv2-newsletter">
					<div class="cv2-col-inner cv2-col-inner-campnews">
						<div class="cv2-campnews hidden-xs hidden-sm">
							<h4 id="signup-form-label">Campaign newsletter</h4>
							<script type="text/javascript" src="https://subscribe.gifts.washington.edu/Scripts/submanbuilder/submanbuilder.js" id="uwSubscriptionManager"></script>
							<script type="text/javascript">
								SUBMANBUILDER.makeIframe({
									subscriptionID: 205,
									fromName: "University of Washington", //OPTIONAL: From Name of the confirmation email
									fromEmail: "uwcmpgn@uw.edu",
									showPlaceHolders: true,
									hideLabels: true,
									signUpTemplate: "campaign",
									managePreferences: false,
									returnURL: "http://www.washington.edu/boundless/subscription-center/",
								});
							</script>
							<?php /*<iframe id="campnews" src="http://depts.washington.edu/uweb/campaignnewsletter/index.php"></iframe>*/?>
						</div><!-- .cv2-campnews -->
					</div><!-- .cv2-col-inner -->
				</div><!-- .col-md-7 .col-lg-5 .cv2-newsletter -->
			</div><!-- .row -->
			<div class="row">
				<div class="col-md-5 col-lg-5 col-lg-offset-1">
					<div class="cv2-col-inner">
						<img src="<?php echo get_stylesheet_directory_uri() . '/campaign/img/logo_boundless.png' ?>" alt="BE BOUNDLESS FOR WASHINGTON / FOR THE WORLD" class="cv2-boundless-logo" />
					</div><!-- .cv2-col-inner -->
				</div><!-- .col-md-5 .col-lg-5 .col-lg-offset-1 -->
				<div class="col-md-7 col-lg-5">
					<div class="cv2-col-inner">
						<nav aria-label="footer navigation">
							<ul class="cv2-list-links list-inline">
								<li><a href="http://www.uw.edu/accessibility">Accessibility</a></li>
								<li><a href="http://uw.edu/contact">Contact Us</a></li>
								<li><a href="http://www.washington.edu/jobs">Jobs</a></li>
								<li><a href="http://www.washington.edu/safety">Campus Safety</a></li>
								<li><a href="http://myuw.washington.edu/">My UW</a></li>
								<li><a href="http://www.washington.edu/online/privacy/">Privacy</a></li>
								<li><a href="http://www.washington.edu/online/terms/">Terms</a></li>
							</ul>
						</nav>
						<p class="cv2-dateline">&copy; <?php echo date('Y'); ?> University of Washington | Seattle, WA</p>
					</div><!-- .cv2-col-inner -->
				</div><!-- .col-md-7 .col-lg-5 -->
			</div><!-- .row -->
		</div><!-- .cv2-footer -->
		<?php echo $scripts; ?>
		<?php if($_SERVER['HTTP_HOST'] != 'localhost'){ ?>
			<script>
				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
				ga('create', 'UA-15747328-1', 'auto');
				ga('send', 'pageview');
			</script>
			<!-- Global site tag (gtag.js) - Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=UA-15747328-1"></script>
			<script>
			  window.dataLayer = window.dataLayer || [];
			  function gtag(){dataLayer.push(arguments);}
			  gtag('js', new Date());

			  gtag('config', 'UA-15747328-1');
			</script>
		<?php } ?>
	</body>
</html>