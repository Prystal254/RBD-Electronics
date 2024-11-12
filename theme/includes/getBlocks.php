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
            case 'welcome':
              include 'blocks/welcome.php';
              break;
            case 'industries':
              include 'blocks/industries.php';
              break;
            case 'services_section':
              include 'blocks/services_section.php';
              break;
            case 'fullwidth_cta':
              include 'blocks/fullwidth_cta.php';
              break;
            case 'exclusive_solutions':
              include 'blocks/exclusive_solutions.php';
              break;
            case 'gallery':
              include 'blocks/gallery.php';
              break;
            case 'title_only_banner':
              include 'blocks/title_only_banner.php';
              break;
            case 'text_form_blurb':
              include 'blocks/text_form_blurb.php';
              break;
            case 'map':
              include 'blocks/map.php';
              break;
            case 'faqs':
              include 'blocks/faqs.php';
              break;
            case 'blogs_slider':
              include 'blocks/blogs_slider.php';
              break;
            case 'all_blogs':
              include 'blocks/all_blogs.php';
              break;
              
          }
        }
      }
    }
  }

?>