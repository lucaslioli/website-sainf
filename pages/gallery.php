<div class="container-fluid bg-cinza"> <!-- GALERIA -->
	<div class="divisor">
		<div class="title-section-grey"><i class="fa fa-picture-o" aria-hidden="true"></i> GALERIA SAINF 2016</div>
	</div>
	<div id="galeria" class="animated">
		<div class="text-center">
            <?php
            $pasta = 'assets/img/sainf2016/';
            $fotos = glob("$pasta*.JPG", GLOB_BRACE);
            foreach ($fotos as $foto) {
                $thumb = str_replace("sainf2016", "thumbs", $foto);
                echo "<a href='$foto' data-lightbox='example' data-title=''><img class='img-thumbnail image_block' src='$thumb' alt=''/></a>";
            }
            ?>
        </div>
	</div>
	<div id="apoio" class="menu-height"></div>
</div>