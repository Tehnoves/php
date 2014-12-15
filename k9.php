<?php
header("Content-Type: text/html; charset=win1251");   //koi-8  win1251

	 $link = mysql_connect("localhost", "root", "satana22")
        or die("Could not connect: " . mysql_error());
    print ("Connected successfully");
	mysql_select_db('korova', $link) or die ('Can\'t use qdpm : ' . mysql_error());
mysql_query("SET NAMES 'cp866'");
	//echo '<pre>';

		
		$query1 = "SELECT * FROM  ikorova order by id";
		
		//echo $query1."<br>";
	
	    $result = mysql_query($query1) or die("Query failed : " . mysql_error());	

	
	mysql_close($link);
	$a = 1;

	$fist = getdate();
	
	echo $fist['minutes']."min ".$fist['seconds']."sek<br>";
while ($row = mysql_fetch_array($result,MYSQL_ASSOC)){
										//echo "- ".$row["klk"]."     ".$a++."<br>";}
		echo "id-".$row["id"]."  klk ".$row["klk"]."<br>";}
	echo "<pre>";print_r($row);echo '</pre>';
		$fist1 = getdate();
	echo $fist1['hours']."hours ".$fist1['minutes']."min ".$fist1['seconds']."<br>";

	?>