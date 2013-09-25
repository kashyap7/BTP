<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">

	<title>ALL FUNCTIONS</title>
	
</head>
<body>
<?php
include_once("db-connect.php");
include_once("home.php");

echo "<h2>All Functions</h2>";
$q="SELECT * FROM Functions ";
$result=mysql_query($q);
echo "<table border='1'>";
echo "<tr><th>CATEGORY</th><th>DESCRIPTION</th><th>COMMANDS</th></tr>";
while($row=mysql_fetch_assoc($result)){
	echo "<tr>";
	$link="<a href='query.php?id=".$row['id']."'>COMMANDS</a>";
       echo "<td>".$row['category']."</td><td> ".$row['description']."</td><td>".$link."</td></tr><br/>";
}
echo "</table>";
#echo "<a href='index.html'>BACK</a>";
?>
	
</body>
</html>
