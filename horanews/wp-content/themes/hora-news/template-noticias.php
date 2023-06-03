<?php /* Template Name: Notícias */ ?>
<?php get_header(); ?>

<div id="content">
  <div class="container containerNoticias">
    <div class="tittleArea">
      <h2 class="noticiasTitle">ÚLTIMAS NOTÍCIAS</h2>
      <a href="/noticias/todas-as-noticias/">VER TODOS AS NOTÍCIAS</a>
    </div>
    <div class="gridPosts">
  <?php
    // Define o número de posts por página
    $posts_per_page = 4;
    // Define o número da página atual
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    // Define os argumentos da consulta
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => $posts_per_page,
        'paged' => $paged
    );
    // Realiza a consulta
    $query = new WP_Query($args);
    // Verifica se há posts
    if ($query->have_posts()) {
        // Loop pelos posts
        while ($query->have_posts()) {
            $query->the_post();
            ?>
            <div class="post">
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
        // Exibe a paginação
        echo '<div class="pagination">';
        echo paginate_links(array(
            'total' => $query->max_num_pages,
            'prev_text' => '&laquo;',
            'next_text' => '&raquo;',
            'mid_size' => 2,
        ));
        echo '</div>';
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