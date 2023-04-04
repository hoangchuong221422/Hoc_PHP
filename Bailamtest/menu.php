<div class="col-md-3 ">
        <ul class="list-group" id="menu">
            <li href="#" class="list-group-item menu1 active">
                Danh mục
            </li>
            <!--dau vong lap-->
            <?php
                    $kq=get_All_Theloai();
                    while($row=mysqli_fetch_assoc($kq)){
                        $kq1=get_loaitin_The_Theloai($row["id"]);
                        if(mysqli_num_rows($kq1)>0){

                ?>
            <li href="#" class="list-group-item menu1">
                <?php echo $row["Ten"]; ?>
            </li>
            <ul>
                <!--Dau vong lap 2-->
                <?php
                while($row2=mysqli_fetch_assoc($kq1)){
                ?>
                <li class="list-group-item">
                    <a href="loaitin.php?idlt=<?php echo $row2["id"];?>"><?php echo $row2["Ten"]; ?></a>
                </li>
                <?php
                }
                ?>
                <!--Cuoi vong lap 2-->
            </ul>
            <?php
                    }    }
            ?>
            <!--Cuoi vong lap-->
        </ul>
    </div>