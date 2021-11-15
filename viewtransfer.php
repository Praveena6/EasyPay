<?php
include_once 'db.php';



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

table, th, td {
  border: 1px solid black;
    border-color:white;
	border-collapse: collapse;
}
a { text-decoration: none; }

	
</style>
<title>View customers</title>
</head>
<body>

<div class="hero"><br><br><br><br>
<center><h2><font color =white >View customer </h2></center><br>
<center><h3><a href="acc1.php?"><button type="submit" name="submit" class="btn">view transatiom</button></a></h3>
</center> 
<center><h3><a href="calc.php?"><button type="submit" name="submit" class="btn">Transfer</button></a></h3>
</center> 
	</div>
</table>
</body>
</html>