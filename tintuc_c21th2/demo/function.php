<?php
function Connect()
{
    return mysqli_connect("localhost", "root", "", "tintuc_c21th2");
}

function Disconnect($conn)
{
    mysqli_close($conn);
}

function Get_Slides()
{
    $conn = Connect();
    $sql = "SELECT * FROM slide";
    $kq = mysqli_query($conn, $sql);
    return $kq;
}

// 3. hàm truy vấn danh sách các thể loại trong CSDL
function Get_TheoLoai()
{
    $conn = Connect();
    $sql = "SELECT * FROM theloai";
    $kq = mysqli_query($conn, $sql);
    return $kq;
}

// 4. hàm truy vắn các loại tin theo thể loại truyền vào
function GetLoaiTin_Theo_TheLoai($idTL)
{
    $conn = Connect();
    $sql = "SELECT * FROM loaitin WHERE idTheLoai = $idTL";
    $kq = mysqli_query($conn, $sql);
    return $kq;
}

function Get_Tin_Noi_Bat_TheoTL($idLoaiTin){
    $conn = Connect();
    $sql = "SELECT tintuc.*
    FROM loaitin INNER JOIN tintuc ON loaitin.id = tintuc.idLoaiTin
    WHERE loaitin.idTheLoai = $idLoaiTin AND NoiBat=1
    LIMIT 0,1";
    $kq = mysqli_query($conn, $sql);
    return $kq;
}