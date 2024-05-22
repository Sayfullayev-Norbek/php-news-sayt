<?php
    if (!empty($_GET)){
        if (!empty($_GET['id'])) {
            $controller = $_GET['controller'];
            $id = $_GET['id'];
        } else if (!empty($_GET['controller'])) {
            $controller = $_GET['controller'];
        } else {
            $controller = null;
        }
        switch ($controller){
            case "new_index":
                $getNews = getNews();
                if (!empty($getNews)){
                    require_once "views/news/index.php";
                }
            break;
            case "new_read":
                $getNewId = getNewId($id);
                require_once "views/news/read.php";
            break;
            case "new_update":
                $getNewId = getNewId($id);
                if (!empty($_POST)){

                    $title = !empty($_POST['title']) ? $_POST['title'] : '';
                    $description = !empty($_POST['description']) ? $_POST['description'] : '';
                    $body = !empty($_POST['body']) ? $_POST['body'] : '';
                    $category_id = !empty($_POST['category_id']) ? $_POST['category_id'] : '';
                    $status = !empty($_POST['status']) ? $_POST['status'] : '';
                    $getNewUpdate = getNewUpdated($id, $title, $description, $body, $category_id, $status);
                    if($getNewUpdate == true){
                        if (deleteImage('news', $getNewId['id'], $getNewId['image'])){
                            $file = $_FILES['image'];

                            if (!empty($file) && $file['error'] == 0){
                                $fileName = saveImage($id, 'news', $file);

                                if (insertImage($fileName,$id)){
                                    header("Location: ?controller=new_index");exit();
                                }
                            }
                        }
                        header("Location: ?controller=new_index");
                    }
                }else{
                    require_once "views/news/updated.php";
                }
            break;
            case "new_delete":
                $getNewDelete = getNewDelete($id);
                if ($getNewDelete == true){
                    header("Location: ?controller=new_index");
                }
            break;
            case "news_created":
                if (!empty($_POST)){
                    $title = !empty($_POST['title']) ? $_POST['title'] : "";
                    $description = !empty($_POST['description']) ? $_POST['description'] : "";
                    $body = !empty($_POST['body']) ? $_POST['body'] : "";
                    $category_id = !empty($_POST['category_id']) ? $_POST['category_id'] : "";
                    $created_date = !empty($_POST['created_date']) ? $_POST['created_date'] : "";
                    $status = !empty($_POST['status']) ? $_POST['status'] : "";
                    if ($lastId = getNewCreated($title, $description, $body, $created_date, $category_id, $status)){
                        $file = $_FILES['image'];
                        if (!empty($file) && $file['error'] == 0){
                            $fileName = saveImage($lastId, 'news', $file);
                            if (insertImage($fileName,$lastId)){
                                header("Location: ?controller=new_index");exit();
                            }
                        }
                    }
                }
                $categories = getAllCategories();
                require_once 'views/news/created.php';
            break;
        }
    }else{
        require_once "views/index.php";
    }
?>
