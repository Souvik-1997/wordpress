<?php
/*
Template Name: Home page


*/
get_header();
?>
<body>
<h1>This is home.php</h1>
<h2><?php bloginfo('title'); ?>title</h2>
<!-- <h3><?php /* bloginfo('description');*/ ?>: description</h3>
<p><?php/* bloginfo('admin_email');*/ ?>: admin_email</p> -->

<?php 

// -----------------The Loop--------------------------------------- 
if ( have_posts() ) : 
    while ( have_posts() ) : 
        the_post(); 
        the_title();
        echo "<hr>";

        the_category();
        the_content();
        the_author();
        the_tags();
        echo "</br>";
        echo "</br>";
        echo "</br>";
        echo "</br>";
    endwhile;
endif;
?>











<?php get_footer();?> 