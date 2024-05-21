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
        switch ($controller){
            // Menu CRUD
            case "menu_index":
                $getAllMenus = getAllMenus();
                if (!empty($getAllMenus)){
                    require_once 'views/menumenu/index.php';
                }
                break;
            case "menu_delete":
                $getMenuDelete = getMenuDelete($id);
                if ($getMenuDelete == true) {
                    header("Location: ?controller=menu_index");
                }
                break;
            case "menu_read":
                $getMenuById = getMenuById($id);
                if (!empty($getMenuById)){
                    require_once 'views/menumenu/read.php';
                }
                break;
            case "menu_update":
                $getMenuById = getMenuById($id);
                if (!empty($_POST)){
                    $title = !empty($_POST['title']) ? $_POST['title'] : "";
                    $parent_id = !empty($_POST['parent_id']) ? $_POST['parent_id'] : "";
                    $order_by = !empty($_POST['order_by']) ? $_POST['order_by'] : "";
                    $position = !empty($_POST['position']) ? $_POST['position'] : "";
                    $status = !empty($_POST['status']) ? $_POST['status'] : "";
                    $getMenuUpdate = getMenuUpdate($id, $title, $parent_id, $order_by, $position, $status);
                    if ($getMenuUpdate == true){
                        header("Location: ?controller=menu_index");
                    }
                }else{
                    require_once 'views/menumenu/update.php';
                }
                break;
            case "menu_created":
                if(!empty($_POST)){
                    $title = !empty($_POST['title']) ? $_POST['title'] : "";
                    $parent_id = $_POST['parent_id'];
                    $order_by = !empty($_POST['order_by']) ? $_POST['order_by'] : "";
                    $position = !empty($_POST['position']) ? $_POST['position'] : "";
                    $status = !empty($_POST['status']) ? $_POST['status'] : "";
                    $getMenuCreated = getMenuCreated($title,$parent_id,$order_by,$position,$status);
                    if($getMenuCreated == true){
                        header("Location: ?controller=menu_index");exit();
                    }else{
                        header("Location: ?controller=menu_created");
                    }
                }
                $getMenuById = getAllMenus();
                require_once "views/menumenu/created.php";
                break;
        }
    }else{
        require_once 'views/index.php';
    }
?>
