<?php
include_once("function.php");
//  if(isset($_GET["idlt"])){
//     $idlt = $_GET["idlt"];
//  }else{
//     $idlt = 1;
//  }      
$idTL = $_GET["idlt"];

// lấy số trang muốn xem
$p = isset($_GET["p"]) == true ? (int) $_GET["p"] : 1;
// lấy số trang tin muốn hiển thị
$soTrangTin = 5;
// vị trí bắt đầu
$from = ($p - 1) * $soTrangTin;
$kqTin = Get_Tin_Theo_Trang($idTL, $from, $soTrangTin); // hàm này sẽ trả về số trang tin từ $from được giới hạn bằng $soTrangTin muốn hiển thị


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Khoa Pham</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/my.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <?php
    include_once("function.php");
    include_once("nav.php");

    ?>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <?php

            include_once("menu.php"); ?>

            <div class="col-md-9 ">

                <div class="contentAjax panel panel-default">
                    <div class="panel-heading" style="background-color:#337AB7; color:white;">
                        <h4><b>Danh sách tin tức</b></h4>
                    </div>
                    <?php
                    while ($row = mysqli_fetch_assoc($kqTin)) {

                    ?>
                        <div class="row-item row">
                            <div class="col-md-3">

                                <a href="detail.html">
                                    <br>
                                    <img width="200px" height="200px" class="img-responsive" src="img/tintuc/<?php echo $row["Hinh"]; ?>" alt="">
                                </a>
                            </div>

                            <div class="col-md-9">
                                <h3>
                                    <?php echo $row["TieuDe"]; ?>
                                </h3>
                                <p>
                                    <?php echo $row["TomTat"]; ?>
                                </p>
                                <a class="btn btn-primary" href="detail.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>

                            <div class="break"></div>
                        </div>
                    <?php
                    }
                    ?>


                    <!-- Pagination -->
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <ul class="pagination">
                                <?php
                                $disabled = $p ==  1 ? "class='disabled'" : "";
                                ?>
                                <li <?php echo $disabled ?>>
                                    <a href="xulyloaitin.php?idlt=<?php echo $idTL ?>&p=<?php echo 1; ?>">&laquo;</a>
                                </li>
                                <li <?php echo $disabled ?>>
                                    <a id="prev" <?php echo $disabled; ?> href="xulyloaitin.php?idlt=<?php echo $idTL ?>&p=<?php echo $p - 1; ?>">&lsaquo;</a>
                                </li>

                                <!-- <li class="active">
                                    <a href="#">1</a>
                                </li> -->
                                <!-- Vòng lập đầu -->
                                <?php
                                $tongSoTin = mysqli_num_rows(get_Alltin_The_Loaitin($idTL));
                                $tongSoTrang = ceil($tongSoTin / $soTrangTin); /* ceil là hàm làm tròn */
                                $offset = 3; // là một khoảng
                                $tuTrang = max($p - $offset, 1);
                                $denTrang = min($p + $offset, $tongSoTrang);
                                for ($i = $tuTrang; $i <= $denTrang; $i++) {
                                    if ($i == $p) {
                                        $active = "class='active'";
                                    } else {
                                        $active = "";
                                    }

                                ?>
                                    <li <?php echo $active ?>>
                                        <a href="xulyloaitin.php?idlt=<?php echo $idTL; ?>&p=<?php echo $i; ?>">
                                            <?php echo $i; ?>
                                        </a>
                                    </li>
                                    <!-- Vòng lập cuối -->
                                <?php
                                }
                                ?>
                                <?php
                                $disabled = $p == $tongSoTrang ? "class='disabled'" : "";
                                ?>
                                <li <?php echo $disabled ?>>
                                    <a <?php echo $disabled ?> href="xulyloaitin.php?idlt=<?php echo $idTL ?>&p=<?php echo $p + 1 ?>">&rsaquo;</a>
                                </li>
                                <li <?php echo $disabled ?>>
                                    <a href="xulyloaitin.php?idlt=<?php echo $idTL ?>&p=<?php echo $tongSoTrang ?>">&raquo;</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
            </div>

        </div>

    </div>
    <!-- end Page Content -->

    <!-- Footer -->
    <hr>
    <?php

    include_once("footer.php"); ?>
    <!-- end Footer -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/my.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on("click", ".pagination a", function(e) {
                e.preventDefault();

                var url = $(this).attr("href");

                $.get(url, function(data) {
                    $('.contentAjax').html(data);
                });
            });
        });
    </script>
</body>

</html>