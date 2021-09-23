<?php

/**
 * Fallback index page
 */
?>

<div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php
            the_title('<h1>', '</h1>');
            the_content();
            ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>