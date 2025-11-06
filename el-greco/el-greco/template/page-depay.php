<?php
/**
 * Shared layout for checkout-related pages that should surface the DePay button.
 *
 * @package ElGreco
 */

get_header();

if ( function_exists( 'elgreco_depay_enable_manual_render' ) ) {
    elgreco_depay_enable_manual_render();
}
?>
<div class="container">
    <div class="breadcrumbs">
        <?php adsTmpl::breadcrumbs(); ?>
    </div>
    <div class="simple content">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <?php
                if ( function_exists( 'elgreco_render_depay_payment_section' ) ) {
                    elgreco_render_depay_payment_section();
                }
                ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<?php get_footer();
