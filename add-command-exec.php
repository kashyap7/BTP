<?php
include_once("db-connect.php");
$command=$_POST['command'];
$gesture=$_POST['gesture'];
$func_id=$_POST['function'];
//echo "GESTURE"+$gesture+" function_id"+$func_id ;
if($_GET['type']==1){
	
	$query = "INSERT INTO JAWS(command,gesture,func_id) values('$command','$gesture','$func_id')";
	$value=mysql_query($query)or die("A MySQL error has occurred.<br />Your Query: " . $your_query . "<br /> Error: (" . mysql_errno() . ") " . mysql_error());
}
else if ($_GET['type']==2) {
	$query = "INSERT INTO NVDA(command,gesture,func_id) values('$command','$gesture','$func_id')";
	$value=mysql_query($query)or die("A MySQL error has occurred.<br />Your Query: " . $your_query . "<br /> Error: (" . mysql_errno() . ") " . mysql_error());
	echo $query;

}
else if ($_GET['type']==3) {
	$mode=$_POST['mode'];
	$query = "INSERT INTO VOICEOVER(command,gesture,mode,func_id) values('$command','$gesture','$mode','$func_id')";
	$value=mysql_query($query)or die("A MySQL error has occurred.<br />Your Query: " . $your_query . "<br /> Error: (" . mysql_errno() . ") " . mysql_error());
	echo $query;
}
header("Location:add_commands.php");
?>
