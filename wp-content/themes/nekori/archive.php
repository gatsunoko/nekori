<?php get_header(); ?>
  <div class="contants">
    <div class="left_sidebar">
      <?php get_sidebar('left'); ?>
    </div>

    <div class="articles_area">
      <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <span class="date"><?php the_time("Y/m/d"); ?></span>
        <span class="cate"><?php the_category(', '); ?></span>
        <?php the_post_thumbnail(); ?>
        <?php the_excerpt(); ?>
        <?php edit_post_link(); ?>
      <?php endwhile; endif; ?>
    </div>

    <div class="right_sidebar">
      <?php get_sidebar('right'); ?>
    </div>
  </div>
<?php get_footer(); ?>