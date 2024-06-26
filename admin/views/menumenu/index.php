<?php require_once 'views/widgets/header.php';?>
<?php require_once 'views/widgets/aside.php';?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Menu</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v2</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="create-btn d-flex justify-content-end my-4">
                                <a href="?controller=menu_created" class="btn btn-warning">Qo'shish</a>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Parent ID</th>
                                        <th>Position</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($getAllMenus)): ?>
                                        <?php foreach ($getAllMenus as $getAllMenu): ?>
                                        <?php $getMenuById = getMenuById($getAllMenu['id']); ?>
                                            <tr>
                                                <th scope="row">#</th>
                                                <td><?=$getAllMenu["title"]?></td>
                                                <td><?=$getMenuById["parent_id"]?></td>
                                                <td><?=$getAllMenu["position"]?></td>
                                                <td><?=$getAllMenu["status"]?></td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary"><a href="?controller=menu_update&id=<?=$getAllMenu["id"]?>"><i class="fas fa-pen" style="color: white"></i></a></button>
                                                    <button type="submit" class="btn btn-danger"><a href="?controller=menu_delete&id=<?=$getAllMenu["id"]?>"><i class="fas fa-trash" style="color: white"></i></a></button>
                                                    <button type="submit" class="btn btn-info"><a href="?controller=menu_read&id=<?=$getAllMenu['id']?>"><i class="fas fa-eye" style="color: white"></i></a></button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>


<?php require_once 'views/widgets/footer.php';?>
