<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage i-transform
 * @since i-transform 1.0
 */
?>

		</div><!-- #main -->
		<style>
		.footerli li{
			list-style:none;
			display:inline;
			margin:0% 5% 3% 5%;
			font-size:12px;
			font-weight:bold;
		}
		.footerli a{color:#fff !important;}
		</style>
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php // get_sidebar( 'main' ); ?>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="footerline" style="border-top:1px solid #fff; margin-top:2%;">
			<ul class="footerli">
			<li><a href="http://www.capitalgenx.com/terms-conditions/">Terms & Conditions</a></li>
			<li><a href="http://www.capitalgenx.com/privacy-policy/">Privacy Policy</a></li>
		        <li><a href="http://www.capitalgenx.com/refund-policy/">Refund Policy</a></li>
                        <li><a href="http://www.capitalgenx.com/disclaimer/">Disclaimers</a></li>
                        <li><a href="http://www.capitalgenx.com/faq/">FAQ</a></li>
                        <li><a href="http://www.capitalgenx.com/career/">Career</a></li>
			</ul>
			</div>
			</div>

			<div class="site-info">
                <div class="copyright" style="margin-top:5%;">
                	<?php esc_attr_e( 'Copyright &copy;', 'itransform' ); ?>  <?php bloginfo( 'name' ); ?>
                </div>            
            	<div class="credit-info">
					
                </div>
<p>Invetment and Trading Are Subject to Market Risks.<br>
Please Read <a href="http://www.capitalgenx.com/disclaimer/" target="_blank">Disclaimer </a>Carefully
</p>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>