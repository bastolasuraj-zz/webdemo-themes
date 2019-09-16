<?php
/*
 * Template Name: Testing
 */
get_header();
$repeaters = get_field('nes_cerrificates');
foreach ($repeaters as $repeater){
   $x =  ($repeater['certificate_image']);
    $x = $x['ID'];
    echo wp_get_attachment_image($x,'thumbnail');

}
get_footer();