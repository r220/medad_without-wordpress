<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="fonts/4_5956369012412651648.ttf">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>midad | <?php the_title(); ?></title>

    <?php wp_head() ?>
</head>

<body>
    <header>
        <?php
        wp_nav_menu(array(
            'theme-location' => 'top-menu',
            'menu_class' => 'top-bar'
        ));
        ?>
    </header>