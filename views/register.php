<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
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
                
                <form method="post" action="register.php" name="registerform">
                    
                    <div class="form-group">
                        <!-- the user name input field uses a HTML5 pattern check -->
                        <label for="login_input_username">Usuário (somente letras e números, 2 a 64 caracteres)</label>
                        <input id="login_input_username" class="form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
                    </div>
                        
                    <div class="form-group">
                        <!-- the email input field uses a HTML5 email type check -->
                        <label for="login_input_email">E-mail</label>
                        <input id="login_input_email" class="form-control" type="email" name="user_email" required />
                    </div>
                    
                    <div class="form-group">
                        <label for="login_input_password_new">Senha (mínimo 6 caracteres)</label>
                        <input id="login_input_password_new" class="form-control" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
                    </div>
                    
                    <div class="form-group">
                        <label for="login_input_password_repeat">Repetir a senha</label>
                        <input id="login_input_password_repeat" class="form-control" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
                    </div>
                    
                    <div class="row justify-content-center mt-5">
                        
                        <a href="index.php" class="btn text-dark">Voltar | Login</a> <input type="submit"  name="register" value="Salvar" class="btn btn-success ml-3"/>
                    
                    </div>                        

                </form>
            
            </div>
        
        </div>                
    
    </body> 

</html>