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
    <div id="section_title">NEWS</div>
    <div id="section_title_small">    
       <p><span class="border">ニュー</span>ス</p>        
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
    
    <section id="ABOUT">
       <img id="visual_ABOUT"  src="<?php echo get_template_directory_uri();?>/images/about.jpg">
       <div id="section_title_wrapper">
          <div id="section_title_ABOUT">ABOUT</div>
          <div id="section_title_small_ABOUT">    
              <p><span class="border">私たち</span>について</p> 
          </div>
          <div id="section_title_small_ABOUT_description">
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          </div> 
       </div>       
     </section>
     
    </div>
  </section>



</main>

<footer>


</footer>

</body>
</html>
