
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
        }
    }else{
        require_once "views/index.php";
    }
?>
