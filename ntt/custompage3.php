<?php /* Template Name: CustomPageT3 */ ?>

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

  <link rel="stylesheet" href="../wp-content/themes/ntt/cssv2/demo.css">
  <link rel="stylesheet" href="../wp-content/themes/ntt/cssv2/normalize.css">
  <link rel="stylesheet" href="../wp-content/themes/ntt/cssv2/style.css">

</head>

<section class="main">
  <div class="class-logo">
    <center>
      <div class="logo-center">

    <img src="../wp-content/themes/ntt/images/logo.png" alt="">
  </div>
   </center>
  </div>
    <div class="ia-container">
        <figure>
            <img src="../wp-content/themes/ntt/images/1.jpg" alt="">
            <input type="radio" name="radio-set" checked="checked">
            <figcaption><a href="showcase"><span><p><img src="../wp-content/themes/ntt/images/tassen.png" alt=""></p></span></a></figcaption>

            <figure>
                <img src="../wp-content/themes/ntt/images/2.jpg" alt="">
                <input type="radio" name="radio-set" checked="checked">
                <figcaption><a href=""><span><p><img src="../wp-content/themes/ntt/images/verhaal.png" alt=""></p></span></a></figcaption>

                <figure>
                    <img src="../wp-content/themes/ntt/images/3.jpg" alt="">
                    <input type="radio" name="radio-set" checked="checked">
                    <figcaption><span><p><img src="../wp-content/themes/ntt/images/tassen.png" alt=""></p></span></figcaption>

                    <figure>
                        <img src="../wp-content/themes/ntt/images/4.jpg" alt="">
                        <input type="radio" name="radio-set" checked="checked">
                        <figcaption><a href="home"><span><p><img src="../wp-content/themes/ntt/images/home.png" alt=""></p></span></a></figcaption>


                    </figure>

                </figure>
            </figure>
        </figure>
    </div>
</section>
      <div class="space">

      </div>
      <style media="screen">
        .showcase{
          margin-left: 16.5vw;
          height: auto;
        }
        .showcase-img{
        }
        .showcase img {
          width: 42.55vw;
          height: 50vh;
          border: 3px solid #E6E8DC;
        }


        /*  als showcase brokko is ligt het hier aan  */


        .showcase article:nth-of-type(6n+4){

        }
        .showcase article:nth-of-type(6n+4) .a{
          float: right;
        }
        .showcase article:nth-of-type(6n+4) .info{
          margin-left: 0vw;
          margin-right: 60vw;
          background-color: #28405E;
          height: 50vh;
        }
        .showcase article:nth-of-type(6n+4) .info-text{
          padding-top: 50%;
          padding-left: 38%;
        }
        .showcase article:nth-of-type(6n+4) img{
          height: 50vh;
          width: 42.55vw;
          margin-right: 16.6vw;
        }


        /* de 2de */

        .showcase article:nth-of-type(3n+2){
          margin-right: 16.5vw;
          height: 34vh;
          width: 32vw;
        }
        .showcase article:nth-of-type(3n+2) .a{
          float: left;
          max-width: 32.85vw;
        }
        .showcase article:nth-of-type(3n+2) .info{
          margin-left: 22vw;
          margin-right: 0vw;
          background-color: #4F4646;
          height: 32vh;
        }
        .showcase article:nth-of-type(3n+2) .info-text{
          padding-top: 50%;
          padding-left: 25%;
        }
        .showcase article:nth-of-type(3n+2) img{
          height: 32vh;
          width: 21vw;
        }


        /* de 3de */



        .showcase article:nth-of-type(3n+3){
          margin-right: 16.5vw;
          height: 34vh;
          width: 32vw;
          margin-top: -34vh;
          margin-left: 34vw;
        }
        .showcase article:nth-of-type(3n+3) .a{

        }
        .showcase article:nth-of-type(3n+3) .info{
          margin-left: 22vw;
          margin-right: 0vw;
          background-color: #C22D36;
          height: 32vh;
        }
        .showcase article:nth-of-type(3n+3) .info-text{
          padding-top: 50%;
          padding-left: 25%;
        }

        .showcase article:nth-of-type(3n+3) img{
          height: 32vh;
          width: 21vw;
        }

        /* de 4de */







        .info {
          margin-left: 43.55vw;
          margin-right: 16.68vw;
          background-color: #28405E;
          height: 50vh;
          border: 3px solid #E6E8DC;
          color: white;
        }
        .info-text{
          padding-top: 50%;
          padding-left: 35%;
        }
        .a{
          float: left;
        }
        article{
          height: 52vh;
        }
        .space{
          height: 10vh
        }
      </style>

        <div class="showcase">
          <h1>Collectie Naam</h1>




             <article>

               <a href="<?php echo $permalink; ?>" style="text-decoration: none;">
               <div class="showcase-img">
                 <div class="a">



              <img src="../wp-content/themes/ntt/images/1.jpg" alt="">
                  </div>

                  <div class="info">
                    <div class="info-text">
                      <h2>Collectie Naam</h2>

                  <div class="">

                  </div>
                  </div>
                  </div>
                  </div>

             </article>
             <article>

               <a href="<?php echo $permalink; ?>" style="text-decoration: none;">
               <div class="showcase-img">
                 <div class="a">



              <img src="../wp-content/themes/ntt/images/2.jpg" alt="">
                  </div>

                  <div class="info">
                    <div class="info-text">
                      <h2>Collectie Naam</h2>

                  <div class="">

                  </div>
                  </div>
                  </div>
                  </div>

             </article>


             <article>

               <a href="<?php echo $permalink; ?>" style="text-decoration: none;">
               <div class="showcase-img">
                 <div class="a">



              <img src="../wp-content/themes/ntt/images/3.jpg" alt="">
                  </div>

                  <div class="info">
                    <div class="info-text">
                      <h2>Collectie Naam</h2>

                  <div class="">

                  </div>
                  </div>
                  </div>
                  </div>

             </article>


             <article>

               <a href="<?php echo $permalink; ?>" style="text-decoration: none;">
               <div class="showcase-img">
                 <div class="a">



              <img src="../wp-content/themes/ntt/images/4.jpg" alt="">
                  </div>

                  <div class="info">
                    <div class="info-text">
                      <h2>Collectie Naam</h2>

                  <div class="">

                  </div>
                  </div>
                  </div>
                  </div>

             </article>



         </a>
        </div>

  </div>
  <div class="space">

  </div>


  <script src="../wp-content/themes/ntt/js/modernizr.custom.79639.js"></script>
</body>
</html>




    </main><!-- .site-main -->

    <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
