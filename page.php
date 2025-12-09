<?php

get_header(); ?>

<div class="content">
    <div class="container container-cols">
        <div class="content-block">
            <?php the_content(''); ?>
        </div>
        <?php get_template_part('template-parts/content', 'top'); ?>
    </div>
</div>

<?
get_footer(); ?>