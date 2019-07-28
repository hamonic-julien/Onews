<?php
require 'data/data.php';
require 'data/utils.php';
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>oNews</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="wrapper">
    

<header class="left_form">
    <h1 class="left__title">O'Clock Students News</h1>
    <div class="left__paragraph">
        <h2 class="left__subtitle"><strong class="left__subtitle-strong">Say a word</strong> contact us</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
        </p>
    </div>
    <nav>
        <ul class="left__nav">
            <?php  
            foreach ($dataNav as $key => $url) {
                echo '<li class="left__nav-item"><a href="' . $url . '" class="left__nav-link">' . $key . '</a></li>';
            }

            ?>
            
        </ul>
    </nav>
</header>
<main class="right">
        
        <h2 class="right__title">Contact</h2>
        <form action="resultat.php" method="POST">
            <div class="identification">
                <div class="checkbox">
                    <label for="Girl"><input type="radio" id="Girl" name="Sexe" value="Mme">Mme/</label>
                    <label for="Boy"><input type="radio" id="Boy" name="Sexe" value="M">M</label>
                </div> 
                <input type="text" id="first_name" name="user_first_name" placeholder="Prénom">
                <input type="text" id="name" name="user_last_name" placeholder="Nom">
                <input type="email" id="mail" name="user_mail" placeholder="Adresse e-mail">
                <div>
                    <label for="list">J'ai connu ce site grâce à </label>
                    <select id="list" name="liste">
						<option value="-" disabled selected>choisir</option>
						<option value="Facebook">Facebook</option>
                        <option value="Twitter">Twitter</option>
                        <option value="Google">Google</option>
                        <option value="Bouche à oreilles">Bouche à oreilles</option>
                        <option value="JT de 13h">Jt de 13h de Jean-Pierre Pernault</option>
                        <option value="Other">Autre</option>
                    </select>
                </div>
            </div>
            <div class="comments">
                <label for="commentaire">Pour laisser un commentaire libre à propos d'O'Clock, c'est par ici :</label>
                <textarea id="commentaire" rows="5" cols="30" placeholder="Votre message"></textarea>                
            </div>
            <div class="check">
                <input type="checkbox" id="valid" name="user_valid" required>
                <label for="valid">Je certifie la véracité de ces informations.</label>
           </div>
           <div class="addFiles">
                <label for="files">Ajouter un fichier : </label>
                <input type="file" id="files" name="contact_file" >
            </div>
            <div>
                <input type="submit" id="submit" value="Envoyer">
            </div>

        </form>
       <!-- https://tutorialehtml.com/fr/html-menu-select/-->


</main>

</body>
</html>