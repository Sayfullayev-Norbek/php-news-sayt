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
                <form action="admin-controllers/admin-controller.php" method="GET">
                    <div class="form">
                        <div class="col my-4 mx-5">
                            <input type="text" name="title" value="<?=$getMenuById['title']?>" class="form-control" placeholder="Title (Menu)">
                        </div>
                        <div class="col my-4 mx-5">
                            <input type="number" name="parent_id" value="<?=$getMenuById['parent_id']?>" class="form-control" placeholder="Parent ID (Menu)">
                        </div>
                        <div class="col my-4 mx-5">
                            <input type="number" name="order_by" value="<?=$getMenuById['order_by']?>" class="form-control" placeholder="Order_by (Menu)">
                        </div>
                        <div class="col my-4 mx-5">
                            <input type="number" name="position" value="<?=$getMenuById['position']?>" class="form-control" placeholder="Position (Menu)">
                        </div>
                        <div class="col my-4 mx-5">
                            <input type="number" name="status" value="<?=$getMenuById['status']?>"  class="form-control" placeholder="Status (Menu)">
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
