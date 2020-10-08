<?php
$lat = $_POST['lat'];
$lng = $_POST['lng'];
$id = $_POST['id'];

echo "Going to connect database";
mysql_connect("XXXXXXXXXXXXXX","XXXXXXXXXXXXXX","XXXXXXXXXXXXXX") or  die(mysql_error());
 echo "Database connected succesfully";
mysql_select_db("VSSTechnology_deliverytrack");
    $result = mysql_query("UPDATE markers1 SET lat = '$lat', lng = '$lng' WHERE id = $id");

mysql_close();
?>


