<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">

	<title>Add_jaws</title>
	
</head>
<body>
	<a href='index.html'>HOME</a>
	<div>
	<h1>JAWS</h1>
		<form action="add-command-exec.php?type=1" method="post" accept-charset="utf-8">
			COMMAND:<input type="text" name="command" value=""><br/>
			GESTURE ENABLED:<select name="gesture" id="some_name">
					<option value="1">YES</option>
					<option value="0">NO</option>
			</select><br/>
			FUNCTION:<select name="function" id="function">
			<?
				include_once("db-connect.php");
				$query="SELECT * FROM Functions";
				$result=mysql_query($query);
				while($row=mysql_fetch_assoc($result)){
					        echo "<option value='".$row['id']."'>".$row['description']."</option>";
				}   
				?>
			</select>
	
		<p><input type="submit" value="Continue &rarr;"></p>
		</form>
	</div>
	<div>
	<h1>NVDA</h1>
		<form action="add-command-exec.php?type=2" method="post" accept-charset="utf-8">
			COMMAND:<input type="text" name="command" value=""><br/>
			GESTURE ENABLED:<select name="gesture" id="some_name">
					<option value="1">YES</option>
					<option value="0">NO</option>
				</select><br/>
			FUNCTION:<select name="function" id="function">
			<?
				$query="SELECT * FROM Functions";
				$result=mysql_query($query);
				while($row=mysql_fetch_assoc($result)){
					        echo "<option value='".$row['id']."'>".$row['description']."</option>";
				}   
				?>
			</select>
	
		<p><input type="submit" value="Continue &rarr;"></p>
		</form>
	</div>
	<div>
	<h1>VOICEOVER</h1>
		<form action="add-command-exec.php?type=3" method="post" accept-charset="utf-8">
			COMMAND:<input type="text" name="command" value=""><br/>
			MODE:<input type="text" name="mode" value=""><br/>
			GESTURE ENABLED<select name="gesture" id="some_name">
					<option value="1">YES</option>
					<option value="0">NO</option>
			</select><br/>
			FUNCTION:<select name="function" id="function">
			<?
				$query="SELECT * FROM Functions";
				$result=mysql_query($query);
				while($row=mysql_fetch_assoc($result)){
					        echo "<option value='".$row['id']."'>".$row['description']."</option>";
				}   
				?>
			</select>
	
		<p><input type="submit" value="Continue &rarr;"></p>
		</form>
	</div>

</body>
</html>
