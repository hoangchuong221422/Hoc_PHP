<?php
//Xay dung cac ham thao tac tren csdl
//1.Ham ket noi csdl
function connect()
{
    $log = mysqli_connect("localhost", "root", "", "tintuc_c21th2"); //tintuc_c21th2
    return $log;
}
function disconnect($conn)
{
    mysqli_close($conn);
}
//
function get_slides()
{
    $conn = connect();
    $sql = "SELECT * FROM slide";
    $kq = mysqli_query($conn, $sql);
    return $kq;
}
//Ham truy xuat the loai
function get_All_Theloai()
{
    $conn = connect();
    $sql = "SELECT * FROM theloai";
    $kq = mysqli_query($conn, $sql);
    return $kq;
}
//Ham truy xuat loai tinh theo the loai
function get_loaitin_The_Theloai($idTL)
{
    $conn = connect();
    $sql = "SELECT * FROM loaitin WHERE idTheLoai=$idTL";
    $kq = mysqli_query($conn, $sql);
    return $kq;
}
//Ham truy van tinnoi bat nhat theo the loai truyen vao trong(Tra ve ket qua chi la mot dong du lieu)
function get_Tinnoibat_The_Theloai($idTL)
{
    $conn = connect();
    $sql = "SELECT tintuc.* FROM loaitin INNER JOIN tintuc ON loaitin.id=tintuc.idLoaiTin WHERE loaitin.idTheLoai=$idTL AND NoiBat=1 LIMIT 0,1";
    $kq = mysqli_query($conn, $sql);
    return $kq;
}
function get_Alltin_The_Loaitin($idTL)
{
    $conn = connect();
    $sql = "SELECT * FROM tintuc WHERE idLoaiTin = $idTL";
    $kq = mysqli_query($conn, $sql);
    return $kq;
}


function Get_Tin_Theo_Trang($idLT, $from, $soTrangTin)
{
    $conn = connect();
    $sql = "SELECT * FROM tintuc WHERE idLoaiTin = $idLT LIMIT $from,$soTrangTin";
    $kq = mysqli_query($conn, $sql);  
    return $kq;
}

function Get_Mot_Tin($idtt){
    $conn = connect();
    $sql = "SELECT * FROM tintuc WHERE id = $idtt";
    $kq = mysqli_query($conn, $sql);  
    return $kq;
}

function Get_Cac_Tin_LienQuan($idlt){
    $conn = connect();
    $sql = "SELECT * FROM tintuc WHERE idLoaiTin = $idlt  LIMIT 0,4";
    $kq = mysqli_query($conn, $sql);  
    return $kq;
}

function Get_Cac_Tin_NoiBat($idlt){
    $conn = connect();
    $sql = "SELECT * FROM tintuc WHERE idloaitin=$idlt AND NoiBat=1 LIMIT 0,4";
    $kq = mysqli_query($conn, $sql);  
    return $kq;
}

function Get_BinhLuan_TheoTin($idTinTuc){
    $conn = connect();
    $sql = "SELECT *  FROM comment INNER JOIN users ON users.id=comment.idUser where comment.idTinTuc = $idTinTuc";
    $kq = mysqli_query($conn, $sql);  
    return $kq;
}