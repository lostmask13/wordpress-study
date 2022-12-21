<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
<!--<nav class="navbar navbar-expand-lg navbar-success bg-success">-->
<!--    <div class="container">-->
<!--        <a class="navbar-brand" href="/">Homework project</a>-->
<!--        --><?php //wp_nav_menu(); ?>
<!--    </div>-->
<!--</nav>-->


<nav class="navbar navbar-expand-xl navbar-dark bg-success">
    <div class="container row g-4">
        <div class="collapse navbar-collapse ">
            <?php wp_nav_menu(array(
                'theme_location' => 'top',
//        'container',
//      'container_class' => 'navbar-collapse',
//        'container_id' => 'navbarResponsive',
       'menu_class' => 'navbar-nav ml-auto col-lg-12',
            )); ?>
        </div>
    </div>

</nav>
<main class="container">
    <div class="row">
        <div class="col-lg-12">