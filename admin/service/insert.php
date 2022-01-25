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
                        <h2>Add Service <a href="index.php" class="btn btn-primary">All Servcies</a> </h2>
                    </div>
                    <div class="card-body">
                        <form action="service_post.php" method="POST">
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
                                <select name="box_color" class="form-control">
                                    <option value="icon-box-pink">Pink</option>
                                    <option value="icon-box-cyan">Cyan</option>
                                    <option value="icon-box-green">Green</option>
                                    <option value="icon-box-blue">Blue</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Icon Name" name="icon_class">
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