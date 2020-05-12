<?php
/*
Plugin Name: Custom Google Analytics Plugin
Plugin URI: https://www.topwpguide.com/how-to-install-google-analytics-in-wordpress-for-beginners/
Description: Custom WordPress Plugins.
Author: Neil Patel
Version: 1.2
*/
 function ns_google_analytics() { ?>
  <!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-XXXXX-Y', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->
  <?php
  }
  
add_action( 'wp_head', 'ns_google_analytics', 10 );
