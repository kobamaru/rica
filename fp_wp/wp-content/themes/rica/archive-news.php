<?php get_header() ?>

		<!--hdg-->
		<section>
			<div class="block_hdg">
				<div class="inner">
					<div class="txt_mainvisual">
						<div>
							<h1 class="hdg_main">News一覧</h1>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/hdg-->


		<!--main-->
		<section>
			<div class="container">
				<div class="inner">
					<div class="main">

						<section>
							<div class="block_news_detail pt40">
<?php 
$temp = $wp_query;
$wp_query = null;
$wp_query = new WP_Query();
$wp_query->query('post_type=news' . '&paged=' . $paged . '&posts_per_page=-1');
 ?>
								<ul class="list_news">

<?php while($wp_query->have_posts()): $wp_query->the_post(); ?>
										<li>
											<p class="date"><time><?php the_time('Y.m.d'); ?></time></p>
<?php 
$terms = get_the_terms($post->ID, 'myinfo_cat');
echo"<p class='icn_news ";
foreach ($terms as $term){
echo "icn_".$term->slug;
echo "'>";
echo "".$term->name."";
}
echo "</p>";
?>
											<p class="detail"><a href="<?php the_permalink(); ?>" class="txt_o"><span><?php the_title(); ?></span></a></p>
<?php if(get_field('event_date')){ ?>
											<p class="detail">開催期間：<?php the_field('event_date'); ?></p>
<?php } ?>
<?php if(get_field('event_list_detail')){ ?>
											<p class="detail"><?php the_field('event_list_detail'); ?></p>
<?php } ?>
										</li>
<?php endwhile; ?>

									</ul>

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