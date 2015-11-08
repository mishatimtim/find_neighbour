<HTML>
  <HEAD>
    
<?php

/* переменные из HTML*/
$name1=$_POST["Name"];
$age=$_POST["Year"];
$link=$_POST["Link"];
$city=$_POST["City"];
$animal=$_POST["Animal"];
$cleaning=$_POST["Clean"];
$cooking=$_POST["Cooking"];
$noise=$_POST["Shoom"];
$smoking=$_POST["Smoke"];
$drinking=$_POST["Alcohol"];
$sleep=$_POST["Sleep"];
$aboutme=$_POST["About_me"];
$aboutneiborhood=$_POST["About_neiborhood"];
$sex=$_POST["Sex"];


/* Этот скрипт получает переменные из request.html */ 

/* Переменные для соединения с базой данных */ 
$hostname="localhost";
$username="slava";
$userpassword="1111";
$dbName="people";

/* Таблица MySQL, в которой хранятся данные */ 
$userstable = "forms";  

/* создать соединение */ 
mysql_connect($hostname,$username,$userpassword) OR DIE("Не могу создать соединение "); 
/* выбрать базу данных. Если произойдет ошибка - вывести ее */ 
mysql_select_db($dbName) or die(mysql_error());  
 
/* составить запрос для вставки информации о клиенте в таблицу */ 
$query = "INSERT INTO $userstable(name1,age,link,city,sex ,animal,cleaning,cooking,noise,smoking,drinking,sleep,aboutme,aboutneiborhood)  VALUES('$name1','$age', '$link', '$city', '$sex' , '$animal', '$cleaning', '$cooking', '$noise', '$smoking', '$drinking', '$sleep', '$aboutme', '$aboutneiborhood')"; /*указать переменные которые записываются в бд*/
/* Выполнить запрос. Если произойдет ошибка - вывести ее. */ 
mysql_query($query) or die(mysql_error());  

/* Закрыть соединение */ 
mysql_close(); 
?>
<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=naitisoseda.html">
</HEAD>
  <BODY>
  </BODY>
</HTML>