<?php 

include("config.php");

$id=$_GET['id'];


$result = mysqli_query($mysqli, "DELETE FROM produk WHERE id=$id");

echo "<script>alert('Hapus maklumat berjaya');"."window.location='test.php'</script>";
 ?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

