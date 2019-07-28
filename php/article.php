<?php  

require 'data/data.php';
require 'data/utils.php';

$articleId = $_GET['article_id'];

$tableau = $articleList[$articleId];

?>



<!-- inclusion du fichier modelearticle.php qui contient la structure de la page -->
<?php include 'inc/modelearticle.php'; ?>