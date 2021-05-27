<?php /* Template Name: CustomPageT1 */ ?>

<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();

            // Include the page content template.
            get_template_part( 'template-parts/content', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }

            // End of the loop.
        endwhile;
        ?>





        <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../wp-content/themes/ntt/css/demo.css">
  <link rel="stylesheet" href="../wp-content/themes/ntt/css/normalize.css">
  <link rel="stylesheet" href="../wp-content/themes/ntt/css/style.css">

</head>
<body>

  <div class="container">

    <div class="class-logo">
      <center>
        <div class="logo-center">

      <img src="../wp-content/themes/ntt/images/logo.png" alt="">
      <div>
     </center>
    </div>

      <section class="main">
          <div class="ia-container">
              <figure>
                  <img src="../wp-content/themes/ntt/images/1.jpg" alt="">
                  <input type="radio" name="radio-set" checked="checked">
                  <figcaption><span><p><img src="../wp-content/themes/ntt/images/tassen.png" alt=""></p></span></figcaption>

                  <figure>
                      <img src="../wp-content/themes/ntt/images/2.jpg" alt="">
                      <input type="radio" name="radio-set" checked="checked">
                      <figcaption><span><p><img src="../wp-content/themes/ntt/images/tassen.png" alt=""></p></span></figcaption>

                      <figure>
                          <img src="../wp-content/themes/ntt/images/3.jpg" alt="">
                          <input type="radio" name="radio-set" checked="checked">
                          <figcaption><span><p><img src="../wp-content/themes/ntt/images/tassen.png" alt=""></p></span></figcaption>

                          <figure>
                              <img src="../wp-content/themes/ntt/images/4.jpg" alt="">
                              <input type="radio" name="radio-set" checked="checked">
                              <figcaption><a href="google.com"><span><p><img src="../wp-content/themes/ntt/images/tassen.png" alt=""></p></span></a></figcaption>


                          </figure>

                      </figure>
                  </figure>
              </figure>
          </div>
      </section>
      <div class="space">

      </div>
  </div>


  <script src="../wp-content/themes/ntt/js/modernizr.custom.79639.js"></script>
</body>
</html>




    </main><!-- .site-main -->

    <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
