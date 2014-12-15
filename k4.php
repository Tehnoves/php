<?php
header("Content-Type: text/html; charset=win1251");   //koi-8  win1251

	 $link = mysql_connect("localhost", "root", "satana22")
        or die("Could not connect: " . mysql_error());
    print ("Connected successfully");
	mysql_select_db('korova', $link) or die ('Can\'t use qdpm : ' . mysql_error());
   mysql_query("SET NAMES 'cp866'");
	                              //echo '<pre>';

		
	$query1 = "SELECT * FROM  ibik order by id";
		
	//echo $query1."<br>";
	
	$result = mysql_query($query1) or die("Query failed : " . mysql_error());	

	
	mysql_close($link);
	$a = 1;
	                                 //while     NUM
   while ($row = mysql_fetch_array($result,MYSQL_ASSOC))
   	{
		echo "id-".$row["id"]." klk-".$row["klk"]."<br>";}
	
	?>