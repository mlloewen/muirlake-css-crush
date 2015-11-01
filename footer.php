<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Muir Lake
 */
?>
    </div><!-- #content -->
    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="container">
            <div id="footer-content">
                <?php do_shortcode('[social]');?>
                <h2>Contact</h2>
                <div id="contact">
                    <p><strong>Phone:</strong> 780.963.9975</p>
                    <p><strong>Email:</strong> <a href="mailto:info@muirlakealliance.ca" target="_blank">info@muirlakealliance.ca</a></p>
                    <p><strong>Facebook:</strong> <a href="https://www.facebook.com/pages/Muir-Lake-Community-Alliance-Church/1582120052007941?ref=bookmarks">Muir Lake Community Alliance Church</a></p>
                    <p id="copyright-paragraph">© 2014 Muir Lake Alliance</p>
                </div><!-- #contact -->

                <div id="copyright-single">
                    <p>© 2014 Muir Lake Community Alliance Church</p>
                </div><!-- #copyright-single -->
            </div><!-- #footer-content -->
        </div><!-- #container -->
    </footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
    jQuery('#show-menu-button').click(function(){
        if( jQuery('body').hasClass('show-menu') ){
            jQuery('body').removeClass('show-menu');
        } else {
            jQuery('body').addClass('show-menu');
        }
    });
</script>

</body>
</html>
