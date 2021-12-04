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


<h2>Quản lý sản phẩm</h2>
<?php
//include '../../config/config.php';
if (isset($_POST['Them'])) {
    if (empty($_POST['SanPham']) || empty($_POST['MaDM']) || empty($_POST['Gia']) || empty($_POST['SoLuong'])) {
        echo "<h3 style='color:red;text-align:center;'>KHÔNG ĐƯỢC BỎ TRỐNG</h3>";
    } else {
        $name = $_POST['SanPham'];
        $MaDM = $_POST['MaDM'];
        $Gia = $_POST['Gia'];
        $SL = $_POST['SoLuong'];
        $query1 = "INSERT INTO sanpham(TenSP,MaDM,Gia,SoLuong)value('$name',$MaDM,$Gia,$SL)";
        mysqli_query($conn, $query1);
    }
}
?>





<form method="POST" action="#">
    <div class="tendm">Tên sản phẩm</div>
    <input type="textbox" placeholder="Nhập tên sản phẩm" name="SanPham"><br>
    <div class="tendm">Mã danh mục</div>
    <input type="textbox" placeholder="Nhập mã danh mục" name="MaDM"><br>
    <div class="tendm">Giá</div>
    <input type="textbox" placeholder="Nhập giá" name="Gia"><br>
    <div class="tendm">Số lượng</div>
    <input type="textbox" placeholder="Nhập số lượng" name="SoLuong"><br>
    <br>
    <input type="submit" name="Them" value="Thêm sản phẩm">
</form>

<div class="container2">
    <?php
    $sql_tk = 'select * from sanpham order by MaSP asc';
    $query_tk = mysqli_query($conn, $sql_tk);
    ?>
    <div class="row">    
        <div class="col1"><b>Mã sản phẩm</b></div>
        <div class="col1"><b>Tên sản phẩm</b></div>
        <div class="col1"><b>Mã danh mục</b></div>
        <div class="col1"><b>Giá</b></div>
        <div class="col1"><b>Số Lượng còn</b></div>
        <div class="col1"><b>Quản lý</b></div>

    </div>


    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_tk)) {
        ?>
        <div class="row">    
            <div class="col1"><?php echo $row['MaSP'] ?></div>
            <div class="col1"><?php echo $row['TenSP'] ?></div>
            <div class="col1"><?php echo $row['MaDM'] ?></div>
            <div class="col1"><?php echo $row['Gia'] ?></div>
            <div class="col1"><?php echo $row['SoLuong'] ?></div>
            <div class="col1"><a href="SuaDM.html">Sửa</a> / <a href="#" onclick="alert('bạn có chắc chắn muốn xóa không?');">Xóa</a></div>
        </div>
        <?php
    }
    ?>

</div>