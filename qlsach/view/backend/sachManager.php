<?php
     include '../../controller/sachController.php';

     $data = getDataAll();

     if(isset($_GET['masachDelete'])){
        deleteSach($_GET['masachDelete']);
    }

    if(isset($_GET['masachUpdate'])){
        updateSach($_GET['masachUpdate']);
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
    <!-- <a href="createSach.php">Thêm mới</a> -->
    <table border="1">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên sách</th>
                <th>Thể loại sách</th>
                <th>Năm xuất bản</th>
                <th>Tác giả</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $key => $value): ?>
                <tr>
                    <td><?php echo $key +1; ?></td>
                    <td><?php echo $value-> tensach; ?></td>
                    <td><?php echo $value-> tlsach == "1"? "Sách tham khảo" : "Sách giáo trình"; ?>
                    <td><?php echo $value-> namxuatban; ?></td>
                    <td><?php echo $value-> tacgia; ?></td>
                    <td>
                        <a href="sachManager.php?masachUpdate=<?php echo $value->masach; ?>">Sửa</a>
                        <a href="sachManager.php?masachDelete=<?php echo $value->masach; ?>">Xóa</a>
                    </td>
                </tr>
                <tr>
            <?php endforeach; ?>
            <td>
                    <a href="createSach.php">Thêm mới</a>
                    </td>
                </tr>
        </tbody>
    </table>
</body>
</html>