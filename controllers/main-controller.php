<?php
    require_once "models/main-model.php";

    // Header qismidagi mavzular
    $parentMenus = getParentMenus();

    //  Footer ishtimoyi tarmoqlar
    $socialLinks = socialLinks();

    // News bo'limi
    $getAllNews = getAllNews();

    require_once "views/index.php";
