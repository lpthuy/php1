 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <style>
        span {
            color: red;
        }
       
    </style>
</head>
<body>
<?php
           include "connectDB.php";
           $loaisp = getloaisp();
?>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <input type="text" name= "tenSP">
        </div>
        <br>
        <div>
            <input type="number"name= "gia">
        </div>
        <br>
        <div>
            <input type="text" name= "soLuong">
        </div>
        <div>
            <input type="file" name="image">
            
        </div>
        <div>
        <select name ="tenLoai">
        <?php 
            foreach($loaisp as $item){     
        ?>
            <option value="<?php echo $item['idLoai']?>">
            <?php echo $item['tenLoai']?></option>
        <?php } 
        ?>
     </select>
        </div>
        <div>
            <input type="submit" name="submit" value="thêm">
        </div>
    </form>
    <?php
 

include_once 'connectDB.php';
if(isset($_POST['submit']) && $_POST['submit']) {
    $arr = [
        'tenSP' => $_POST['tenSP'],
        'image' => $_FILES['image'],
        'gia' => $_POST['gia'],
        'soLuong' => $_POST['soLuong']
    ];
        $path_file = "./img/".$arr['image']['name'];
        move_uploaded_file($arr['image']['tmp_name'], $path_file);
        setDB($arr['tenSP'],$arr['image']['name'],$arr['gia'], $arr['soLuong']);
        header('location:xuat.php');
}
?>
    

</body>
</html>