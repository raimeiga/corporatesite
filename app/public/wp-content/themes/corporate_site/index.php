<!DOCTYPE html>

<html>
<head>
  <title>corporate_site</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="corporate_siteの説明" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css" />
</head>

<body>
<header id="header">
        <div id="navi">          
            <div id="wed">    
                 <a href="">WED</a>
            </div>
            <div id="nav_to_sections">
                <a href="">NEWS</a>
                <a href="">ABOUT</a>
                <a href="">BUSINESS</a>
                <a href="">COMPANY</a>
            </div>
            <div id="nav_to_contact">    
                <a id="contact" href="">お問い合わせ</a>
            </div>
        </div>     
</header>

<main>
  <section id="visual">
  <img id="main_visual"  src="<?php echo get_template_directory_uri();?>/images/mainvisual.jpg" alt="オフィス全体">
  </section>

  <section id="news">    
    <div class="section_title_wrapper"  id="section_title_wrapper_news" >
        <div class="section_title">NEWS</div>
        <div class="section_title_small">    
            <p><span class="border">ニュー</span>ス</p>        
        </div>     
    </div>
    <div id="news_container">
        <div class="individual_news" id="individual_news_01">
            <div class="y-m-d">
                <p>2021.01.01</p>
                <a class="label">NEWS</a>
            </div>
            <p>テキストテキストテキストテキスト</p>
        </div>

        <div class="individual_news">
            <div class="y-m-d">
                <p>2021.01.01</p>
                <a class="label">PRESS</a>
            </div>
            <p>テキストテキストテキストテキスト</p>
        </div>
        
        <div class="individual_news">
            <div class="y-m-d">
                <p>2021.01.01</p>
                <a class="label">NEWS</a>
            </div>
            <p>テキストテキストテキストテキスト</p>
        </div>
    </div>
    </section>

    <section id="ABOUT">
       <img id="visual_about"  src="<?php echo get_template_directory_uri();?>/images/about.jpg">
       <div class="section_title_wrapper" id="section_title_wrapper_about">
          <div class="section_title">ABOUT</div>
          <div class="section_title_small">    
              <p><span class="border">私たち</span>について</p> 
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
                <p><span class="border">事業内</span>容</p>        
            </div> 
        </div>    
        
       <div id="introduction_wrapper">
            <div id="introduction_left">
                <div class="business_content">
                    <p>－</p>
                    <p>Web制作・マーケティング</p>
                    <img class="visual_01"  src="<?php echo get_template_directory_uri();?>/images/business1.jpg">
                </div>
                <div class="business_content">
                    <p>－</p>
                    <p>インターネットメディア事業</p>
                    <img class="visual_01"  src="<?php echo get_template_directory_uri();?>/images/business2.jpg">
                </div>
            </div>

            <div id="introduction_right">
                <div class="business_content">
                    <p>－</p>
                    <p>プロモーション企画・制作</p>
                    <img class="visual_01"  src="<?php echo get_template_directory_uri();?>/images/business3.jpg">
                </div>
                <div class="business_content">
                    <p>－</p>
                    <p>ソーシャル企画・運営</p>
                    <img class="visual_01"  src="<?php echo get_template_directory_uri();?>/images/business4.jpg">
                </div>
            </div>
        </div>
        

     </section>


     
    




</main>

<footer>


</footer>

</body>
</html>
