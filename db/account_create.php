<?php
$name = $_POST['id'];
$designation=$_POST['id1'];
$credit =$_POST['id2'];
$debit=$_POST['id3'];
$balance=$_POST['id4'];
echo "Going to connect database";
mysql_connect("XX.XX.XXX.XX:XXXX","XXXXXXXXXX","XXXXXXXXXX") or  die(mysql_error());
 echo "Database connected succesfully";
mysql_select_db("VSSTechnology_deliverytrack");
//mysql_select_db("a1716706_latlng");
$markers=mysql_query("insert into agent_account(agent_name,agent_designation,agent_credit,agent_debit,agent_balance	) values 
('$name','$designation','$credit','$debit','$balance')");		
mysql_close();
?>