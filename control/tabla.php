<?php
require('conn.php');

$sql = "SELECT * FROM foglalasok";

  $result = $conn->query($sql);
  echo "<table class='table table-hover table-striped'><tr><th>ID</th><th>Kezdete</th><th>Vege</th><th>Szemelyek</th><th>Asztal</th><th>Nev</th><th>Uzenet</th></tr>";
  if ($result->num_rows > 0) {
    /*for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row);
    print_r($set);*/
      // output data of each row
      while($row = $result->fetch_assoc()) {
          //kezdete, vege , db , asztal , nev, message

          echo "<tr><td>".$row["id"]."</td><td>".$row["kezdete"]."</td><td> ".$row["vege"]."</td><td> ".$row["db"]."</td><td> ".$row["asztal"]."</td><td> ".$row["nev"]."</td><td> ".$row["message"]."</td></tr>";

      }
  } else {
      echo "0 results";
  }
  echo "</table>";
  //echo json_encode($foglalt);
  $conn->close();
?>
