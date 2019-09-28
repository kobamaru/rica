<!DOCTYPE html>
<!--[if IE 9]><html lang="ja" class="ie ie9" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="ja" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#"><!--<![endif]-->
<head>
<meta charset="UTF-8">
<title><?php if(is_front_page()): ?><?php elseif(is_page()): ?><?php the_title(); ?> | <?php elseif(is_post_type_archive('voicelist')): ?>お客さまの声 | <?php elseif(get_post_type() === 'news'&&is_single()): ?><?php the_title(); ?> | News一覧 | <?php elseif(get_post_type() === 'news'): ?>News一覧 | <?php endif; ?><?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<meta name="description" content="将来に向けてのお金のアドバイスをしています。資金計画、家計の見直し、住宅ローン、保険の見直し、資産運用、公的年金・・などお金についてのコンサルティングをいたします。具体的に数字を提示しますので、漠然とした不安が解消されます。夢を叶えるお手伝いをさせてください。">
<meta name="keywords" content="名古屋FP、名古屋ファイナンシャルプランナー、女性FP、女性ファイナンシャルプランナー、人生設計、保険の見直し、住宅ローン、資産運用、お金の相談、年金、ねんきん定期便、教育費、おひとりさまプラン、ファミリープラン、家計の見直し">
<meta property="og:title" content="<?php if(is_front_page()): ?><?php elseif(is_page()): ?><?php the_title(); ?> | <?php elseif(is_post_type_archive('voicelist')): ?>お客さまの声 | <?php elseif(get_post_type() === 'news'&&is_single()): ?><?php the_title(); ?> | News一覧 | <?php elseif(get_post_type() === 'news'): ?>News一覧 | <?php endif; ?><?php bloginfo('name'); ?>">
<meta property="og:description" content="将来に向けてのお金のアドバイスをしています。資金計画、家計の見直し、住宅ローン、保険の見直し、資産運用、公的年金・・などお金についてのコンサルティングをいたします。具体的に数字を提示しますので、漠然とした不安が解消されます。夢を叶えるお手伝いをさせてください。">
<meta property="og:type" content="<?php if(is_front_page()): ?>website<?php else: ?>article<?php endif; ?>">
<meta property="og:url" content="<?php the_permalink(); ?>">
<meta property="og:image" content="https://www.yrfpo.com/common/images/ogp.png">
<meta property="og:site_name" content="<?php bloginfo('name'); ?>">

<link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet" media="all">
<link href="/common/css/common.css" rel="stylesheet" media="all">
<?php wp_head(); ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5RXZBXD');</script>
<!-- End Google Tag Manager -->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5RXZBXD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="top">
	<div class="wrapper">
		<!--header-->
		<div class="header">
			<header>
				<div class="head">
					<h1 class="logo"><a href="<?php echo home_url('/'); ?>"><img src="/common/images/logo.png" alt="山下りか　FP Office" class="fluid-image"></a></h1>
					<div class="box_tel">
						<p class="txt_tel icn_tel"><a href="tel:0527794120"><i class="fas fa-phone"></i><span class="visible-pc">052-779-4120</span></a></p>
						<p class="txt_note visible-pc">お気軽にお電話ください。</p>
					</div>
				</div>

				<!--nav-->
				<div class="nav">
					<p class="nav_toggle visible-sp"><i class="fas fa-angle-double-down"></i>MENU</p>
					<div class="nav_list">
						<nav>
							<ul>
								<li><a href="<?php echo home_url('/'); ?>">HOME</a></li>
								<li><a href="<?php echo home_url('/profile/'); ?>">プロフィール</a></li>
								<li><a href="<?php echo home_url('/service/'); ?>">サービス・料金</a></li>
								<li><a href="<?php echo home_url('/voicelist/'); ?>">お客さまの声</a></li>
								<li><a href="<?php echo home_url('/access/'); ?>">アクセス</a></li>
								<li><a href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a></li>
							</ul>
							<p class="nav_privacy"><a href="<?php echo home_url('/privacy/'); ?>">プライバシーポリシー</a></p>
						</nav>
					</div>
				</div>
				<!--/nav-->

			</header>
		</div>
		<!--/header-->
