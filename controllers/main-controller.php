<?php
    require_once "models/main-model.php";
    // News Viewga o'tishda tag orqali chiqarish
    if (!empty($_GET)){

        if (isset($_GET['controller']) && !empty($_GET['controller'])) {
            $controller = $_GET['controller'];
        } else if (isset($_GET['url']) && !empty($_GET['url'])) {
            $controller = $_GET['url'];
        } else {
            $controller = null;
        }
        $id = $_GET['id'];
        switch ($controller){
            case "news_view":
                $model = getNewsById($id);
                require_once 'views/view.php';
            break;
            case "view_id":
                $model = getNewsById($id);
                require_once 'views/view.php';
            break;
            case "view_category":
                $models = getCategoryBy($id);
                require_once 'views/widgets/tag.php';
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
