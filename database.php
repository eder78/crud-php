<?php

    class Database {

        private static $database = 'nome_do_banco';
        private static $host = 'localhost';
        private static $user = 'seu_usuario';
        private static $password = 'sua_senha';

        private static $statement = null;

        public static function connect() {
            
            if(null == self::$statement) {
                try {
                    self::$statement = new PDO("mysql:host=".self::$host.";"."dbname=".self::$database, self::$user, self::$password); 
                }
                catch(PDOException $exception) {
                    die($exception->getMessage());
                }
            }        
            return self::$statement;
        }

        public static function disconnect() {            
            self::$statement = null;
        }
    }

?>
