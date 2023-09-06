<?php
     include '../../controller/sachController.php';

     if(isset($_GET['masach'])){
        $data = getData($_GET['masach']);
     }

     if(isset($_POST['btnSubmit'])){
        updatePostSach($_POST['idmasach'], $_POST['tensach'], $_POST['tlsach'], $_POST['namxuatban'], $_POST['tacgia']);
     }

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
    <input type="hidden" name="idmasach" value="<?php echo $data->masach;  ?>">
        <div>
            <label for="">Tên sách</label>
            <input type="text" name="tensach" value="<?php echo $data->tensach;  ?>">
    </div>

        <div>
            <label for="">Thể loại sách</label>
            <input type="text" name="tlsach" value="<?php echo $data->tlsach;  ?>">
        </div>
        <div>
            <label for="">Năm xuất bản</label>
            <input type="number" name="namxuatban" value="<?php echo $data->namxuatban;  ?>">
        </div>
        <div>
            <label for="">Tác giả</label>
            <input type="text" name="tacgia" value="<?php echo $data->tacgia; ?>">
        </div>
        <button name="btnSubmit">Cập nhập</button>
    </form>
</body>
</html>