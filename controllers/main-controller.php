<?php
    require_once "models/main-model.php";
    // News View
    if (!empty($_GET)){
        $controller = $_GET['controller'];
        $id = $_GET['id'];
        switch ($controller){
            case "news_view":
                $model = getNewsById($id);
                require_once 'views/view.php';
            break;
        }
    }else{
        // Header qismidagi mavzular
        $parentMenus = getParentMenus();

        //  Footer ishtimoyi tarmoqlar
        $socialLinks = socialLinks();

        // News bo'limi
        $getAllNews = getAllNews();

        require_once "views/index.php";
    }
