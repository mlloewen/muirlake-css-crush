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
        <h2>Welcome</h2>
<?php
    require_once  'css-crush/CssCrush.php';
/*   echo csscrush_file('style.css');  */
    echo do_shortcode('[ml-post id=2885]');
?>

    <div class="my-semantic-column-class3">
        <p>dasfkjheflkdjsf</p>
        <p>Just a nothre testasdf;j;kjre;l asdf;kja;fj ;dkasjf;lkjdasf ;kjdsf;lkj dasf ;kjdfs;jdsaf;kj reif;kjdfife;kj f en;knds ;hje ;hjd;ashfjpeh;dnjasg p;jsdf;ja;j ;kj p;re;ldj p;j; er ;</p>
    </div>
    <div class="my-semantic-column-class3">
        <p>dasfkjheflkdjsf</p>
        <p>Just a nothre testasdf;j;kjre;l asdf;kja;fj ;dkasjf;lkjdasf ;kjdsf;lkj dasf ;kjdfs;jdsaf;kj reif;kjdfife;kj f en;knds ;hje ;hjd;ashfjpeh;dnjasg p;jsdf;ja;j ;kj p;re;ldj p;j; er ;</p>
    </div>
    <div class="my-semantic-column-class3">
        <p>dasfkjheflkdjsf</p>
        <p>Just a nothre testasdf;j;kjre;l asdf;kja;fj ;dkasjf;lkjdasf ;kjdsf;lkj dasf ;kjdfs;jdsaf;kj reif;kjdfife;kj f en;knds ;hje ;hjd;ashfjpeh;dnjasg p;jsdf;ja;j ;kj p;re;ldj p;j; er ;</p>
    </div>
    <div class="clearfix"></div>

        <div class="promo-links">

            <a href="/sermons">
                <picture>
                    <!--[if IE 9]><video style="display: none"><![endif]-->
                    <source
                        data-srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/listen-wide.jpg"
                        media="(max-width: 1050px)" />
                    <source
                        data-srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/listen.jpg" />
                    <!--[if IE 9]></video><![endif]-->
                    <img data-src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        class="lazyload"
                        alt="listen to sermons" />
                </picture>
                <h3>Listen</h3>
            </a>
            <a href="/events">
<!-- 1050px 720px -->
                <picture>
                    <!--[if IE 9]><video style="display: none"><![endif]-->
                    <source
                        data-srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/calendar-wide.jpg"
                        media="(max-width: 1050px)" />
                    <source
                        data-srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/calendar.jpg" />
                    <!--[if IE 9]></video><![endif]-->
                    <img data-src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        class="lazyload"
                        alt="Calandar of events" />
                </picture>
                <h3>Events</h3>
            </a>
            <a class="meet" href="/leadership">
                <picture>
                    <!--[if IE 9]><video style="display: none"><![endif]-->
                    <source
                        data-srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/meet-wide.jpg"
                        media="(max-width: 1050px)" />
                    <source
                       data-srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/KeithWebsitemeet.jpg" />
                   <!--[if IE 9]></video><![endif]-->
                    <img data-src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        class="lazyload"
                        alt="listen to sermons" />
                </picture>
                <h3>Meet</h3>
            </a>
        </div>

<div class="clearfix"></div>

</div><!-- #container -->
</div><!-- #main -->

<div class="green-background">
    <div class="container">

        <div class="title">
            <h2 class="widget-title">Information</h2>
        </div>
        <div class="col-2">
            <?php echo do_shortcode('[ai1ec events_limit="5"]') ?>
        </div>
        <div class="col-1">
           <a href="javascript:void(0)" onclick="mymap();">
               <img data-src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/map2.jpg" class="lazyload" data-expand="-1" />
       </a>
        </div>
        <div class="col-3">
            <p><strong>DIRECTIONS:</strong> From Jennifer Heil Way, Spruce Grove. Turn left to merge onto Yellowhead Highway West. Take exit 355 toward Calahoo. Merge onto AB-779 North. Go north 4.5 km. Just past the Muir Lake School on the left side (east) is the church.</p>
            <p><strong>OLD WEBSITE:</strong> <a href="http://w.muirlakealliance.ca">w.muirlakealliance.ca</a></p>
        </div>
        <div class="clearfix"></div>
        <div id="map"></div>
    </div><!-- #container -->
</div><!-- .green-background -->


<script type="text/javascript">
function mymap() {
    document.getElementById("map").innerHTML = " <button onclick='emptymap();'>X</button><style>#map { padding-bottom: 30px; } .embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 20; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2366.946328573164!2d-114.002863!3d53.612260000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x539f850d92f3c127%3A0xace622564a86a97b!2sMuir+Lake+Community+Alliance+Church!5e0!3m2!1sen!2sca!4v1417670115659' width='800' height='600' frameborder='0' style='border:0'></iframe> " ;
    location.hash = '#map';
}
function emptymap() {
    document.getElementById("map").innerHTML = "";
}
</script>
<?php get_footer();
?>
