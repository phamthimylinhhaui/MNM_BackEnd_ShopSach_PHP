<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="css/styleFE.css">
	<title>Đăng nhập</title>
</head>
<body>

	<div class="container">
		<!-- header -->
		<div class="header">
			<div class="row">
				<div class="logo"><a href="TrangChu.html" style="color:#F15B67">Vascara</a></div>
				<div class="search">
					<input type="textbox" placeholder="Nhập sản phẩm tìm kiếm" name="">
					<a href="ChiTietSP.html"><i class="fa fa-search"></i></a>
				</div>
				<div class="login">
					<i class="fa fa-user"></i>
					<span>Đăng nhập</span>
				</div>
				<div class="oder">
					<i class="fa fa-shopping-cart"></i>
					<span><a href="GioHang.html">Giỏ hàng</a></span>
				</div>
			</div>
		</div>
		<!-- end header -->

		<!-- menu -->
		<div class="menu">
			<ul>
				<li><a href="#">Sách giáo khoa</a></li>
				<li><a href="#">Truyện tranh</a></li>
				<li><a href="#">Sách Tham khảo</a></li>
				<li><a href="#">Sách cuộc sống</a></li>
				<li><a href="#">Chuyện ngôn tình</a></li>
				<li><a href="#">English Book</a></li>
			</ul>
		</div>
		<!-- end menu -->

		

		<!-- main -->
		<div class="main">
                    <form id="DN-form" action="#" method="POST">
				<div class="logo" id="logodangnhap">Vascara</div>
				<p>Chào mừng bạn đã đến với VASCARA</p>
				<p>Vui lòng nhập đúng thông tin để bắt đầu đăng nhập</p>
                                <?php
                                require_once('../BE/config/config.php');
                                if (isset($_POST['dangnhap'])) {
                                    if (empty($_POST['user']) || empty($_POST['pass'])) {
                                        echo "<h3 style='color:red;text-align:center;'>KHÔNG ĐƯỢC BỎ TRỐNG</h3>";
                                    } else if (strlen($_POST['user'])>2) {
                                        echo "<h3 style='color:red;text-align:center;'>tên đăng nhập phải có ít nhất 3 ký tự</h3>";
                                    } else{
                                        $user = $_POST['user'];
                                        $pass = $_POST['pass'];
                                        $query11 = "select Quyen form TaiKhoan where TenTK LIKE '$user' AND MatKhau LIKE '$user'";
                                        $quyen = mysqli_query($conn, $query11);
                                    }
                                }
//                                        $user = 'linh';
//                                        $pass = 'aaa';
//                                        $sql = "select Quyen form TaiKhoan where TenTK='Nhom7admin@gmail.com' ";
//                                        $quyen = mysqli_query($conn, $sql);
//                                         $tv=mysql_fetch_array($quyen);
//                                        echo "quyen=";
//                                        var_dump($tv);
                                ?>
                                
                                
                                
				<input type="textbox" name="user" placeholder="Nhập tên tài khoản">
				<br>
				<input type="password" name="pass" placeholder="Nhập mật khẩu">
				<br>
                                <button id="btnDN" type="submit" name="dangnhap"><a href="TrangChu.html" onclick="alert('đăng nhập thành công')">Đăng nhập</a></button>

				<p>Bạn chưa có tài khoản?<a href="DangKy.html"> Đăng ký</a></p>
                                <p><a href="../BE/indexAdmin.php" onclick="alert('đăng nhập với quyền admin thành công')">Đăng nhập với quyền admin?</a></p>
			</form>
			
		

			<!-- main-bottom -->
			<div class="main-bottom">
				<div class="col1">
					<div class="row">
						<div class="icon"><i class="fas fa-truck"></i></div>
						<div class="chinhsach">
							<h4>Miễn phí vận chuyển</h4>
							<p>Ưu đãi giao hàng tận nhà miễn phí</p>
						</div>
					</div>
				</div>
				<div class="col1">
					<div class="row">
						<div class="icon"><i class="fas fa-headset"></i></div>
						<div class="chinhsach">
							<h4>Hỗ trợ trực tuyến</h4>
							<p>Hỗ trợ trực tuyến 24/7</p>
						</div>
					</div>
				</div>
				<div class="col1">
					<div class="row">
						<div class="icon"><i class="fa fa-medal"></i></div>
						<div class="chinhsach">
							<h4>Bảo đảm chất lượng</h4>
							<p>Sản phẩm bảo đảm chất lượng</p>
						</div>
					</div>
				</div>
			</div>
			<!-- end main-bottom -->
		</div>
		<!-- end main -->

		<!-- footer -->
		<div class="footer">
			<div class="row">
				<div class="col2">
					<div class="logo1">Vascara</div>
					<h5>Vascara | Thương hiệu mang lại niềm vui và tri thức cho bạn mỗi ngày</h5>
				</div>
				<div class="col2">
					<h3>Danh mục sản phẩm</h3>
						<li><a href="#" id="a">Sách giáo khoa</a></li>
                                                <li><a href="#" id="a">Truyện tranh</a></li>
                                                <li><a href="#" id="a">Sách Tham khảo</a></li>
                                                <li><a href="#" id="a">Sách cuộc sống</a></li>
                                                <li><a href="#" id="a">Chuyện ngôn tình</a></li>
                                                <li><a href="#" id="a">English Book</a></li>
				</div>
				<div class="col2">
					<h3>Liên hệ</h3>
					<p><i class="fa fa-map-marker-alt"></i> Số 298 Đ. Cầu Diễn, Minh Khai, Bắc Từ Liêm, Hà Nội</p>
					<p><i class="fa fa-globe-asia"></i> vascara.com.vn</p>
					<p><i class="fa fa-phone-square"></i> 038.464.0190</p>
				</div>
			</div>
			<div class="madeby">&copy; 2021 Vascara made by Phạm Thị Mỹ Linh</div>
		</div>
		<!-- end footer -->
	</div>
</body>
</html>
