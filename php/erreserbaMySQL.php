<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" href="../css/erreserba.css" type="text/css">
        <script type="text/javascript" src="../js/erreserbaBalidatu.js"></script>

    </head>

    <body background = "../irudiak/walpaper.jpg">

        <?php include '../php/dbConfig.php'?>
        
        <?php
        
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $data = $_POST['data'];
                $kopurua = $_POST['kopurua'];
                $izena = $_POST['izena'];
                $abizena = $_POST['abizena'];
                $eposta = $_POST['eposta'];
                $tlf = $_POST['tlf'];

                $kon = new mysqli($zerbitzaria, $erabiltzailea, $gakoa, $db);

                $sql = "INSERT INTO erreserbak (data, pertsonaKop, izena, abizena, eposta, telefonoa) VALUES ('$data', '$kopurua', '$izena', '$abizena', '$eposta', '$tlf')";
            
                if(!$kon->query($sql)){
                    die('Errorea:' . $kon->error);
                }

                $kon->close();
            }
        
        ?>

        <meta http-equiv="refresh" content="0; url=/php/erreserba.php" />

    </body>

</html>