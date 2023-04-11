<?php
include_once("function.php");
//  if(isset($_GET["idlt"])){
//     $idlt = $_GET["idlt"];
//  }else{
//     $idlt = 1;
//  }      
$idtt = $_GET["id"];

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

            <!-- Blog Post Content Column -->
            <div class="col-lg-9">

                <!-- Blog Post -->

                <!-- Title -->


                <!--  Code ở đầu -->
                <?php $tintuc = Get_Mot_Tin($idtt);
                $kqtt = mysqli_fetch_assoc($tintuc)


                ?>
                <h1><?php echo  $kqtt["TieuDe"] ?></h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#">Khắc Việt</a>
                </p>

                <!-- Preview Image -->
                <img width="300" height="200" class="img-responsive" src="img/tintuc/<?php echo $kqtt["Hinh"]; ?>" alt="">

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span>August 24, 2013 at 9:00 PM</p>
                <hr>

                <!-- Post Content -->
                <p class="lead"><?php echo  $kqtt["NoiDung"] ?></p>


                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Gửi</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->
                <?php
                $binhluan = Get_BinhLuan_TheoTin($kqtt["id"]);
                while ($row2 = mysqli_fetch_assoc($binhluan)) {


                ?>
                    <!-- Comment -->
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="http://placehold.it/64x64" alt="">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"><?php echo $row2["name"] ?>
                                <small>August 25, 2014 at 9:30 PM</small>
                            </h4>
                            <?php echo $row2["NoiDung"] ?>
                        </div>
                    </div>

                    <!-- Comment -->
                <?php
                }


                ?>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3">

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Tin liên quan</b></div>
                    <?php
                    $TinLienQuan = Get_Cac_Tin_LienQuan($kqtt["idLoaiTin"]);
                    while ($row = mysqli_fetch_assoc($TinLienQuan)) {


                    ?>
                        <div class="panel-body">

                            <!-- item -->
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-md-5">
                                    <a href="detail.html">
                                        <img class="img-responsive" src="img/tintuc/<?php echo $row["Hinh"] ?>" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7">
                                    <a href="#"><b><?php echo $row["TieuDe"] ?></b></a>
                                </div>
                                <p><?php echo $row["TomTat"] ?></p>
                                <div class="break"></div>
                            </div>
                            <!-- end item -->
                        </div>
                    <?php

                    }
                    ?>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Tin nổi bật</b></div>
                    <?php
                    $TinLienQuanNoiBat = Get_Cac_Tin_NoiBat($kqtt["idLoaiTin"]);
                    while ($row = mysqli_fetch_assoc($TinLienQuanNoiBat)) {


                    ?>
                        <div class="panel-body">

                            <!-- item -->
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-md-5">
                                    <a href="detail.html">
                                        <img class="img-responsive" src="img/tintuc/<?php echo $row["Hinh"] ?>" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7">
                                    <a href="#"><b><?php echo $row["TieuDe"] ?></b></a>
                                </div>
                                <p><?php echo $row["TomTat"] ?></p>
                                <div class="break"></div>
                            </div>
                            <!-- end item -->
                        </div>
                    <?php
                    }
                    ?>
                </div>

            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->

    <!-- Footer -->
    <?php

    include_once("footer.php"); ?>
    <!-- end Footer -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/my.js"></script>

</body>

</html>