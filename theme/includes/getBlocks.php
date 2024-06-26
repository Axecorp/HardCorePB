<?php
  function get_blocks() {
    global $post;

    $fields = get_fields($post->ID);
    loop_blocks($fields);
  }

  function loop_blocks($blocks) {
    if (isset($blocks['blocks'])){
      if ($blocks['blocks']){
        foreach ($blocks['blocks'] as $key => $block) {
          switch ($block['acf_fc_layout']) {
            case 'global_block':
              if ($block['global_block']){
                $blocks = get_fields($block['global_block'][0]);
                loop_blocks($blocks);
              }
              break;
            case 'fullwidth_text':
              include 'blocks/fullwidth_text.php';
              break;
            case 'banner':
              include 'blocks/banner.php';
              break;
            case 'points_section':
              include 'blocks/points_section.php';
              break;
            case 'animated_blurb':
              include 'blocks/animated_blurb.php';
              break;
            case 'cards_section':
              include 'blocks/cards_section.php';
              break;
            case 'our_gallery':
              include 'blocks/our_gallery.php';
              break;
            case 'reviews':
              include 'blocks/reviews.php';
              break;
            case 'story_gradient':
              include 'blocks/story_gradient.php';
              break;
            case 'story_george':
              include 'blocks/story_george.php';
              break;
            case 'contact_form':
              include 'blocks/contact_form.php';
              break;
            case 'blogs':
              include 'blocks/blogs.php';
              break;
            
          }
        }
      }
    }
  }

?>