<?php
/**
 * Entity Main Footer
 */

 if ( ( ( is_single() || is_page() ) && ( get_adjacent_post( false, '', false ) || get_adjacent_post( false, '', true ) ) ) || get_the_posts_pagination() ) {
    ?>
    <div class="ntt--entity-main-footer ntt--cn" data-name="Entity Main Footer">
        <?php
        
        ?>
    </div>
    <?php
}
get_footer();
?>
