<?php

    $link = mysql_connect("localhost", "root", "satana22")
        or die("Could not connect: " . mysql_error());
    print ("Connected successfully");
    
    // drop DATABASE if EXISTS korova;
	 mysql_select_db('korova', $link) or die ('Can\'t use korova : ' . mysql_error());
	
	  $query = "drop table  if exists korovi0;";
	
    $result = mysql_query($query) or die("Query failed : " . mysql_error());
	  
	  
	  
	  
	 $query = "
				CREATE TABLE korovi0
(
	id int(5) NOT NULL AUTO_INCREMENT,
	nfr int(1)  DEFAULT  0  COMMENT ' номер фермы',
	nsh int(8) UNSIGNED NOT NULL DEFAULT  0  COMMENT ' регистрационный номер животного',
	klk VARCHAR(12)  NOT NULL DEFAULT '' COMMENT ' кличка животного',
	dtr DATE NOT NULL COMMENT ' дата рождения животного',
	dyu DATE NOT NULL COMMENT ' дата убытия животного',    
	pyu VARCHAR(14)  NOT NULL DEFAULT '' COMMENT ' причина убытия',
	gkr VARCHAR(10)  NOT NULL DEFAULT '' COMMENT ' маркр и номер ГКПЖ',  
	prd VARCHAR(15)  NOT NULL DEFAULT '' COMMENT ' порода',
	prt VARCHAR(4)  NOT NULL DEFAULT '' COMMENT ' породность',    
	krt VARCHAR(3)  NOT NULL DEFAULT '' COMMENT ' кровность',
	rpd VARCHAR(1)  NOT NULL DEFAULT '' COMMENT ' репродукция',
	mrd VARCHAR(25)  NOT NULL DEFAULT '' COMMENT ' место рождения',  
	smv VARCHAR(20)  NOT NULL DEFAULT '' COMMENT ' семейство',       
	
	lpt VARCHAR(30)  NOT NULL DEFAULT '' COMMENT ' линейная принадлежность',  
	gkv VARCHAR(30)  NOT NULL DEFAULT '' COMMENT ' группа крови',
	kmk VARCHAR(12)  NOT NULL DEFAULT '' COMMENT ' комплексный класс', 
	
 	v00 INT(2)  NOT NULL DEFAULT 0 COMMENT ' вес при рождении',
	v06 INT(3)  NOT NULL DEFAULT 0 COMMENT ' вес при рождении',
	v10 INT(3)  NOT NULL DEFAULT 0 COMMENT ' вес 10 месяцев',
	v12 INT(3)  NOT NULL DEFAULT 0 COMMENT ' вес 12 месяцев',
	v18 INT(3)  NOT NULL DEFAULT 0 COMMENT ' вес 18 месяцев',
	vro INT(2)  NOT NULL DEFAULT 0 COMMENT ' возраст при первом осеменении',
	mvo INT(3)  NOT NULL DEFAULT 0 COMMENT ' масса при первом осеменении',   
	
	eov FLOAT(3,1)  NOT NULL DEFAULT 0 COMMENT ' экстерерная оценка',
    sy FLOAT(4,1)  NOT NULL DEFAULT 0 COMMENT ' суточный удой',
    vrd FLOAT(5,2)  NOT NULL DEFAULT 0 COMMENT ' время доения',      
    smo FLOAT(4,2)  NOT NULL DEFAULT 0 COMMENT ' скорость молокоотдачи',
    bok INT(2)  NOT NULL DEFAULT 0 COMMENT ' балл',
	
	
    m1 INT(8)  NOT NULL DEFAULT 0 COMMENT ' номер матери',
    m2 VARCHAR(12)  NOT NULL DEFAULT '' COMMENT ' кличка матери',
    m3 DATE NOT NULL COMMENT ' дата рождения матери', 
	
    o1 INT(8)  NOT NULL DEFAULT 0 COMMENT ' номер отца',	
    o2 VARCHAR(12)  NOT NULL DEFAULT '' COMMENT ' кличка отца',
    o3 DATE NOT NULL COMMENT ' дата рождения отца', 
	
    prz INT(8)  NOT NULL DEFAULT 0 COMMENT ' признак',
    kdo INT(8)  NOT NULL DEFAULT 0 COMMENT ' кол-во дней первого отела',
    fov VARCHAR(12)  NOT NULL DEFAULT '' COMMENT ' форма вымени',
    kud VARCHAR(14)  NOT NULL DEFAULT '' COMMENT ' куда убыл', 
    fio VARCHAR(12)  NOT NULL DEFAULT '' COMMENT ' фио доярки',
    rid VARCHAR(4)  NOT NULL DEFAULT '' COMMENT ' проба на лейкоз',	
    v01 INT(3),
    v03 INT(3),
    MAS VARCHAR(42),
    ANG INT(3),
    KDA INT(3) COMMENT '111111',
	 
	 PRIMARY KEY (id),
	INDEX(KLK),
	INDEX(id)
)ENGINE=InnoDB  COMMENT 'действующий список коров'; 
				";
	//   TYPE=InnoDB  COMMENT 'словарь кличек  быков'
    $result = mysql_query($query) or die("Query failed : " . mysql_error());
    
     $query = "DESC korovi0;";
	  $result = mysql_query($query) or die("Query failed : " . mysql_error());
    //echo $result."<br>";
    echo "<pre>";print_r($result);echo '</pre>';
    
    
    mysql_close($link);
	
										
?>