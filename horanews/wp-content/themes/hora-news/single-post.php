<?php get_header(); ?>

<?php
// Verifica se há posts
if (have_posts()) {
    // Loop pelos posts
    while (have_posts()) {
        the_post();
        ?>
        <div class="container containerSingle">
        <div class="single-post">
            <?php if (has_post_thumbnail()) { ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
                <?php } ?>
            <h2 class="post-title"><?php the_title(); ?></h2>
            <div class="post-date">
                <?php echo date_i18n('d M, Y', strtotime(get_the_date())); ?>
            </div>
            <div class="post-content"><?php the_content(); ?></div>
        </div>
        </div>
        <?php
    }
} else {
    // Caso não haja posts
    echo 'Nenhum post encontrado.';
}
?>


<?php get_footer(); ?>