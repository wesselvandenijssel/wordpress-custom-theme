<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <title>Wessel van den IJssel - Social Brothers</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FontAwesome CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Theme CSS -->
    <?php
    wp_head()
    ?>
</head>

<body <?php body_class(); ?>>
    <div class="main">
        <header class="text-center">
            <div id="upper-section">
                <div id="logo"><img src="wp-content/themes/thema_wesselvandenijssel/assets/images/SBlogo.svg" alt="">
                </div>
                <h1 id="title">
                <?php
    echo ucwords(strtolower(str_replace(' ', '', wp_title('', false))));
?></h1>
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