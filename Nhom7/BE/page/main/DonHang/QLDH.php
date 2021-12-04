<style>
    form {
        margin-left:  5%;
        margin-bottom:  5%;
        margin-top:   0;
    }
    input[type="submit"] {
        color: white;
        background-color: #F15B67;
        padding: 4px;
    }
</style>
<h2>Quản lý đơn hàng</h2>
<?php
if (isset($_POST['add'])) {
    if (empty($_POST['clientname']) || empty($_POST['total']) || empty($_POST['status'])  ) {
        echo "<h3 style='color:red;text-align:center;'>KHÔNG ĐƯỢC BỎ TRỐNG</h3>";
    }  else {
       $name= $_POST['clientname'];
       $total= $_POST['total'];
       $status= $_POST['status'];
       $query="INSERT INTO DonHang(TenKH,SoTien,TrangThai)value('".$name."',".$total.",'".$status."')";
       mysqli_query($conn, $query);
    }
}
?>

<form method="POST" action="#">
    <div class="tendm">Tên khách hàng</div>
    <input type="textbox" placeholder="Nhập tên tài khoản" name="clientname"><br>
     <div class="tendm">Tổng tiền</div>
    <input type="textbox" placeholder="Nhập mật khẩu" name="total"><br>
     <div class="tendm">Trạng thái</div>
    <input type="textbox" placeholder="Nhập quyền quản trị" name="status"><br>
    <br>
    <input type="submit" name="add" value="Thêm đơn hàng">
</form>
<?php 
$sql_lk_DonHang="select * from DonHang order by maDH asc";
$query_lk_DonHang=  mysqli_query($conn, $sql_lk_DonHang);
?>

<div class="container2">
    <div class="row">
        <div class="col1"><b>Mã đơn hàng</b></div>
        <div class="col1"><b>Tên khách hàng</b></div>
        <div class="col1"><b>Số tiền</b></div>
        <div class="col1"><b>Trạng thái</b></div>
        <div class="col1"><b>Quản lý</b></div>
    </div>
    <?php 
    $i=0;
    while ($row=  mysqli_fetch_array($query_lk_DonHang)){
       // $i++;
    ?>

    <div class="row">
        <div class="col1"><?php echo $row['MaDH'] ?></div>
        <div class="col1"><?php echo $row['TenKH'] ?></div>
        <div class="col1"><?php echo number_format($row['SoTien']) ?></div>
        <div class="col1"><?php echo $row['TrangThai'] ?></div>
        <div class="col1"><a href="SuaDM.html">Sửa</a> / <a href="#" onclick="alert('bạn có chắc chắn muốn xóa không?');">Xóa</a></div>
    </div>
    
    <?php
    }
    ?>
<!--    <div class="row">
        <div class="col1">1</div>
        <div class="col1">Sách giáo khoa</div>
        <div class="col1">10/19/2021 10:35:42 PM</div>
        <div class="col1"><a href="SuaDM.html">Sửa</a> / <a href="#" onclick="alert('bạn có chắc chắn muốn xóa không?');">Xóa</a></div>
    </div>
    <div class="row">
        <div class="col1">2</div>
        <div class="col1">Sách Tiếng anh</div>
        <div class="col1">10/19/2021 10:35:42 PM</div>
        <div class="col1"><a href="SuaDM.html">Sửa</a> / <a href="#" onclick="alert('bạn có chắc chắn muốn xóa không?')">Xóa</a></div>
    </div>
    <div class="row">
        <div class="col1">3</div>
        <div class="col1">Truyện ngôn tình</div>
        <div class="col1">10/19/2021 10:35:42 PM</div>
        <div class="col1"><a href="SuaDM.html">Sửa</a> / <a href="#" onclick="alert('bạn có chắc chắn muốn xóa không?')">Xóa</a></div>
    </div>-->
</div>