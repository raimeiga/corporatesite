<!-- header.php ここから -->
<!DOCTYPE html>

<html>
   <head>
        <title>corporate_site</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="corporate_siteの説明" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css" />
        <?php wp_head(); ?>
    </head>

  <body>
        <!-- ヘッダーここから -->
        <header id="header">
            <div id="navi">      
              <div id="logo_sections">    
                <div id="wed">    
                    <a>WED</a>
                </div>
                <div id="nav_to_sections">                    
                    <a href="<?php echo esc_url(home_url('/category//')); ?>">NEWS</a>
                    <a href="<?php echo esc_url(home_url()); ?>#ABOUT">ABOUT</a>
                    <a href="<?php echo esc_url(home_url()); ?>#BUSINESS">BUSINESS</a>
                    <a href="<?php echo esc_url(home_url()); ?>#COMPANY">COMPANY</a>
                </div>
              </div>
              <div id="nav_to_contact">    
                  <a id="contact" href="<?php echo esc_url(home_url('/page/contact/')); ?>">お問い合わせ</a>
              </div>              
            </div>     
        </header>
        <!-- ヘッダーここまで -->
<!-- header.php ここまで -->