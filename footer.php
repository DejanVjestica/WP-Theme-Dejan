<footer id="footer" >
	<div id="widget-footer" class="wrapper">
		<?php
		$args = array('cat' => 11, 'posts_per_page' => '2',);
		$category_posts = new WP_Query($args);
		// wp_loop
		if($category_posts->have_posts()) : while($category_posts->have_posts()) : $category_posts->the_post();?>
		<!-- content -->
		<div class="about">
			<?php  the_post_thumbnail(); ?>
			<?php the_content(); ?>
		</div>


		<!-- ACF Plugin -->
		<?php
		// Variables custom fields
		$linkedin = get_field("linkedin");
		$Linkedin_description = get_field("linkedin-description");
		$github = get_field("github");
		$github_description = get_field("github-description");
		?>

		<!-- ACF Fields -->
		<!-- fieldgroup linkedin -->

		<div id="grouped-fields">
			<a class="custom-filds" href="https://www.linkedin.com/in/dejan-vjestica-07208b4b/" target="_blank">
				<img class="thumbnail" src="<?php echo $linkedin['url']; ?>" alt="<?php echo $linkedin['alt']; ?>" />
				<h4><?php echo $Linkedin_description; ?></h4>
			</a>
			<!-- fieldgroup GitHub -->
			<a class="custom-filds" href="https://github.com/DejanVjestica" target="_blank">
				<img class="thumbnail" src="<?php echo $github['url']; ?>" alt="<?php echo $github['alt']; ?>" />
				<h4><?php echo $github_description; ?></h4>
			</a>
			<!-- ACF Plugin ends hier -->
		</div>


	<?php endwhile; else: ?>
		<?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
	<?php endif; ?><!-- loop ends hier -->

	<!-- widget footer -->
	<?php dynamic_sidebar( 'footer'); ?>
	<div id="copyright">
		<p><?php echo comicpress_copyright(); ?>
			<?php
			$url = get_site_url();
			$url = preg_replace('#^https?://#', '', rtrim($url,'/'));
			echo $url;
			?>
		</p>

	</div>
</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
