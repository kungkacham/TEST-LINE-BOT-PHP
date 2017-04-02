<?php

	$servername = "us-cdbr-iron-east-03.cleardb.net";
	$database = "heroku_5f630c7697ea0b4";
	$username = "ba2cfeccd6a65a";
	$password = "b70b51f3";

	// Create connection

	$conn = mysql_connect($servername, $username, $password);

	// Check connection
	
	if($conn)
	{
		echo "Database Connected.";
	}
	else
	{
		echo "Database Connect Failed.";
	}
	
	mysql_close($conn);

	
	
	
	
	
		/*$host = "mysql.hostinger.in.th"; 
		$username = "u234723275_stic";
		$password = "5tvsuV2P7drO";
		$db="u234723275_stic";
		$tb="Counter";
		$conn = mysqli_connect($host,$username,$password,$db);
		$sql = "INSERT INTO Counter {Counter} VALUES ('2')";
		mysqli_close($conn);
		//b4d1e0d7-35a5-43f3-95ca-3ef71cd7187a
		//kungkacham.astrology@gmail.com
		mysql_select_db($db);
		$sql1="Select * From $tb";
		$dbquery1=mysql_db_query($db,$sql1);
		$result1= mysql_fetch_array($dbquery1);
		$Counter=$result1[Counter];
		$Counter_new=$Counter+1;
		$sql2="update $tb set Counter='$Counter_new'";
		$dbquery2=mysql_db_query($db,$sql2);
		mysql_close();*/
		
		
/*	Main Hosting Details
	Control panel username
	feton_19913113
	Control panel password	**********
	Control panel URL
	cpanel.freehost.in.th
	MySQL username
	feton_19913113
	MySQL password
	**********
	MySQL hostname
	sql200.freehost.in.th
	FTP username
	feton_19913113
	FTP password
	**********
	FTP host name	ftp.freehost.in.th


	Your Website URL's
	Home page
	http://faith.freehost.in.th 
	
	http://cpanel.freehost.in.th/panel/indexcp.php?option=mysql
	
	*/
		
		
//echo "Hello LINE BOT";
