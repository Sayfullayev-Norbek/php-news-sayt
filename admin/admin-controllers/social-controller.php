<?php
    if (!empty($_GET)){
        if (!empty($_GET['id'])){
            $id = $_GET['id'];
            $controller = $_GET['controller'];
        }else if (!empty($_GET['controller'])){
            $controller = $_GET['controller'];
        }else{
            $controller = null;
        }

        switch ($controller){
            case "link_index":
                $getAllLinks = getAllSocial();
                require_once "views/social/index.php";
                break;
            case "link_read":
                $getlink = getSocial($id);
                require_once "views/social/read.php";
                break;
        }
    }else{
        require_once "views/index.php";
    }
?>
