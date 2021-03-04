<body>
<h1>this is page.php</h1>
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