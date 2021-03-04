<?php
add_action('wp_enqueue_scripts','add_style',1);
function addStyle()
{
    wp_enqueue_style('twentytwenty-chind',get_stylesheet_uri().'./assets/css/bootstrap.min.css');
}