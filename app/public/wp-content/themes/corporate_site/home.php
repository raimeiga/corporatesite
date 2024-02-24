
<?php get_header();?>  <!-- ← header.phpからヘッダーのコードを呼び出す -->
    <main>
        <section id="visual">
            <img id="main_visual"  src="<?php echo get_template_directory_uri();?>/images/mainvisual.jpg" alt="オフィス全体">
        </section>

        <section id="NEWS">    
            <div class="section_title_wrapper"  id="section_title_wrapper_news" >
                <div class="section_title">NEWS</div>
                <div class="section_title_small">    
                    <p><span class="border">ニュー</span>ス</p>        
                </div>     
            </div>
                
            <div id="news_container">
                    <?php
                    //取得したい投稿記事などの条件を引数として渡す
                    $args = array(
                        // 投稿タイプ
                        'post_type'      => 'post',
                        // カテゴリー名
                        'category_name' => 'news',
                       
                        // 1ページに表示する投稿数
                        'posts_per_page' => 3,
                    );
                    // データの取得
                    $posts = get_posts($args);
                    ?> 
                    <!-- ループ処理 -->
                    <?php foreach($posts as $post): ?>
                    <?php setup_postdata($post); ?>
                    
                        <div class="individual_news" id="individual_news_01">                    
                            <div class="y-m-d">
                                <time datetime="2021-01-01">
                                    <a><?php echo get_the_date(); ?>
                                    </a>
                                </time>
                                <span class="label"><?php echo get_the_category(); ?></span>                                
                            </div>
                            <a><?php the_title(); ?></a>
                        </div>
                        <?php endforeach; ?>
                    <!-- 使用した投稿データをリセット -->
                    <?php wp_reset_postdata(); ?>

             </div>
               
        </section>

        <section id="ABOUT">
            <div id="img">
                <img id="visual_about"  src="<?php echo get_template_directory_uri();?>/images/about.jpg">
            </div>
            <div class="section_title_wrapper" id="section_title_wrapper_about">
                <div class="section_title">ABOUT</div>
                <div class="section_title_small">    
                    <p><span class="border">俺たち</span>について</p> 
                </div>
                <div id="description_about">
                    <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div> 
            </div>       
        </section>

        <section  id="BUSINESS">
                <div class="section_title_wrapper" id="section_title_wrapper_business">
                    <div class="section_title">BUSINESS</div>
                    <div class="section_title_small">    
                        <p><span class="border">詐欺内</span>容</p>        
                    </div> 
                </div>    
                
            <div id="introduction_wrapper">
                    <div id="introduction_left">
                        <div class="business_content">
                            <p>－</p>
                            <p>Web制作・マーケティング</p>
                            <img class="images"  src="<?php echo get_template_directory_uri();?>/images/business1.jpg">
                        </div>
                        <div class="business_content">
                            <p>－</p>
                            <p>インターネットメディア事業</p>
                            <img class="images"  src="<?php echo get_template_directory_uri();?>/images/business2.jpg">
                        </div>
                    </div>

                    <div id="introduction_right">
                        <div class="business_content">
                            <p>－</p>
                            <p>プロモーション企画・制作</p>
                            <img class="images"  src="<?php echo get_template_directory_uri();?>/images/business3.jpg">
                        </div>
                        <div class="business_content">
                            <p>－</p>
                            <p>ソーシャル企画・運営</p>
                            <img class="images"  src="<?php echo get_template_directory_uri();?>/images/business4.jpg">
                        </div>
                    </div>
                </div>
        </section>

            <section id="COMPANY">
                <div id="COMPANY-box">
                    <div class="section_title_wrapper" id="section_title_wrapper_company">
                        <div class="section_title">COMPANY</div>
                        <div class="section_title_small">    
                            <p><span class="border">家庭情</span>報</p>        
                        </div> 
                    </div>           
                    <table id="company_description">
                        <tr>
                            <th class="item_first">会社名</th>
                            <td class="item_second">ウェブエンターテイメントデザイン株式会社</td>
                        </tr>
                        <tr>
                            <th class="item_first">所在地</th>
                            <td class="item_second">東京都渋谷区桜丘町99-9 West Building 3F</td>
                        </tr>
                        <tr>
                            <th class="item_first">代表</th>
                            <td class="item_second">ＸＸＸＸＸＸ</td>
                        </tr>
                        <tr>
                            <th class="item_first">設立</th>
                            <td class="item_second">2021年1月1日</td>
                        </tr>
                        <tr>
                            <th class="item_first">資本金</th>
                            <td class="item_second">3,000,000円</td>
                        </tr>
                        <tr>
                            <th class="item_first">事業内容</th>
                            <td class="item_second">Web制作・マーケティング</td>
                        </tr>
                        <tr>
                            <th class="item_first"></th>
                            <td class="item_second">インターネットメディア事業</td>
                        </tr>
                        <tr>
                            <th class="item_first"></th>
                            <td class="item_second">プロモーション企画・制作</td>
                        </tr>
                        <tr>
                            <th class="item_first"></th>
                            <td class="item_second">ソーシャル企画・運営</td>
                        </tr>
                    </table>     
                    
                    <div id="company_description_sp">
                        <p class="item_first">会社名</p>
                        <p class="item_second">ウェブエンターテイメントデザイン株式会社</p>
                        <p class="item_first">所在地</p>
                        <p class="item_second">東京都渋谷区桜丘町99-9 West Building 3F</p>
                        <p class="item_first">代表</p>
                        <p class="item_second">ＸＸＸＸＸＸ</p>
                        <p class="item_first">設立</p>
                        <p class="item_second">2021年1月1日</p>
                        <p class="item_first">資本金</p>
                        <p class="item_second">3,000,000円</p>
                        <p class="item_first">事業内容</p>
                        <p class="item_second">Web制作・マーケティング</p>
                        <p class="item_second">インターネットメディア事業</p>
                        <p class="item_second">プロモーション企画・制作</p>
                        <p class="item_second">ソーシャル企画・運営</p>                      
                    </div>
                </div>
                <div id="visual_company">
                  <img src="<?php echo get_template_directory_uri();?>/images/company.jpg" alt="向かい合ってすわる女性2人">
                </div>    
            </section>
    </main>
    <?php get_footer(); ?>    <!-- ← footer.phpからヘッダーのコードを呼び出す -->

    
