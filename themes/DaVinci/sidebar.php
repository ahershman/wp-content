<div id="sidebar">
<h2 ><?php _e('TOPICS'); ?></h2>
<ul >
 <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
</ul>
<h2 ><?php _e('Archives'); ?></h2>
<ul >
 <?php wp_get_archives('type=monthly'); ?>
</ul>
<h2 ><?php _e('Recent Blogs'); ?></h2>
<ul>
 <?php $args = array( 'numberposts' => '4' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
	}
?>
 </ul>

</div>