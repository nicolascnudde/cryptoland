<?php get_header(); ?>

<main>
    <?php get_template_part('components/hero', 'hero', [
        'description' => get_the_excerpt()
    ]); ?>

    <article>
        <?php the_content(); ?>
    </article>
</main>

<?php get_footer(); ?>