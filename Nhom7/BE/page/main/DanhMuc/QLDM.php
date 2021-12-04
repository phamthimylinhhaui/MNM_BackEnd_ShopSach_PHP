
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
<h2>Quản lý danh mục</h2>
<?php 
//isset phần tử nào có trong mảng thì trả về true
//emty: phần tử nào bằng rỗng tv true
if (isset($_POST['themDM'])) {//kiểm tra xem người dùng có bấm nút submit hay k nếu isset= true thì ng dùng có bấm
    if (empty($_POST['name'])) {
        echo "<h3 style='color:red;text-align:center;'>KHÔNG ĐƯỢC BỎ TRỐNG</h3>";
    } else {
        $name = $_POST['name'];
        $query = "insert into danhmuc (TenDM) value ('$name')";
        mysqli_query($conn, $query);
    }
}
?>
<form method="POST" action="#">
    <div class="tendm">Tên danh mục</div>
    <input type="textbox" placeholder="Nhập tên danh mục" name="name"><br>
    <br>
    <input type="submit" name="themDM" value="Thêm danh mục">
</form>





<!--page/main/DanhMuc/ThemDM.php
<button><a href="">Thêm danh mục</a></button>
-->
<?php
        $sql_dm = 'select * from danhmuc order by MaDM asc';
        $query_dm= mysqli_query($conn, $sql_dm);
    ?>
<!--page/main/DanhMuc/ThemDM.php
<button><a href="">Thêm danh mục</a></button>
-->
<div class="container2">
    <div class="row">
        <div class="col1"><b>Mã</b></div>
        <div class="col1"><b>Tên danh mục</b></div>
        <div class="col1"><b>Quản lý</b></div>
    </div>
    
    <?php
    
    while($row = mysqli_fetch_array($query_dm))
    {
    ?>
    <div class="row">
        <div class="col1"><?php echo $row['MaDM'] ?></div>
        <div class="col1"><?php echo $row['TenDM'] ?></div>
        <div class="col1"><a href="SuaDM.html">Sửa</a> / <a href="#" onclick="alert('bạn có chắc chắn muốn xóa không?');">Xóa</a></div>
    </div>
    <?php
    }
    ?>
</div>