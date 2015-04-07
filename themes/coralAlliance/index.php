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

        <?php //Calculate the petition progress
            $formid = 1;
            $form_count = RGFormsModel::get_form_counts($formid);
            $form_total_count = $form_count['total'];

            //let's add some entries for the sake of the demo...
            $form_total_count = $form_total_count + 6438;
            $form_percentage = $form_total_count/100 ;
            ?>

        <div class="signatureBar" id="ocean" data-signPerc="<?php echo $form_percentage; ?>"></div>
        <div class="signatureLabel"><?php echo $form_total_count; ?> <span>of 10,000 signatures</span></div>
        
    </div>
</div>




<?php get_footer(); ?>