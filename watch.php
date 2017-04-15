<?php
mysql_connect("127.0.0.1","steffy","123");
mysql_select_db("fosslab");


?>

<html>
<head>
<title>video</title>
</head>
<body>

<?php 
if(isset($_GET['id']))
{
 $id = $_GET['id'];
$query = mysql_query("select * from videos where id='$id'");
while($row = mysql_fetch_assoc($query))
{
$name = $row['name'];
$url =$row['url'];

}

//echo "you are watching" .$name. "<br/>";
echo "<embed src='$url' width='1355' height='620'></embed>";
}
else
{
echo "error";
}
?>
</body>
</html>