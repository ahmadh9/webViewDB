<?php
require_once 'config/database.php';
?>


	<?php
 if(isset($_POST['F'])){
     
  echo 'F';
     $sql = "INSERT INTO buttons (forward) VALUES ('F')";
  }elseif (isset($_POST['S'])) {
         $sql = "INSERT INTO buttons (stop) VALUES ('S')";

    echo 'S';
   
  }
  elseif(isset($_POST['R'])){
         $sql = "INSERT INTO buttons (R) VALUES ('R')";

    echo 'R';

  }
  elseif(isset($_POST['B'])){
         $sql = "INSERT INTO buttons (backward) VALUES ('B')";

    echo 'B';
   
  }elseif(isset($_POST['L'])){
         $sql = "INSERT INTO buttons (L) VALUES ('L')";

    echo 'L';
    
  }else{
      echo "the value not posted";
  }


 

?>