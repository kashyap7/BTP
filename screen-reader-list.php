<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">

	<title>ALL FUNCTIONS</title>
	
</head>
<body>
<?php
include_once("db-connect.php");
include_once("home.php");
if($_GET['type']==1){
	echo "<h2>All Functions</h2>";
	$q="SELECT * from Functions,JAWS where Functions.id=JAWS.func_id";
	$result=mysql_query($q);
	echo "<table border='1'>";
	echo "<tr><th>CATEGORY</th><th>DESCRIPTION</th><th>COMMANDS</th></tr>";
	while($row=mysql_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row['category']."</td><td> ".$row['description']."</td><td>".$row['command']."</td></tr><br/>";
	}
	echo "</table>";
}
else if ($_GET['type']==2) {
	echo "<h2>All Functions</h2>";
	$q="SELECT * from Functions,NVDA where Functions.id=NVDA.func_id";
	$result=mysql_query($q);
	echo "<table border='1'>";
	echo "<tr><th>CATEGORY</th><th>DESCRIPTION</th><th>COMMANDS</th></tr>";
	while($row=mysql_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row['category']."</td><td> ".$row['description']."</td><td>".$row['command']."</td></tr><br/>";
	}
	echo "</table>";
}
else if ($_GET['type']==3) {
	echo "<h2>All Functions</h2>";
	$q="SELECT * from Functions,VOICEOVER where Functions.id=VOICEOVER.func_id";
	$result=mysql_query($q);
	echo "<table border='1'>";
	echo "<tr><th>CATEGORY</th><th>DESCRIPTION</th><th>COMMANDS</th><th>MODE</th></tr>";
	while($row=mysql_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row['category']."</td><td> ".$row['description']."</td><td>".$row['command']."</td><td>".$row['mode']."</td></tr><br/>";
	}
	echo "</table>";
}
#echo "<a href='index.html'>BACK</a>";
?>
	
</body>
</html>
