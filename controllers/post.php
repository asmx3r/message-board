<?php
// ask singleton for connection
include_once("/controllers/connection.php");

   if(isset($_POST['skelbti'])) {
      $fullname = $_POST['fullname']; // separate name and surname
      $gimdienis = $_POST['gimdienis'];
      $email = $_POST['email'];
      $zinute = $_POST['zinute'];
      $zinutes_laikas = new Date();

      $sql = "INSERT INTO zinutes(`id`, `vardas`, `pavardas`, `gimdienis`, `email`, `zinutes_laikas`, `zinute`)
              VALUES (NULL, '$vardas', '$pavardas' '$gimdienis', '$email', '$zinutes_laikas', '$zinute')";
      mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."qqq".$sql);
      echo "irasyta";
   } else {
      echo "1";
   }
}
?>
