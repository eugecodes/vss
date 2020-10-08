<?php
$lat = $_POST['lat'];
$lng = $_POST['lng'];
$id = $_POST['id'];

echo "Going to connect database";
mysql_connect("XX.XX.XXX.XX:XXXX","XXXXXXXXXX","XXXXXXXXXX") or  die(mysql_error());
 echo "Database connected succesfully";
mysql_select_db("VSSTechnology_deliverytrack");
$markers=mysql_query("insert into markers1(id,lat,lng) values ('$id','$lat','$lng')");		
mysql_close();
?>