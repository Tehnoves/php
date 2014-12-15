<?php
header("Content-Type: text/html; charset=koi-8");
										
	 $link = mysql_connect("localhost", "root", "satana22")
        or die("Could not connect: " . mysql_error());
    print ("Connected successfully");
	mysql_select_db('korova', $link) or die ('Can\'t use qdpm : ' . mysql_error());
	$i = 0;
	$f = fopen("IBIK.DBF","rb");
	fseek($f, 33);
	$q[0] = bin2hex(fgetc($f));
	$q[1] =  bin2hex(fgetc($f));
	$q[2] =  bin2hex(fgetc($f));
	$q[3] =  bin2hex(fgetc($f));
											
	$q[4]= bin2hex(fread($f,4));
	$q[5]= bin2hex(fgetc($f));
	$q[6] =bin2hex(fgetc($f));
	$z = $q[6].$q[5];
	
	$i = hexdec($z);
	$q[8] = $i;
	fseek($f,66);
	$result = mysql_query("set names 'CP866'") or die("Query failed : " . mysql_error());
	while(	$q[7] = fread($f,13))
	{
													
	 $str2 = addslashes(substr(convert_cyr_string($q[7],"d","w"),1));
 
	
	echo '<pre>';
	echo $str2;
	 $query = "INSERT INTO  `korova`.`ibik` (`klk` )
               VALUES   ('$str2');
	 	";
	    $result = mysql_query($query) or die("Query failed : " . mysql_error());	
	

	echo '</pre>';
	}
	mysql_close($link);
	fclose($f);
	?>
	
	
	
    
	