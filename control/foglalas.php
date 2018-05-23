<?php

if(isset($_REQUEST))
{
  require('conn.php');
  //mysql_select_db("netesfoglalas");
  error_reporting(E_ALL && ~E_NOTICE);
  $nev= $_POST['nev'];
  $db= $_POST['szemelyek'];
  $erkezes= $_POST['erkezes'];
  $erkezes= str_replace(':', '.', $erkezes);
  $tavozas= $_POST['tavozas'];
  $tavozas= str_replace(':', '.', $tavozas);
  $message= $_POST['message'];
  $asztal= $_POST['asztalszam'];

  $sql="INSERT INTO foglalasok (kezdete, vege , db , asztal , nev, message) VALUES ('$erkezes', '$tavozas', '$db', '$asztal', '$nev', '$message')";
  mysql_query($sql, $con);
  if ($conn->query($sql) === TRUE) {
      echo "Database created successfully";
  } else {
      echo "Error creating database: " . $conn->error;
  }

}
?>
