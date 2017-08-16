<?php get_header(); ?>
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
    </div>
    <div class="article_header">
      <div class="article_header_in">
        <?php echo thumbnail_view(); ?>
        <div class="text_area">
          <h2><?php the_title(); ?></h2>
          <span class="date"><?php the_time("Y/m/d"); ?></span>
          <span class="cate"><?php the_category(', '); ?></span>
        </div>
      </div>
    </div>
    <div class="container">
    <div class="contants">
      <div class="article_area">
      <?php the_content(); ?>
      <?php edit_post_link(); ?>
    </div>
    <?php endwhile; endif; ?>

    <div class="right_sidebar">
      <?php get_sidebar('right'); ?>
    </div>
  </div>
<?php get_footer(); ?>