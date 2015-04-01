<?php
/**
 * The landing page template file.
 *
 * This is the template that will render for the landing page, which we set in the WP admin panel.
 *
 * @package Muir Lake
 */

?>
<?php get_header(); ?>
<style>
    .google-maps {
    position: relative;
    padding-bottom: 75%; // This is the aspect ratio
    height: 0;
    overflow: hidden;
    }
    .google-maps iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100% !important;
    height: 100% !important;
    }
    </style>

<div id="main">
	<div class="container">
	

	<?php 
	echo do_shortcode('[latest-sermons posts_per_page="3" before="before" after="after"]');
	?>
	
	
		<h2>Welcome</h2>
<p>Muir Lake Community Alliance Church (MLCAC) was originally planted by <a href=
"http://www.sgac.net/"> Spruce Grove Alliance Church  </a> and some faithful believers, circa 1982. The purpose of planting the church was to reach the community of Muir Lake for Jesus which continues to be our mandate.</p>

<p>Our church continues today to powerfully live out the mission God gave us: “To make followers of Jesus who love God and others selflessly.” With the help of the Holy Spirit we are seeing His Word proclaimed, lives transformed, and our community impacted.</p>

	<div class="clearfix"></div>

		<div class="promo-links">
			<a class="meet" href="/leadership">

				<img class="small-link-image" src="<?php bloginfo('template_directory'); ?>/images/meet-wide.jpg"><img class="large-link-image" src="<?php bloginfo('template_directory'); ?>/images/meet.jpg">
<!--				<img alt='Meet!' data-src-base="<?php bloginfo('template_directory'); ?>/images/" data-src="<1049:meet-wide.jpg,
						>1049:meet.jpg" />
				<noscript><img alt='Meet!' src="<?php bloginfo('template_directory'); ?>/images/meet-wide.jpg" /></noscript> -->
				<h3>Meet</h3></a>
				<a href="/sermons">
				<img class="small-link-image" src="<?php bloginfo('template_directory'); ?>/images/listen-wide.jpg"><img class="large-link-image" src="<?php bloginfo('template_directory'); ?>/images/listen.jpg">
<!--				<img alt='Listen!' data-src-base="<?php bloginfo('template_directory'); ?>/images/" data-src="<1049:listen-wide.jpg,
						>1049:listen.jpg" />
				<noscript><img alt='Listen!' src="<?php bloginfo('template_directory'); ?>/images/listen-wide.jpg" /></noscript> -->
				<h3>Listen</h3></a>
				<a href="/events">
			<img class="small-link-image" src="<?php bloginfo('template_directory'); ?>/images/calendar-wide.jpg"><img class="large-link-image" src="<?php bloginfo('template_directory'); ?>/images/calendar.jpg">
<!--				<img alt='Events!' data-src-base="<?php bloginfo('template_directory'); ?>/images/" data-src="<1049:calendar-wide.jpg,
						>1049:calendar.jpg" />
				<noscript><img alt='Events!' src="<?php bloginfo('template_directory'); ?>/images/calendar-wide.jpg" /></noscript> -->
				<h3 id="maplocation">Events</h3></a>
		</div>

<div class="clearfix"></div>

</div><!-- #container -->
</div><!-- #main -->

<div class="green-background">
<div class="container"> 

		<div class="title">
			<h2 class="widget-title">Information</h2>
		</div>

		<div class="col-1">
		<?
//		echo do_shortcode('[my_calendar_upcoming template="<strong>{date}</strong>, {time}: {link_title}" before="0" after="4" type="events" order="asc"]');
		echo do_shortcode('[gcal id="2945"]');
		?>
		</div>

		<div class="col-2">
<!--			<a href="http://maps.google.com/maps?ll=53.61226,-114.002863&z=14&t=m&hl=en-US&gl=CA&mapclient=embed&cid=12458683173179926907">
				<img src="<?php bloginfo('template_directory'); ?>/images/map.jpg" alt="">
			</a>
-->
			
			<a href="javascript:void(0)" onclick="mymap();">
				<img src="<?php bloginfo('template_directory'); ?>/images/map2.jpg" alt="">
			</a>
		
		</div>

		<div class="col-3">
			<p><strong>DIRECTIONS:</strong> From Jennifer Heil Way, Spruce Grove. Turn left to merge onto Yellowhead Highway West. Take exit 355 toward Calahoo. Merge onto AB-779 North. Go north 4.5 km. Just past the Muir Lake School on the left side (east) is the church.</p>
			<p><strong>OLD WEBSITE:</strong> <a href="http://w.muirlakealliance.ca">w.muirlakealliance.ca</a></p>
		</div>
		<div class="clearfix"></div>
		<div id="map"></div>
</div><!-- #container -->
</div>



<script type="text/javascript">
function mymap() {
	document.getElementById("map").innerHTML = " <button onclick='emptymap();'>X</button><style>#map { padding-bottom: 30px; } .embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 20; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4733.855402687971!2d-114.00239951807015!3d53.6125922842553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sca!4v1414294946460' width='800' height='600' frameborder='0' style='border:0'></iframe> " ;
	location.hash = '#map';
}
function emptymap() {
	document.getElementById("map").innerHTML = "";
}
</script>
<?php get_footer(); ?>