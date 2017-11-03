<?php

function hetic_add_thumbnail_size() {
  add_image_size( 'post-thumbnail', $width = 450, $height = 300, $crop = true );
};

add_action( 'after_setup_theme', 'hetic_add_thumbnail_size');
