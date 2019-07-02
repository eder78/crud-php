<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>


<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style/css/style.css">

        <title>CRUD | PHP</title>
        
        <link rel="shortcut icon" href="favicon.ico">

    </head>
    
    <body>
        
        <div class="container">
            
            <div class="row justify-content-center mt-5">
        
                <!-- login form box -->
                <form method="post" action="index.php" name="loginform">

                    <div class="form-group">
                        <label for="login_input_username">Usuário</label>
                        <input id="login_input_username" class="form-control" type="text" name="user_name" required />
                    </div>   

                    <div class="form-group">
                        <label for="login_input_password">Senha</label>
                        <input id="login_input_password" class="form-control" type="password" name="user_password" autocomplete="off" required />
                    </div>

                    <a href="register.php" class="btn text-dark"> Novo usuário </a> <input type="submit"  name="login" value="Entrar" class="btn btn-success ml-3"/>

                </form>                    
            
            </div>
            
          
        
        </div>            
    
    </body>
    
</html>    