<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['name'];
       $Email = $_POST['email'];
       $Subject = $_POST['subject'];
       $Msg = $_POST['message'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:index.html?error');
       }
       else
       {
           $to = "adityatiwari.aaa@gmail.com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:thankyou.html");
           }
       }
    }
    else
    {
        header("location:thankyou.html");
    }
?>