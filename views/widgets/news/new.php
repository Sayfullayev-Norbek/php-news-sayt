<div class="main__content">
    <div class="news">
        <?php if(!empty($getAllNews)): ?>
            <?php foreach($getAllNews as $allNew): ?>
                <?php
                    $id = $allNew['category_id'];
                    $categorys = getCategoryById($id);
                ?>
                <div class="news__item">
                    <div class="news-card">
                        <div class="news-card__content">
                            <div class="news-attributes">
                                 <span class="news-attributes__date">
                                     <i class="fas fa-calendar" style="color: #9e9e9e"></i> &nbsp;
                                    <?=date('H:i / d.m.Y', strtotime($allNew["created_date"]))?>
                                 </span>
                                    <?php foreach ($categorys as $category): ?>
                                        <a class="news-attributes__tag" href=""><?=$category['title']?></a>
                                    <?php endforeach;?>
                            </div>
                            <a class="news-card__text" href="?controller=news_view&id=<?=$allNew['id']?>"><?=$allNew["title"]?></a>
                        </div>
                        <a class="news-card__img" href="#"><img src="/upload/news/<?=$allNew['id']?>/<?=$allNew["image"]?>" style="background-color: rgb(230, 230, 230); transition: all 0.1s ease 0s; filter: blur(0px);"></a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
