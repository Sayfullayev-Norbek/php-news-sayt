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
                                        <th scope="row"><?=$getCategoryById['id']?></th>
                                    </tr>
                                    <tr>
                                        <th>Title</th>
                                        <th scope="row"><?=$getCategoryById['title']?></th>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <th scope="row"><?=$getCategoryById['status']?></th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="mt-4">
                                <ol class="breadcrumb float-sm-right">
                                    <a href="?controller=category_index" class="btn btn-warning">Menu</a>
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
