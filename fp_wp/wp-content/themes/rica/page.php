<?php get_header() ?>

<?php if(is_front_page()): ?>
	<?php get_template_part('mainvisual'); ?>
<?php else: ?>
	<?php get_template_part('hdg'); ?>
<?php endif; ?>

		<!--main-->
		<section>
			<div class="container">
				<div class="inner">
					<div class="main">

<?php 
	if(have_posts()):
		while (have_posts()):
			the_post();
			get_template_part('content');
			endwhile;
		endif;
 ?>

					</div>
				</div>
			</div>
		</section>
		<!--/main-->

<?php get_footer(); ?>