<?php

get_header();?>

<?php if(have_posts()) { while(have_posts()) { the_post(); ?> <!-- loop inicial para puxar as informações do title etc -->

<h1><?php the_title()?></h1>
<main><?php the_content() ?></main>

<?php
    }

}
?>


<?php get_footer();?>