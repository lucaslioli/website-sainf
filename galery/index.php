<!DOCTYPE html>
<html>
    
    <head>
        <meta charset=utf-8>
        <title>Galery</title>
        <!-- Carregamento do CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
        <style type="text/css">
        	body {
        		background-color: #312f31;
        	}
        	h1 {
        		color: #FFF;
        	}
        	.image_block{
			    margin: 5px;
			}
        </style>
    </head>
    
    <body>
        <div class="container">
            <h1>Galery</h1>
            <section>
                <div class="text-center">
                    <?php
                    $pasta = 'img/fotos/';
                    $fotos = glob("$pasta{*.jpg, *.JPG, *.PNG, *.png}", GLOB_BRACE);
                    foreach ($fotos as $foto) {
                        $thumb = str_replace("fotos", "thumbs", $foto);
                        echo "<a href='$foto' data-lightbox='example' data-title=''><img class='img-thumbnail image_block' src='$thumb' alt=''/></a>";
                    }                            
                    ?>
                </div>
            </section>
            <script type="text/javascript" src="js/lightbox_plus_jquery.min.js">
                /**
                 * Copyright (c) 2015 Lokesh Dhakar 
                 * Lightbox2 - The original lightbox script.
                 * by [Lokesh Dhakar](http://www.lokeshdhakar.com)
                 */        
            </script>
        </div>
    </body>
</html>