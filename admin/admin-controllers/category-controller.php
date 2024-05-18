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
        }
    }else{
        require_once 'views/index.php';
    }
?>
