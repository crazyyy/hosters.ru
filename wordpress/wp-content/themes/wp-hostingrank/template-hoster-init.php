<?php
  $post_ID = get_the_ID();
  $parent_id = wp_get_post_parent_id( $post_ID );
  $hoster_ID = $parent_id;
  $isParent = false;
  if (!$parent_id) {
    $isParent = true;
    $hoster_ID = $post_ID;
  }

  ?>
