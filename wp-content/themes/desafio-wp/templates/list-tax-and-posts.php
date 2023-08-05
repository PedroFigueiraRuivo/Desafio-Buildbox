<?php
// Template Name: List tax and Posts
get_header();
?>
<div class="page-template-list-tax-and-posts">
<?php
$post_type_name = 'video';
$taxonomy_name = 'video_type';

$args = array(
  'post_type'      => 'video',  // Substitua 'post' pelo nome do seu tipo de post
  'orderby'        => 'date',
  'order'          => 'DESC',
  'numberposts'    => 1,       // Limita o resultado para apenas o último post
);

$this_page_id = get_the_ID();

// Obtém os posts usando os argumentos da consulta
$latest_post = get_posts($args);

if ($latest_post):
  foreach ($latest_post as $post):
    $terms = wp_get_post_terms($post->ID, $taxonomy_name);
    $category = $terms[0]->name ? $terms[0]->name : 'Sem tag';

    if (has_post_thumbnail($post->ID)){
      $featured_image = get_post_thumbnail_id($post->ID); // 'thumbnail' é o tamanho da imagem a ser recuperado
      $featured_image_url = wp_get_attachment_image_url($featured_image, 'thumbnail'); // 'thumbnail' é o tamanho da imagem a ser recuperado
    }
  ?>

    <article class="main-article" pfDev-banner-background="<?php echo $featured_image_url; ?>">
        <div class="container">
          <div class="main-article__contents">
            <div class="main-article__metadata">
              <span class="main-article__category"><?php echo $category;?></span>
              <span class="main-article__time"><?php echo get_field('bx_play_video_duration', $post->ID);?></span>
            </div>
            <h1 class="main-article__title"><?php echo $post->post_title;?></h1>
            <a href="<?php echo get_permalink($post->ID)?>" class="main-article__button">
              <span><?php echo get_field('botao_principal__desktop', $this_page_id);?></span>
              <span class="for-mobile"><?php echo get_field('botao_principal__mobile', $this_page_id);?></span>
            </a>
          </div>
        </div>
      </article>
<?php endforeach; endif;?>

  <?php      
      $post_type_name = 'video';
      $taxonomy_name = 'video_type';
      // Obtém os termos (itens) da taxonomia "video_type"
      $terms = get_terms(array(
          'taxonomy' => $taxonomy_name,
          'hide_empty' => false, // Define como "false" para exibir termos mesmo que não tenham posts associados
      ));
      
      // Loop para exibir os termos
      if (!empty($terms)) {
          echo '<ul>';
          foreach ($terms as $term) :?>
          
            <main class="main list-categorys-posts">
              <section class="container">
                <h2 class="main__category-title"><?php echo $term->name;?></h2>
                
                <?php
                // Lista os posts pertencentes ao termo atual da taxonomia
                $posts_args = array(
                    'post_type' => $post_type_name, // Substitua 'videos' pelo nome do seu Custom Post Type
                    'tax_query' => array(
                        array(
                            'taxonomy' => $taxonomy_name, // Substitua 'video_type' pela sua taxonomia
                            'field' => 'slug',
                            'terms' => [$term->slug],
                        )
                    )
                );

                $posts = get_posts($posts_args);

                if ($posts):?>
                  <div class="main__glide glide">
                    <div class="main__carrossel glide__track" data-glide-el="track">
                      <ul class="main__post-list glide__slides">
                        <?php 
                        foreach ($posts as $post):?>
                          <li class="main__post-item glide__slide">
                            <a href="<?php echo get_permalink($post->ID)?>">
                              <figure class="main__attached-image"><?php
                                if (has_post_thumbnail($post->ID)):
                                  $featured_image = get_post_thumbnail_id($post->ID); // 'thumbnail' é o tamanho da imagem a ser recuperado
                                  $featured_image_url = wp_get_attachment_image_url($featured_image, 'thumbnail'); // 'thumbnail' é o tamanho da imagem a ser recuperado
                                  ?>
                                  <img src="<?php echo $featured_image_url;?>" alt="Background article highlight" class="main__attached-image-img">
                                <?php endif;?>
                              </figure>
                              <span class="main__time"><?php echo get_field('bx_play_video_duration', $post->ID) ?></span>
                              <h3 class="main__title"><?php echo $post->post_title; ?></h3>
                            </a>
                          </li>
                        <?php endforeach;?>
                      </ul>
                    </div>
                  </div>
                <?php else: ?>
                  <p style="color: #fff;">Nenhum post encontrado para esta categoria.</p>
                <?php endif;?>

              </section>
            </main> 
          <?php endforeach;
          echo '</ul>';
      }
    ?>
</div>
<?php
get_footer();
?>