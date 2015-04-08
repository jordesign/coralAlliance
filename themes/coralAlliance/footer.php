<?php
/**
 * Footer content common to all pages
 *
 *
 * @package WordPress
 * @subpackage jg_CoralAlliance
 * @since jg_coralAlliance 1.0
 */
?>
<!-- FOOTER SECTION contains the social sharing links -->
<div class="footer">
    <div class="social">
        <h2>Spread the Word</h2>
                        <a onclick="popitup('https://twitter.com/home?status=Help%20save%20the%20Great%20Barrier%20Reef%20by%20signing%20this%20petition.%20<?php echo site_url(); ?>')" href="https://twitter.com/home?status=Help%20save%20the%20Great%20Barrier%20Reef%20by%20signing%20this%20petition.%20<?php echo site_url(); ?>" target="_blank" ><span class="icon-twitter"></span><em>Share on Twitter</em></a>
                        <a onclick="popitup('https://www.facebook.com/sharer/sharer.php?u=<?php echo site_url(); ?>')"  target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo site_url(); ?>"><span class="icon-facebook"></span><em>Share on Facebook</em></a>
                        <a onclick="popitup('https://plus.google.com/share?url=<?php echo site_url(); ?>')"  target="_blank" href="https://plus.google.com/share?url=<?php echo site_url(); ?>"><span class="icon-google-circles"></span><em>Share on Google</em></a>

    </div>
</div>
    
    <?php wp_footer(); ?>


</body>
</html>

