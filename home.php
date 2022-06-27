<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Taf</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= URL ?>/public/css/estilos.css" rel="stylesheet">
</head>

    <body>
        <?php
        include "topo.php";
        $url = "https://tcctafphp.herokuapp.com/taf";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $resultado = json_decode(curl_exec($ch));      
        ?>       

        <div class="panel panel-default" style="margin: 10px">
        
               
        <div class="panel-body" align="center">            
            <br>
            <img src="./img/exercito-logo.png">
            <br>
            
        </div>        
    </div>
    <?php
    include 'rodape.php';
    ?>
    </body>
</html>
