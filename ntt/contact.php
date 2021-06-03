<?php /* Template Name: contact */ ?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../ntt/cssv2/demo.css">
    <link rel="stylesheet" href="../ntt/cssv2/normalize.css">
    <link rel="stylesheet" href="../ntt/cssv2/style.css">
</head>
<body>
  <style media="screen">

    input {
      width: 52.5vw;
      height: 5.63vh;
      margin-bottom: 10px;
    }
    .logo-center img{
      width: 20vw;
      height: 14vh;
    }
    img{
      width: 30vw;
      height: 36vh;
    }

    .container{
      margin-left: 6vw;
    }

    textarea{
      width: 52.5vw;
      height: 17.7vh;
    }

    button{
      background-color: #C12C35;
      border: none;
      width:  14.9vw;
      height: 5.63vh;
      color: white;
    }

    i{
      width: 15px;
      height: 15px;
      margin-right: 5px;
    }

    body{
    margin: 0;}
  </style>
  <section class="main">
    <div class="class-logo">
      <center>
        <div class="logo-center">

      <img src="../ntt/images/logo.png" alt="">
    </div>
     </center>
    </div>
      <div class="ia-container">
          <figure>
              <img src="../ntt/images/1.jpg" alt="">
              <input type="radio" name="radio-set" checked="checked">
              <figcaption><a href="home"><span><p><img src="../ntt/images/tassen.png" alt=""></p></span></a></figcaption>

              <figure>
                  <img src="../ntt/images/2.jpg" alt="">
                  <input type="radio" name="radio-set" checked="checked">
                  <figcaption><a href=""><span><p><img src="../ntt/images/tassen.png" alt=""></p></span></a></figcaption>

                  <figure>
                      <img src="../ntt/images/3.jpg" alt="">
                      <input type="radio" name="radio-set" checked="checked">
                      <figcaption><span><p><img src="../ntt/images/tassen.png" alt=""></p></span></figcaption>

                      <figure>
                          <img src="../ntt/images/4.jpg" alt="">
                          <input type="radio" name="radio-set" checked="checked">
                          <figcaption><a href="home"><span><p><img src="../ntt/images/home.png" alt=""></p></span></a></figcaption>


                      </figure>

                  </figure>
              </figure>
          </figure>
      </div>
  </section>

    <div class="container">
        <div class="row">
            <div class="contact-pagina">
                <div class="contact">
                    <div class="contact-title">
                        <h1 class="center-text"> VRAAG DIT PRODUCT AAN </h1>

                        <?php
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Vul de lege vakken in aub ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Je mail is verstuurd! ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }

                        ?>
                    </div>
                    <div class="contact-body">
                        <form action="procces.php" method="post">
                            <input type="text" name="Name" placeholder="Naam*" class="conact-naam"><br>
                            <input type="email" name="Email" placeholder="E-mail*" class="contact-email"><br>
                            <input type="text" name="Tel" placeholder="Telefoon nummer" class="contact-tel"><br>
                            <textarea name="msg" class="contact-bericht" placeholder="Uw bericht*"></textarea><br>
                            <button class="contact-btn" name="btn-send"><i class="fa fa-envelope"></i> PRODUCT AANVRAGEN </button>

                        </form>
                    </div>
                    <div class="product-image">
                      <img src="../ntt/images/4.jpg" alt="">
                    </div>




                </div>
            </div>
        </div>
    </div>
</body>
</html>
