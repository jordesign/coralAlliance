<?php
/**
 * Homepage/Landing Page which contains main form and content
 *
 *
 * @package WordPress
 * @subpackage jg_CoralAlliance
 * @since jg_coralAlliance 1.0
 */
?>

<?php get_header(); ?>

<!-- HEADER SECTION contains only the logo -->
<div class="header">
    <div class="logo">
        <h1><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="The Coral Alliance: Protecting our Reef Together">
    </h1>
</div>


<!-- MAIN SECTION containing call to action and form -->
<div class="main">
    <div class="mainContent">
        <h2>Saving <strong>Nemo</strong></h2>

        <!-- WordPress Loop for Editable page content -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">   
                <?php the_content(); ?>
            </div>
        <?php endwhile; endif; ?>

        <div class="petitionForm">
            
            <!-- Insert the petition form -->
            <?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true tabindex=1]'); ?>

        </div>
    </div>
</div>

<!-- SIGNATURE COUNT section displays a progression bar representing the total number of signatures -->
<div class="signatureCount">
    <div class="signatureBarHolder">
        <div class="signatureBar" data-signPerc="68"></div>
        <div class="signatureLabel">6810 <span>of 10,000 signatures</span></div>
    </div>
</div>

<!-- FOOTER SECTION contains the social sharing links -->
<div class="footer">
    <div class="social">
        <h2>Spread the Word</h2>
        <a href="#" class="twitter">Share on Twitter</a>
        <a href="#" class="facebook">Share on Facebook</a>
    </div>
</div>


<?php get_footer(); ?>