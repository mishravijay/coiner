<?php
/**
 * Template Name: Page With Left Sidebar
 *
 * @package Terrifico
 */
$terrifico_theme_options = terrifico_get_options( 'terrifico_theme_options' );
get_header(); ?>
	<div id="main" class="col2-r">
	<?php
		// Start the Loop.
		while ( have_posts() ) : the_post(); ?>

<div class="content-posts-wrap">
	<div id="content-box">
		<div id="post-body">
			<div <?php post_class('post-single'); ?>>
				<h1 id="post-title" <?php post_class('entry-title'); ?>><?php the_title(); ?> </h1>
				<?php 
				if ($terrifico_theme_options['breadcrumbs'] == '1') { ?>
				<div class="breadcrumbs">
					<div class="breadcrumbs-wrap"> 
						<?php get_template_part( 'breadcrumbs'); ?>
					</div><!--breadcrumbs-wrap-->
				</div><!--breadcrumbs-->
			<?php } 
				 
				if ( has_post_thumbnail() ) { 
						
					if ($terrifico_theme_options['featured_img_post'] == '1') {?>
						<div class="thumb-wrapper">
							<?php the_post_thumbnail('full'); ?>
						</div><!--thumb-wrapper-->
					<?php
					} 
						
				} ?>
				<div id="article">
					<?php the_content(); 
					the_tags('<p class="post-tags"><span>'.__('Tags:','terrifico').'</span> ','','</p>');
					wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'terrifico' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
					) );
					
					//Displays navigation to next/previous post.
					if ( $terrifico_theme_options['post_navigation'] == 'below') { get_template_part('post','nav'); }
				
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template( '', true );
					} ?>
			
				</div><!--article-->
			</div><!--post-single-->
				<?php get_template_part('post','sidebar'); ?>
		</div><!--post-body-->
	</div><!--content-box-->
	<div class="sidebar-frame">
		<div class="sidebar">
			<?php get_sidebar(); ?>
		</div><!--sidebar-->
	</div><!--sidebar-frame-->
</div><!--content-posts-wrap-->
	<?php	
		endwhile;
	?>
	</div><!--main-->
<?php if ($terrifico_theme_options['social_section_on'] == '1') {
	get_template_part( 'social', 'section' );	
}
get_footer(); ?>