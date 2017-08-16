<?php get_header(); ?>
  <div class="contants">
    <div class="left_sidebar">
      <?php get_sidebar('left'); ?>
    </div>

    <div class="articles_area">
      <ul class="new_articles">
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?><li class="article">
            <a href="<?php the_permalink(); ?>">
              <?php echo thumbnail_view(); ?>
                <div class="text_area">
                <p class="title"><?php the_title(); ?></p>
                <p class="contributor"><?php the_author(); ?></p>
              </div>
            </a>
          </li><?php endwhile; endif; ?>
      </ul>
    </div>

    <div class="right_sidebar">
      <?php get_sidebar('right'); ?>
    </div>
  </div>
<?php get_footer(); ?>