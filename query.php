<html>
<body>
<?php
include_once("db-connect.php");
$id=$_GET['id'];
$result=mysql_query($query);
while($row1=mysql_fetch_assoc($result)){
	echo "The Command".$row1['id']." ".$row1['description']."<br/>";
}
echo "<h2>JAWS</h2>";
$q="SELECT * FROM JAWS where func_id='$id'";
$result=mysql_query($q);
echo "<table border='1'>";
echo "<tr><th>ID</th><th>COMMAND</th></tr>";
while($row=mysql_fetch_assoc($result)){
	echo "<tr>";
       echo "<td>".$row['id']."</td><td> ".$row['command']."</td></tr><br/>";
}
echo "</table>";
echo "<h2>NVDA</h2>";
$q="SELECT * FROM NVDA where func_id='$id'";
$result=mysql_query($q);
echo "<table border='1'>";
echo "<tr><th>ID</th><th>COMMAND</th></tr>";
while($row=mysql_fetch_assoc($result)){
	echo "<tr>";
       echo "<td>".$row['id']."</td><td> ".$row['command']."</td></tr><br/>";
}
echo "</table>";
echo "<h2>VOICEOVER</h2>";
$q="SELECT * FROM VOICEOVER where func_id='$id'";
$result=mysql_query($q);
echo "<table border='1'>";
echo "<tr><th>ID</th><th>COMMAND</th><th>MODE</th></tr>";
while($row=mysql_fetch_assoc($result)){
	echo "<tr>";
       echo "<td>".$row['id']."</td><td> ".$row['command']."</td><td>".$row['mode']."</td></tr><br/>";
}
echo "</table>";
?>
</body>
</html>
