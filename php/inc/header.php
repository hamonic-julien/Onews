

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
        <header class="left">
            <h1 class="left__title">O'Clock Students News</h1>
                <div class="left__paragraph">
                <h2 class="left__subtitle"><strong class="left__subtitle-strong">Latest news</strong> from our students</h2>
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
                <!--syntaxe alternative
                (pas afficher)
                            <?php
                            foreach ($dataNav as $key => $url):
                            ?>
                                <li class="left__nav-item">
                                    <a href="<?= $url ?>" class="left__nav-link"> <?= $key; ?> </a>
                                </li>
                            <?php
                            endforeach;
                            ?>
                -->
                </ul>
            </nav>
        </header>

