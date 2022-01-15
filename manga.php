<html>
    <head>
        <title>MangaReaderDeath</title>
        <!--Stylesheet e JS Per Gestione e Personalizzazione Galleria-->
        <link rel="stylesheet" href="style_manga.css"/>
        <script src="js_manga.js"></script>
        <!--Stylesheet e JS Per Galleria Personalizzata-->
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
    </head>
    <body>
        <!--Inizio Selezione Volume-->
        <select id="volume_manga" onchange="ricalcola_volume()">
            <?php
                for($i=21;$i<75;$i++){
                    ?>
                    <option value="<?php echo $i; ?>"  <?php if(array_key_exists('volume_manga', $_GET) && $_GET['volume_manga']==$i) echo "selected"; ?>><?php echo $i; ?></option>
                    <?php
                }
            ?>
        </select>
        <!--Fine Selezione Volume-->

        <!--Inizio Selezione Capitolo-->
        <select id="capitolo_manga" onchange="ricalcola()">
            <?php
                if (array_key_exists('nome_manga', $_GET)) {
                    $dir = $_GET['nome_manga']."/Volume ".$_GET['volume_manga'];
                }
                else{
                    $dir = "Bleach/Volume 21";
                }
                $lista = scandir($dir);
                for($i=2;$i<count($lista);$i++){
                    ?>
                    <option value="<?php echo str_replace(" ","_",$lista[$i]); ?>" <?php if(array_key_exists('capitolo_manga', $_GET) && $_GET['capitolo_manga']==str_replace(" ","_",$lista[$i])) echo "selected"; ?>><?php echo $lista[$i]; ?></option>
                    <?php
                }
            ?>
        </select>
        <!--Fine Selezione Capitolo-->

        <!--Inizio Galleria-->
        <div id="mainCarousel" class="carousel w-10/12 max-w-5xl mx-auto">
            <?php
                if (array_key_exists('nome_manga', $_GET)) {
                    $dir = $_GET['nome_manga'];
                }
                else{
                    $dir = "Bleach";
                }
                if (array_key_exists('volume_manga', $_GET)) {
                    $dir = $dir."/Volume ".$_GET['volume_manga'];
                }
                else{
                    $dir = $dir."/Volume 21";
                }
                if (array_key_exists('capitolo_manga', $_GET)) {
                    $dir = $dir."/".str_replace("_"," ",$_GET['capitolo_manga']);
                }
                else{
                    $lista = scandir($dir);
                    $primo_capitolo_utile="/".$lista[2];
                    $dir = $dir.$primo_capitolo_utile;
                }
                $lista = scandir($dir);
                for($i=2;$i<count($lista);$i++){
                    ?>
                    <div
                        class="carousel__slide"
                        data-src="/<?php echo $dir; ?>/<?php echo $lista[$i]; ?>"
                        data-fancybox="gallery"
                    >
                        <img src="/<?php echo $dir; ?>/<?php echo $lista[$i]; ?>" />
                    </div>
                    <?php
                }
            ?>
        </div>
        <!--Fine Galleria-->

        <!--Script Galleria-->
        <script src="js_gallery.js"></script>
    </body>
</html>