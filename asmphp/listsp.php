<?php
include_once 'connectDB.php';
if (isset($_GET['xoa'])) {
    $idSP = $_GET['xoa'];
    delete($idSP);
    header('location:listsp.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <style> 
    table, tr, th, td {
        border: 1px solid #333;
        border-collapse:collapse ;
        text-align: center;
        padding: 5px 20px;
    }
</style>
</head>
<body>
    <table>
        <thead>
            <tr>
           
                <td>STT</td>
                <td>Tên sản phẩm</td>
                <td>Ảnh sản phẩm</td>
                <td>Giá bán</td>
                <td>Số lượng</td>
                <td>tenLoai</td>
                <td>update</td>
                <td>delete</td>
                
            </tr>
        </thead>
        <tbody>



            <?php 
            $arr = getDB();
            
            var_dump($arr);
            foreach($arr as $values): 
            ?>
        <tr>
            
                
                <td><?php echo $values['idSP'] ?></td>
                <td><?php echo $values['tenSP'] ?></td>
                <td><img width="80px" src="./img/<?php echo $values['image']  ?>" alt=""></td>
                <td><?php echo $values['gia'] ?></td>
                <td><?php echo $values['soLuong'] ?></td>
                <td><?php echo $values['tenLoai'] ?></td>
                <td><a href="update.php?sua=<?php echo $values['idSP'] ?>">update</a></td>
                <td><a onclick="return confirm('Bạn chắc chắn muốn xoá sản phẩm này không?')" href="?xoa=<?php echo $values['idSP'] ?>">delete</a></td>
             
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <button><a href="addproduct.php">Thêm sản phẩm</a></button>
</body>
</html>