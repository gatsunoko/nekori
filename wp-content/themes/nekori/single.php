<?php get_header(); ?>
    <div class="article_header">
      <h2><?php the_title(); ?></h2>
      <span class="date"><?php the_time("Y/m/d"); ?></span>
      <span class="cate"><?php the_category(', '); ?></span>
    </div>
    <div class="contants">
      <div class="article_area">
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
          <?php the_content(); ?>
          <?php edit_post_link(); ?>
        <?php endwhile; endif; ?>
      </div>
    <div class="right_sidebar">
      <?php get_sidebar('right'); ?>
    </div>
  </div>
<?php get_footer(); ?>