<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from xushnudbek.uz/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Dec 2021 10:56:50 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Xushnudbek.uz | Faqat haqiqatni, barcha haqiqatni, haqiqatdan o‘zga hech narsani</title>

    <meta name="csrf-param" content="_csrf-frontend">
    <meta name="csrf-token" content="Crsk8XHJrbu1n3AA5JJepBJTtDTDL9z-zyvlIt1g5gwz8EmwH6_J19jLO2qn4mjyfDHAGYdXuKyuQZx2vw7TPg==">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="assets/static/css/main.chunk.css" rel="stylesheet"></head>
<body>

    <div id="root">
        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <a class="header__logo" href="/">
                       <div class="header__logo-img"><img src="/assetsfront/img/inhtml/logo.png" alt=""></div>
                       <span>Xushnudbek.uz</span>
                    </a>
                    <nav class="header__nav">
                        <ul class="header__nav-list">
                            <?php if(!empty($parentMenus)): ?>
                                <?php foreach ($parentMenus as $parentMenu): ?>
                                    <a href="#">
                                        <?php
                                            $childMenus = getChildMenus($parentMenu['id']);
                                        ?>
                                    </a>
                                        <?php if(!empty($childMenus)): ?>
                                                <li class="header__nav-item hover-border">
                                                    <div class="header__nav-link">
                                                        <span style="white-space: nowrap;">

                                                                <a href="?controller=view_category&id=<?=$parentMenu['id']?>">
                                                                    <?=$parentMenu['title']?>
                                                                </a>

                                                        </span>
                                                    </div>
                                                    <div class="nav-dropdown">
                                                        <ul class="nav-dropdown__list">
                                                            <?php foreach ($childMenus as $childMenu): ?>
                                                                <li class="nav-dropdown__item"><a class="nav-dropdown__link" href="?controller=view_category&id=<?=$childMenu['id']?>"><?=$childMenu['title']?></a></li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>
                                                </li>
                                        <?php else: ?>
                                            <li class="header__nav-item hover-border"><a class="header__nav-link" href="?controller=view_category&id=<?=$parentMenu['id']?>"><?=$parentMenu["title"]?></a></li>
                                        <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="header__search ">
         <form>
            <div class="container">
               <div class="header__search-row">
                  <input name="q" type="text" placeholder="Izlash" value="">
                  <div class="mob-search-btn-wrap">
                     <button type="submit">
                        <svg class="icon " width="16" height="16">
                           <use xlink:href="/assetsfront/sprite/sprite.svg#i-search"></use>
                        </svg>
                     </button>
                  </div>
               </div>
            </div>
         </form>
      </div>
        </header>
