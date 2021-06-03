<?php get_header(); ?>

<style media="screen">
  .naar-rechts{
    float: right;
    position: relative;
    margin-top: 0;
  }
  .naar-rechts img {
    width: 49.28vw;
    height: 87vh;
  }
  .tietel {
    padding-left: 100px;
    padding-top: 50px;
    font-weight: bold;
    font-size: 50px;
  }
  .de_content{
    width: 600px;
    padding-left: 100px;
    padding-top: 50px;
    font-size: 25px;
  }

  .grijze_kleur{
    color: #B2B2B2;
  }
  .contact-form-button{
    text-align: center;
    margin-left: 100px;
    margin-top: 50px;
    width: 250px;
    height: 50px;
    background-color: red;
    color: white;
  }
  .contact-form-button a {
    text-decoration: none;
    color: white;
  }
  .contact-form-button a p {
    padding-top: 15px;
    font-weight: 600;
  }
  .informatie{
    background-color: #E6E8DC;
    height: 120vh;
  }
  .informatie li{
    list-style: none;
  }
  .informatie-card{
    width: 85vw;
    padding-top: 25px;
    padding-left: 7.5vw;
  }
  .container{
    margin-top: 10vh;
    background-image: url('http://localhost/wordpress2/wordpress/wp-content/uploads/2021/06/backgroundv2.png');
    background-repeat: no-repeat;
    background-size: cover;
    height: 128vh;
  }
  .laatste-stukje{
    margin-top: -26.58vh;
    margin-left: 24.8vh;
    margin-bottom: 10vh
  }
  .laatste-stukje img{
    width: 31.38vw; height: 55.17vh;
  }
  .laatse-stukje-text {
    margin-right: 20vw;
    float:right;
    width: 27vw;
  }
  .laatse-stukje-text p {
    margin-bottom: 5px;
  }
  .laatse-stukje-text a {
    color: red;
    text-decoration: none;

  }
</style>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../../wp-content/themes/ntt/cssv2/demo.css">
  <link rel="stylesheet" href="../../wp-content/themes/ntt/cssv2/normalize.css">
  <link rel="stylesheet" href="../../wp-content/themes/ntt/cssv2/style.css">

</head>

<section class="main">
  <div class="class-logo">
    <center>
      <div class="logo-center">

    <img src="../../wp-content/themes/ntt/images/logo.png" alt="">
  </div>
   </center>
  </div>
    <div class="ia-container">
        <figure>
            <img src="../../wp-content/themes/ntt/images/x1.jpg" alt="">
            <input type="radio" name="radio-set" checked="checked">
            <figcaption><a href="showcase"><span><p><img src="../../wp-content/themes/ntt/images/tassen.png" alt=""></p></span></a></figcaption>

            <figure>
                <img src="../../wp-content/themes/ntt/images/x2.jpg" alt="">
                <input type="radio" name="radio-set" checked="checked">
                <figcaption><a><span><p><img src="../../wp-content/themes/ntt/images/verhaal.png" alt=""></p></span></a></figcaption>

                <figure>
                    <img src="../../wp-content/themes/ntt/images/x3.jpg" alt="">
                    <input type="radio" name="radio-set" checked="checked">
                    <figcaption><span><p><img src="../../wp-content/themes/ntt/images/tassen.png" alt=""></p></span></figcaption>

                    <figure>
                        <img src="../../wp-content/themes/ntt/images/x4.jpg" alt="">
                        <input type="radio" name="radio-set" checked="checked">
                        <figcaption><a href="home"><span><p><img src="../../wp-content/themes/ntt/images/home.png" alt=""></p></span></a></figcaption>


                    </figure>

                </figure>
            </figure>
        </figure>
    </div>
</section>

<div class="container">



    <div class="naar-rechts">

  <?php if(has_post_thumbnail()): ?>
  <img src="<?php the_post_thumbnail_url('largest');?>" class="img-fluid">

<?php endif; ?>

</div>




  <?php if (have_posts()) : while(have_posts()) : the_post(); ?>


     <h1 class="tietel"><?php the_title(); ?></h1>
     <div class="de_content">
        <h4>OVER DEZE TAS</h4>
        <div class="grijze_kleur">
       <?php the_content(); ?>
       </div>
       </div>

  <?php endwhile; endif; ?>

  <div class="contact-form-button">

    <a href="contact"><p>PRODUCT AANVRAGEN</p></a>
  </div>


</div>

<div class="informatie">
  <div class="informatie-card">
    <ul>


    <li><p style="font-size: 55px;"><strong>Beschrijving</strong></p><p style="font-size: 20px;"> <?php the_field('beschrijving') ?></p></li>

    <li><p style="font-size: 55px;"><strong>afmeting</strong></p><p style="font-size: 20px;"> <?php the_field('afmetingen') ?></p></li>

    <li><p style="font-size: 55px;"><strong>materialen</strong></p><p style="font-size: 20px;"> <?php the_field('materialen') ?></p></li>

    </ul>
  </div>
</div>

  <div class="laatste-stukje">
    <?php if(has_post_thumbnail()): ?>
  <img src="<?php the_post_thumbnail_url('largest');?>" class="img-fluid">

<?php endif; ?>
<div class="laatse-stukje-text">


<p style=" font-size:43px ;">
Warm bruin en lekker
duurzaam. Uit restanten
kwaliteitsleer maakte ik
deze mooie shopper!</p>
<a href="../contact-form">Dit product aanvragen</a>
</div> </div>


<?php get_footer(); ?>
