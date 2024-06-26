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
                <form action="?controller=new_update&id=<?=$getNewId['id']?>" method="POST" enctype="multipart/form-data">
                    <div class="form">
                        <div class="col my-4 mx-5">
                            <input type="text" name="title" value="<?=$getNewId['title']?>" class="form-control" placeholder="Title (News)">
                        </div>
                        <div class="col my-4 mx-5">
                            <input type="text" name="description" value="<?=$getNewId['description']?>" class="form-control" placeholder="Description (News)">
                        </div>
                        <div class="col my-4 mx-5">
                            <input type="text" name="body" value="<?=$getNewId['body']?>" class="form-control" placeholder="Body (News)">
                        </div>
                        <div class="col my-4 mx-5">
                            <input type="number" name="category_id" value="<?=$getNewId['category_id']?>" class="form-control" placeholder="Category ID (News)">
                        </div>
                        <label for="image" class="w-100">Rasm
                            <?php  $image = getImageUpdate('news', $getNewId['id'], $getNewId['image']) ?>
                            <img src="<?=$image?>" alt="Image" style="width: 250px; object-fit: cover; cursor: pointer; border-radius: 10px">
                            <input style="display: none" type="file" name="image" class="form-control upload" id="image">
                        </label>
                        <div class="col my-4 mx-5">
                            <input type="number" name="status" value="<?=$getNewId['status']?>"  class="form-control" placeholder="Status (News)">
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
