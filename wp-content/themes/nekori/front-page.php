<?php get_header(); ?>
  <div class="contants">
    <div class="left_sidebar">
      <?php get_sidebar('left'); ?>
    </div>

    <div class="articles_area">
      <?php $posts = get_posts('numberposts=1&category_name=fashion');
      foreach ($posts as $post) {
        setup_postdata($post);
      ?>
      <a href="<?php the_permalink(); ?>" class="picup_article">
        <?php echo thumbnail_view(); ?>
        <div class="text_area">
          <p class="title"><?php the_title(); ?></p>
        </div>
      </a>
      <?php 
      }
      wp_reset_postdata();
      ?>

      <?php
      $args = array(
        'paged' => get_query_var( 'paged' ),/* ページネーションする場合は必須 */
      ); ?>
      <?php query_posts( $args ); ?>
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