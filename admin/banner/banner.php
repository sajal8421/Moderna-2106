<?php
require_once '../templates/header.php';
?>
<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>All Banners <a href="insert.php" class="btn btn-primary">Add Banner</a> </h2>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>photo</th>
                                <th>title</th>
                                <th>description</th>
                                <th>button text</th>
                                <th>status</th>
                                <th>action</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once '../templates/footer.php';
?>