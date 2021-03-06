<?php
session_start();
require_once '../templates/header.php';
?>
<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Add Banners <a href="banner.php" class="btn btn-primary">All Banner</a> </h2>
                    </div>
                    <div class="card-body">
                        <form action="banner_post.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Title" name="title">
                                <?php 
                                    if(isset($_SESSION['titleerr'])){
                                ?>
                                <p class="text-danger"><?= $_SESSION['titleerr'] ?></p>
                                <?php
                                    }
                                ?>
                            </div>
                            <div class="form-group">
                                <textarea name="description" placeholder="Description" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Button text" name="btn_text">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Button Url" name="btn_url">
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control"  name="photo">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-primary"  name="submit" value="Submit">
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