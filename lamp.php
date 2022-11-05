<?php
$user = "lampp";
$password = "lampp";
$database = "lampp";
$table = "test_table";

try {
        $db = new PDO("pgsql:host=192.168.52.142;dbname=$database", $user, $password);
  echo "<h2> Test_table </h2><ol>";
  foreach($db->query("SELECT * FROM $table") as $row) {
          echo "<li>"  .$row['id']. '       ' .$row['num']. "</li>";
  }


} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

