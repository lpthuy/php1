<?php
     function connectDB(){
        $conn = new PDO("mysql:hostname=localhost;port=3306;dbname=qlsach",'root',"");
		$conn->exec("set names utf8");
		$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
		return $conn;
    }
?>