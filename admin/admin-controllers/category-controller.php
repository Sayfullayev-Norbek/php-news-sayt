<?php
    if (!empty($_GET)){
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
            $controller = $_GET['controller'];
        } else if (!empty($_GET['controller'])) {
            $controller = $_GET['controller'];
        } else {
            $controller = null;
        }
        switch (!empty($controller)) {
            case "category_index" :
                $getAllCategories = getAllCategories();
                require_once "views/category/index.php";
                break;
        }
    }else{
        require_once 'views/index.php';
    }
?>
