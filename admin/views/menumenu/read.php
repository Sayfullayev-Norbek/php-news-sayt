<?php require_once 'views/widgets/header.php';?>
<?php require_once 'views/widgets/aside.php';?>

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th scope="row"><?=$getMenuById['id']?></th>
                                    </tr>
                                    <tr>
                                        <th>Title</th>
                                        <th scope="row"><?=$getMenuById['title']?></th>
                                    </tr>
                                    <tr>
                                        <th>Parent ID</th>
                                        <th scope="row"><?=$getMenuById['parent_id']?></th>
                                    </tr>
                                    <tr>
                                        <th>Order By</th>
                                        <th scope="row"><?=$getMenuById['order_by']?></th>
                                    </tr>
                                    <tr>
                                        <th>Position</th>
                                        <th scope="row"><?=$getMenuById['position']?></th>
                                    </tr>
                                    <tr>
                                        <th>Sataus</th>
                                        <th scope="row"><?=$getMenuById['status']?></th>
                                    </tr>
                                    <tr>
                                        <th>Created </th>
                                        <th scope="row"><?=$getMenuById['created_at']?></th>
                                    </tr>
                                    <tr>
                                        <th>Updated</th>
                                        <th scope="row"><?=$getMenuById['updated_at']?></th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="mt-4">
                                <ol class="breadcrumb float-sm-right">
                                    <a href="?controller=menu_index" class="btn btn-warning">Menu</a>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>


<?php require_once 'views/widgets/footer.php';?>
