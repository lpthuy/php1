<?php

    require '../controller/controller.php' ;

    $getData = getData() ;

    if(isset($_GET['idDelete'])) {
        deleteProduct($_GET['idDelete']) ;
    }
    if(isset($_GET['idUpdate'])) {
        headerUpdate($_GET['idUpdate']) ;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lí sản phẩm</title>
    <style>
        h2 {
            text-align: center;
            margin-top: 20px;
        }
        table {
            border-collapse: collapse;
            width : 1200px ;
            margin: 30px auto;
        }
        td {
            text-align: center;
        }
        td a {
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <h2>Quản lí sản phẩm</h2>
    <table border="1">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Ảnh</th>
                <th>Giá</th>
                <th>Loại sản phẩm</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($getData as $key => $value) : ?>
                <tr>
                    <td><?php echo $value -> product_id ?></td>
                    <td><?php echo $value -> name ?></td>
                    <td><?php $image = $value -> image ; echo "<img src='$image' width='100px' height='auto'>" ?></td>
                    <td><?php echo $value -> price ?></td>
                    <td><?php echo $value -> category_id ?></td>
                    <td>
                        <a href="productManager.php?idUpdate=<?php echo $value -> product_id ?>">Sửa</a>
                        <a href="productManager.php?idDelete=<?php echo $value -> product_id ?>">Xóa</a>
                    </td>
                </tr>
            <?php endforeach ; ?>
            <tr>
                <td colspan="6"><a href="createProduct.php">Thêm sản phẩm mới</a></td>
            </tr>
            <tr>
                <td colspan="6"><a href="../fontend/home.php">Trang chủ</a></td>
            </tr>
        </tbody>
        
    </table>

</body>
</html>