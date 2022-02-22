<?php
   include"employe.php";
   $employe = NewEmployee();
   $employe -> setFirstnom("REDA");
   echo $employe -> getFirstnome();
?>