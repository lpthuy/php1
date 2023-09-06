<?php
    session_start();//validate khi sử dụng session
    //kiểm tra xem người dung có ấn thêm hay ko 
    if(isset($_POST['btnSave'])){
        //validate file ảnh
        
        // $_FILES['name'];
         // tra về 1 mang
        print_r($_FILES['image']);
       //[name]=> anh.jpg(đường dẫn đến máy của người dùng)
       //[type]=> image/jpeg( định dạng)
       //[tpm_name]=> F:\xampp\tpm...9đường dẫn tạm
       //[error]=> 0(lỗi)
       //[size]=>12011(kích thước)(byte)
        //kiểm tra xem người dùng có nhập file ảnh k
        $fileUpload = $_FILES['image'];
        if(empty($fileUpload['name'])){
            $_SESSION['error']['empty']="Bạn không dducoocj bỏ trống file này";//session lưu lỗi
        }
        
        //ktra xem quas trinhf tải file anh lên có lỗi hay không
        if($fileUpload['error']!=0){
            $_SESSION['error']['errorFile']="quá trình tải file đã bị lỗi";
        }

        //ktra xem file có đúng định dạng ko 
        //khai báo 1 mảng chứa tất cả các định dạng file mà chúng ta cho phép
        $allowType=['jpg','png','jpeg','gif'];

        //kiểm tra file anhe có chiểu dài chiều rộng ảnh có phù hợp hay không
        //kiểm tra dung lượng của file có trong mức cho phép ko
        echo $_SESSION['error']['errorFile'];
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Validate Ảnh</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="add-form">
    <h2>Validate & Upload file ảnh đơn</h2>
    <h1></h1>
    <form action="" method="post" enctype="multipart/form-data">  <!--enctype="multipart/form-data" dùng để gửi file-->
        <div class="form-group">
            <label for="image">Ảnh:</label>
            <input type="file" id="image" name="image" accept="image/*">
            <span>*Thông báo lỗi</span>
            <h4>Thông báo thành công</h4>
        </div>
        <button class="submit-button" name="btnSave" type="submit">Thêm</button>
    </form>
</div>
</body>
</html>