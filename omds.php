<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Taf</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">    
</head>

    <body>
        <?php
        include "topo.php";
        $url = "https://apptaf.herokuapp.com/omds";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $resultado = json_decode(curl_exec($ch));      
        ?>       

        <div class="panel panel-default" style="margin: 10px">
        
        <div class="panel-heading">
                <div class="clearfix">
                    <h1 class="panel-title aw-titulo-panel">Listagem de OMDS</h1>                 
                    <a class="btn btn-link aw-link-panel" href="#" >Nova OMDS</a>                
                </div>
        </div>
        
        <div class="panel-body">            
            
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>                                       
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($resultado as $obj) {
                    ?>
                    <tr> 
                        <td><?=$obj->id?></td>
                        <td><?=$obj->nome?></td>
                                   
                        <td>
                            <a class="btn btn-sm btn-primary" href="#">Editar</a>                                                   
                            <a class="btn btn-sm btn-warning" href="#">Remover</a>              
                        </td>                                        
                    </tr> 
                    <?php
                        }
                    ?>            
                
                </tbody>                
                
            </table>
            
            
        </div>
    
    </div>
    <?php
    include 'rodape.php';
    ?>
    </body>
</html>
