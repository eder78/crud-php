<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style/css/style.css">

        <title>CRUD | PHP</title>

    </head>

    <body>
        
        <div class="container">                

            <div class="row justify-content-center mt-4">    
                <h2>CRUD | PHP</h2>
            </div>
            
            <div class="row justify-content-center mt-2">
                <h4>Contatos Profissionais</h4>
            </div>            
            
            
            <div class="row justify-content-center">
                
                <a class="btn text-dark my-3" href="form.html">Novo Contato</a>

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
                    include 'database.php';
                    $pdo = Database::connect();
                    $sql = 'SELECT * FROM contatos ORDER BY id DESC';
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

                    Database::disconnect();

                    ?>

                </table>
                
            </div>
            
        </div>

    </body>
    
</html>