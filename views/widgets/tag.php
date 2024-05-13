<?php require_once "views/widgets/header.php";?>

<div class="container">
    <div class="wrapper">
        <div class="quote">
            <p class="quote__text">Faqat haqiqatni, barcha haqiqatni, haqiqatdan o‘zga hech narsani...</p>
        </div>
        <div class="ad"><a href="https://t.me/xushnudbek" target="_blank" rel="noreferrer noopener"><img src="/assetsfront/img/inhtml/banner-top.jpg" alt="Top Banner"></a></div>
        <main class="main home-page">
<!--            Satatus bo'yicha eng ko'p ko'rilgani-->
<!--            <div class="top-news__big">-->
<!--                <a class="big-news" href="/news/2024/05/06/chelsi-derbida-5-ta-javobsiz-gol-urdi-liverpul-ayovsiz-qasos-oldi-aplda-kun-oyinlari">-->
<!--                    <span class="big-news__img"><img src="https://storage.kun.uz/source/thumbnails/_medium/10/fsaqX-982a2IvUZE4Uw4YH4WwxwIoxjv_medium.jpg">-->
<!--                    </span>-->
<!--                    <span class="big-news__content">-->
<!--                        <div class="news-meta">-->
<!--                            <span>12:06 / 06.05.2024</span>-->
<!--                        </div>-->
<!--                        <span class="big-news__title">«Chelsi»  </span>-->
<!--                        <span class="big-news__description"> Pochettino </span>-->
<!--                    </span>-->
<!--                </a>-->
<!--            </div>-->
            <div class="top-news__small-items">
                <div class="row">
                    <?php if (!empty($models)): ?>
                        <?php foreach ($models as $model): ?>
                            <div class="col-md-6">
                                <div class="small-news">
                                    <a class="small-news__img" href="?controller=news_view&id=<?=$model['id']?>">
                                        <img src="/upload/news/<?=$model['id']?>/<?=$model['image']?>">
                                    </a>
                                    <div class="small-news__content">
                                        <div class="news-meta">
                                            <span><?=date('H:i | d.m.Y', strtotime($model['created_date']))?></span>
                                        </div>
                                        <a class="small-news__title news-card__text" href="?controller=news_view&id=<?=$model['id']?>">
                                            <?=$model['title']?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <?php require_once "views/widgets/aside.php";?>
        </main>
    </div>
</div>


<?php require_once "views/widgets/footer.php";?>
