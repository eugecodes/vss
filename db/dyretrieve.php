<?php


$markers = array();

echo "Going to connect database";
mysql_connect("XX.XX.XXX.XX:XXXX","XXXXXXXXXX","XXXXXXXXXX") or  die(mysql_error());
 echo "Database connected succesfully";
mysql_select_db("VSSTechnology_deliverytrack");
$sql = ;
$result = mysql_query("select lat,lng from markers1 where $id='9968581085'");

if($result){
	while($row=$result->fetch_assoc()){
                $lat = $row['lat'];
	        $lng = $row['lng'];
                $data= array("lat"=>$lat,"lng"=>$lng);
                $marker[] = $data;
	}

        $markers = array("markers"=>$marker);

        echo json_encode($markers);
}


?>

