<?php get_header() ?>


<main id="main" class="grid-container grid-container--works">


    <?php
    wp_nav_menu(
        array(
            'menu' => 'works-type-menu',
            'container' => '',
            'theme_location' => 'works-type-menu',
            'items_wrap' => '<div class="tab-list--horizontal underline-indicators flex fs-300">%3$s</div>',
            'walker' => new Custom_Works_Menu_Walker()
        )
    );
    ?>

    <?php
    wp_nav_menu(
        array(
            'menu' => 'paintings-menu',
            'container' => '',
            'theme_location' => 'paintings-menu',
            'items_wrap' => '<div class="tab-list--vertical leftline-indicators flex fs-300">%3$s</div>',
            'walker' => new Custom_Works_Menu_Walker()
        )
    );
    ?>

    <!-- <div class="tab-list--horizontal underline-indicators flex fs-300">
        <button aria-selected="true" class="ff-sans-cond text-accent letter-spacing-2"><a href="index-paintings--architecture.html">paintings</a></button>
        <button aria-selected="false" class="ff-sans-cond text-accent letter-spacing-2"><a href="index-icons.html">icons</a></button>
        <button aria-selected="false" class="ff-sans-cond text-accent letter-spacing-2"><a href="index-other.html">other</a></button>
    </div> -->

    <!-- <div class="tab-list--vertical leftline-indicators flex fs-300">
        <button aria-selected="true" class="ff-sans-cond text-accent letter-spacing-2"><a href="index-paintings--architecture.html">architecture</a></button>
        <button aria-selected="false" class="ff-sans-cond text-accent letter-spacing-2"><a href="index-paintings--portraits.html">portraits</a></button>
        <button aria-selected="false" class="ff-sans-cond text-accent letter-spacing-2"><a href="index-paintings--still-life.html">still life</a></button>
        <button aria-selected="false" class="ff-sans-cond text-accent letter-spacing-2"><a href="index-paintings--still-life.html">landscape</a></button>
    </div> -->

</main>

<?php wp_footer(); ?>