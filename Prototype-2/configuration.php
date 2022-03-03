<?php
   $connect = mysqli_connect('localhost', 'REDA', 'Halhoulidu7373', 'demo');

   // check connection
 if(!$connect){
      echo 'Connection error: ' . mysqli_connect_error(); 
  }
?> 