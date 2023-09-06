<?php
     include '../../connection.php';

     function createSach($tensach, $tlsach, $namxuatban, $tacgia){
        $conn = connectDB();
        $query = $conn->query("insert into sach(tensach, tlsach, namxuatban, tacgia) values ('$tensach', '$tlsach', '$namxuatban', '$tacgia' )");
        header("location:sachManager.php");

    }

    function getDataAll(){
        $conn = connectDB();
        $query = $conn->query("select * from sach");
        $result = $query->fetchAll();
        return $result;
        }

        function deleteSach($masach){
            $conn = connectDB();
            $query = $conn->query("delete from sach where masach = " .$masach);
            header('location: sachManager.php');
        }


        function updateSach($masach){
            header("location:updateSach.php?masach=$masach");
        }


        function getData($masach){
            $conn = connectDB();
            $query = $conn->query("select * from sach where masach = $masach");
            $result = $query->fetch();
            return $result;
        }


        function updatePostSach($idmasach, $tensach, $tlsach, $namxuatban, $tacgia){
            $conn = connectDB();
            $query = $conn->query("update sach set tensach = '$tensach', tlsach = '$tlsach', namxuatban = '$namxuatban', tacgia = '$tacgia' where masach = $idmasach ");
            header('location:sachManager.php');

        }

?>