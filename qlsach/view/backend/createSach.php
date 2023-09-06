<?php
     include '../../controller/sachController.php';

     if(isset($_POST['btnSubmit'])){
        createSach($_POST['tensach'],  $_POST['tlsach'], $_POST['namxuatban'], $_POST['tacgia']);
     } //gửi sang sachController
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <label for="">Tên sách</label>
            <input type="text" name="tensach">
        </div>
        <!-- <div>
            <label for="">Mã sách</label>
            <input type="text" name="masach">
        </div> -->

        <div>
            <label for="">Thể loại sách</label>
            <input type="number" name="tlsach">
            <!-- <select name="tlsach">
                <option>Sách tham khảo</option>
                <option>Sách giáo trình</option>
            </select> -->
        </div>
        <!-- <div>
            <label for="">Thể loại sách</label>
            <input type="text" name="tlsach">
        </div> -->
        <div>
            <label for="">Năm xuất bản</label>
            <input type="text" name="namxuatban">
        </div>
        <div>
            <label for="">Tác giả</label>
            <input type="text" name="tacgia">
        </div>
        <button name="btnSubmit">Tạo mới</button>
    </form>
</body>
</html>