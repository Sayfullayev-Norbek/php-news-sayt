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
                                    <th scope="row"><?=$getlink['id']?></th>
                                </tr>
                                <tr>
                                    <th>Link</th>
                                    <th scope="row"><?=$getlink['link']?></th>
                                </tr>
                                <tr>
                                    <th>Icon</th>
                                    <th scope="row"><?=$getlink['icon']?></th>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <th scope="row"><?=$getlink['status']?></th>
                                </tr>
                                </thead>
                            </table>
                            <div class="mt-4">
                                <ol class="breadcrumb float-sm-right">
                                    <a href="?controller=link_index" class="btn btn-warning">Social</a>
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
