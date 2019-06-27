<?php

    class Database {

        private static $database = 'agenda_contatos';
        private static $host = 'localhost';
        private static $user = 'eder';
        private static $password = '6bMclDkitV5rwHF2';

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
