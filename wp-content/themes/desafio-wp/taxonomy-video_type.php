<?php
get_header();
?> 
<div class="taxonomy-template-video_type">
  <main class="main-content container">
    <div class="main-content__category">
        <?php 
        // Verifica se a página atual é uma página de taxonomia
        if (is_tax()) {
          // Obtém o objeto do termo atual
          $term_obj = get_queried_object();

          // Verifica se o objeto é válido e se é um termo de taxonomia
          if ($term_obj && is_a($term_obj, 'WP_Term')):?>
              <h2 class="main-content__category-title"><?php echo $term_obj->name;?></h2>
              <p class="main-content__category-description"><?php echo $term_obj->description;?></p>
          <?php endif;
        }
      ?>
    </div>
  
    <?php
    if (is_tax()) {
      // Obtém o objeto do termo atual
      $term_obj = get_queried_object();

      $posts_args = array(
        'post_type' => 'video', // Substitua 'videos' pelo nome do seu Custom Post Type
        'tax_query' => array(
          array(
            'taxonomy' => get_post_taxonomies(get_the_ID())[0], // Substitua 'video_type' pela sua taxonomia
            'field' => 'slug',
            'terms' => $term_obj->slug,
          )
        )
      );

      $posts = get_posts($posts_args);
    }

    if ($posts):?>
      <ul class="post-list">
        <?php foreach ($posts as $post):?>
        <li class="post-list__item"  style="color: #fff;">
          <a href="<?php echo get_permalink($post->ID)?>">
            <figure class="post-list__item__attached-image"><?php
              if (has_post_thumbnail($post->ID)):
                $featured_image = get_post_thumbnail_id($post->ID); // 'thumbnail' é o tamanho da imagem a ser recuperado
                $featured_image_url = wp_get_attachment_image_url($featured_image, 'thumbnail'); // 'thumbnail' é o tamanho da imagem a ser recuperado
                ?>
                <img src="<?php echo $featured_image_url;?>" alt="Background article highlight" class="main__attached-image-img">
              <?php endif;?>
            </figure>
            <span class="post-list__item__time"><?php echo get_field('bx_play_video_duration', $post->ID) ?></span>
            <h3 class="post-list__item__title"><?php echo $post->post_title; ?></h3>
          </a>
        </li>
        <?php endforeach;?>
      </ul>
    <?php endif;?>
  </main>
</div>
<?php
get_footer();
?>