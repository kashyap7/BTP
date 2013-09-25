<?
include_once("db-connect.php");
	$desc= $_POST['description'];
	$cate= $_POST['category'];
	echo $desc;
	echo $cate;
	$query = "INSERT INTO Functions(description,category) values('$desc','$cate')";
	$value=mysql_query($query)or die("A MySQL error has occurred.<br />Your Query: " . $your_query . "<br /> Error: (" . mysql_errno() . ") " . mysql_error());
?>
