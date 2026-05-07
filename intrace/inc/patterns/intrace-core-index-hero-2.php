<?php
/**
 * Pattern content.
 */
return array(
	'title'      => __( 'Core Index Hero', 'intrace' ),
	'categories' => array( 'intrace-core' ),
	'content'    => '<!-- wp:group {"layout":{"contentSize":""}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"' . esc_url( trailingslashit( get_template_directory_uri() ) ) . 'assets/img/architecture-house-home-pool-ceiling-italy-599832-pxhere.com_.webp","id":1185,"dimRatio":80,"customOverlayColor":"#181818","isUserOverlayColor":true,"style":{"spacing":{"padding":{"bottom":"0px","right":"0px","left":"0px","top":"20px"}}}} -->
<div class="wp-block-cover" style="padding-top:20px;padding-right:0px;padding-bottom:0px;padding-left:0px"><img class="wp-block-cover__image-background wp-image-1185" alt="" src="' . esc_url( trailingslashit( get_template_directory_uri() ) ) . 'assets/img/architecture-house-home-pool-ceiling-italy-599832-pxhere.com_.webp" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim" style="background-color:#181818"></span><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:pattern {"slug":"intrace/core-header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"200px"}}}} -->
<div class="wp-block-group" style="padding-top:100px;padding-bottom:200px"><!-- wp:post-title {"textAlign":"center","style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"700","letterSpacing":"0px","textTransform":"uppercase"}},"textColor":"white","fontSize":"heading-4","fontFamily":"lato"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
	'is_sync' => false,
);
