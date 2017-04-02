<?php

	$servername = "autobotohmygod.16mb.com";
	$database = "u234723275_stic";
	$username = "u234723275_stic";
	$password = "5tvsuV2P7drO";

	// Create connection

	$conn = mysqli_connect($servername, $username, $password, $database);

	// Check connection

	if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}
	echo "Connected successfully";
	mysqli_close($conn);

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
		
		
		
		
//echo "Hello LINE BOT";
