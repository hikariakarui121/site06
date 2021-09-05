<?php

add_action('init', function(){
add_theme_support('post-thumbnails');

});
?>

<?php
// カスタム投稿タイプを追加

add_action('init', function(){
	register_post_type('news',[
		'public' => true,
		'label'  => 'news',
		'menu_position' =>5,
		'has_archive'  => true,
	]);
});

?>

<?php
function post_has_archive( $args, $post_type ) {
  if ( 'post' == $post_type ) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'blog'; 
  }
  return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

?>

<?php

function column_posts($query){
if(is_admin() || !$query ->is_main_query()){
return;

}

if( $query -> is_post_type_archive('news')){
$query ->set('posts_per_page','10');
return;
}

if( $query -> is_archive()){
	$query ->set('posts_per_page','10');
	return;
}
}

add_action('pre_get_posts','column_posts');



