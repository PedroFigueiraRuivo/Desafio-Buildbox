<?php
get_header();
?>
<div class="post-template-video">
  <main class="main-content container">
    <div class="main-content__infos">
      <div class="main-content__tags">
        <?php 
        $taxonomy_name = 'video_type';
        $terms = wp_get_post_terms(get_the_ID(), $taxonomy_name);
        $category = $terms[0]->name ? $terms[0]->name : 'Sem tag';
        ?>
        <span class="main-content__tags__category"><?php echo $category; ?></span>
        <span class="main-content__tags__time"><?php echo get_field('bx_play_video_duration', get_the_ID());?></span>
      </div>
      <h2 class="main-content__title"><?php echo get_the_title();?></h2>
    </div>
  
    <iframe 
      class="main-content__video"
      src="https://www.youtube.com/embed/<?php echo get_field('bx_play_video_ID', get_the_ID());?>?autoplay=0"
      title="YouTube video player" 
      frameborder="0" 
      allow="accelerometer; autoplay: 0; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
      allowfullscreen>
    </iframe>
    
    <div class="main-content__description">
      <p class="main-content__description__content"><?php echo get_the_excerpt();?></p>
    </div>
  </main>
</div>

<?php
get_footer();
?>