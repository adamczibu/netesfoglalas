<?php
require('conn.php');
$selectedtime = $_GET['ido'];
$sql = "SELECT * FROM foglalasok";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    /*for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row);
    print_r($set);*/
      // output data of each row
      $i = 0;
      $foglalt = array();
      while($row = $result->fetch_assoc()) {
        if((float) $row['kezdete'] <= $selectedtime && $selectedtime <= (float)$row['vege'] ){
           $foglalt[$i] = $row['asztal'];
           $i++;
        }
          //echo "id: " . $row["id"]. " - FogID: " . $row["foglalasok_id"]. " hely" . $row["helyek"]. "<br>";
      }
  } else {
      echo "0 results";
  }
  echo json_encode($foglalt);
  $conn->close();
?>
