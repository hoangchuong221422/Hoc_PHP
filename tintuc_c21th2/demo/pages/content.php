 <!-- Page Content -->
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
                     <?php
                        $sl =  Get_Slides();
                        while ($row = mysqli_fetch_assoc($sl)) {
                            $active = "";
                            if ($row["id"] == 1) {
                                $active = "active";
                            }
                        ?>

                         <div class="item <?php echo $active ?>">
                             <img class="slide-image" src="img/slide/<?php echo $row["Hinh"]; ?>" alt="">
                         </div>
                     <?php
                        }
                        ?>

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
         <div class="col-md-3 ">
             <ul class="list-group" id="menu">
                 <li href="#" class="list-group-item menu1 active">
                     Menu
                 </li>

                 <?php
                    $kq = Get_TheoLoai();
                    while ($row = mysqli_fetch_assoc( $kq)) {
                        $kq1 = GetLoaiTin_Theo_TheLoai($row["id"]);
                        if(mysqli_num_rows($kq1) > 0){

                        
                    ?>

                     <li href="#" class="list-group-item menu1">
                         <?php echo $row["Ten"]; ?>
                     </li>
                     <ul>
                         <!-- code đầu -->
                         <?php
                         while($row2 = mysqli_fetch_assoc($kq1)){
                        

                        ?>                            
                         <li class="list-group-item">
                             <a href="loaitin.html"><?php echo $row2["Ten"]?></a>
                         </li>
                        <?php
                          }
                        ?>
                         <!-- code cuối -->
                     </ul>
                     <!-- code đầu  -->

                 <?php
                   } }
                    ?>


         </div>

         <div class="col-md-9">
             <div class="panel panel-default">
                 <div class="panel-heading" style="background-color:#337AB7; color:white;">
                     <h2 style="margin-top:0px; margin-bottom:0px;"> Tin Tức</h2>
                 </div>

                 <div class="panel-body">
                     <!-- item -->
                     <?php
                    $kq = Get_TheoLoai();
                    while ($row = mysqli_fetch_assoc($kq)) {
                        $kq1 = GetLoaiTin_Theo_TheLoai($row["id"]);
                        if(mysqli_num_rows($kq1) > 0){                          
                        
                    ?>
                     <div class="row-item row">
                         <h3>
                             <a href="#"><?php echo $row["Ten"]  ?></a> |
                             <?php
                                 while($row2 = mysqli_fetch_assoc($kq1)){
                             ?>
                             <small><a href="loaitin.html"><i><?php echo $row2["Ten"] ?></i></a>/</small>

                             <?php
                                  }
                             ?>
                         </h3>                                    
                         <?php
                            $row3 = Get_Tin_Noi_Bat_TheoTL($row["id"]);
                            $kq2 = mysqli_fetch_assoc($row3);


                            ?>
                         <div class="col-md-12 border-right">
                             <div class="col-md-3">
                                 <a href="chitiet.html">                                
                                     <img class="img-responsive" src="img/tintuc/<?php echo $kq2["Hinh"] ?>">
                                 </a>
                             </div>

                             <div class="col-md-9">
                                 <h3>Project Five</h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
                                 <a class="btn btn-primary" href="chitiet.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                             </div>

                         </div>
       

                         <div class="break"></div>
                     </div>
                     <?php
                        }}
                     ?>
                     <!-- end item -->
                     <!-- item -->


                 </div>
             </div>
         </div>
     </div>
     <!-- /.row -->
 </div>
 <!-- end Page Content -->