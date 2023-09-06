<?php

    require '../connect.php' ;

    function getCategory() {
        $conn = connectDB() ;
        $sql = "SELECT * FROM `categorys`" ;
        $query = $conn -> query($sql) ;
        $result = $query -> fetchAll() ;
        return $result ;
    }

    function createProduct($name , $image , $price , $category_id) {
        $conn = connectDB() ;
        $sql = "INSERT INTO `product`(`name` , `image` , `price` , `category_id`) VALUES('$name' , '$image' , '$price' , '$category_id')" ;
        $result = $conn -> query($sql) ;
        header("Location: productManager.php") ;
    }

    function getData() {
        $conn = connectDB() ;
        $sql = "SELECT * FROM `product`" ;
        $query = $conn -> query($sql) ;
        $result = $query -> fetchAll() ;
        return $result ;
    }

    function deleteProduct($id) {
        $conn = connectDB() ;
        $sql = "DELETE FROM `product` WHERE product_id = $id" ;
        $result = $conn -> query($sql) ;
        header("Location: productManager.php") ;
    }

    function headerUpdate($id) {
        header("Location: updateProduct.php?product_id=$id") ;
    }

    function getProductID($id) {
        $conn = connectDB() ;
        $sql = "SELECT * FROM `product` WHERE product_id = $id" ;
        $query = $conn -> query($sql) ;
        $result = $query -> fetch() ;
        return $result ;
    }

    function upDate($id , $name , $image , $price , $category_id) {
        $conn = connectDB() ;
        $sql = "UPDATE `product` SET `name` = '$name' , `image` = '$image' , `price` = '$price' , `category_id` = '$category_id' WHERE product_id = $id" ;
        $result = $conn -> query($sql) ;
        header("Location: productManager.php") ;
    }
    function upDateNoImage($id , $name  , $price , $category_id) {
        $conn = connectDB() ;
        $sql = "UPDATE `product` SET `name` = '$name' , `price` = '$price' , `category_id` = '$category_id' WHERE product_id = $id" ;
        $result = $conn -> query($sql) ;
        header("Location: productManager.php") ;
    }



    // fontend 

    function getDataDiscount() {
        $conn = connectDB() ;
        $sql = "SELECT * FROM `product` WHERE category_id = 6" ;
        $query = $conn -> query($sql) ;
        $result = $query -> fetchAll() ;
        return $result ;
    }

    function getDataLaptop() {
        $conn = connectDB() ;
        $sql = "SELECT * FROM `product` WHERE category_id = 2" ;
        $query = $conn -> query($sql) ;
        $result = $query -> fetchAll() ;
        return $result ;
    }

    function getDataPhone() {
        $conn = connectDB() ;
        $sql = "SELECT * FROM `product` WHERE category_id = 1" ;
        $query = $conn -> query($sql) ;
        $result = $query -> fetchAll() ;
        return $result ;
    }
    function getDataTablet() {
        $conn = connectDB() ;
        $sql = "SELECT * FROM `product` WHERE category_id = 5" ;
        $query = $conn -> query($sql) ;
        $result = $query -> fetchAll() ;
        return $result ;
    }
    function getDataEarphone() {
        $conn = connectDB() ;
        $sql = "SELECT * FROM `product` WHERE category_id = 3" ;
        $query = $conn -> query($sql) ;
        $result = $query -> fetchAll() ;
        return $result ;
    }
    function getDataDocument_acount() {
        $conn = connectDB() ;
        $sql = "SELECT * FROM `product` WHERE category_id = 4" ;
        $query = $conn -> query($sql) ;
        $result = $query -> fetchAll() ;
        return $result ;
    }


    // Xử lí người dùng

    function userSignup($username , $email , $password) {
        $conn = connectDB() ;
        $sql = "INSERT INTO `user` (`username` , `email` , `password`) VALUES('$username' , '$email' , '$password')" ;
        $result = $conn -> query($sql) ;
    }

    // Đăng nhập 

    function userLogin() {
        $conn = connectDB() ;
        $sql = "SELECT * FROM `user`" ;
        $query = $conn -> query($sql) ;
        $result = $query -> fetchAll() ;
        return $result ;
    }
     // Xử lí sản phẩm

    function headerProduct($id) {
        header("Location: buyProduct.php?product_id=$id") ;
    }

    
    
?>