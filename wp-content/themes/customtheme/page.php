<?php get_header();?>

<section class="page-wrap">
	<div class="container">
		<div class="about-me-container">
			<h1><?php the_title();?></h1>
			<p class="about-me-text">
				<?php the_field('about_me');?>
			</p>
		</div>
	</div>
</section>

<?php get_footer();?>