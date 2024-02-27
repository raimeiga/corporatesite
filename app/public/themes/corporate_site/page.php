<?php get_header();?>  <!-- ← header.phpからヘッダーのコードを呼び出す -->


<main id="page" class="wrapper">
  <article>
    <p id="page-title"><?php the_title(); ?></p>
    

    <div class="content">
      <?php the_content(); ?>
    </div>
  </article>
</main>





<?php get_footer(); ?>    <!-- ← footer.phpからヘッダーのコードを呼び出す -->
