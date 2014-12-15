<?php
header("Content-Type: text/html; charset=win1251");   //koi-8  win1251
				
	 $link = mysql_connect("localhost", "root", "satana22")
        or die("Could not connect: " . mysql_error());
    print ("Connected successfully");
	mysql_select_db('korova', $link) or die ('Can\'t use qdpm : ' . mysql_error());
	$i = 0;
	$f = fopen("IBIK.DBF","rb");
	fseek($f, 33);
	$q[0] =  bin2hex(fgetc($f));
	$q[1] =  bin2hex(fgetc($f));
	$q[2] =  bin2hex(fgetc($f));
	$q[3] =  bin2hex(fgetc($f));
	$q[4] =  bin2hex(fread($f,4));
	$q[5] =  bin2hex(fgetc($f));
	$q[6] =  bin2hex(fgetc($f));
	$z = $q[6].$q[5];
	$i = hexdec($z);
	$q[8] = $i;
	fseek($f,66);
	$z = 1;
	$fist = getdate();
	echo $fist['minutes']."min ".$fist['seconds']."sek";
	while(	$q[7] = fread($f,13))
		 $str2 = addslashes(substr(convert_cyr_string($q[7],"d","w"),1));
 	echo '<pre>';
	print_r($z.$str2."iiii");
	$z++;
	$query1 = "INSERT INTO  `korova`.`ibik` (id,klk)
              VALUES   ($z,'$str2')
                 
		";
		$result = mysql_query($query1) or die("Query failed : " . mysql_error());	
	echo '</pre>';
	}
	$fist1 = getdate();
	echo $fist1['minutes']."min ".$fist1['seconds']."sek";
	mysql_close($link);
	fclose($f);
	?>
	
	

    
	