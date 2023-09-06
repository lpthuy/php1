<?php
$idSP = $_GET['sua'];
include_once 'connectDB.php';
$conect = connectDB();
$query = "select * from sanpham where idSP='$idSP'";
$stmt = $conect->prepare($query);
$stmt->execute();
$set = $stmt->fetch();

if (isset($_POST['submit']) && $_POST['submit']) {
   
    $arr = [
        'tenSP' => $_POST['tenSP'],
        'gia' => $_POST['gia'],
        'soLuong' => $_POST['soLuong'],
        'tenLoai' => $_POST['tenLoai']
        
    ];
    if ($_FILES['image']['name'] == "" || $_FILES['image']['name'] == null) {
        $arr['image']['name'] = $sp['image'];
    } else {
        $arr['image'] = $_FILES['image'];
        $path_file = "./img/" . $arr['image']['name'];
        move_uploaded_file($arr['image']['tmp_name'], $path_file);
    }
    update($idSP, $arr['tenSP'],$arr['image']['name'], $arr['gia'], $arr['soLuong'], $arr[' tenLoai']);
    header('location:listsp.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin sản phẩm</title>
</head>

<body>
    <h1>Sửa thông tin sản phẩm</h1>
    <?php
           
           $loaisp = getloaisp();
?>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
        <input type="text" name="tenSP" value="<?php echo  $set['tenSP'];?>">
        </div>
        <div>
            <input type="file" name="image">

        </div>
        <div>
            <input type="text" name="gia" value="<?php echo  $set['gia'];?>">
        </div>
        <div>
        <input type="text" name="soLuong" value="<?php echo  $set['soLuong'];?>">
        </div>
        <div>

        <select name ="tenLoai">
        <?php 
            foreach($loaisp as $item){     
        ?>
            <option value="<?php echo $item['idLoai']?>">
            <?php echo $item['tenLoai']?></option>
            <?php echo $item['idLoai']?> 
        <?php } 
        ?>
     </select>
        </div>
        <div>
            <input type="submit" value="Update" name="submit">
        </div>
    </form>
</body>

</html>