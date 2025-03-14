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
    font-family: "Blushes";
    src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/Blushes/font.woff2') format('woff2'),
         url('<?php echo get_template_directory_uri(); ?>/assets/fonts/Blushes/font.woff') format('woff');
    font-weight: 900; /* Gebruik 900 voor extra dikke tekst */
    font-style: normal;
}

@font-face {
    font-family: "BlushesBold";
    src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/BlushesBold/font.woff2') format('woff2'),
         url('<?php echo get_template_directory_uri(); ?>/assets/fonts/BlushesBold/font.woff') format('woff');
    font-weight: 900; /* Gebruik 900 voor extra dikke tekst */
    font-style: normal;
}


@font-face {
    font-family: "Moon";
    src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/MoonBold.woff2') format('woff2'),
         url('<?php echo get_template_directory_uri(); ?>/assets/fonts/MoonBold.woff') format('woff');
    font-weight: 900; /* Gebruik 900 voor extra dikke tekst */
    font-style: normal;
}

@font-face {
    font-family: "hpbold";
    src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/hpsimplified_bold.ttf') format('truetype');
    font-weight: 900; /* Gebruik 900 voor extra dikke tekst */
    font-style: normal;
}

@font-face {
    font-family: "hpitalic";
    src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/hpsimplified_italic.ttf') format('truetype');
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
            height: 90px;
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
            font-size: 18px !important;
        }

        /* Mobiele styling */
        .hamburger {
            display: none;
            font-size: 1.8em;
            cursor: pointer;
        }

        /* Header van mobiel menu */
        .mobile-menu-header {
            background-color: #B78BEF;
            color: white;
            height: 64px;
            display: none;
            justify-content: flex-end;
            align-items: center;
            padding: 0 15px;
            position: relative;
            z-index: 1000;
        }

        /* Sluitknop styling */
        .close-menu {
            display: none;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }

        #home {
            display: none !important;
        }

        #bb-logo {
            display: none; /* Zorg ervoor dat het zichtbaar is */
            background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/bb-logo.png');
            background-size: cover;
            width: 166px;
            height: 87px;
            margin-left: 0.5em;
        }

        .menu-social-icons {
            display: none !important;
            display: flex;
            flex-direction: row;
            gap: 25px;
            margin-left: 1.5em;
            margin-top: 35px;
        }

        .h-ig-icon {
            background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/f-ig.svg');
            background-size: cover;
            height: 56px;
            width: 56px;
        }

        .h-fb-icon {
            background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/f-f.svg');
            background-size: cover;
            height: 56px;
            width: 56px;
        }

        .h-li-icon {
            background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/f-li.svg');
            background-size: cover;
            height: 56px;
            width: 56px;
        }

        /* Actieve link styling */
        nav ul li.current-menu-item a {
            font-weight: bold;
            font-family: Cabin;
        }


        @media (max-width: 1000px) {

            header {
                padding: 10px !important;
                height: 83px !important;
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
                top: 0px;
                right: 0;
                width: 280px;
                height: auto;
                padding-bottom: 40px;
            }

            nav ul.active {
                display: flex;
                z-index: 9000;
                gap: 30px;
            }

            nav ul li {
                padding: 0.2em 1em;
            }

            nav ul li a {
                color: #0854A6;
                font-size: 25px;
            }

            .mobile-menu-header {
                display: flex;
            }

            .close-menu {
                display: block;
                font-size: 60px;
                font-size: 60px;
                position: absolute;
                right: 25px;
                top: -8px;
            }

            #home {
                display: block !important;
            }

            #bb-logo {
                display: block !important;
            }

            .menu-social-icons {
                 display: flex !important;
            }   

            /* Overlay styling */
            .menu-overlay {
                display: none; /* Verborgen standaard */
                position: fixed;
                top: 0;
                left: 0;
                width: 100vw;
                height: 100vh;
                background-color: #006eb3; 
                opacity: 75%;
                z-index: 8000; 
            }
            .menu-overlay.active {
                display: block; /* Toon overlay als actief */
            }

            .h-menu {
                margin-top: 25px;
            }
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<body <?php body_class(); ?>>

<header>
    <div class="site-branding">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/boesbranding-logo.svg" alt="Boesbranding" style="max-width: 100%; height: auto; position: absolute; top: 19px;"/>
        </a>
        <p><?php bloginfo('description'); ?></p>
    </div>
    
    <div class="hamburger" onclick="toggleMenu()">☰</div>
    
    <nav>
        <ul id="menu">
            <div class="mobile-menu-header">
                <div class="close-menu" onclick="toggleMenu()">×</div>
            </div>
            <div id="bb-logo"></div>
            <li style="display: none;" id="home" class="<?php if (is_page('index')) echo 'current-menu-item'; ?>">
                <a href="<?php echo esc_url(home_url('index')); ?>">Home</a>
            </li>
            <li class="<?php if (is_page('aanbod')) echo 'current-menu-item'; ?>">
                <a href="<?php echo esc_url(home_url('/aanbod')); ?>">Aanbod</a>
            </li>
            <li class="<?php if (is_page('portfolio')) echo 'current-menu-item'; ?>">
                <a href="<?php echo esc_url(home_url('/portfolio')); ?>">Portfolio</a>
            </li>
            <li class="<?php if (is_page('blogs')) echo 'current-menu-item'; ?>">
                <a href="<?php echo esc_url(home_url('/blogs')); ?>">Blogs</a>
            </li>
            <li class="<?php if (is_page('contact')) echo 'current-menu-item'; ?>">
                <a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a>
            </li>
            <li><a class="boes-button-blue h-menu" href="<?php echo esc_url(home_url('#contact-form')); ?>">Plan gesprek</a></li>
            <div class="menu-social-icons">
                <a href="https://www.instagram.com/boesbranding"><div class="h-ig-icon"></div></a>
                <a href="https://www.facebook.com/pages/boesbranding"><div class="h-fb-icon"></div></a>
                <a href="https://www.linkedin.com/in/nina-boes-boesbranding-branddesigner-grafisch-ontwerper-merkidentiteiten-branding/?originalSubdomain=nl"><div class="h-li-icon"></div></a>
            </div>
        </ul>
    </nav>
</header>

<!-- Overlay -->
<div class="menu-overlay" id="menu-overlay"></div>

<script>
    function toggleMenu() {
        const menu = document.getElementById('menu');
        const overlay = document.getElementById('menu-overlay');
        menu.classList.toggle('active');
        overlay.classList.toggle('active'); // Toggle de overlay
    }

    // Sluit menu en overlay als er op een link wordt geklikt
    document.querySelectorAll('#menu li a').forEach(link => {
        link.addEventListener('click', () => {
            const menu = document.getElementById('menu');
            const overlay = document.getElementById('menu-overlay');
            menu.classList.remove('active'); // Verwijder 'active' van het menu
            overlay.classList.remove('active'); // Verwijder 'active' van de overlay
        });
    });

    // Sluit menu als er buiten het menu wordt geklikt (optioneel)
    const overlay = document.getElementById('menu-overlay');
    overlay.addEventListener('click', () => {
        const menu = document.getElementById('menu');
        overlay.classList.remove('active'); // Verwijder de overlay
        menu.classList.remove('active'); // Sluit het menu
    });
</script>

