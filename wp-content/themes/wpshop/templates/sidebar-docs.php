<h1>Documentation</h1>

<div class="sidebar-inner docs">
  <ul class="doc-cats">

    <?php

    $currentID = get_the_id();

    $terms = get_taxonomy_hierarchy('types');

    foreach ($terms as $term) :

      $posts_array = get_posts(
        array(
          'posts_per_page' => -1,
          'post_type' => 'docs',
          'tax_query' => array(
            array(
              'taxonomy' => 'types',
              'field' => 'term_id',
              'terms' => $term->term_id,
            )
          )
        )
      );

    ?>

    <li class="doc-cat"><?php echo $term->name; ?></li>

    <ul class="doc-terms">

      <?php foreach ($posts_array as $key => $value) { ?>
        <li class="doc-term <?php echo $currentID === $value->ID ? 'is-current-doc' : ''; ?>" data-doc-id="<?php echo $value->ID; ?>"><?php echo $value->post_title; ?></li>
      <?php } ?>
    </ul>

    <?php endforeach; ?>

  </ul>
</div>
