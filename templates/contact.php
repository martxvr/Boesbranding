<?php
/* Template Name: Contact */
?>

<?php get_header(); // Laadt header.php ?>

<section class="contact-form">
   <div class="cf-container">
    <div class="cf-box-1">
        <div class="cf-content">
                <h1>Ahoy Kapitein! <br> Klaar voor <br> de reis?</h1>
                <div class="cf-tel-box">
                    <div class="cf-icon"></div>
                    <a id="cf-tel" href="tel:+31629799993" style="font-family: BlushesBold;">+31  6 297 999 93</a>
                </div>
                <div class="cf-contact-box">
                    <div class="lja-icon"></div>
                    <a href="mailto:info@boesbranding.com">info@boesbranding.com</a>
                </div>
            </div>
    </div>
    <div class="cf-box-2">
        <div class="cf-nina"></div>
    <?php echo do_shortcode('[contact-form-7 id="e95fc06" title="Contact form 1"]'); ?>
    </div>
   </div>
</section>

<?php get_footer(); // Laadt footer.php ?>