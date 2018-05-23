<?php
require('conn.php');
$szemelyek = $_POST['szemelyek'];
$asztalszam = $_POST['asztalszam'];
$erkezes = $_POST['erkezes'];
$tavozas = $_POST['tavozas'];
$sql = "SELECT * FROM foglalasok WHERE asztal='$asztalszam'";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    /*for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row);
    print_r($set);*/
      // output data of each row
      while($row = $result->fetch_assoc()) {
        if(((float) $row['kezdete'] <= $erkezes && $erkezes < (float)$row['vege']) || ((float) $row['kezdete'] < $tavozas && $tavozas <= (float)$row['vege'])){
           echo $row['asztal'] . " foglalt ebben az idopontban." . $conn->error;
           break;
        }
      }
  } else {
    $sql = "SELECT * FROM asztalok WHERE id='$asztalszam'";

    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
      if($row['helyek'] < $szemelyek){
         echo  "Ennel az asztalnal ( ". $row['id'] . " ) maximum " . $row['helyek'] . " fer el." . $conn->error;
         break;
      }
  }
}

  $conn->close();
?>
