<div class="categories">
  <?php $categories = get_categories();
    foreach ($categories as $category) {
      echo '<a href="' . get_category_link($category->term_id) . '" title="' . $category->name . '">' . $category->name . '</a>';
    }
  ?>
</div>