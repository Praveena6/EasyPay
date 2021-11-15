<?php
include_once 'db.php';


$result = mysqli_query($conn,"SELECT tname,tamount,balance FROM transfer where accno='" . $_GET["accno"] . "'");
?>



<html>
<head>
<style>
.hero{
	height: 100%;
	width: 100%;
	 background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(p1.png);
	background-position: center;
	background-size: cover;
	position: absolute;
}
.center {
  margin-left: auto;
  margin-right: auto;
  font-size: 20px;
  color: white;
}
th, td {
  padding: 13px;
  text-align: left;
}
.btn {

  
  color: black;
  border: none;
  padding: 12px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  border-radius: 30px;
}
table, th, td {
  border: 1px solid black;
    border-color:white;
	border-collapse: collapse;
}
a { text-decoration: none; }
</style>
<title>Customer details</title>
</head>
<body>
 <form  action="transfer.php"  method="post"><br>
<div class="hero"><br>


	<table class="center">
	<tr>
	<td>Transfered TO</td>
	<td>Transfered Amount</td>
	<td>Remaining Balance</td>
	</tr>
	
<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo"not conn";
}
if(!mysqli_select_db($con,'ruralbank'))
{
	echo"not sel";
}
if(isset($_POST['submit']))
{
$accno=$_GET["accno"];
$sql = "select * from transfer where accno='$accno'";
if(mysqli_query($con,$sql))
{	
  echo "Record updated successfully";
} 
else
{
	echo "<h3><center><font color=red>Invalid </font></center></h3>"; 
}


}

?>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result))  {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
    <td><?php echo $row["tname"]; ?></td>
	<td><?php echo $row["tamount"]; ?></td>
	<td><?php echo $row["balance"]; ?></td>
	</tr>
	<?php
	$i++;
	}
	?>
	</div>
</table><br><br><br><br>
<center><h3><a href="calc.php?accno=<?php echo $_POST['accno']; ?>"><button type="submit" name="submit" class="btn">Transfer</button></a</h3>
</center>   
</body>
</html>
