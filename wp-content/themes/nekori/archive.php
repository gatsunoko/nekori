<?php get_header(); ?>
  <div class="contants">
    <div class="left_sidebar">
      <?php get_sidebar('left'); ?>
    </div>

    <div class="articles_area">
      <ul class="new_articles">
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?><li class="article">
            <a href="<?php the_permalink(); ?>">
              <?php if ( has_post_thumbnail() ) { ?>
                <div class="thumbnail" style="background-image: url('<?php echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>')"></div>
              <?php }
              else {
                $img_url = get_post_meta(get_the_id(), "サムネイル", true);
                if (mb_substr($img_url, -1) == "/") {
                  $img_url = substr($img_url, 0, -1);
                }?>
                <div class="thumbnail" style="background-image: url('<?php echo $img_url ?>/media/?size=m')"></div>
              <?php } ?>
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