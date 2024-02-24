<?php get_header(); ?>

<main id="category" class="wrapper">
  <h1 class="page-title">News & Press</h1>

  <ul class="tab-menu">
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
    <dl class="list">
      <?php while(have_posts()):the_post(); ?>
        <dt>
          <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
          <span><?php single_cat_title(); ?></span>
        </dt>
        <dd><?php the_title() ?></dd>
      <?php endwhile; ?>
    </dl>
  <?php endif; ?>
</main>

<?php get_footer(); ?>