<?php get_header() ?>

		<!--mainvisual-->
		<div class="mainvisual">
			<div class="inner">
				<div class="txt_mainvisual">
					<div>
						<h2 class="hdg_mainvisual">「ライフプラン」＝人生・生活設計</h2>
						<p>あなたや家族の夢や目標が叶いますように。<br><span class="word">私たちファイナンシャルプランナーが</span><span class="word">一緒に考え「夢の実現」のサポートをします。</span></p>
						<p>まずは、お話をお聞かせください。<br>輝くライフプランを作りましょう！</p>
					</div>
				</div>
			</div>
		</div>
		<!--/mainvisual-->

		<!--main-->
		<section>
			<div class="container">
				<div class="inner">
					<div class="main">

						<section>
							<div class="block_service pt40">
								<ul class="clearfix">
									<li class="one-point">
										<a href="<?php echo home_url('/'); ?>service/#one-point">
											<span class="ttl_service"><span class="word">ワンポイント</span><span class="word">相談</span></span>
											<span class="txt_service">家計のアドバイス・貯蓄・保険・住宅ローン・教育資金・老後資金・年金・資産運用など少しだけ相談したいことがある方におススメです。</span>
											<span class="link_service"><span>ワンポイント相談について</span></span>
										</a>
									</li>
									<li class="single-plan">
										<a href="<?php echo home_url('/'); ?>service/#single-plan">
											<span class="ttl_service"><span class="word">おひとりさま</span><span class="word">ライフプラン</span></span>
											<span class="txt_service">離婚してこれからひとりになろうと思っている方、独身でこの先に不安を感じている方を応援するプランです。</span>
											<span class="link_service"><span>おひとりさまライフプランについて</span></span>
										</a>
									</li>
									<li class="family-plan">
										<a href="<?php echo home_url('/'); ?>service/#family-plan">
											<span class="ttl_service"><span class="word">ファミリー</span><span class="word">ライフプラン</span></span>
											<span class="txt_service">ご家庭の家計をしっかり見つめ直した後に、改善プランを立てていきます。ご自身ではわからなかった問題点を見つけていきます。</span>
											<span class="link_service"><span>ファミリーライフプランについて</span></span>
										</a>
									</li>
									<li class="business">
										<a href="<?php echo home_url('/'); ?>service/#business">
											<span class="ttl_service"><span class="word">企業様向け</span><span class="word">セミナー</span></span>
											<span class="txt_service">企業様に出向きセミナーさせて頂きます。</span>
											<span class="link_service"><span>企業様向けセミナーについて</span></span>
										</a>
									</li>
								</ul>
							</div>
						</section>


<?php 
$temp = $wp_query;
$wp_query = null;
$wp_query = new WP_Query();
$wp_query->query('post_type=news' . '&paged=' . $paged . '&posts_per_page=10');
 ?>
						<section>
							<div class="block_news mt50">
								<h2 class="hdg_lv2">News</h2>
								<p class="link_news_list"><a href="<?php echo home_url('/'); ?>news/" class="txt_o"><span>一覧を見る</span></a></p>
								<!--news-->
								<div class="wrap_news">
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
								<!--/news-->
							</div>
						</section>
<?php $wp_query = null; $wp_query = $temp; ?>

						<section>
							<div class="mt50">
								<h2 class="hdg_lv2">私からのメッセージ</h2>
								<div class="txt_msg">
									<p>何にでも計画は必要です。<br>ボーナスの使い道、旅行の計画、週末のおでかけ…期間の短い計画は立てられますが、人生の計画は？</p>
									<p>人生も計画を立てるとうまくいくはずです。<br>不意の出費にも対応出来て、なおかつ楽しいセカンドライフが待っていると思うとワクワクしませんか？？<br>楽しい計画のサポートをさせてください。</p>
									<p>「今は設計なんて考えられない」<br>「いい加減過ぎて怒られそう」<br>「怖くて先なんて考えられない」<br>と思っているあなた。決して怒りませんので、安心してお話に来てくださいね（笑）</p>
									<p>長いようで短い人生。楽しくなるようにお手伝いさせてください。</p>
								</div>
							</div>
						</section>

					</div>
				</div>
			</div>
		</section>
		<!--/main-->
<?php get_footer(); ?>