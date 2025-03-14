<?php get_header(); ?>

<style>

</style>
<?php
        // Start de WordPress loop
        if (have_posts()) :
            while (have_posts()) : the_post();
                ?>
<main style="position: relative;">
    <div class="blog-banner" style="width: 100%; height: 415px;">
    <?php the_post_thumbnail('medium'); ?>
    </div>

    <div class="single-blog-container">
        <div class="blog-boxes">
            <div class="blog-box-1">

                <article class="blog-post">
                    <!-- Weergave van de titel van de blogpost -->
                    <h1 style="font-size: 44px; color: #525252; font-family: BlushesBold; margin: 0px;"><?php the_title(); ?></h1>
                    
                    <!-- Publicatiedatum -->
                    <p class="publish-date"><?php echo get_the_date(); ?></p>
                    
                    <!-- Inhoud van de blogpost -->
                    <div class="single-blog-post-content">
                        <?php the_content(); ?>
                    </div>
                    <a href="/blogs" class="boes-button-lila">Terug naar overzicht</a>
                </article>
            <?php endwhile;
        else :
            echo '<p>Geen berichten gevonden.</p>';
        endif;
        ?>
            </div>
            <div class="blog-box-2">

                <div class="blog-lja">
                    <h1>Vragen?</h1>
                    <p>Wij helpen je graag verder</p>
                    <div class="blog-nina-round"></div>
                    <p style="font-family: BlushesBold; font-size: 28px; color: #CCFF00;">Nina Boes</p>
                    <a class="blog-tel" href="tel:+31629799993">
                        <div class="blog-tel-icon"></div>
                        <p>+31 6 297 999 93</p>
                    </a>
                    <a class="blog-mail" href="mailto:info@boesbranding.com">
                        <div class="blog-mail-icon"></div>
                        <p>info@boesbranding.com</p>
                    </a>
                </div>

                <h1 style="color: #525252; font-size: 42px; font-family: 'boes_branding_v2regular'; text-align: center; margin: 0px;">Aanbevolen</h1>

                <?php
            // Query om de laatste 3 berichten op te halen
            $args = array(
                'post_type' => 'post', // Haalt blogposts op
                'posts_per_page' => 2, // Aantal berichten
            );
            $query = new WP_Query($args);

            // Loop door de berichten
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="single-blog-card">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <!-- Uitgelichte afbeelding -->
                                <div class="single-blog-card-image">
                                    <?php the_post_thumbnail('medium'); ?>
                                </div>
                            <?php else : ?>
                                <!-- Placeholder-afbeelding -->
                                <div class="single-blog-card-image">
                                    <img src="https://via.placeholder.com/300x200" alt="Placeholder afbeelding">
                                </div>
                            <?php endif; ?>
                            <div class="single-blog-card-content">
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
        </div>
       
    </div>
    <div class="witte-lijn-bottom"></div>
</main>


<?php get_footer(); ?>