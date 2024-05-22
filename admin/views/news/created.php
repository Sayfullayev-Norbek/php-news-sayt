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
            <form action="?controller=news_created" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <label for="" class="w-100"> Title
                                    <input type="text" name="title" class="form-control" required>
                                </label>
                                <label for="" class="w-100"> Description
                                    <input type="text" name="description" class="form-control">
                                </label>
                                <label for="" class="w-100"> Body
                                    <textarea cols="30" rows="10" name="body" class="form-control"></textarea>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <label for="image" class="w-100"> Image
                                    <?php  $image = getImage('news',0 ,'image.png') ?>
                                    <img src="<?=$image?>" alt="Image" style="width: 250px; object-fit: cover; cursor: pointer; border-radius: 10px">
                                    <input style="display: none" type="file" name="image" class="form-control upload" id="image">
                                </label>
                                <label for="" class="w-100"> Created Date
                                    <input type="datetime-local" name="created_date" class="form-control">
                                </label>
                                <label for="" class="w-100"> Pasition
                                    <select name="category_id" class="form-control">
                                        <?php if(!empty($categories)): ?>
                                            <?php foreach ($categories as $category): ?>
                                                <option value="<?=$category['id']?>"><?=$category['title']?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </label>
                                <label for="" class="w-100">Status
                                    <select name="status" class="form-control">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary my-4 mx-5">Yuborish</button>
                </div>
            </form>
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>


<?php require_once 'views/widgets/footer.php';?>
