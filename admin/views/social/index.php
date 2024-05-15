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
                                <a href="?controller=social_created" class="btn btn-warning">Qo'shish</a>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Link</th>
                                    <th>Icon</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php if(!empty($getAllLinks)): ?>
                                    <?php foreach ($getAllLinks as $getAllLink): ?>
                                        <tr>
                                            <th scope="row">#</th>
                                            <td class="col-7"><?=$getAllLink["link"]?></td>
                                            <td><?=$getAllLink["icon"]?></td>
                                            <td>
                                                <button type="submit" class="btn btn-primary"><a href="?controller=link_update&id=<?=$getAllLink["id"]?>"><i class="fas fa-pen" style="color: white"></i></a></button>
                                                <button type="submit" class="btn btn-danger"><a href="?controller=link_delete&id=<?=$getAllLink["id"]?>"><i class="fas fa-trash" style="color: white"></i></a></button>
                                                <button type="submit" class="btn btn-info"><a href="?controller=link_read&id=<?=$getAllLink['id']?>"><i class="fas fa-eye" style="color: white"></i></a></button>
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
