<!--Fichier inclus aux articles, servant de modèle
Le php de l'article donnera une valeur aux différentes variables -->


      <!-- inclusion du fichier header.php qui contient la partie gauche fixe (header et nav) -->
      <?php include 'inc/header.php'; ?>  

      <main class="right">
        <h2 class="right__title"><?= $tableau["Titre"]; ?></h2>
        
          <article class="post_article">
            <a href="" class="post__category post__category--color-<?= $tableau["Catégorie"]; ?> "> <?= $tableau["Catégorie"]; ?> </a>
            
            <div class="post__meta">
              <img class="post__author-icon" src="../images/<?= $tableau["Image de l'auteur"]; ?>" alt=""> 
              <strong class="post__author"><?= $tableau["Auteur"]; ?></strong>
              <time datetime="2018-03-27"><?= $tableau["Date de publication"]  ;?></time>
            </div>
            <p><?= $tableau["Texte"]  ;?></p>
            <p><?= $tableau["Texte"]  ;?></p>
            <a href="index.php" class="post__link">Back to home</a>
            </article>
        </main>
        
        <?php include 'inc/footer.php'; ?>