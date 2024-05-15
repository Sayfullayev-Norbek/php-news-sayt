
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
                require_once "views/news/update.php";
                break;
            case "new_delete":
                $getNewDelete = getNewDelete($id);
                if ($getNewDelete == true){
                    require_once "views/news/index.php";
                }
                break;
            case "created":
                require_once "views/news/created.php";
                break;
        }
    }else{
        require_once "views/index.php";
    }
?>
