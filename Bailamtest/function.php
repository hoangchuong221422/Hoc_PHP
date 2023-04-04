<?php
    //Xay dung cac ham thao tac tren csdl
    //1.Ham ket noi csdl
    function connect(){
        $log = mysqli_connect("localhost","root","","tintuc_c21th2");//tintuc_c21th2
        return $log;
    }
    function disconnect($conn){
        mysqli_close($conn);
    }
    //
    function get_slides(){
        $conn=connect();
        $sql="SELECT * FROM slide";
        $kq=mysqli_query($conn,$sql);
        return $kq;
    }
    //Ham truy xuat the loai
    function get_All_Theloai(){
        $conn=connect();
        $sql="SELECT * FROM theloai";
        $kq=mysqli_query($conn,$sql);
        return $kq;
    }
    //Ham truy xuat loai tinh theo the loai
    function get_loaitin_The_Theloai($idTL){
        $conn=connect();
        $sql="SELECT * FROM loaitin WHERE idTheLoai=$idTL";
        $kq=mysqli_query($conn,$sql);
        return $kq;
    }
    //Ham truy van tinnoi bat nhat theo the loai truyen vao trong(Tra ve ket qua chi la mot dong du lieu)
    function get_Tinnoibat_The_Theloai($idTL){
        $conn=connect();
        $sql="SELECT tintuc.* FROM loaitin INNER JOIN tintuc ON loaitin.id=tintuc.idLoaiTin WHERE loaitin.idTheLoai=$idTL AND NoiBat=1 LIMIT 0,1";
        $kq=mysqli_query($conn,$sql);
        return $kq;
    }
    function get_Alltin_The_Loaitin($idTL){
        $conn=connect();
        $sql="SELECT * FROM tintuc WHERE idLoaiTin = $idTL";
        $kq=mysqli_query($conn,$sql);
        return $kq;
    }
?>