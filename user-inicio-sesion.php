<?php 
   session_start();
   $id_user = $_SESSION['id_user'];

   if (!isset($_SESSION['id_user'])) {

       header('Location: login-derivar.php');
       die;
   } 