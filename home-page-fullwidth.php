<?php
/**
 * Template Name: Home Page Template Custom
 *
* This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blog_way
 */

get_header(); 
	/**
	 * Hook - blog_way_before_primary.
	 *
	 * @hooked blog_way_before_primary_action - 10
	 */
	//do_action( 'blog_way_before_primary' );
?>
	<div class="container">
		<div class="row">
		  <div class="container">
			<div class="row">
				<div class="col col-sm-12">
		  			<div class="wrapper">
							<div class="item">
							  <div class="polaroid"><img src="wp-content/themes/joe_dulany_theme/assets/img/polaroid1.png">
								<div class="caption">awaken</div>
							  </div>
							</div>
						  
							<div class="item">
							  <div class="polaroid"><img src="wp-content/themes/joe_dulany_theme/assets/img/polaroid2.png">
								<div class="caption">heal</div>
							  </div>
							</div>
						  
							<div class="item">
							  <div class="polaroid"><img src="wp-content/themes/joe_dulany_theme/assets/img/polaroid3.png">
								<div class="caption">transform</div>
							  </div>
							</div>
					  </div>
				</div>
			</div>
			</div>
		</div>
	</div>
	<?php
	while ( have_posts() ) : the_post();
		?>
	<div class="mainHomeContent container">
		<div class="row">
			<div class="col col-sm-12">
		
				<?php
				$content = apply_filters( 'the_content', get_the_content() );
				echo $content;
				?>
			</div>
		</div>
	</div>
		<?php
		
		//get_template_part( 'template-parts/content', 'page' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile; ?>

<?php
	/**
	 * Hook - blog_way_after_primary.
	 *
	 * @hooked blog_way_after_primary_action - 10
	 */
	do_action( 'blog_way_after_primary' );

get_footer();