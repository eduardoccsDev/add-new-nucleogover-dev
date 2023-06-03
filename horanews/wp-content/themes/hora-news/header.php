<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <?php wp_head(); ?>
    <link href="\wp-content\themes\hora-news\style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <nav class="navBar">
        <div class="container">    
            <ul>
                <li><a href="/noticias">Página inicial</a></li>
            </ul>
        </div>
    </nav>
    <header class="header">
        <div class="container">
            <h1 class="destaque"><?php echo get_bloginfo( 'name' ); ?></h1>
            <p class="pageName">
                <?php the_title(); ?>
            </p>
        </div>
    </header>
