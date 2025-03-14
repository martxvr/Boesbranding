<?php
/**
 * Template part for displaying posts
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
        if (is_singular()) :
            the_title('<h1 class="entry-title">', '</h1>');
        else :
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        endif;

        if ('post' === get_post_type()) :
            ?>
            <div class="entry-meta">
                <?php
                boes_branding_posted_on();
                boes_branding_posted_by();
                ?>
            </div>
        <?php endif; ?>
    </header>

    <?php if (has_post_thumbnail()) : ?>
        <div class="post-thumbnail">
            <?php the_post_thumbnail('large'); ?>
        </div>
    <?php endif; ?>

    <div class="entry-content">
        <?php
        if (is_singular()) :
            the_content();
        else :
            the_excerpt();
            ?>
            <a href="<?php echo esc_url(get_permalink()); ?>" class="read-more">Lees meer</a>
        <?php endif; ?>
    </div>

    <footer class="entry-footer">
        <?php
        $categories_list = get_the_category_list(esc_html__(', ', 'boes-branding'));
        if ($categories_list) {
            printf('<span class="cat-links">' . esc_html__('Posted in %1$s', 'boes-branding') . '</span>', $categories_list);
        }

        $tags_list = get_the_tag_list('', esc_html_x(', ', 'list item separator', 'boes-branding'));
        if ($tags_list) {
            printf('<span class="tags-links">' . esc_html__('Tagged %1$s', 'boes-branding') . '</span>', $tags_list);
        }
        ?>
    </footer>
</article> 