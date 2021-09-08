<section class="about-site wow fadeInUp">
                <div class="about-site-inner inner">

                    <div class="about-site-company" id="comp">
                        <h3 class="company-name">RealEyes</h3>
                        <table class="company-table">
                            <tr>
                                <th>創業</th>
                                <td>2021.3～</td>
                            </tr>
                            <tr>
                                <th>代表</th>
                                <td>岩室 汰一（いわむろ たいち）</td>
                            </tr>
                            <tr>
                                <th>所在地</th>
                                <td>台湾 台中市 北区 忠明七街20之1號2樓A房</td>
                            </tr>
                            <tr>
                                <th>事業内容</th>
                                <td>Web制作、LP制作、SNS運用、プログラミングスクール、<br>日台交流広場「Oh！好友倶楽部」運営、日本語教育事業、中国語教育事業</td>
                            </tr>
                            <tr>
                                <th>URL</th>
                                <td><a href="https://realeyes.com">https://realeyes.com</a></td>
                            </tr>
                        </table>
                    </div>
                    <div class="about-site-map">
                        　<div class="about-site-map-title">サイトマップ</div><!-- /profile-name -->
                        <nav class="site-map">
                            <ul class="site-map-items">
                            <?php
                              wp_nav_menu(
                                array(
                                    'depth' => 1,
                                    'theme_location' => 'site_map',
                                    'container' => 'site-map',
                                    'menu_class' => 'site-map-items'
                                )
                              );
                            ?>

                            </ul><!-- /site-map-items -->
                        </nav>
                    </div><!-- /about-site-map -->
                </div><!-- /about-site-inner -->
                <div class="about-site-profile wow fadeInUp">
                    <div class="profile-img"><img src="<?php echo get_template_directory_uri();?>./img/profile.jpg" alt=""></div><!-- /profike-img -->
                    <div class="profile-name">岩室 汰一（いわむろ たいち）</div><!-- /profile-name -->
                    <div class="profile-me">
                        <p>兵庫県出身</p>
                        <p>30歳、O型</p>
                    </div><!-- /profile-me -->
                    <div class="profile-message1">
                        <p>▼学歴・経歴<br>
                            関西外大→アメリカ留学→京都大学大学院<br>
                            滋賀で英語教師→台湾で日本語教師→台湾でエンジニア<br>
                            ▼趣味<br>野球、スノボー、山登り、自転車、読書、ギター、マジックなど</p>
                    </div><!-- /profile-message -->
                    <div class="profile-message2">
                        <p>1人1人が自信を持って"自分らしく"生きられる社会を創りたい。<br>
                            Web制作を通して、小さなきっかけが提供できれば幸いです。
                        </p>
                    </div><!-- /profile-message2 -->
                </div><!-- /about-site-profile -->

            </section><!-- /profile -->

            <div class="to-top" id="js-toTop">
                <a class="to-top-btn" href="#"></a>
            </div><!-- /to-top -->
        </main>

<footer>
    
            <div class="footer-inner inner">


                <ul class="footer-sns">
                    <!-- <li><a href="https://www.facebook.com/taichi.iwamuro"><i class="fab fa-facebook fa-2x"></i></li>
                    <li><a href="https://twitter.com/taichi_kun51"><i class="fab fa-twitter fa-2x"></i></li>              
                    <li><a href="https://www.instagram.com/taichikun_51/?hl=ja"><i class="fab fa-instagram fa-2x"></i>
                    </li>            
                    <li><a href="https://www.youtube.com/channel/UCGaukL-YdyiXnk2xfZ41XoQ/videos"><i
                                class="fab fa-youtube fa-2x"></i></li>
                    <li><a
                            href="https://www.amazon.co.jp/gp/product/B093X29Y29/ref=as_li_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=B093X29Y29&linkCode=as2&tag=taimax-22&linkId=df493d946e246d1d0e65357bb7bd607e"><i
                                class="fas fa-book fa-2x"></i></a></li> -->
                                <?php
                              wp_nav_menu(
                                array(
                                    'depth' => 1,
                                    'theme_location' => 'footer-sns',
                                    'container' => 'footer-inner',
                                    'menu_class' => 'footer-sns'
                                )
                              );
                            ?>
                </ul>
                <p class="footer-copy">Copyright © 2021 Realize All Rights Reserved.</p>
            </div>
           
        </footer>
        
    </div>
    <?php wp_footer(); ?>
    
<script> new WOW().init(); </script>
</body>
</html>