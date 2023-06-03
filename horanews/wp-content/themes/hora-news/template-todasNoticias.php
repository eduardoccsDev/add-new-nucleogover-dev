<?php /* Template Name: Todas as Notícias */ ?>
<?php get_header(); ?>

<div id="content">
  <div class="container containerNoticias">
    <div class="tittleArea">
      <h2 class="noticiasTitle">TODAS AS NOTÍCIAS</h2>
    </div>
    <div class="gridPosts all">

    <?php
// Define os argumentos da consulta
$args = array(
    'post_type' => 'post',
    'posts_per_page' => -1, // Exibe todos os posts
);

// Realiza a consulta
$query = new WP_Query($args);

// Verifica se há posts
if ($query->have_posts()) {
    // Loop pelos posts
    while ($query->have_posts()) {
        $query->the_post();
        ?>
        <div class="post all">
              <div>
                  <?php if (has_post_thumbnail()) { ?>
                      <div class="post-thumbnail">
                          <?php the_post_thumbnail(); ?>
                      </div>
                  <?php } ?>
                  <div class="infoPost">
                  <!-- <h2 class="post-title"><?php the_title(); ?></h2> -->
                  <div class="post-date">
                    <?php echo date_i18n('d M, Y', strtotime(get_the_date())); ?>
                  </div>
                  <div class="post-content"><?php the_content(); ?></div>
                  <a class="leia-mais" href="<?php the_permalink(); ?>">Leia mais</a>
                  </div>
              </div>
                  </div>
        <?php
    }

    // Restaura os dados originais
    wp_reset_postdata();
} else {
    // Caso não haja posts
    echo 'Nenhum post encontrado.';
}
?>
</div>
  </div>
</div>
<?php get_footer(); ?>
