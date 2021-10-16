<!DOCTYPE html>
<html>
<head>
    <title>Galeria de Fotos</title>
    <link href="style.css" rel="stylesheet" />
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include('galeria.php');
        $galeria = new Galeria();
    ?>

    <section class="imagem">
        <div class="imagem">
            <img src="<?php echo $galeria->getCurrentPicture(); ?>" />
            <div class="conteudo">
                <div class="logo">
                    <h2>Raiane Dev</h2>
                    <button>Galeria de Imagens</button>
                </div>
            </div>
            
            <div class="links">
                <div class="antprox">
                    <a href="<?php echo $galeria->getPrevPictureIndex(); ?>">Anterior</a>
                    <a href="<?php echo $galeria->getNextPictureIndex(); ?>">Próximo</a>
                </div>
            </div>
        </div>
    </section>

<script>
    feather.replace()
</script>
</body>
</html>