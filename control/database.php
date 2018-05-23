<?php

error_reporting(E_ALL);

$servername = "localhost:3306";
$username = "root";
$password = "Misco123";
echo "pass";
//phpinfo();
// Create connection
$conn = mysqli_connect($servername, $username, $password, 'netesfoglalas');
// Check connection
echo "connect";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "check";
//$sql="INSERT INTO foglalasok ('kezdete', 'vege' , 'db' , 'asztal' , 'nev') VALUES ('erkezes', 'tavozas', 1, 2, 'message')";
// MUKODIDK
/*$sql = "INSERT INTO foglalasok (kezdete, vege , db , asztal , nev, message) VALUES ('erkezes', 'tavozas', 1, 2, 'nev', 'message')";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}*/

/***  ASZTALKEPEK  ***/
/***  Minden asztalrol kideritjuk, hogy foglalt-e az adott idopontban  */


/* megnezi hogy van-e annyi fos asztal ami kell aztan azt hogy melyik szabad if ($conn->query($sql) === TRUE) {*/
$sql = "SELECT * FROM asztalok WHERE 'foglalt'=1";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
      }
  } else {
      echo "0 results";
  }
  $conn->close();
/**/

echo "vege";
?>
