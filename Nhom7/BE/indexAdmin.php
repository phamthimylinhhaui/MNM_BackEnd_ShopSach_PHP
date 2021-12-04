<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Trang chủ admin</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="main-left">
                            <?php 
                            include("config/config.php");
                            include("page/menu.php");
                            ?>
			</div>
			<div class="main-right">
                             <?php 
                               if(isset($_GET['quanly'])){
                                   $tam=$_GET['quanly'];
                               }  else {
                                   $tam='';
                               }
                               
                               switch ($tam){
                                   case 'danhmuc':
                                       include ("page/main/DanhMuc/QLDM.php");
                                       break;
                                   case 'sanpham':
                                       include ("page/main/SanPham/QLSP.php");
                                       break;
                                    case 'donhang':
                                       include ("page/main/DonHang/QLDH.php");
                                       break;
                                    case 'taikhoan':
                                       include ("page/main/TaiKhoan/QLTK.php");
                                       break;
                                    case 'dangnhap':
                                       include ("page/main/DN.php");
                                       break;
                                   default :include ('page/main/index.php');
                               }
                            ?>
			</div>
		</div>
	</div>
</body>
</html>


