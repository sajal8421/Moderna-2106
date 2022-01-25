<?php 

require_once 'admin/db.php';

$query = "SELECT * FROM services ORDER BY id DESC LIMIT 4";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result )> 0 ){
    $datas = mysqli_fetch_all($result , 1);
}
?>

<!-- ======= Services Section ======= -->
<section class="services">
    <div class="container">

        <div class="row">

        <?php
            foreach($datas as $data){
        ?>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                <div class="icon-box <?=$data['box_color']?>">
                    <div class="icon"><i class="bx <?=$data['icon_class']?>"></i></div>
                    <h4 class="title"><a href=""><?=$data['title']?></a></h4>
                    <p class="description"><?=$data['designation']?></p>
                </div>
            </div>
        <?php
            }
        ?>
            
        </div>

    </div>
</section><!-- End Services Section -->