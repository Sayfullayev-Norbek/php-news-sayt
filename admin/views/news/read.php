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
                                        <th scope="row"><?=$getNewId['id']?></th>
                                    </tr>
                                    <tr>
                                        <th>Title</th>
                                        <th scope="row"><?=$getNewId['title']?></th>
                                    </tr>
                                    <tr>
                                        <th>Decription</th>
                                        <th scope="row"><?=$getNewId['description']?></th>
                                    </tr>
                                    <tr>
                                        <th>Body</th>
                                        <th scope="row"><?=$getNewId['body']?></th>
                                    </tr>
                                    <tr>
                                        <th>Seen Count</th>
                                        <th scope="row"><?=$getNewId['seen_count']?></th>
                                    </tr>
                                    <tr>
                                        <th>Category ID</th>
                                        <th scope="row"><?=$getNewId['category_id']?></th>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                        <th scope="row"><?=$getNewId['image']?></th>
                                    </tr>
                                    <tr>
                                        <th>Sataus</th>
                                        <th scope="row"><?=$getNewId['status']?></th>
                                    </tr>
                                    <tr>
                                        <th>Created </th>
                                        <th scope="row"><?=$getNewId['created_date']?></th>
                                    </tr>
                                    <tr>
                                        <th>Updated</th>
                                        <th scope="row"><?=$getNewId['update_date']?></th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="mt-4">
                                <ol class="breadcrumb float-sm-right">
                                    <a href="?controller=new_index" class="btn btn-warning">Menu</a>
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
