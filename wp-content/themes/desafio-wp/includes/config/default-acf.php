<?php
function httfox_start_acf() {
  echo '_________________________________________________________';

  if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
      'key' => 'group_64cd648b35f99',
      'title' => 'Menu',
      'fields' => array(
        array(
          'key' => 'field_64cd648b06d5c',
          'label' => 'icon_menu',
          'name' => 'icon_menu',
          'aria-label' => '',
          'type' => 'image',
          'instructions' => 'Valor mínimo de 32x32px',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'return_format' => 'url',
          'library' => 'all',
          'min_width' => 32,
          'min_height' => 32,
          'min_size' => '',
          'max_width' => 80,
          'max_height' => 80,
          'max_size' => '',
          'mime_types' => 'png, jpg, jpeg',
          'preview_size' => 'full',
        ),
      ),
      'location' => array(
        array(
          array(
            'param' => 'nav_menu_item',
            'operator' => '==',
            'value' => 'all',
          ),
        ),
      ),
      'menu_order' => 0,
      'position' => 'normal',
      'style' => 'default',
      'label_placement' => 'top',
      'instruction_placement' => 'label',
      'hide_on_screen' => '',
      'active' => true,
      'description' => '',
      'show_in_rest' => 0,
    ));
    
    acf_add_local_field_group(array(
      'key' => 'group_64cdab3d118d3',
      'title' => 'Template - Listagem de taxonomias e posts',
      'fields' => array(
        array(
          'key' => 'field_64cdab3fba3a8',
          'label' => 'Botão principal - desktop',
          'name' => 'botao_principal__desktop',
          'aria-label' => '',
          'type' => 'text',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => 'Mais informações',
          'maxlength' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
        ),
        array(
          'key' => 'field_64cdababf4cc2',
          'label' => 'Botão principal - mobile',
          'name' => 'botao_principal__mobile',
          'aria-label' => '',
          'type' => 'text',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => 'Assistir',
          'maxlength' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
        ),
      ),
      'location' => array(
        array(
          array(
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'templates/list-tax-and-posts.php',
          ),
        ),
      ),
      'menu_order' => 0,
      'position' => 'normal',
      'style' => 'default',
      'label_placement' => 'top',
      'instruction_placement' => 'label',
      'hide_on_screen' => '',
      'active' => true,
      'description' => '',
      'show_in_rest' => 0,
    ));
    
    acf_add_local_field_group(array(
      'key' => 'group_64cd659b3eee9',
      'title' => 'Vídeos',
      'fields' => array(
        array(
          'key' => 'field_64cd659b57517',
          'label' => 'Tempo de Duração',
          'name' => 'bx_play_video_duration',
          'aria-label' => '',
          'type' => 'number',
          'instructions' => 'O tempode duração deverá ser informado em MINUTOS. Exemplo: 90m',
          'required' => 1,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'min' => '01',
          'max' => '',
          'placeholder' => '00',
          'step' => '',
          'prepend' => '',
          'append' => '',
        ),
        array(
          'key' => 'field_64cd665104c00',
          'label' => 'Embed de Vídeo',
          'name' => 'bx_play_video_ID',
          'aria-label' => '',
          'type' => 'text',
          'instructions' => 'Utilize o código ID do vídeo. Exemplo:
    Vídeo = https://www.youtube.com/watch?v=zr8iaskUKKQ&r=tesyteh
    ID = zr8iaskUKKQ',
          'required' => 1,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'maxlength' => '',
          'placeholder' => 'zr8iaskUKKQ',
          'prepend' => '',
          'append' => '',
        ),
      ),
      'location' => array(
        array(
          array(
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'video',
          ),
        ),
      ),
      'menu_order' => 0,
      'position' => 'normal',
      'style' => 'default',
      'label_placement' => 'top',
      'instruction_placement' => 'label',
      'hide_on_screen' => '',
      'active' => true,
      'description' => '',
      'show_in_rest' => 0,
    ));
    
    endif;		
}

add_action( 'acf/init', 'httfox_start_acf' );

?>