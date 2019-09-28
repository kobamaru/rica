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

						<section>
							<div class="block_news_detail pt40">

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php if(get_field('event_date')){ ?>
								<p>開催期間：<?php the_field('event_date'); ?></p>
<?php } ?>
<?php the_content(); ?>


<?php if(get_field('event_link')){ ?>
								<p class="mt20"><a href="<?php the_field('event_link'); ?>" class="btn_o"
<?php 
$win = post_custom('event_link_win');
switch($win){
	case $win === 'window':
		echo ' target="_blank"';
		break;
}
?>
><span><?php the_field('event_name'); ?></span></a></p>
<?php } ?>



<?php endwhile; endif; ?>
							</div>
						</section>

					</div>
				</div>
			</div>
		</section>



					</div>
				</div>
			</div>
		</section>
		<!--/main-->

<?php get_footer(); ?>