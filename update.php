<?php

	require 'database.php';

	$id = null;

	if (!empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }

	if (null==$id) {
        header("Location: index.php");
    }

	if (!empty($_POST)) {

        $empresa = $_POST['empresa'];
        $contato = $_POST['contato'];
        $cargo = $_POST['cargo'];
        $telefone = $_POST['telefone'];
        $celular = $_POST['celular'];
        $site = $_POST['site'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $cep = $_POST['cep'];
        
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE contatos  set empresa=?, contato=?, cargo=?, telefone=?, celular=?, site=?, email=?, endereco=?, bairro=?, cidade=?, uf=?, cep=? WHERE id=?";
                                    
        $q = $pdo->prepare($sql);
        $q->execute(array($empresa,$contato,$cargo,$telefone,$celular,$site,$email,$endereco,$bairro,$cidade,$uf,$cep,$id));
        Database::disconnect();
        header("Location: index.php");       
    }

    else {
        
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM contatos where id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		$data = $q->fetch(PDO::FETCH_ASSOC);
        
        $empresa = $data['empresa'];
        $contato = $data['contato'];
        $cargo = $data['cargo'];
        $telefone = $data['telefone'];
        $celular = $data['celular'];
        $site = $data['site'];
        $email = $data['email'];
        $endereco = $data['endereco'];
        $bairro = $data['bairro'];
        $cidade = $data['cidade'];
        $uf = $data['uf'];
        $cep = $data['cep'];
        
		Database::disconnect();
	}
?>


<!DOCTYPE html>

<html lang="pt-br">
    
    <head>
        
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
        
        <title>CRUD | PHP</title>
        
    </head>
    
    <body>
        
        
        <div class="container">
            
            <div class="row justify-content-center mt-5">        
                 <h3>Editar Contato</h3>                
            </div>
            
            <div class="row justify-content-center mt-3">
                
                <form action="update.php?id=<?php echo $id?>" method="post">
                    
                                        
                    <div class="form-group">
                        <label>Empresa</label>
                        <input class="form-control" name="empresa" type="text" placeholder="Empresa" value="<?php echo !empty($empresa)?$empresa:'';?>"/> 
                    </div>
                    
                    
                    <div class="row">                        
                        <div class="col">                            
                            <div class="form-group">
                                <label>Contato</label>
                                <input class="form-control" name="contato" type="text" placeholder="Contato" value="<?php echo !empty($contato)?$contato:'';?>"/>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group"> 
                                <label>Cargo</label>
                                <input class="form-control" name="cargo" type="text" placeholder="Cargo" value="<?php echo !empty($cargo)?$cargo:'';?>"/>
                            </div>
                        </div>
                    </div>
                    

                    <div class="row">                        
                        <div class="col">
                            <div class="form-group">
                                <label>Telefone</label>
                                <input class="form-control" name="telefone" type="text" placeholder="Telefone" value="<?php echo !empty($telefone)?$telefone:'';?>"/>
                            </div>
                        </div>
                        
                        <div class="col">                    
                            <div class="form-group">
                                <label>Celular</label>
                                <input class="form-control" name="celular" type="text" placeholder="Celular" value="<?php echo !empty($celular)?$celular:'';?>"/>
                            </div>
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <label>Site</label>
                        <input class="form-control" name="site" type="text" placeholder="Site" value="<?php echo !empty($site)?$site:'';?>"/>
                    </div>    

                    <div class="form-group"> 
                        <label>E-mail</label>
                        <input class="form-control" name="email" type="text" placeholder="E-mail" value="<?php echo !empty($email)?$email:'';?>"/>
                    </div>    
                    
                    
                    <div class="row"> 
                        
                        <div class="col">
                            <div class="form-group">
                                <label>Endereço</label>
                                <input class="form-control" name="endereco" type="text" placeholder="Endereço" value="<?php echo !empty($endereco)?$endereco:'';?>"/>                                
                            </div>
                        </div>
                        
                        
                        <div class="col">                                        
                            <div class="form-group"> 
                                <label>Bairro</label>
                                <input class="form-control" name="bairro" type="text" placeholder="Bairro" value="<?php echo !empty($bairro)?$bairro:'';?>"/>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group"> 
                                <label>UF</label>
                                <input class="form-control" size="2" name="uf" type="text" placeholder="UF" maxlength="2" size="2" value="<?php echo !empty($uf)?$uf:'';?>"/>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="row">                        
                        <div class="col">                    
                            <div class="form-group"> 
                                <label>Cidade</label>
                                <input class="form-control" name="cidade" type="text" placeholder="Cidade" value="<?php echo !empty($cidade)?$cidade:'';?>"/>
                            </div>                        
                        </div>                        
                        <div class="col">                            
                            <div class="form-group"> 
                                <label>CEP</label>
                                <input class="form-control" name="cep" type="text" placeholder="CEP" value="<?php echo !empty($cep)?$cep:'';?>"/>
                            </div>                                 
                        </div>                    
                    </div>    
                    
                        <button class="btn btn-dark mt-3 mb-3" type="submit">Salvar</button>                        
                        
                        <a class="btn text-dark mt-3 mb-3 ml-2" href="index.php">Cancelar</a>
                
                </form>
            
            </div>
        
        </div>
    
    </body>

</html>