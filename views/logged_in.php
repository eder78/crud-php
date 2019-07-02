<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style/css/style.css">
        <link rel="stylesheet" type="text/css" href="style/css/all-animation.css" />

        <title>CRUD | PHP</title>
        
        <link rel="shortcut icon" href="favicon.ico">

    </head>

    <body>        
                    
        <div style="margin-left:30px;margin-top:30px;color:#006600;">
        <!-- if you need user information, just put them into the $_SESSION variable and output them here -->
        Olá, <?php echo $_SESSION['user_name']; ?>.<br> 
        Obrigado pela visita!<br><br>
        <!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
        <a href="index.php?logout" style="color:#000000;">Desconectar</a>
        </div>
            
                
        
        <div class="container">                

            <div class="row justify-content-center">    
                <h1 class="text-dark">Contatos Profissionais</h1>
            </div>
            
            <div class="row justify-content-center">
                
                <a class="btn my-3 dance" style="color:#006600;" href="form.html"><h5>Novo Contato</h5></a>

                <table class="table table-striped table-bordered">
                    <thead class="thead-light text-left">                    
                        <tr>            
                            <th>Empresa</th>
                            <th>Contato</th>
                            <th>Telefone</th>
                            <th>Celular</th>            
                            <th>E-mail</th>                            
                            <th></th>                        
                        </tr>
                    </thead>    

                    <?php
                    require_once("config/db.php");
                    $pdo = connect();
                    
                    $sql = "SELECT * FROM contatos WHERE user_id = '" . $_SESSION['user_id'] . "' ORDER BY id DESC";                                        
                   
                    foreach ($pdo -> query($sql) as $row) {
                        echo '<tr>';            
                        echo '<td>'. $row['empresa'] . '</td>';
                        echo '<td>'. $row['contato'] . '</td>';            
                        echo '<td>'. $row['telefone'] . '</td>';
                        echo '<td>'. $row['celular'] . '</td>';
                        echo '<td>'. $row['email'] . '</td>';                        
                                                
                        echo '<td>';
                        echo '&nbsp;<a class="text-dark" href="view.php?id='.$row['id'].'">Detalhes</a>&nbsp;&nbsp;';
                        echo '&nbsp;<a class="text-dark" href="update.php?id='.$row['id'].'">Editar</a>&nbsp;&nbsp;';
                        echo '&nbsp;<a class="text-dark" href="delete.php?id='.$row['id'].'">Deletar</a>&nbsp;';
                        echo '</td>';
                        echo '</tr>';
                    }

                    disconnect();

                    ?>

                </table>
                
            </div>
            
        </div>

    </body>
    
</html>