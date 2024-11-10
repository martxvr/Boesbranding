<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>

    <style>
        /* Fonts zoals eerder gedefinieerd */
        @font-face {
    font-family: 'boes_branding_v2regular';
    src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/boesbrandingv2-webfont.woff2') format('woff2'),
         url('<?php echo get_template_directory_uri(); ?>/assets/fonts/boesbrandingv2-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: "BlushesBold";
    src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/BlushesBold/font.woff2') format('woff2'),
         url('<?php echo get_template_directory_uri(); ?>/assets/fonts/BlushesBold/font.woff') format('woff');
    font-weight: bold;
    font-style: normal;
}

@font-face {
    font-family: "BlushesBlack";
    src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/BlushesBlack/font.woff2') format('woff2'),
         url('<?php echo get_template_directory_uri(); ?>/assets/fonts/BlushesBlack/font.woff') format('woff');
    font-weight: 900; /* Gebruik 900 voor extra dikke tekst */
    font-style: normal;
}

@font-face {
    font-family: "Blushes";
    src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/Blushes/font.woff2') format('woff2'),
         url('<?php echo get_template_directory_uri(); ?>/assets/fonts/Blushes/font.woff') format('woff');
    font-weight: 900; /* Gebruik 900 voor extra dikke tekst */
    font-style: normal;
}

        /* Basis styling voor header en menu */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            color: #304C5C;
        }

        nav ul {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin: 0 10px;
        }

        nav ul li a {
            color: #304C5C;
            text-decoration: none;
        }

        /* Mobiele styling */
        .hamburger {
            display: none;
            font-size: 1.8em;
            cursor: pointer;
        }

        @media (max-width: 1000px) {

            header {
                padding: 10px !important;
            }

            /* Toon hamburger-menu op mobiel */
            .hamburger {
                display: block;
                margin-left: 100px;
            }

            /* Verberg het gewone menu */
            nav ul {
                display: none;
                flex-direction: column;
                background-color: #fff;
                position: absolute;
                top: 60px;
                right: 0;
                width: 200px;
                padding: 1em;
            }

            nav ul.active {
                display: flex;
                z-index: 9000;
                gap: 30px;
            }

            nav ul li {
                margin: 10px 0;
            }
        }

        /* Actieve link styling */
nav ul li.current-menu-item a {
    font-family: 'BlushesBold';
}
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/bld8cjv.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gasoek+One&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gasoek+One&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="site-branding">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/boesbranding-logo.svg" alt="Boesbranding logo" style="max-width: 100%; height: auto;"/>
        </a>
        <p><?php bloginfo('description'); ?></p>
    </div>
    
    <!-- Hamburger menu icoon -->
    <div class="hamburger" onclick="toggleMenu()">☰</div>
    
    <nav>
    <nav>
    <ul id="menu">
        <li class="<?php if (is_page('aanbod')) echo 'current-menu-item'; ?>">
            <a href="<?php echo esc_url(home_url('#aanbod')); ?>">Aanbod</a>
        </li>
        <li class="<?php if (is_page('portfolio')) echo 'current-menu-item'; ?>">
            <a href="<?php echo esc_url(home_url('/portfolio')); ?>">Portfolio</a>
        </li>
        <li class="<?php if (is_page('contact')) echo 'current-menu-item'; ?>">
            <a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a>
        </li>
        <li><a class="boes-button-blue" href="<?php echo esc_url(home_url('#')); ?>">Plan gesprek</a></li>
    </ul>
</nav>
    </nav>
</header>

<script>
    function toggleMenu() {
        const menu = document.getElementById('menu');
        menu.classList.toggle('active');
    }
</script>

