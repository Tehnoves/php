<?php
header("Content-Type: text/html; charset=cp866");   //koi-8  win1251

	 $link = mysql_connect("localhost", "qdpm", "satana22")
        or die("Could not connect: " . mysql_error());
    print ("Connected successfully");
	mysql_select_db('qdpm', $link) or die ('Can\'t use qdpm : ' . mysql_error());
mysql_query("SET NAMES 'cp866'");
	//echo '<pre>';

		
		$query1 = "SELECT * FROM  korovi1";
		
		echo $query1."<br>";
	
	    $result = mysql_query($query1) or die("Query failed : " . mysql_error());	

	
	mysql_close($link);
	$a = 1;
	//while     NUM
	$fist = getdate();
	//echo "sek: ".$fist['seconds'];
	echo $fist['minutes']."min ".$fist['seconds']."sek<br>";
while ($row = mysql_fetch_array($result,MYSQL_ASSOC)){
		echo "--".$row["klk"]."--".$row["nsh"]."--".$row["dtr"]."--".$row["dyu"]."--".$row["pyu"]."--".$row["gkr"]."<br>";
		echo "--".$row["prd"]."--".$row["prt"]."--".$row["krt"]."--".$row["rpd"]."--".$row["mrd"]."<br>";
		echo "--".$row["smv"]."--".$row["lpt"]."--".$row["gkv"]."--".$row["kmk"]."--".$row["v00"]."--".$row["v06"]."<br>";
		echo "--".$row["v10"]."--".$row["v12"]."--".$row["v18"]."--".$row["vro"]."--".$row["mvo"]."<br>";
		echo "--".$row["eov"]."--".$row["sy"]."--".$row["vrd"]."--".$row["smo"]."--".$row["bok"]."<br>";
		echo "--".$row["m1"]."--".$row["m2"]."--".$row["m3"]."--".$row["o1"]."--".$row["o2"]."--".$row["o3"]."<br>";
		echo "--".$row["prz"]."--".$row["kdo"]."--".$row["fov"]."--".$row["kud"]."--".$row["fio"]."--".$row["rid"]."<br>";
		}
	echo "<pre>";print_r($row);echo '</pre>';
		$fist1 = getdate();
	echo $fist1['hours']."hours ".$fist1['minutes']."min ".$fist1['seconds']."<br>";

	?>