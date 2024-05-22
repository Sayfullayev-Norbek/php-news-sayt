<?php
    require_once "models/main-model.php";
    // News Viewga o'tishda tag orqali chiqarish
    if (!empty($_GET)){
        $controller = $_GET['controller'];
        $id = $_GET['id'];
        switch ($controller){
            case "news_view":
                $update = update_seen_count($id);
                if ($update){
                    $model = getNewsById($id);
                    require_once 'views/view.php';
                }
            break;
            case "view_category":
                $models = getCategoryBy($id);
                require_once 'views/widgets/tag.php';
            break;
        }
    }else{
        // Header qismidagi mavzular
        $parentMenus = getParentMenus();

        // Menudagilarni tag qilamiz
        $getAllTags = getAllMenus();

        //  Footer ishtimoyi tarmoqlar
        $socialLinks = socialLinks();

        // News bo'limi
        $getAllNews = getAllNews();

        require_once "views/index.php";
    }
