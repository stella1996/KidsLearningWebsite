<?php
mysql_connect("127.0.0.1","steffy","123");
mysql_select_db("fosslab");


?>

<html>
<head>
<title>video</title>
</head>
<body background="1920x1200-data-out-8-56690456-children-wallpapers.jpg">
<center><h1 style="margin-top:80PX;color:#CC3366">DOWNLOADS</h1></center>
<?php
$query =mysql_query("select * from videos"); 
while($row = mysql_fetch_assoc($query))
{
$id = $row['id'];
$name = $row['name'];

echo "<center style=font-size:30PX><a  href='watch.php?id=$id'>$id.       $name</a><BR><br/></center>";
}
?>
</body>
</html>