<?php
session_start();
require_once '../templates/header.php';


require_once '../db.php';

$query = "SELECT * FROM services";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result )> 0 ){
    $datas = mysqli_fetch_all($result , 1);
}


?>
<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                if(isset($_SESSION['success'])){
                ?>
                <div class="alert alert-success" role="alert">
                      <h4 class="alert-heading"></h4>
                      <p><?=$_SESSION['success']?></p>
                    </div>
                <?php
                }
                    
                ?>
                <div class="card">
                    <div class="card-header">
                        <h2>All Services <a href="insert.php" class="btn btn-primary">Add Service</a> </h2>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>title</th>
                                <th>description</th>
                                <th>status</th>
                                <th>action</th>
                            </tr>

                            <?php 
                                foreach( $datas as $data){
                            ?>
                                <tr>
                                    <td><?=  $data['id']?></td>
                                    <td><?=  $data['title']?></td>
                                    <td><?= substr($data['designation'], 0, 50).'...' ?></td>
                                    <td><?=  $data['status']?></td>
                                    <td>
                                        <a href="#">active/deactive</a>
                                        <a href="#">View</a>
                                        <a href="#">Edit</a>
                                        <a href="#">delete</a>
                                    </td>
                                </tr>
                            <?php        
                                }
                            ?>
                        </table>
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