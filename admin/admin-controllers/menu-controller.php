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
                    require_once 'views/menumenu/index.php';
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

                if (!empty($getMenuById)){
                    require_once 'views/menumenu/updated.php';
                }
                break;
            case "menu_created":
                require_once "views/menumenu/index.php";
                break;
        }
    }else{
        require_once 'views/index.php';
    }
?>
