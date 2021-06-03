<?php

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['Name'];
       $Email = $_POST['Tel'];
       $Tel = $_POST['Email'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Tel) || empty($Msg))
       {
           header('location:contact.php?error');
       }
       else
       {
           $to = "25480@ma-web.nl";

           if(mail($to,$Tel,$Msg,$Email))
           {
               header("location:succes.php?success");
           }
       }
    }
    else
    {
        header("location:contact.php");
    }
?>
