<?php
require("connect_db.php");
$oper =$_POST['oper'];
$id =$_POST['id'];
if ($oper == "like") {
		$sent="update Centros set Agrada= Agrada + 1 where Id='$id'";
		$rsent=mysqli_query($mysqli,$sent);
	}
if ($oper == "ds") {
		$sent="update Centros set Desagrada= Desagrada + 1 where Id='$id'";
		$rsent=mysqli_query($mysqli,$sent);
	}
if ($oper == "going") {
		$sent="update Centros set Asisitir= Asisitir + 1 where Id='$id'";
		$rsent=mysqli_query($mysqli,$sent);
	}
if ($oper == "interested") {
		$sent="update Centros set Interesado= Interesado + 1 where Id='$id'";
		$rsent=mysqli_query($mysqli,$sent);
	}
?>