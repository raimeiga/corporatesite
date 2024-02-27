<?php get_header(); ?>

<section id="News_Press" class="wrapper">
   <p class="section_title" >News & Press</p>
   <ul id="tab-menu">
    <!-- ニュース一覧の場合は、「ニュース」タブの下線を太線にする（activeクラスで設定） -->
    <?php is_category('news') ? print '<li class="active">' : print '<li>' ?>
      <a href="<?php echo esc_url(home_url('/category/news/')); ?>">ニュース</a>
    </li>
    <!-- プレスリリース一覧の場合は、「プレスリリース」タブの下線を太線にする（activeクラスで設定） -->
    <?php is_category('press') ? print '<li class="active">' : print '<li>' ?>
      <a href="<?php echo esc_url(home_url('/category/press/')); ?>">プレスリリース</a>
    </li>
  </ul>

  <?php if (have_posts()): ?>
    <div id="list">
      <?php while(have_posts()):the_post(); ?>
        <dt>
          <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
          <span><?php single_cat_title(); ?></span>
        </dt>
        <dd><?php the_title() ?></dd>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>
</section>

<?php get_footer(); ?>
