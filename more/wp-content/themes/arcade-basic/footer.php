<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the main and #page div elements.
 *
 * @since 1.0.0
 */
$bavotasan_theme_options = bavotasan_theme_options();
?>
	</main><!-- main -->

	<footer id="footer" role="contentinfo">
		<div id="footer-content" class="container">
			<div class="row">
				<div class="copyright col-lg-12">
					<span class="pull-left"><?php printf( __( 'Copyright &copy; %s %s. All Rights Reserved.', 'arcade' ), date( 'Y' ), ' <a href="' . home_url() . '">' . get_bloginfo( 'name' ) .'</a>' ); ?></span>
				</div><!-- .col-lg-12 -->

<div class="span6">
        <div class="about-join-contact">
           <span class="pull-right"> <a href="http://www.boji.it/abou-us" target="_blank">关于我们</a> | <a href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=vsnG-tzR1NeQ18o" target="_blank">跟我们联系</a> | <a href="http://www.boji.it/abou-us" target="_blank">加入我们</a> | <a href="http://www.boji.it" target="_blank">BOJI.IT</a></span>
        </div>
    </div>

			</div><!-- .row -->
		</div><!-- #footer-content.container -->
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>