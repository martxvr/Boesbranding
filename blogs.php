<?php
/*
Template Name: Custom Blog
*/
get_header(); ?>
<div class="blogs-wp-nina"></div>
<section class="blog-cards-section">
    <div class="blog-container">
        <h1 style="font-size: 42px; color: #525252;">Inspiratie</h1>
        <div class="blog-cards">
            <?php
            // Query om de laatste 3 berichten op te halen
            $args = array(
                'post_type' => 'post', // Haalt blogposts op
                'posts_per_page' => 4, // Aantal berichten
            );
            $query = new WP_Query($args);

            // Loop door de berichten
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="blog-card">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <!-- Uitgelichte afbeelding -->
                                <div class="blog-card-image">
                                    <?php the_post_thumbnail('medium'); ?>
                                </div>
                            <?php else : ?>
                                <!-- Placeholder-afbeelding -->
                                <div class="blog-card-image">
                                    <img src="https://via.placeholder.com/300x200" alt="Placeholder afbeelding">
                                </div>
                            <?php endif; ?>
                            <div class="blog-card-content">
                                <!-- Publicatiedatum boven de titel -->
                                <p class="publish-date" style="font-size: 12px; color: #525252; margin: 0px; opacity: 50%;"><?php echo get_the_date(); ?></p>
                                <h3 style="font-size: 20px; font-family: BlushesBold; color: #525252; margin: 0px;"><?php the_title(); ?></h3>
                                <p style="margin: 0px; color: #525252;"><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
                            </div>
                            <span class="boes-button-lila blog-button">Lees meer</span>
                        </a>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p>Geen berichten gevonden.</p>
            <?php endif; ?>
        </div>

        <!-- Bekijk alles knop -->

    </div>
    <div class="witte-lijn-bottom"></div>
</section>



<?php get_footer(); ?>