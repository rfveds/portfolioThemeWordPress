<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon-32x32.png">

    <!-- Custom CSS -->
    <?php wp_head(); ?>
</head>

<body class="works">
    <a class="skip-to-content" href="#main">Skip to content</a>
    <header class="primary-header flex">

        <h1 class="fs-800 ff-serif text-main">Joanna Duma</h2>
            <nav>

                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul data-visible="false" id="primary-navigation" class="primary-navigation underline-indicators flex">%3$s</ul>',
                        'walker' => new Custom_Main_Menu_Walker()
                    )
                );
                ?>


                <!-- 
                <ul id="primary-navigation" data-visible="false" class="primary-navigation underline-indicators flex">
                    <li class="active"><a class="ff-sans-cond uppercase text-main letter-spacing-2" href="index.html">works</a>
                    <li><a class="ff-sans-cond uppercase text-main letter-spacing-2" href="about.html">about</a>
                    <li><a class="ff-sans-cond uppercase text-main letter-spacing-2" href="contact.html">contact</a>
                </ul> -->
            </nav>
    </header>