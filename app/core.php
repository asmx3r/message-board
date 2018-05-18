<?php
/*
 * main app class
 */

 class Lenta {
   //check if JavaScript is enabled
   require_once (checkJS.php);
   // connect to db
   //require_once (connection.php);


   // JS switch. if JS on - load js, if no - load PHP
   if ($_SESSION['JS-state'] = "on") {
      include ('/js/app.js');
      //include ('/js/jquery-2.1.0.min.js');
      include 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js';
      include 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js';
   }
   elseif ($_SESSION['JS-state'] = "off") {
      include ('/app/app.php');

   }

   // separate $fullname into $name and $surname
   function separate($name) {
      $name_array = explode("," $name);
      $vardas = $name_array[0];
      $pavardas = $name_array[1];
   }

   // record post to DB
   function postas {
      // ask singleton for connection
      include_once("/controllers/connection.php");

      if(isset($_POST['skelbti'])) {
         $fullname = $_POST['fullname']; // separate name and surname
         separate($fullname);

         $gimdienis = $_POST['gimdienis'];
         $email = $_POST['email'];
         $zinute = $_POST['zinute'];
         $zinutes_laikas = new Date();

         $sql = "INSERT INTO zinutes(`id`, `vardas`, `pavardas`, `gimdienis`, `email`, `zinutes_laikas`, `zinute` )
                 VALUES ( , '$vardas', '$pavardas' '$gimdienis', '$email', '$zinutes_laikas', '$zinute' )";
         mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."qqq".$sql);
         echo "irasyta";
      } else {
         echo "1";
      }
   }
}


?>
