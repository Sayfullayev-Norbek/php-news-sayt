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
                <form action="?controller=social_created" method="POST">
                    <div class="form">
                        <div class="col my-4 mx-5">
                            <input type="text" name="link" class="form-control" placeholder="Link (Social)">
                        </div>
                        <div class="col my-4 mx-5">
                            <input type="text" name="icon" class="form-control" placeholder="Icon (class) (Social)">
                        </div>
                        <div class="col my-4 mx-5">
                            <input type="number" name="status" class="form-control" placeholder="Status = 0,1 (Social)">
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
