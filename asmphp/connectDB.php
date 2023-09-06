
<?php
function connectDB(){
$severname = "localhost";
$username = "root";
$passwork = "";
    $conm = NEW PDO("mysql:host = $severname; dbname=sanpham;charset=utf8",$username, $passwork );
return $conm;
}
function getDB() {
    $conect = connectDB();
    $query = "select * from sanpham inner join loaisp on sanpham.idLoai = loaisp.idLoai";
    $stmt = $conect->prepare($query);
    $stmt->execute();   
    $user = $stmt->fetchAll();
    return $user;
}
function setDB($tenSP, $image, $gia, $soLuong) {
    $tenLoai = $_POST['tenLoai'];
    $conect = connectDB();
    $query = "insert into sanpham (tenSP,image,gia,soLuong,idLoai) values('$tenSP','$image', '$gia', '$soLuong','$tenLoai')";
    $stmt = $conect->prepare($query);
    $stmt->execute();  
}

function delete($idSP)
{
    $conect = connectDB();
    $query = "delete from sanpham where idSP='$idSP'";
    $stmt = $conect->prepare($query);
    $stmt->execute();
}
function update($idSP, $tenSP, $image, $gia, $soLuong)
{
    $tenLoai = $_POST['tenLoai'];
    $conect = connectDB();
    $query = "update sanpham set tenSP='$tenSP', image='$image', gia='$gia',soLuong='$soLuong', idLoai = '$tenLoai' where idSP='$idSP'";
    $stmt = $conect->prepare($query);
    $stmt->execute();
    header('location: xuat.php');
}

function getloaisp(){
    $conect = connectDB();
    $query = "select * from loaisp";
    $stmt = $conect->prepare($query);
    $stmt->execute();   
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $user = $stmt->fetchAll();
    return $user;
}
?>
