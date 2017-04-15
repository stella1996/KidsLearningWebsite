<?php
mysql_connect("127.0.0.1","steffy","123");
mysql_select_db("fosslab");

if(isset($_POST['submit']))
{
$name =$_FILES['file']['name'];
$temp =$_FILES['file']['tmp_name'];
move_uploaded_file($temp,"learningwebsite/".$name);
$url ="http://127.0.0.1/foss/learningwebsite/$name";
mysql_query("insert into videos value ('','$name','$url')");
}

?>

<html>
<head>
<style>
a{
color:#FF0000;
font-size:36px;
}
</style>
<title>video</title>
</head>
<body>
<center>
<h1 style="color:#663300;font-size:50px" align="center">UPLOAD YOUR VIDEOS TO THE DATABASE</h1>

<form action="index.php" method="post" enctype="multipart/form-data">
<input type="file" name="file">
<input type="submit" name="submit" value="upload">

</form>

</center>
<?php
if(isset($_POST['submit']))
{
echo "<br/>".$name. "has been uploaded";
}
?>
<center><a href="videos.php">VIEW YOUR UPLOADED VIDEOS</a></center>

</body>
</html>

