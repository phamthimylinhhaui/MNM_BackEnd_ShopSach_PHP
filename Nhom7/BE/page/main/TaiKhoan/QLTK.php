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


<h2>Quản lý tài khoản</h2>

<?php
if (isset($_POST['add'])) {
    if (empty($_POST['accname']) || empty($_POST['password']) || empty($_POST['role'])  ) {
        echo "<h3 style='color:red;text-align:center;'>KHÔNG ĐƯỢC BỎ TRỐNG</h3>";
    }  else {
       $accname= $_POST['accname'];
       $password= $_POST['password'];
       $role= $_POST['role'];
       $phone= $_POST['phone'];
       $query="INSERT INTO TaiKhoan(TenTK,MatKhau,Quyen,SoDT)value('".$accname."','".$password."',".$role.",'".$phone."')";
       mysqli_query($conn, $query);
    }
}
?>

<form method="POST" action="#">
    <div class="tendm">Tên tài khoản</div>
    <input type="textbox" placeholder="Nhập tên tài khoản" name="accname"><br>
     <div class="tendm">Mật khẩu</div>
    <input type="textbox" placeholder="Nhập mật khẩu" name="password"><br>
     <div class="tendm">Quyền quản trị</div>
    <input type="textbox" placeholder="Nhập quyền quản trị" name="role"><br>
     <div class="tendm">Số điện thoại</div>
    <input type="textbox" placeholder="Nhập số điện thoại" name="phone"><br>
    <br>
    <input type="submit" name="add" value="Thêm tài khoản">
</form>


<div class="container2">
    <?php
    $sql_tk = 'select * from TaiKhoan order by MaTK asc';
    $query_tk = mysqli_query($conn, $sql_tk);
    ?>
    <div class="row">
        <div class="col1"><b>Mã</b></div>
        <div class="col1"><b>Tên tài khoản</b></div>
        <div class="col1"><b>Mật Khẩu</b></div>
        <div class="col1"><b>Quyền</b></div>
        <div class="col1"><b>Số điện thoại</b></div>
        <div class="col1"><b>Quản lý</b></div>
    </div>

    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_tk)) {
        ?>
        <div class="row">    
            <div class="col1"><?php echo $row['MaTK'] ?></div>
            <div class="col1"><?php echo $row['TenTK'] ?></div>
            <div class="col1"><?php echo $row['MatKhau'] ?></div>
            <div class="col1"><?php echo $row['Quyen'] ?></div>
            <div class="col1"><?php echo $row['SoDT'] ?></div>
            <div class="col1"><a href="SuaDM.html">Sửa</a> / <a href="#" onclick="alert('bạn có chắc chắn muốn xóa không?');">Xóa</a></div>
        </div>
        <?php
    }
    ?>
</div>    
<!--    <div class="row">
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
