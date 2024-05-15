<?php require_once __DIR__ . "/../../models/main-model.php"; ?>
<?php require_once __DIR__ . "/../../functions.php"; ?>
<?php require_once __DIR__ . "/../../config.php"; ?>
<?php
    if(!empty($_GET)){
        $controller = $_GET['controller'];
        $id = $_GET['id'];
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
                $getMenuUpdateId = getMenuUpdateId($id);
                require_once 'views/menumenu/update';
            break;
            case "created":
                require_once "views/menumenu/index.php";
            break;
        }
    }else{
        require_once 'admin/views/index.php';
    }
?>





