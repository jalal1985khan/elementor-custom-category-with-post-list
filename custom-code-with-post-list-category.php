// this is the code to filter the category within the posts list
// 
add_action( 'elementor/query/limitpost', function( $query ) {	
global $post;
$post_slug = $post->post_name;
$cat = get_category_by_slug($post_slug); 
$catID = $cat->term_id;	
	
	$query->set( 'cat',$catID );
	$query->set( 'post_type', 'post' );
	$query->set( 'post_status', 'publish');
	$query->set( 'order', 'ASC');
	$query->set( 'orderby', 'title' );
} );

// this code is for testing purpose only to get the id of category
function subscribe_link_att($atts) {
global $post;
$post_slug = $post->post_name;
$cat = get_category_by_slug($post_slug); 
$catID = $cat->term_id;	
//return $catID;
	
	
}
add_shortcode('subscribe', 'subscribe_link_att');