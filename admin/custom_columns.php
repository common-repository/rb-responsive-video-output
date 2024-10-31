<?php
function rbd_video_add_column($columns){
	$columns['id'] = __('ID');
    return $columns;
}

add_action('manage_edit-video_columns', 'rbd_video_add_column', 10, 1);


function rbd_video_manage_custom_columns( $column, $post_id ) {
	global $post;
	switch( $column ) {
		/* If displaying the 'duration' column. */
		case 'id' :
			echo $post_id;
			break;
		default :
			break;
	}
}

add_action( 'manage_video_posts_custom_column', 'rbd_video_manage_custom_columns', 10, 2 );


function rbd_video_footer_function() {
	echo '<style>.post-type-video table.posts th.column-id { width: 50px; }</style>';
}

add_action('admin_footer', 'rbd_video_footer_function');
?>