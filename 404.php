<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <title>Wessel van den IJssel - Social Brothers</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo home_url();?>/wp-content/themes/thema_wesselvandenijssel/assets/images/favicon.png);">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo home_url();?>/wp-content/themes/thema_wesselvandenijssel/assets/images/favicon.png);">
    <!-- FontAwesome CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Theme CSS -->
    <?php
    wp_head()
    ?>
    <style>
    body,
    html {
        padding: 0;
        margin: 0;
        width: 100%;
        height: 100%;
        background-color: #F27623;
        font-family: 'Montserrat', sans-serif;
        color: #fff
    }
    </style>
</head>

<body <?php body_class(); ?>>
    <?php
$url = home_url();
$title = ucwords(strtolower(str_replace(' ', '', wp_title('', false))));
?>
    <div class="main_error">
        <header class="text-center">
            <div id="upper-section"
                style="background-image: url(<?php echo home_url();?>/wp-content/themes/thema_wesselvandenijssel/assets/images/header.png);">

                <div id="logo"> <a href="<?php echo $url;?>"><img
                            src="<?php echo home_url();?>/wp-content/themes/thema_wesselvandenijssel/assets/images/SBlogo.png"
                            alt="">
                    </a>
                </div>
                </a>
                <h1 id="title"><?php echo $title; ?></h1>
                <nav class="nav">
                    <div id="wp_nav">
                        <?php
						$args = array(
							'theme_location' => 'primary'
						);
						?>
                        <?php wp_nav_menu();?></div>
                </nav>
        </header>
        <a href="<?php echo $url;?>" class="fa fa-arrow-left"></a>
        <div class="error_page">
            <h1 class="error_title">404</h1>
            <p>We hebben de pagina niet gevonden</p>
            <p>Handige linkjes:</p>
            <li><a href="https://wesselvandenijssel.nl/" class="link">Portfolio Wessel van den IJssel</a></li>
            <li><a href="https://socialbrothers.nl/" class="link">Website Social Brothers</a></li>
            <li><a href="https://www.linkedin.com/in/wessel-van-den-ijssel/" class="link">LinkedIn Wessel van den
                    IJssel</a></li>
            <i class="las la-sad-tear error_title"></i><br>
        </div>
    </div>
    <?php get_footer();?>