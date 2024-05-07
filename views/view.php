<?php require_once "views/widgets/header.php" ?>
<div class="container">
    <div class="wrapper">
        <div class="quote">
            <p class="quote__text">Faqat haqiqatni, barcha haqiqatni, haqiqatdan o‘zga hech narsani...</p>
        </div>
        <div class="ad"><a href="https://t.me/xushnudbek" target="_blank" rel="noreferrer noopener"><img src="/assetsfront/img/inhtml/banner-top.jpg" alt="Top Banner"></a></div>
        <main class="main home-page">
            <div class="main__content">
                <div class="news">
                    <div class="div">
                        <i class="fas fa-calendar" style="color: #9e9e9e"></i> &nbsp;
                        <?=date('H:i / d.m.Y', strtotime($model["created_date"]))?> &nbsp;
                        <?=$model['seen_count']?>
                        <h1 class="single-header__title" style="margin-bottom:-0.1em;"><?=$model['title']?></h1>
                    </div>
                    <h4 style="font-weight: bold;"><?=$model['description']?></h4>
                    <div class="div">
                        <img src="/upload/news/<?=$model['id']?>/<?=$model["image"]?>">
                    </div>
                    <p dir="auto"><?=$model['body'];?></p>
                </div>
            </div>
            <?php require_once 'views/widgets/aside.php';?>
        </main>
    </div>
</div>
<?php require_once "views/widgets/footer.php" ?>
