<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blog_Way
 */

?>
<?php
	/**
	 * Hook - blog_way_doctype.
	 *
	 * @hooked blog_way_doctype_action - 10
	 */
	do_action( 'blog_way_doctype' );
?>
<head>
<?php
	/**
	 * Hook - blog_way_head.
	 *
	 * @hooked blog_way_head_action - 10
	 */
	do_action( 'blog_way_head' );
?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if(function_exists('wp_body_open')){
	wp_body_open();
} ?>
	<div id="page" class="site">
		<?php
		/**
		* Hook - blog_way_before_header.
		*
		* @hooked blog_way_before_header_action - 10
		*/
		do_action( 'blog_way_before_header' );

		/**
		* Hook - blog_way_header.
		*
		* @hooked blog_way_header_action - 10
		*/
		do_action( 'blog_way_header' );

		/**
		* Hook - blog_way_after_header.
		*
		* @hooked blog_way_after_header_action - 10
		*/
		do_action( 'blog_way_after_header' );

		/**
		* Hook - blog_way_site_branding.
		*
		* @hooked blog_way_site_branding_action - 10
		*/
		if ( is_front_page() ) {    
			do_action( 'blog_way_site_branding' );
			?>
			
			<div id="polaroidSlider">
				
				<div class="items1 containerWrapper">
					<div class="sliderpagination">
						<div class="prev"></div>
						<div class="nxt"></div>
					</div>
					<div class="wrapper">
					<div class="item">
					<div class="polaroid"><img src="wp-content/themes/joe_dulany_theme/assets/img/polaroid1.png">
			]		<div class="caption">growth</div>
				</div>
			</div>
									  
			<div class="item">
				<div class="polaroid">
					<img src="wp-content/themes/joe_dulany_theme/assets/img/polaroid2.png">
					<div class="caption">spiritual</div>
				</div>
			</div>
									  
				<div class="item">
					<div class="polaroid">
					<img src="wp-content/themes/joe_dulany_theme/assets/img/polaroid3.png">
					<div class="caption">being myself</div>
					</div>
				</div>
		</div>
		</div>	
							<div class="items2 containerWrapper">
								<div class="sliderpagination">
									<div class="prev"></div>
									<div class="nxt"></div>
								</div>
								  <div class="wrapper">
										<div class="item">
										  <div class="polaroid"><img src="wp-content/themes/joe_dulany_theme/assets/img/polaroid4.jpg">
											<div class="caption">calm</div>
										  </div>
										</div>
									  
										<div class="item">
										  <div class="polaroid"><img src="wp-content/themes/joe_dulany_theme/assets/img/polaroid5.jpg">
											<div class="caption">peace</div>
										  </div>
										</div>
									  
										<div class="item">
										  <div class="polaroid"><img src="wp-content/themes/joe_dulany_theme/assets/img/polaroid6.jpg">
											<div class="caption">connect</div>
										  </div>
										</div>
								  </div>
							</div>
								<div class="items3 containerWrapper">
									<div class="sliderpagination">
										<div class="prev"></div>
										<div class="nxt"></div>
									</div>
								  <div class="wrapper">
										<div class="item">
										  <div class="polaroid"><img src="wp-content/themes/joe_dulany_theme/assets/img/polaroid7.jpg">
											<div class="caption">free</div>
										  </div>
										</div>
									  
										<div class="item">
										  <div class="polaroid"><img src="wp-content/themes/joe_dulany_theme/assets/img/polaroid8.jpg">
											<div class="caption">serenity</div>
										  </div>
										</div>
									  
										<div class="item">
										  <div class="polaroid"><img src="wp-content/themes/joe_dulany_theme/assets/img/polaroid9.jpg">
											<div class="caption">eyes open</div>
										  </div>
										</div>
								  </div>
							</div>
							
						</div>
						
			<?php
		}
		

		/**
		* Hook - blog_way_before_content.
		*
		* @hooked blog_way_before_content_action - 10
		*/
		do_action( 'blog_way_before_content' );