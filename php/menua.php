<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" href="../css/menua.css" type="text/css">
    </head>

    <body background = "../irudiak/walpaper.jpg">
        
        <!--Web-aren titulua-->
        <div class = "titulua">
            <h1 class = "tit"><a href="../index.php" style="text-decoration: none;">ETXEBERRIA JATETXEA</a><h1>
        </div>

        <!--Orri desberdinetara joateko menua-->
        <div class="container">
            <div class="left">
                <img src="../irudiak/1.png" width="50">
                <a href="../php/gu.php" style="text-decoration: none;">Nor gara</a>
            </div>
            <div class="middle">
                <img src="../irudiak/2.png" width="50">
                <a href="../php/menua.php" style="text-decoration: none;">Menua</a>
            </div>
            <div class="right">
                <img src="../irudiak/3.png" width="50">
                <a href="../php/erreserba.php" style="text-decoration: none;">Erreserbatu</a>
            </div>
        </div>

        <!--Orri honen izena, bertan zer dago-->
        <div class = "menua">
            <h1> Menua <h1> 
        </div>
        
        <!--xml aldagaian menua.xml kargatzen da-->
        <?php
            $xml=simplexml_load_file("../xml/menua.xml") or die("Error: Cannot create object");
        ?>

        <!--Lauki honetan jatetxearen menua pantailaratzen da, xml-ko elementuak hartuz-->
        <div class = "karratua">
            <h2>Razioak</h2>
            <dl>
                <dt> <?php echo $xml->element[0]->izena?> </dt>
                <dd class="price"> <?php echo $xml->element[0]->prezioa?> &euro;</dd><br>
            </dl>
            <dl>
                <dt> <?php echo $xml->element[1]->izena?> </dt>
                <dd class="price"> <?php echo $xml->element[1]->prezioa?> &euro;</dd><br>
            </dl>
            <dl>
                <dt> <?php echo $xml->element[2]->izena?> </dt>
                <dd class="price"> <?php echo $xml->element[2]->prezioa?> &euro;</dd><br>
            </dl>
            <dl>
                <dt> <?php echo $xml->element[3]->izena?> </dt>
                <dd class="price"> <?php echo $xml->element[3]->prezioa?> &euro;</dd><br>
            </dl>

            <h2>Bokatak</h2>
            <dl>
                <dt> <?php echo $xml->element[4]->izena?> </dt>
                <dd class="price"> <?php echo $xml->element[4]->prezioa?> &euro;</dd><br>
            </dl>
            <dl>
                <dt> <?php echo $xml->element[5]->izena?> </dt>
                <dd class="price"> <?php echo $xml->element[5]->prezioa?> &euro;</dd><br>
                <dd class="ingredients"> <?php echo $xml->element[5]->ingredients?> </dd><br>
            </dl>
            <dl>
                <dt> <?php echo $xml->element[6]->izena?> </dt>
                <dd class="price"> <?php echo $xml->element[6]->prezioa?> &euro;</dd><br>
            </dl>
            <dl>
                <dt> <?php echo $xml->element[7]->izena?> </dt>
                <dd class="price"> <?php echo $xml->element[7]->prezioa?>  &euro;</dd><br>
                <dd class="ingredients"> <?php echo $xml->element[7]->ingredients?> </dd><br>
            </dl>
            <dl>
                <dt> <?php echo $xml->element[8]->izena?> </dt>
                <dd class="price"> <?php echo $xml->element[8]->prezioa?> &euro;</dd><br>
            </dl>

            <h2>Hanburgesak</h2>
            <dl>
                <dt> <?php echo $xml->element[9]->izena?> </dt>
                <dd class="price"> <?php echo $xml->element[9]->prezioa?>  &euro;</dd><br>
                <dd class="ingredients"> <?php echo $xml->element[9]->ingredients?> </dd><br>
            </dl>
            <dl>
                <dt> <?php echo $xml->element[10]->izena?> </dt>
                <dd class="price"> <?php echo $xml->element[10]->prezioa?>  &euro;</dd><br>
                <dd class="ingredients"> <?php echo $xml->element[10]->ingredients?> </dd><br>
            </dl>
            <dl>
                <dt> <?php echo $xml->element[11]->izena?> </dt>
                <dd class="price"> <?php echo $xml->element[11]->prezioa?>  &euro;</dd><br>
                <dd class="ingredients"> <?php echo $xml->element[11]->ingredients?> </dd><br>
            </dl>
        
            <h2>Edariak</h2>
            <dl>
                <dt> <?php echo $xml->element[12]->izena?> </dt>
                <dd class="price"> <?php echo $xml->element[12]->prezioa?>  &euro;</dd><br>
                <dd class="ingredients"> <?php echo $xml->element[12]->ingredients?> </dd><br>
            </dl>
            <dl>
                <dt> <?php echo $xml->element[13]->izena?> </dt>
                <dd class="price"> <?php echo $xml->element[13]->prezioa?>  &euro;</dd><br>
            </dl>
            <dl>
                <dt> <?php echo $xml->element[14]->izena?> </dt>
                <dd class="price"> <?php echo $xml->element[14]->prezioa?>  &euro;</dd><br>
                <dd class="ingredients"> <?php echo $xml->element[14]->ingredients?> </dd><br>
            </dl>

        </div>

        <!--Hasierako orrira bueltatzeko botoia-->
        <div class = "atzera">
            <button class = "botoia" onclick="window.location.href='../index.php'">Atzera</button>
        </div>
        
        <!--Web-aren kredituak, egilearen informazioarekin-->
        <div class="kredituak">
            Ander Pollacino Merino </br>
            GitHub: <a class = "github" href="https://github.com/anderpm" style="text-decoration: none;"> https://github.com/anderpm</a> <br>
            &copy; copyleft
        </div>

    </body>

</html>