<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<?php 
    include("db.php");  
    $fetc = "SELECT * FROM upload LIMIT 5";
    $result = mysql_query($fetc);
?>

<body>
<?php
while($row1=mysql_fetch_array($result))
{
    $name=$row1['name'];
    $type=$row1['type'];
    ?>
<div class="rect">
<img alt="down-icon" src="down-drop-icon.png" align="left" width="20" height="20" />
<a href="download.php?filename=<?php echo $name ;?>" >
<?php echo $name ;?></a>
</div>
<?php 
} 
?>
</body>


</body>
</html>