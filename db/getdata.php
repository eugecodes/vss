<?php
//$id = $_GET['id'];
//$id = $_POST['id'];

$response = array();

echo "Going to connect database";
mysql_connect("XX.XX.XXX.XX:XXXX","XXXXXXXXXX","XXXXXXXXXX") or  die(mysql_error());
 //echo "Database connected succesfully";
mysql_select_db("VSSTechnology_deliverytrack");

 // check for post data
//if (isset($_GET["id"])) {
 //   $id = $_GET['id'];
//	echo "Getting id dynamically";
//}
$result = mysql_query("SELECT * FROM markers1")or die(mysql_error);
//$result = mysql_query("SELECT * FROM markers1 WHERE id = $id");
//$result=mysq
// check for empty result
if (mysql_num_rows($result) > 0) {
    // looping through all results
    // products node
    $response["product"] = array();
    
    while ($row = mysql_fetch_array($result)) {
        // temp user array
        $product = array();
        $product["lat"] = $row["lat"];
        $product["lng"] = $row["lng"];
        // push single product into final response array
        array_push($response["products"], $product);
    }
     success
   $response["success"] = 1;

   echo "<br/>";
    // echoing JSON response
    echo json_encode($response);
} else {
    // no products found
    $response["success"] = 0;
    $response["message"] = "No products found";

    // echo no users JSON
    echo json_encode($response);
}

?>
