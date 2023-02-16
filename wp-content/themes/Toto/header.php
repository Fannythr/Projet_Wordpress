<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="manifest" href="<?php echo get_site_url(); ?>/manifest.json"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="header">
    <div class="titre1" style="font-size: 30px"  >Nous vous proposons nos</div>
    <p class="title_port" data-item='Portfolio' >Portfolio</p>
    <div class="titre1" style="font-size: 30px">Célia Zanone & Fanny Thiré</div><br>
    <nav class="navbar navbar-expand-md py-3" role="navigation">



        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse " id="navbarSupportedContent">

                <?php wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'depth' => 2,
                    'container' => 'div',
                    'container_class' => 'flex-grow-1 d-flex',
                    'container_id' => '',
                    'menu_class' => 'nav  navbar-nav ms-auto me-auto',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker()
                ));
                ?>

            </div>
        </div>
    </nav>

</header>
