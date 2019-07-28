<main class="right">
    
    <h2 class="right__title">Latest News</h2>
    <div class="posts">

<!--On va afficher la liste des articles présents dans le tableau articleList-->
    <?php foreach($articleList as $id => $article) : ?>
        <article class="post">
        <a href="" class="post__category post__category--color-<?= $article["Catégorie"]?>"><?= $article["Catégorie"]?></a>
        <h3><?= $article["Titre"] ?></h3>
        <div class="post__meta">
            <img class="post__author-icon" src="../images/<?= $article["Image de l'auteur"]?>">
            <strong class="post__author"><?= $article["Auteur"] ?></strong>
            <time datetime="2018-03-27"><?= $article["Date de publication"] ?></time>
        </div>
        <p><?= getSummary($article["Texte"]) ?>...</p>
        <a href="article.php?article_id=<?= $id ?>" class="post__link">Continue reading</a>
        </article>
    <?php endforeach ?>



   
    </div>
</main>