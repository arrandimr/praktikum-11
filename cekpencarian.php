<?php 
if($_POST['nisn']=="123456789" && $_POST['nama'] ="admin"){
	header("location:reportdatapraktikum10.php");
} else {
	include "tampil.php";
	
}
?>