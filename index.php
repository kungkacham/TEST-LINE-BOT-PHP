<?php
	
	$url = parse_url(getenv("mysql://b9b546d969c94c:917550df@us-cdbr-iron-east-03.cleardb.net/heroku_42e65519c326c73?reconnect=true"));

	$server = $url["us-cdbr-iron-east-03.cleardb.net"];
	$username = $url["b9b546d969c94c"];
	$password = $url["917550df"];
	$db = substr($url["heroku_42e65519c326c73"], 1);

	
	// Create connection
	
	$conn = new mysqli($server, $username, $password, $db);
	
	$sql = "INSERT INTO counter (counter) VALUES ('1')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

	
	
	
	
	
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
