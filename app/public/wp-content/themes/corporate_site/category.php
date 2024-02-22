<?php get_header();?>  <!-- ← header.phpからヘッダーのコードを呼び出す -->

<main>
    <section id="News_Press">
       <div id="wrapper">
          <div id="wrapper_child_01" class="section_title">
             News_Press
          </div>
          
          <div id="wrapper_child_02">
            <a id="span_news" href="/category/news">ニュース</a>
            <a id="span_press" href="/category/press">プレスリリース</a>
          </div>

          <div id="wrapper_News"> 
            <div>
               <?php
                    //取得したい投稿記事などの条件を引数として渡す
                    $args = array(
                        // 投稿タイプ
                        'post_type'      => 'post',
                        // カテゴリー名
                        'category_name' => 'news',
                       
                        // 1ページに表示する投稿数
                        'posts_per_page' => 5,
                    );
                    // データの取得
                    $posts = get_posts($args);
                    ?> 
                    <!-- ループ処理 -->
                    <?php foreach($posts as $post): ?>
                    <?php setup_postdata($post); ?>

               <div class="news_article">
                            <div class="y-m-d">
                                <time datetime="2021-01-01">                                
                                    <a><?php echo get_the_date(); ?></a>                                    
                                </time>
                                <a class="label">news</a>                                
                            </div>
                            <a><?php the_title(); ?></a>
                        </div>

                        <?php endforeach; ?>
                    <!-- 使用した投稿データをリセット -->
                    <?php wp_reset_postdata(); ?>                        
               </div>
          </div>

          <div id="wrapper_Press"> 
            <div>
               <?php
                    //取得したい投稿記事などの条件を引数として渡す
                    $args = array(
                        // 投稿タイプ
                        'post_type'      => 'post',
                        // カテゴリー名
                        'category_name' => 'press',
                       
                        // 1ページに表示する投稿数
                        'posts_per_page' => 5,
                    );
                    // データの取得
                    $posts = get_posts($args);
                    ?> 
                    <!-- ループ処理 -->
                    <?php foreach($posts as $post): ?>
                    <?php setup_postdata($post); ?>

               <div class="news_article">
                            <div class="y-m-d">
                                <time datetime="2021-01-01">                                
                                    <a><?php echo get_the_date(); ?></a>                                    
                                </time>
                                <a class="label">press</a>                                
                            </div>
                            <a><?php the_title(); ?></a>
                        </div>

                        <?php endforeach; ?>
                    <!-- 使用した投稿データをリセット -->
                    <?php wp_reset_postdata(); ?>                        
               </div>
          </div>
       </div>
    </section>
</main>
<?php get_footer(); ?>    <!-- ← footer.phpからヘッダーのコードを呼び出す -->
