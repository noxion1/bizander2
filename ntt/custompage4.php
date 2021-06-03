<?php /* Template Name: verhaal */ ?>

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
      body{
        background-color: #f8faef;
      }
        .text{
          margin-left: 17%;
          width: 66vw;
        }
        .left {
                float: left;
                padding: 100vh 0px;

            }

            .left.dotted-gradient {
                background-image:
                linear-gradient(to bottom, #fff 40%, rgba(255, 255, 255, 0) 10%);
                background-position: left;
                background-size: 3px 33px;
                background-repeat: repeat-y;
                position: absolute;
            }
            .horizon{
              width: 10px;
            }
            .ruimte {
              margin-left: 50%;
            }
            .kleur {
              height: 180vh;
              width: 3vw;
              background-color: #007776;
              margin-left: -1.468vw;
            }
            .nummer1{
              margin-top: -50%;
              margin-left: 20%;
              padding-bottom: 10.23vh;
            }

            .nummer1 img{
              border: 1px solid white;
              border-radius: 50%;
              width: 19vw;
              height: 36vh;
            }
            .rondje{
              position: absolute;
              margin-top: -30vh;
              margin-left: 27vw;
              height: 22vh;
              width: 12vw;
              background-color: #e6e8db;
              border-radius: 50%;
            }
            .stokje {
              margin-top: -30vh;
              margin-left: 10vw;
              height: 22vh;
              width: 23vw;
              background-color: #e6e8db;
            }
            .nummer2{
              margin-left: 60%;
            }

            .nummer2 img{
              border: 1px solid white;
              border-radius: 50%;
              width: 19vw;
              height: 36vh;
            }
            .rondje2{
              position: absolute;
              margin-top: -30vh;
              margin-left: -20vw;
              height: 22vh;
              width: 12vw;
              background-color: #e6e8db;
              border-radius: 50%;
            }
            .stokje2 {
              margin-top: -30vh;
              margin-left: -14vw;
              height: 22vh;
              width: 23vw;
              background-color: #e6e8db;
            }
            .nummer3{
              margin-top: 7%;
              margin-left: 20%;
              padding-bottom: 10.23vh;
            }

            .nummer3 img{
              border: 1px solid white;
              border-radius: 50%;
              width: 19vw;
              height: 36vh;
            }
            .rondje3{
              position: absolute;
              margin-top: -30vh;
              margin-left: 27vw;
              height: 22vh;
              width: 12vw;
              background-color: #e6e8db;
              border-radius: 50%;
            }
            .stokje3 {
              margin-top: -30vh;
              margin-left: 10vw;
              height: 22vh;
              width: 23vw;
              background-color: #e6e8db;
            }

            .nummer4{
              margin-top: -85%;
              margin-left: 60%;
            }

            .nummer4 img{
              border: 1px solid white;
              border-radius: 50%;
              width: 19vw;
              height: 36vh;
            }
            .rondje4{
              position: absolute;
              margin-top: -30vh;
              margin-left: -20vw;
              height: 22vh;
              width: 12vw;
              background-color: #e6e8db;
              border-radius: 50%;
            }
            .stokje4 {
              margin-top: -30vh;
              margin-left: -14vw;
              height: 22vh;
              width: 23vw;
              background-color: #e6e8db;
            }

            .nummer5{
              margin-top: -36%;
              margin-left: 20%;
              padding-bottom: 10.23vh;
            }

            .nummer5 img{
              border: 1px solid white;
              border-radius: 50%;
              width: 19vw;
              height: 36vh;
            }
            .rondje5{
              position: absolute;
              margin-top: -30vh;
              margin-left: 27vw;
              height: 22vh;
              width: 12vw;
              background-color: #e6e8db;
              border-radius: 50%;
            }
            .stokje5 {
              margin-top: -30vh;
              margin-left: 10vw;
              height: 22vh;
              width: 23vw;
              background-color: #e6e8db;
            }


      </style>

      <div class="text">
        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
          similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
          Et harum quidem rerum facilis est et expedita distinctio.
          Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus,
          omnis voluptas assumenda est, omnis dolor repellendus.
          Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
          Itaque earum rerum hic tenetur a sapiente delectus,
          ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
      </div>

      <div class="ruimte">



      <div class="dotted-gradient left">
        <div class="horizon">

        </div>
              </div>
              <div class="kleur">
              </div>
      </div>



  <div class="nummer1">
    <div class="nummer1-1">


    <img src="../wp-content/themes/ntt/images/2.jpg" alt="">
    <div class="rondje">

    </div>
    <div class="stokje">

    </div>
    </div>
  </div>


  <div class="nummer2">
    <div class="nummer2-1">


    <img src="../wp-content/themes/ntt/images/1.jpg" alt="">
    <div class="rondje2">

    </div>
    <div class="stokje2">

    </div>
    </div>
  </div>
  <div class="nummer3">
    <div class="nummer3-1">


    <img src="../wp-content/themes/ntt/images/2.jpg" alt="">
    <div class="rondje3">

    </div>
    <div class="stokje3">

    </div>
    </div>
  </div>
  <div class="nummer4">
    <div class="nummer4-1">


    <img src="../wp-content/themes/ntt/images/1.jpg" alt="">
    <div class="rondje4">

    </div>
    <div class="stokje4">

    </div>
    </div>
  </div>
  <div class="nummer5">
    <div class="nummer5-1">


    <img src="../wp-content/themes/ntt/images/2.jpg" alt="">
    <div class="rondje5">

    </div>
    <div class="stokje5">

    </div>
    </div>
  </div>
  




          <div class="space">

          </div><div class="space">

          </div><div class="space">

          </div><div class="space">

          </div><div class="space">

          </div><div class="space">

          </div><div class="space">

          </div><div class="space">

          </div><div class="space">

          </div><div class="space">

          </div><div class="space">

          </div><div class="space">

          </div><div class="space">

          </div><div class="space">

          </div><div class="space">

          </div><div class="space">

          </div><div class="space">

          </div><div class="space">

          </div><div class="space">

          </div><div class="space">

          </div><div class="space">

          </div><div class="space">



          </div>

</body>
</html>




    </main><!-- .site-main -->

    <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
