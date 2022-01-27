<?php
session_start();
require_once '../templates/header.php';

require_once '../db.php';

$query = "SELECT * FROM why_us";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result )> 0 ){
    $data = mysqli_fetch_assoc($result);
}
?>
<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Why Us</h2>
                    </div>
                    <div class="card-body">
                        <form action="update.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Icon One" name="icon_one" value="<?=$data['icon_one']?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Title One" name="title_one" value="<?=$data['title_one']?>">
                            </div>
                            <div class="form-group">
                                <textarea name="description_one" placeholder="Description One" class="form-control"><?=$data['description_one']?></textarea>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Icon two" name="icon_two" value="<?=$data['icon_two']?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Title One" name="title_two" value="<?=$data['title_two']?>">
                            </div>
                            <div class="form-group">
                                <textarea name="description_two" placeholder="Description Two" class="form-control"><?=$data['description_two']?></textarea>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Video Url" name="video_url" value="<?=$data['video_url']?>">
                            </div>

                            <div class="form-group">
                                <input type="file" id="upload_img" class="form-control" name="banner">
                                <img width="150" id="show_img" src="../../uploads/whyus/<?=$data['banner']?>" alt="">
                            </div>
                            
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-primary"  name="submit" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once '../templates/footer.php';
session_unset();
?>

<script>
    let link = document.getElementById('upload_img').value;
    let showTarget = document.getElementById('show_img');

    console.log(link);
</script>