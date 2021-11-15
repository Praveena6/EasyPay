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
<div class="hero"><br>
 <form  action="acc1.php"  method="post"><br>
<center><h2><font color =white >Customer Details </h2></center>
<label>Account number: </label>
<input type="number" name="accno" class="input-field" placeholder="Enter the current balance" required> <br> <br>
<center><h3><a href="transfer.php?"><button type="submit" name="submit" class="btn">go</button></a></h3>
</center>   
