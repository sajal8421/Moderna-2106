<?php 
  require_once 'admin/db.php';
$query = "SELECT * FROM why_us";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result )> 0 ){
    $data = mysqli_fetch_assoc($result);
}
?>

<!-- ======= Why Us Section ======= -->
<section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 video-box">
                <img src="uploads/whyus/<?=$data['banner']?>" class="img-fluid" alt="">
                <a href="<?=$data['video_url']?>" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true" target="_blank"></a>
            </div>

            <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                <div class="icon-box">
                    <div class="icon"><i class="bx <?=$data['icon_one']?>"></i></div>
                    <h4 class="title"><a href=""><?=$data['title_one']?></a></h4>
                    <p class="description"><?=$data['description_one']?></p>
                </div>

                

            </div>
        </div>

    </div>
</section><!-- End Why Us Section -->