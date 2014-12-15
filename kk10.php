<?php
header("Content-Type: text/html; charset=koi-8");
	//$q[10] = 123456;
	//echo $q[10]."<br>";
	 $link = mysql_connect("localhost", "qdpm", "satana22")
        or die("Could not connect: " . mysql_error());
    print ("Connected successfully");
	mysql_select_db('qdpm', $link) or die ('Can\'t use qdpm : ' . mysql_error());
	$f = fopen("KOROVI1.DBF","rb");
	$r = 0x05c2+2;
	fseek($f,$r);
	 $result = mysql_query("set names 'CP866'") or die("Query failed : " . mysql_error());
	 	$j = 1;
	while(	$q[0] = strval(fread($f,8)))

	//while ($j < 5)
	{
	//$q = fread($f,10)
	$q[1] = fread($f,12);
	$str2 = addslashes(convert_cyr_string($q[1],"d","w"));
	//echo $str2."<br>";
	
	$da = fread($f,8);
    $da1 = fread($f,8);
	$pyu  = fread($f,14);
	$str3 = addslashes(convert_cyr_string($pyu,"d","w"));
	$gkr  = fread($f,10);
	$str4 = addslashes(convert_cyr_string($gkr,"d","w"));
	$prd  = fread($f,15);
	$str5 = addslashes(convert_cyr_string($prd,"d","w"));
	$prt  = fread($f,4);
	$str6 = addslashes(convert_cyr_string($prt,"d","w"));
	$krt  = fread($f,3);
	$str7 = addslashes(convert_cyr_string($krt,"d","w"));
	$rpd  = fread($f,1);
	$str8 = addslashes(convert_cyr_string($rpd,"d","w"));
	$mrd  = fread($f,25);
	$str9 = addslashes(convert_cyr_string($mrd,"d","w"));
	$smv  = fread($f,20);
	$str10 = addslashes(convert_cyr_string($smv,"d","w"));
	$lpt  = fread($f,30);
	$str11 = addslashes(convert_cyr_string($lpt,"d","w"));
	$gkv  = fread($f,30);
	$str12 = addslashes(convert_cyr_string($gkv,"d","w"));
	$kmk  = fread($f,12);
	$str13 = addslashes(convert_cyr_string($kmk,"d","w"));
	$v00  = strval(fread($f,2));
	$v06  = strval(fread($f,3));
	$v10  = strval(fread($f,3));
	$v12  = strval(fread($f,3));
	$v18  = strval(fread($f,3));
	$vro  = strval(fread($f,2));
	$mvo  = strval(fread($f,3));
		$eov  = floatval(fread($f,3));
		$sy  = floatval(fread($f,4));
			$vrd  = floatval(fread($f,5));
				$smo  = floatval(fread($f,4));
				$bok  = strval(fread($f,2));
				$m1  = strval(fread($f,8));
				$m2  = fread($f,12);
	$str14 = addslashes(convert_cyr_string($m2,"d","w"));
	$da2 = fread($f,8);
		$o1  = strval(fread($f,8));
				$o2  = fread($f,12);
	$str15 = addslashes(convert_cyr_string($o2,"d","w"));
	$da3 = fread($f,8);
	$prz = strval(fread($f,8));
		$kdo = strval(fread($f,8));
			$fov  = fread($f,12);
	$str16 = addslashes(convert_cyr_string($fov,"d","w"));
	$kud  = fread($f,14);
	$str17 = addslashes(convert_cyr_string($kud,"d","w"));
	$fio  = fread($f,12);
	$str18 = addslashes(convert_cyr_string($fio,"d","w"));	
	$rid  = fread($f,4);
	$str19 = addslashes(convert_cyr_string($rid,"d","w"));
	//echo $da."<br>";
	
	$y = substr($da,0,4);
	//echo $y."<br>";
	$m = substr($da,4,2);
	//echo $m."<br>";
	$d = substr($da,6,2);
	//echo $d."<br>";
	
	//$dat =  mktime(0, 0, 0, (int)$m, (int)$d, (int)$y)
	$dat=date_create("$y-$m-$d");
	$l = "$y-$m-$d";
	
	
	
	$y = substr($da1,0,4);
	$m = substr($da1,4,2);
	$d = substr($da1,6,2);
	$l1 = "$y-$m-$d";
	$y = substr($da2,0,4);
	$m = substr($da2,4,2);
	$d = substr($da2,6,2);
	$l2 = "$y-$m-$d";
	$y = substr($da3,0,4);
	$m = substr($da3,4,2);
	$d = substr($da3,6,2);
	$l3 = "$y-$m-$d";
	
	//echo $l."<br>";
	//echo $dat."<br>";
	//echo date_format($dat,"Y/m/d H:i:s")."<br>";
	//echo gettype(dat);
											//$r += 0x0179;
											
											//$q[0] = bin2hex(fgetc($f));
											//$q[1] =  bin2hex(fgetc($f));
											//$q[2] =  bin2hex(fgetc($f));
											//$q[3] =  bin2hex(fgetc($f));
											//$q[4]= bin2hex(fgetc($f)));
											//$q[5]= bin2hex(fgetc($f));
										    //	$q[6] =bin2hex(fgetc($f));
											//$q = strval(fread($f,8));
											
											//$q[1] = strval(fgetc($f));
											//$q = strval(fread($f,8));
											//var_dump($q);
											//$nn = (int)$q;
											//$x = 0;
											//while ($x < 0x0d)
											//{
											//$w[$x] =bin2hex(fgetc($f));
											//$x++;
											//}
											// $str2 = addslashes((convert_cyr_string($q[7],"d","w")));
 
	
	echo '<pre>';
	echo "kuku"."<br>";
//	echo $dat."<br>";
     $query2 = "REPLACE  `qdpm`.`korovi1`  SET `nsh` ='$q[0]';
	 	";  
	 $query = "INSERT INTO  `qdpm`.`korovi1` (`nsh`,`klk`,`dtr` ,`dyu`,`pyu`,`gkr`,`prd`,
											  `prt`,`krt`,`rpd`,`mrd`,`smv`,`lpt`,`gkv`,`kmk`,`v00`,`v06`,
											 `v10`,`v12`,`v18`,`vro`,`mvo`,`eov`,`sy`,`vrd`,`smo`,`bok`,`m1`,`m2`,`m3`,
                           				`o1`,`o2`,`o3`,`prz`,`kdo`,`fov`,`kud`,`fio`,`rid`	 )
               VALUES   ('$q[0]','$str2','$l','$l1','$str3','$str4','$str5','$str6','$str7',
			   '$str8','$str9','$str10','$str11','$str12','$str13','$v00','$v06','$v10','$v12','$v18','$vro','$mvo',
			   '$eov','$sy','$vrd','$smo','$bok','$m1','$str14','$l2','$o1','$str15','$l3','$prz','$kdo',
			   'str16','str17','str18','str19');
	 	";
	    $result = mysql_query($query) or die("Query failed : " . mysql_error());	

	print_r($q);
	echo '</pre>';
	
	$r += 0x0179;
	fseek($f,$r);
	$j++;
	}
	mysql_close($link);
	fclose($f);