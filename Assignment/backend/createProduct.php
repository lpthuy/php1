<?php

    require '../controller/controller.php' ;

    $dataCategory = getCategory() ;

    if(isset($_POST['submit'])) {
        $image = '../list-image/' .basename($_FILES['image']['name']) ;
        $file = $_FILES['image']['tmp_name'] ;
        $err = $_FILES['image']['error'] ;

        if($err == 0 && move_uploaded_file($file , $image)) {
            createProduct($_POST['name'] , $image , $_POST['price'] , $_POST['category']) ;
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert dữ liệu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .container {
            width  : 600px ;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="py-3 text-center">Thêm sản phẩm</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="" class="py-2">Name product</label> <br>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="" class="py-2">Price</label> <br>
                <input type="number" name="price" id="price" class="form-control">
            </div>
            <div class="form-group">
                <label for="" class="py-2">Category</label> <br>
                <select name="category" id="" class="form-control">
                    <?php foreach($dataCategory as $key => $value) : ?>
                        <option value="<?php echo $value -> category_id ?>"><?php echo $value -> category_name ?></option>
                    <?php endforeach ; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="" class="py-2">Image</label> <br>
                <input type="file" name="image" id="image"  class="form-control" accept="image/*">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Thêm sản phẩm" class="form-control my-3 btn btn-primary btn-lg">
            </div>

        </form>
    </div>
</body>
</html>