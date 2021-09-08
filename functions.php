<!-- メニュー表示 -->
<?php 
function my_menu_init()
{
register_nav_menus(
array(
'drawer' => 'ドロワーメニュー',
'site_map' => 'サイトマップ',
'footer-sns' => 'フッターSNS'
)
);
}
add_action('init', 'my_menu_init');
?>




<!-- cssとjsの読み込み 
arrayの中で読み込む順番を指定できる。
以下の場合、reset→animate→styleと読み込む。
jsの場合も同じ-->

<?php
function add_stylesheet() {
  wp_register_style('reset', get_template_directory_uri().'/css/reset.css', array(), '1.0', false);
  // wp_register_style('animate', get_template_directory_uri().'/css/animate.css', array(), '1.0', false);
  wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css');
  wp_enqueue_style('main', get_template_directory_uri().'/css/style.css', array('reset','animate'), '1.0', false);
  wp_enqueue_script('js', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true);
  wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js',true);
}
add_action('wp_enqueue_scripts', 'add_stylesheet');

