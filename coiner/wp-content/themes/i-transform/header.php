<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage i-transform
 * @since i-transform 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<style>
	.contact{
	background:url("http://capitalgenx.com/newweb/images/sport-bg.png");
	//background:url("http://capitalgenx.com/images/front/sin-bg.png") !important;
	}
	.internal{
		margin-left:8%;
		margin-top:5%;
		border:1px solid #ccc;
		//box-shadow: 5px 11px 18px 2px;
		box-shadow: 0px 1px 0px 0px;
	}
	.internal:hover{
		box-shadow: 5px 11px 18px 2px;
	}
	.textbx{
		width:90%;
		height:50px;
		margin:1% 0% 2% 3%;
		font-size:20px;
	}
	::-webkit-input-placeholder {font-size:10px !important; }
	.cbp-qtcontent{
		height:200px !important;
	}
	.site-main{
		background:url("http://www.capitalgenx.com/wp-content/uploads/2015/11/work_bg.png");
	}
	.site{
		background:url("http://www.capitalgenx.com/wp-content/uploads/2015/11/work_bg.png") !important;
	}
	
	</style>
<link rel="stylesheet" type="text/css" href="http://www.capitalgenx.com/bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="http://www.capitalgenx.com/bootstrap/flexslider.css">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php    
    if ( ! function_exists( '_wp_render_title_tag' ) ) :
        function iexcel_render_title() {
    ?>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php
        }
        add_action( 'wp_head', 'iexcel_render_title' );
    endif;    
    ?> 
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
    	
        <?php if ( of_get_option('top_bar_phone') || of_get_option('top_bar_email') || itransform_social_icons() ) : ?>
    	<div id="utilitybar" class="utilitybar">
        	<div class="ubarinnerwrap">
                <div class="socialicons">
                    <?php echo itransform_social_icons(); ?>
                </div>
                <?php if ( of_get_option('top_bar_phone') ) : ?>
                <div class="topphone">
                    <i class="topbarico genericon genericon-phone"></i>
                    <?php if ( of_get_option('top_bar_phone') ) : ?>
                        <?php _e('Call us : ','itransform'); ?> <?php echo esc_attr(of_get_option('top_bar_phone')); ?>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
                
                <?php if ( of_get_option('top_bar_email') ) : ?>
                <div class="topphone">
                    <i class="topbarico genericon genericon-mail"></i>
                    <?php if ( of_get_option('top_bar_email') ) : ?>
                        <?php _e('Mail us : ','itransform'); ?> <?php echo sanitize_email(of_get_option('top_bar_email')); ?>
                    <?php endif; ?>
                </div>
                <?php endif; ?>                
            </div> 
        </div>
        <?php endif; ?>
        
        <div class="headerwrap">
            <header id="masthead" class="site-header" role="banner">
         		<div class="headerinnerwrap">
					<?php if (of_get_option('itrans_logo_image')) : ?>
                        <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                            <span><img src="<?php echo of_get_option('itrans_logo_image'); ?>" alt="<?php bloginfo( 'name' ); ?>" /></span>
                        </a>
                    <?php else : ?>
                        <span id="site-titlendesc">
                            <a href="http://www.capitalgenx.com/">
							<img src="http://www.capitalgenx.com/wp-content/uploads/2015/11/1500.png" class="img-responsive" style="width:150px; height:100px;">
							</a>
                        </span>
                    <?php endif; ?>	
        
                    <div id="navbar" class="navbar">
                        <nav id="site-navigation" class="navigation main-navigation" role="navigation">
                            <h3 class="menu-toggle"><?php _e( 'Menu', 'itransform' ); ?></h3>
                            <a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'itransform' ); ?>"><?php _e( 'Skip to content', 'itransform' ); ?></a>
                            <?php 
								if ( has_nav_menu(  'primary' ) ) {
										wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'container_class' => 'nav-container', 'container' => 'div' ) );
									}
									else
									{
										wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-container' ) ); 
									}
								?>
							
                        </nav><!-- #site-navigation -->
                        <div class="topsearch">
                            <?php get_search_form(); ?>
                        </div>
                    </div><!-- #navbar -->
                    <div class="clear"></div>
                </div>
            </header><!-- #masthead -->
        </div>
        <?php
		
			global $post; 
			
			$hide_title = rwmb_meta('itrans_hidetitle');
			$show_slider = rwmb_meta('itrans_show_slider');
			$other_slider = rwmb_meta('itrans_other_slider');
			$hide_bread = rwmb_meta('itrans_hide_breadcrumb');

			
        ?>
        <!-- #Banner -->
		
        <?php 
		if( $other_slider )
		{
			?>
                <div class="other-slider">
                	<div class="other-slider-innerwrap">
                    	<?php echo do_shortcode( $other_slider ) ?>
                    </div>
                </div>            
            <?php
		}
		//if ( is_home() && ! is_paged() || is_front_page() ) 
		elseif ( is_home() && ! is_paged() || $show_slider ) 
		{
			itransform_ibanner_slider();
		} elseif ( !$hide_title )
		{
        ?>	
			<div class="iheader" style="height:5px;">
				<div class="titlebar">
					<?php 
						if( function_exists('bcn_display')  && !$hide_bread )
						{
					?>
						<div class="breadcrumb">
					<?php
							bcn_display();
					?>
						</div>
					<?php		
						} else {
					?>               
					<h1>
						<?php if ( of_get_option('itrans_slogan') ) : ?>
							<?php echo esc_attr(of_get_option('itrans_slogan')); ?>
						<?php //else : ?> 
							<?php //printf( __( 'Welcome To ', 'itransform' ) ); ?><?php //bloginfo( 'name' ); ?>   
						<?php endif; ?>
					</h1>
					<?php
						}
					?>
				</div>
			</div>
        
		<?php
		}
        ?>
		<?php 
		if(isset($_POST['send'])){
		
		$name	= $_POST['conname'];
		$email	= $_POST['conemail'];
		$phone	= $_POST['conphone'];
		$message	= $_POST['conmessage'];
		
		if(!empty($email)){
			
			$to = "singh@capitalgenx.com,kumar@capitalgenx.com,deepak.patel678@gmail.com";
$subject = "Capital Genx Trial Query";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>Thank You for contacting us!</p>
<table border='1px' cellpadding='10px' cellspacing='10px'>
<tr>
<th>Name</th>
<th>Phone</th>
<th>Message</th>
</tr>
<tr>
<td>".$name."</td>
<td>".$phone."</td>
<td>".$message."</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
//$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'From:'.$email."\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
mail($email,$subject,$message,$headers);
echo "<script>
alert('Thank you For Trial');
</script>";
		}
	}
		?>
		<div id="main" class="site-main">
		<?php 
		if ( is_front_page()) 
		{ ?>
		<div class="row" style="margin:0px !important;">
		<div class="col-lg-12 col-md-12 colsm-12 col-xs-12">
        
		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
		<?php
		echo do_shortcode("[huge_it_slider id='1']"); 
		 ?>
		 </div>
		
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 contact">
		<h3 style="text-align:center; color:#123455;">Take a Free Trial</h3>
		<form method="post">
		<div class="col-lg-12 col-md-12 colsm-12 col-xs-12">
		<input type="text" name="conname" placeholder="Enter Your Name" class="textbx" id="contname" required>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<input type="text" name="conemail" placeholder="Enter Your Email" class="textbx" required>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<input type="text" name="conphone" placeholder="Enter Your Phone" class="textbx" required>
		</div>
		<!--<div class="col-lg-12 col-md-12 colsm-12 col-xs-12">
		<textarea name="conmessage" placeholder="Enter Message" style="width:90%; height:100px; margin-left:4%; font-size:20px;"></textarea>
		</div>-->
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
		<img src="images/front/tick-mark2.png"/>
		</div>
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
		<a href="#">Cashgen</a>
		</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
		<img src="images/front/tick-mark2.png"/>
		</div>
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
		<a href="#">Profitgen</a>
		</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
		<img src="images/front/tick-mark2.png"/>
		</div>
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
		<a href="#">Futex</a>
		</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
		<img src="images/front/tick-mark2.png"/>
		</div>
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
		<a href="#">Rupica</a>
		</div>
		</div>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:3%;">
		<input type="checkbox" name="terms" style="margin-left:5%;" required><span style="margin-left:1%;">I agree to the <a href="http://www.capitalgenx.com/terms-conditions/" target="_blank">Terms And Conditions</a></span>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
		</div>
		<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
		<input type="submit" name="send" value="Start Free Trial" style="margin: 19% 0% 19% 0%;">
		</div>
		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
		</div>
		</form>
		</div>
		</div>
		</div>
		<div class="row" style="margin:0px !important;">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#fff; border:1px solid #fff;">
		<div class="news marquee" style="margin:5%;" >
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><span style="font-size:25px; weight:bold;">Market news</span></div><div class="col-lg-10 col-md-10 col-sm-12 col-xs-12"><marquee><a href="#">RBI leaves repo, CRR, SLR, FY16 growth projection unchanged</a></marquee></div>
</div>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<?php echo do_shortcode('[tchsp id="1"]') ;?>
		</div>
		</div>






			<div class="row" style="margin:0px !important;">
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
		<div class="about" style="margin-left:5%; font-size:16px;">
		<h2 style="color:#123455; font-size:25px;">About Capitalgenx</h2>
<head>		
<style>
div {
    text-align: justify;
    text-justify: inter-word;
}
</head>
</style>
<div><p>
	        Capitalgenx is India’s fastest growing equity advisor. Capitalgenx.com is registered with Siteway Services Pvt. Ltd. We have an expert team who guide us to get good profit for our customers, regardless of market uncertainty. Our years of expertise and excellent knowledge of market research enables us to offer high quality services. Our well experienced team is dedicated to service and assist our customers throughout the entire trade operation: from market entry to trade execution.</p>
		<p>Professionalism is also one of the most important things we have. Keeping in mind that there is a never ending list of trading advisory firms in the online market, you can gather information about us. Our expert team and management enable us to make your dream comes true. We are right because our facts are right and our reasoning is right-and that is the only thing that makes right. Our research team always acts as a researcher and not as a speculator.
		</p></div>
		</div>
		<div class="testimonial" style="border-top:1px solid #ccc;">
		<?php echo do_shortcode('[show_testimonials]'); ?>
		</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
		<div class="sidebar" style="border-left:1px solid #ccc;">
		<div class="youtube" style="margin-left:7%; margin-top:10%;">
		<iframe width="300" height="200" src="https://www.youtube.com/embed/QDpfi-Ik" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="whatsapp" style="background-color:#2C5353; color:#fff; font-size:25px; margin-left:7%; margin-top:10%;">
		<p style="text-align:center;">Have a Stock Query</p>
		<p style="text-align:center;">Whatsapp Now</p>
		<p style="text-align:center;">9135492000</p>
		</div>
		<div class="dummy" style="color:#fff; font-size:25px; margin-left:7%; margin-top:10%; height:200px;">
		
		</div>
		</div>
		
		</div>
		</div>
		<?php } ?>