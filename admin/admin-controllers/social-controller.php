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
            case "link_delete":
                $getlinkDelete = getSocialDelete($id);
                if ($getlinkDelete == true){
                    header("Location:?controller=link_index");exit();
                }
                break;
            case "link_update":
                $getlinkUpdate = getSocial($id);
                if (!empty($_POST)){
                    $link = !empty($_POST['link']) ? $_POST["link"] : "";
                    $icon = !empty($_POST['icon']) ? $_POST["icon"] : "";
                    $status = !empty($_POST['status']) ? $_POST["status"] : "";
                    $SocialUpdate = socialUpdate($id, $link, $icon, $status);
                    if ($SocialUpdate == true){
                        header("Location:?controller=link_index");exit();
                    }
                }else{
                    require_once "views/social/updated.php";
                }
                break;
            case "social_created":
                if (!empty($_POST)){
                    $link = !empty($_POST['link']) ? $_POST["link"] : "";
                    $icon = !empty($_POST['icon']) ? $_POST["icon"] : "";
                    $status = $_POST["status"];
                    $SocialCreated = socialCreated($link, $icon, $status);
                    if ($SocialCreated == true){
                        header("Location:?controller=link_index");exit();
                    }
                }else{
                    require_once "views/social/created.php";
                }
                break;

            default : require_once 'views/404.php'; break;
        }
    }else{
        require_once "views/index.php";
    }
?>
