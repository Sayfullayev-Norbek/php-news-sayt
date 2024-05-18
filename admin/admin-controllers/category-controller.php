<?php
    if(!empty($_GET)){
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
            $controller = $_GET['controller'];
        } else if (!empty($_GET['controller'])) {
            $controller = $_GET['controller'];
        } else {
            $controller = null;
        }
        switch ($controller) {
            case "category_index":
                $getAllCategories = getAllCategories();
                require_once "views/category/index.php";
            break;
            case "category_read":
                $getCategoryById = getCategoryId($id);
                if (!empty($getCategoryById)) {
                    require_once "views/category/read.php";
                }
            break;
            case "category_update":
                $getCategoryId = getCategoryId($id);
                if (!empty($_POST)) {
                    $title = !empty($_POST['title']) ? $_POST['title'] : "";
                    $status = !empty($_POST['status']) ? $_POST['status'] : "";
                    $getCategoryUpdate = getCategoryUpdate($id, $title,$status);
                    if ($getCategoryUpdate == true){
                        header("Location: ?controller=category_index");
                    }
                }else{
                    require_once "views/category/update.php";
                }
            break;
            case "category_create":
                if(!empty($_POST)){
                    $title = !empty($_POST['title']) ? $_POST['title'] : "";
                    $status = !empty($_POST['status']) ? $_POST['status'] : "";
                    $getCategoryCreate = getCategoryCreate($title,$status);
                    if($getCategoryCreate == true){
                        header("Location: ?controller=category_index");exit();
                    }else{
                        require_once "views/category/create.php";
                    }
                }else{
                    require_once "views/category/create.php";
                }
            break;
        }
    }else{
        require_once 'views/index.php';
    }
?>
