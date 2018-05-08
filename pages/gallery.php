<div class="container-fluid bg-cinza"> <!-- GALERIA -->
    <div class="divisor">
        <div class="title-section-grey"><i class="fa fa-picture-o" aria-hidden="true"></i> EDIÇÕES ANTERIORES</div>
    </div>
    <div id="galeria" class="animated">
        <div class="text-center">
            <?php
            $pasta = 'assets/img/galeria/';
            $fotos = glob("$pasta*.JPG", GLOB_BRACE);
            foreach ($fotos as $foto) {
                $thumb = str_replace("galeria", "galeria_thumbs", $foto);
                echo "<a href='$foto' data-lightbox='example' data-title=''><img class='img-thumbnail image_block' src='$thumb' alt=''/></a>";
            }

            $fotos = glob("$pasta*.jpg", GLOB_BRACE);
            foreach ($fotos as $foto) {
                $thumb = str_replace("galeria", "galeria_thumbs", $foto);
                echo "<a href='$foto' data-lightbox='example' data-title=''><img class='img-thumbnail image_block' src='$thumb' alt=''/></a>";
            }
            ?>
        </div>
    </div>
    <div id="contato" class="menu-height"></div>
</div>