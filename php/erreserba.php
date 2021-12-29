<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" href="../css/erreserba.css" type="text/css">
        <script type="text/javascript" src="../js/erreserbaBalidatu.js"></script>

    </head>

    <body background = "../irudiak/walpaper.jpg">

        <?php include '../php/dbConfig.php'?>
        
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

        <!--Orri honen izena, bertan zer egin daiteke-->
        <div class = "erreserbatit">
            <h1> Erreserbatu <h1> 
        </div>

        <!--Erreserba egiteko formularioa lauki honen barruan sartuta dago-->
        <div class = "karratua">
            
            <form class = "erreserbatu" id="erreserbatu" name="erreserbatu" method=POST enctype=multipart/form-data action="erreserbaMySQL.php">
                
                <!--Erreserbaren data hautatzeko eremua-->
                <label for="data">Data aukeratu *:</label><br>
                <input type="date" id="data" name="data" value="2022-01-01" min="2022-01-01" max="2022-12-31" required><br>

                <!--Pertsona kopuru sartzeko eremua-->
                <label for="kopurua">Pertsona kopurua (1-8) *:</label><br>
                <input type="number" id="kopurua" name="kopurua" min="1" max="8" required><br>

                <!--Izena sartzeko eremua-->
                <label for="izena">Izena *:</label><br>
                <input type="text" id="izena" name="izena" required><br>

                <!--Abizena sartzeko eremua-->
                <label for="abizena">Abizena *:</label><br>  
                <input type="text" id="abizena" name="abizena"required><br>

                <!--Eposta sartzeko eremua-->
                <label for="eposta">E-mail *:</label><br>   
                <input type="text" id="eposta" name="eposta" required><br>

                <!--Telefonoa sartzeko eremua-->
                <label for="tlf">Telefono zenbakia *:</label><br>
                <input type="tel" id="tlf" name="tlf" placeholder="123456789" pattern="[0-9]{9}" required><br><br>

                <input type="submit" value="Erreserbatu" onclick="balidatu();">
                <input type="reset" name="clear" id="clear" value="Garbitu">
                
            </form>

            <div class = "komentarioa">
                * Izartxo batekin markatutako eremuak beharrezkoak dira. <br>
                8 pertsona baino gehiagoko erreserbak telefono bidez egin behar dira. Tlf: (+34) 943 123 456 <br>
                Erreserba egin eta gero, jatetxetik e-mail bat jasoko duzu erreserba konfirmatuz.
            </div>

            <div class = "bilatu">

                <br>
                <h3> Erreserba egiaztatu</h3>

                <form class = "bilatu" id="bilatu" name="bilatu" method=POST enctype=multipart/form-data action="erreserba.php">
                    
                    <!--Eposta sartzeko eremua-->
                    <label for="bilatuEmail">E-mail *:</label><br>   
                    <input type="text" id="bilatuEmail" name="bilatuEmail" required><br><br>

                    <input type="submit" value="Bilatu" onclick="bilatu();">
                    <input type="reset" name="clear" id="clear" value="Garbitu">
                    
                </form>
            
                <?php
                    if(isset($_POST['bilatuEmail'])){
                        $email = $_POST['bilatuEmail'];
                    
                        $kon = new mysqli($zerbitzaria, $erabiltzailea, $gakoa, $db);

                        $sql = "SELECT * FROM `erreserbak` WHERE eposta = '$email'";

                        $res = mysqli_query($kon, $sql);
                    
                        if(!$kon->query($sql)){
                            die('Errorea:' . $kon->error);
                        } 

                        $row= $res->fetch_object();
                        
                        if(empty($row)){
                            echo $email." eposta-rekin horrekin ez da erreserbarik egin.";
                            echo "<br>";
                        } else{
                            echo $row->eposta." eposta-rekin ".$row->pertsonaKop." pertsonentzat erreserba eginda dago ".$row->data." egunerako.";
                            echo "<br>";
                        }

                        $kon->close();
                    }
                ?>
            </div>
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