<h2>Xin chào Admin</h2>
<?php
//nhúng file kết nối csdl

$sql_tk = 'select count(*) from TaiKhoan';
$query_tk = mysqli_query($conn, $sql_tk);
$row_tk = mysqli_fetch_array($query_tk);
$tk_user = $row_tk[0];

$sql_sp = 'select count(*) from SanPham';
$query_sp = mysqli_query($conn, $sql_sp);
$row_sp = mysqli_fetch_array($query_sp);
$tk_sp = $row_sp[0];

$sql_dh = 'select sum(sotien) from DonHang';
$query_dh = mysqli_query($conn, $sql_dh);
$row_dh = mysqli_fetch_array($query_dh);
$tk_dh = $row_dh[0];
?>
<div class="row">
    <div class="col">
        <i class="fa fa-user-friends"></i>
        <div class="total-user">
            <p>
                <?php echo $tk_user; ?>
            </p>
            <p>Người dùng</p>
        </div>
    </div>
    <div class="col">
        <i class="fa fa-store"></i>
        <div class="total-user">
            <p>
                <?php echo $tk_sp; ?>
            </p>
            <p>Sản phẩm</p>
        </div>
    </div>
    <div class="col">
        <i class="fa fa-coins"></i>
        <div class="total-user">
            <p><?php echo number_format($tk_dh); ?>
                </p>
            <p>Doanh thu</p>
        </div>
    </div>
</div>