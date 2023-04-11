<div class="container">

    <!-- slider -->
    <div class="row carousel-holder">
        <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <!-- Dau vong lap -->
                    <?php
                    $s1 = get_slides();
                    while ($row = mysqli_fetch_assoc($s1)) {
                        $active = "";
                        if ($row["id"] == 1) {
                            $active = "active";
                        }
                    ?>
                        <div class="item <?php echo $active; ?>">
                            <img class="slide-image" src="hinhanh/slide/<?php echo $row["Hinh"]; ?>" alt="">
                        </div>
                    <?php
                    }
                    ?>
                    <!-- Cuoi vong lap -->
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
    <!-- end slide -->

    <div class="space20"></div>


    <div class="row main-left">
        <?php include_once("menu.php"); ?>

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#337AB7; color:white;">
                    <h2 style="margin-top:0px; margin-bottom:0px;"> Tin Tức</h2>
                </div>

                <div class="panel-body">
                    <!-- item -->
                    <!-- Dau vong lap -->
                    <?php
                    $kq = get_All_Theloai();
                    while ($row = mysqli_fetch_assoc($kq)) {
                        $kq1 = get_loaitin_The_Theloai($row["id"]);
                        if (mysqli_num_rows($kq1) > 0) {

                    ?>
                            <div class="row-item row">
                                <h3>
                                    <a href="#"><?php echo $row["Ten"]; ?></a>
                                    <!-- Dau vong lap 2-->
                                    <?php
                                    while ($row2 = mysqli_fetch_assoc($kq1)) {
                                    ?>
                                        <small><a href="loaitin.php?idlt=<?php echo $row2["id"]; ?>"><i><?php echo $row2["Ten"]; ?></i></a>/</small>
                                        <!-- Cuoi vong lap 2-->
                                    <?php
                                    }
                                    ?>
                                </h3>
                                <?php
                                $kq2 = get_Tinnoibat_The_Theloai($row["id"]);
                                $tt = mysqli_fetch_assoc($kq2);
                                ?>
                                <div class="col-md-12 border-right">
                                    <div class="col-md-3">
                                        <a href="chitiet.php?id=<?php echo $tt["id"] ?>">
                                            <img class="img-responsive" src="hinhanh/tintuc/<?php echo $tt["Hinh"]; ?>" alt="">
                                        </a>
                                    </div>

                                    <div class="col-md-9">
                                        <h3><?php echo $tt["TieuDe"]; ?></h3>
                                        <p><?php echo $tt["TomTat"]; ?></p>
                                        <a class="btn btn-primary" href="chitiet.php?id=<?php echo $tt["id"] ?>">Xem them <span class="glyphicon glyphicon-chevron-right"></span></a>
                                    </div>

                                </div>

                                <div class="break"></div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                    <!-- Cuoi vong lap -->
                    <!-- end item -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>