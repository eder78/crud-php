<?php

require_once("config/db.php");
$id = null;

if(!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

if(null==$id) {
    header("Location: index.php");
}

else {    
    $pdo = connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM contatos where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    disconnect();
}

?>

<!DOCTYPE html>

<html lang="pt-br">
    
    <head>
        
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
        
        <title>CRUD | PHP</title>
        
        <link rel="shortcut icon" href="favicon.ico">
    
    </head>
    
    <body>
        
        <div class="container">
            
            <div class="row justify-content-center my-5">        
                <h3>Detalhes do Contato</h3>
            </div>        
                    
                        
            <table class="table table-striped table-bordered">
                
                <tr>                
                    <td>Empresa</td> 
                    <td><?php echo $data['empresa'];?></td>                  
                </tr>
                
                <tr>                
                    <td>Contato</td>
                    <td><?php echo $data['contato'];?></td>                  
                </tr>
                
                <tr>                
                    <td>Cargo</td>
                    <td><?php echo $data['cargo'];?></td>
                </tr>
                
                <tr>
                    <td>Telefone</td>
                    <td><?php echo $data['telefone'];?></td>
                </tr>
                
                <tr>
                    <td>Celular</td>
                    <td><?php echo $data['celular'];?></td>
                </tr>
                
                <tr>
                    <td>Site</td>
                    <td><?php echo $data['site'];?></td>
                </tr>
                
                <tr>
                    <td>E-mail</td>
                    <td><?php echo $data['email'];?></td>
                </tr>
                
                <tr>
                    <td>Endereço</td>
                    <td><?php echo $data['endereco'];?></td>
                </tr>
                
                <tr>
                    <td>Bairro</td>
                    <td><?php echo $data['bairro'];?></td>
                </tr>
                
                <tr>
                    <td>Cidade</td>
                    <td><?php echo $data['cidade'];?></td>
                </tr>
                
                <tr>
                    <td>UF</td>
                    <td><?php echo $data['uf'];?></td>
                </tr>
                
                <tr>
                    <td>CEP</td>
                    <td><?php echo $data['cep'];?></td>
                </tr>
                
            </table>
            
            <div class="row justify-content-center my-5">
                <a class="btn text-dark" href="index.php">Voltar</a>
            </div>                
            
        </div>

    </body>

</html>