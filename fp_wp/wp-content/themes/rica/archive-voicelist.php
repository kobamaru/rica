<?php get_header() ?>

		<!--hdg-->
		<section>
			<div class="block_hdg">
				<div class="inner">
					<div class="txt_mainvisual">
						<div>
							<h1 class="hdg_main">お客さまの声</h1>
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
					<div class="main voice">

						<section>
							<div class="block_voice pt40">
<?php 
$temp = $wp_query;
$wp_query = null;
$wp_query = new WP_Query();
$wp_query->query('post_type=voicelist' . '&paged=' . $paged . '&posts_per_page=-1');
 ?>
<?php while($wp_query->have_posts()): $wp_query->the_post(); ?>
							<!--detail-->
								<div class="box_voice">
									<div  class="box_hdg">
										<h2 class="hdg_voice"><?php the_title(); ?></h2>
										<p>（<?php the_field('personal'); ?>）</p>
									</div>
									<div class="box_detail clearfix">
<?php if(get_field('pct_voice')){ ?>
										<img src="<?php the_field('pct_voice'); ?>" alt="" class="pct-voice fluid-image">
<?php } ?>

										<div class="txt_voice">
											<p><?php the_field('voice_lead'); ?></p>
<?php if(get_field('voice_detail')){ ?>
											<div class="tgl_detail">
												<p><?php the_field('voice_detail'); ?></p>
											</div>
											<p class="visible-sp tgl_open"><a href="#" class="txt_o"><span>続きを読む</span></a></p>
<?php } ?>

										</div>
									</div>
								</div>
								<!--/detail-->
<?php endwhile; ?>
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