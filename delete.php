<?php

require_once("config/db.php");

$id = 0;

if(!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

if(!empty($_POST)) {
    
    $id = $_POST['id'];

    $pdo = connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM contatos where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    disconnect();
    header("Location: index.php");
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
            
            <div class="row justify-content-center mt-5">        
                <h3>Excluir Contato</h3>                
            </div>
            
            <div class="row justify-content-center mt-3">

                <form action="delete.php" method="post">

                    <input type="hidden" name="id" value="<?php echo $id;?>"/>

                    <p>Deseja realmente excluir este contato?</p>

                    <button class="btn btn-dark mt-3 mb-3" type="submit">Deletar</button>

                    <a class="btn text-dark mt-3 mb-3 ml-2" href="index.php" type="btn">Cancelar</a>

                </form>

            </div>
        
        </div>           
    
    </body>
    
</html>