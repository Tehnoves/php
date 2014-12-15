<?php
header("Content-Type: text/html; charset=koi-8");
												//$q[10] = 123456;
												//echo $q[10]."<br>";
	 $link = mysql_connect("localhost", "root", "satana22")
        or die("Could not connect: " . mysql_error());
    print ("Connected successfully");
	mysql_select_db('korova', $link) or die ('Can\'t use korova : ' . mysql_error());
	$f = fopen("KOROVI0.DBF","rb");
	$r = 0x05c2+0x01;
	fseek($f,$r);
	 $result = mysql_query("set names 'CP866'") or die("Query failed : " . mysql_error());
	 	$j = 1;
	while($nfr = fread($f,1)	)

	{   
		// COMMENT ' номер фермы'	
	$q[0] = strval(fread($f,8));	// COMMENT ' регистрационный номер животного'		
	$q[1] = fread($f,12);         // COMMENT ' кличка животного',
	$str2 = addslashes(convert_cyr_string($q[1],"d","w"));  
	$da = fread($f,8);      // COMMENT ' дата рождения животного 
   $da1 = fread($f,8);    // COMMENT ' дата убытия животного'
	$pyu  = fread($f,14);  // COMMENT ' причина убытия'
	$str3 = addslashes(convert_cyr_string($pyu,"d","w"));
	$gkr  = fread($f,10);  // COMMENT ' маркр и номер ГКПЖ'
	$str4 = addslashes(convert_cyr_string($gkr,"d","w"));
	$prd  = fread($f,15);   //COMMENT ' порода'
	$str5 = addslashes(convert_cyr_string($prd,"d","w"));
	$prt  = fread($f,4);    // COMMENT ' породность'
	$str6 = addslashes(convert_cyr_string($prt,"d","w"));
	$krt  = fread($f,3);     //COMMENT ' кровность'
	$str7 = addslashes(convert_cyr_string($krt,"d","w"));
	$rpd  = fread($f,1);     //COMMENT ' репродукция'
	$str8 = addslashes(convert_cyr_string($rpd,"d","w"));
	$mrd  = fread($f,25);    //COMMENT ' место рождения
	$str9 = addslashes(convert_cyr_string($mrd,"d","w"));
	$smv  = fread($f,20);    //COMMENT ' семейство
	$str10 = addslashes(convert_cyr_string($smv,"d","w"));
	$lpt  = fread($f,30);     //COMMENT ' линейная принадлежность'
	$str11 = addslashes(convert_cyr_string($lpt,"d","w"));
	$gkv  = fread($f,30);    //COMMENT ' группа крови',
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
	$vrd  = floatval(fread($f,4));
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
	$prz = strval(fread($f,2));
	$kdo = strval(fread($f,4));
	$fov  = fread($f,2);
	$str16 = addslashes(convert_cyr_string($fov,"d","w"));
	$kud  = fread($f,14);
	$str17 = addslashes(convert_cyr_string($kud,"d","w"));
	//$fio  = fread($f,12);
	//$str18 = addslashes(convert_cyr_string($fio,"d","w"));	
	$rid  = fread($f,4);
	$str19 = addslashes(convert_cyr_string($rid,"d","w"));
	$y = substr($da,0,4);
	$m = substr($da,4,2);
	$d = substr($da,6,2);
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
	
											
	echo '<pre>';
	echo "kuku"."<br>";
													//	echo $dat."<br>";
     $query2 = "REPLACE  `korova`.`korovi0`  SET `nsh` ='$q[0]';
	 	";  
	 $query = "INSERT INTO  `korova`.`korovi0` (`nfr`,`nsh`,`klk`,`dtr` ,`dyu`,`pyu`,`gkr`,`prd`,
											  `prt`,`krt`,`rpd`,`mrd`,`smv`,`lpt`,`gkv`,`kmk`,`v00`,`v06`,
											 `v10`,`v12`,`v18`,`vro`,`mvo`,`eov`,`sy`,`vrd`,`smo`,`bok`,`m1`,`m2`,`m3`,
                           				`o1`,`o2`,`o3`,`prz`,`kdo`,`fov`,`kud`,`rid`	 )
               VALUES   ('$nfr','$q[0]','$str2','$l','$l1','$str3','$str4','$str5','$str6','$str7',
			   '$str8','$str9','$str10','$str11','$str12','$str13','$v00','$v06','$v10','$v12','$v18','$vro','$mvo',
			   '$eov','$sy','$vrd','$smo','$bok','$m1','$str14','$l2','$o1','$str15','$l3','$prz','$kdo',
			   '$str16','$str17','$str19');
	 	";
	    $result = mysql_query($query) or die("Query failed : " . mysql_error());	

	print_r($q);
	echo $da;
	echo $da1;
	echo $l;
	echo $l1;
	echo '</pre>';
	
	$r += 0x0178;
	fseek($f,$r);
	$j++;
	}
	mysql_close($link);
	fclose($f);
	
														//mysql> UPDATE persondata SET age=age+1;
	
	
?>