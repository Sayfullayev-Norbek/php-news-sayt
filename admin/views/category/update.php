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
                <form action="?controller=category_update&id=<?=$getCategoryId['id']?>" method="POST">
                    <div class="form">
                        <div class="col my-4 mx-5">
                            <input type="text" name="title" value="<?=$getCategoryId['title']?>" class="form-control" placeholder="Title (Menu)">
                        </div>
                        <div class="col my-4 mx-5">
                            <input type="number" name="status" value="<?=$getCategoryId['status']?>"  class="form-control" placeholder="Status (Menu)">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary my-4 mx-5">Yangilash</button>
                </form>

            </div>
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>


<?php require_once 'views/widgets/footer.php';?>
