<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php bloginfo('name');?></title>
    <meta name=”description” content=<?php bloginfo('description');?>>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <?php wp_head();?>
</head>

<body>
    <div id="wrapper">
        <header class="header">
            <div class="header-inner">
                <h1 class="header-logo">
                    <a href="http://realeyes.local/"><img class="logo1" src="<?php echo get_template_directory_uri();?>./img/company-logo.png" alt=""></a>
                    <a href="http://realeyes.local/"><img class="logo2" src="<?php echo get_template_directory_uri();?>./img/company-logo2.png" alt=""></a>
                </h1>
            </div><!-- /header-inner -->

            <!-- ドロワーメニュー -->
            <div class="drawer-icon">
                <div class="drawer-icon-bars">
                    <div class="drawer-icon-bar1"></div><!-- /drawer-icon-bar1 -->
                    <div class="drawer-icon-bar2"></div><!-- /drawer-icon-bar2 -->
                    <div class="drawer-icon-bar3"></div><!-- /drawer-icon-bar3 -->
                </div><!-- /drawer-icon-bars -->
            </div><!-- /drawer-icon -->



        <div class="drawer-content">
            
                <?php
               //.drawer-navを置き換えて、スマホ用メニューを動的に表示する
               wp_nav_menu(
                 array(
             		'depth' => 1,
             		'theme_location' => 'drawer', //ドロワーメニューをここに表示すると指定
             		'container' => 'nav',
             		'container_class' => 'drawer-nav',
             		'menu_class' => 'drawer-content-item',
             	 )
               );
             ?>
               
        </div><!-- /drawer-content -->
        </header>

