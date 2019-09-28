<?php
// よくつかうもの非表示
function hide_category_tabs_adder() {
	global $pagenow;
	global $post_type;
	if ( is_admin() && ($pagenow=='post-new.php' || $pagenow=='post.php') ) {
		echo '<style type="text/css">
		#myinfo_cat-tabs {margin-bottom: 0;}
		#taxonomy-myinfo_cat .tabs {display:block; margin-bottom: 0;}
		#taxonomy-myinfo_cat .hide-if-no-js {display:none;}
		#myinfo_cat-all {border-top: 0;}
		</style>';
	}
}
add_action( 'admin_head', 'hide_category_tabs_adder' );

?>
