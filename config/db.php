<?php

/**
 * Configuration for: Database Connection
 *
 * For more information about constants please @see http://php.net/manual/en/function.define.php
 * If you want to know why we use "define" instead of "const" @see http://stackoverflow.com/q/2447791/1114320
 *
 * DB_HOST: database host, usually it's "127.0.0.1" or "localhost", some servers also need port info
 * DB_NAME: name of the database. please note: database and database table are not the same thing
 * DB_USER: user for your database. the user needs to have rights for SELECT, UPDATE, DELETE and INSERT.
 * DB_PASS: the password of the above user
 */

define("DB_HOST", "127.0.0.1");
define("DB_NAME", "agenda_contatos");
define("DB_USER", "eder");
define("DB_PASS", "6bMclDkitV5rwHF2");

 
function connect() {
    
    $statement = null;    

    if(null == $statement) {
        try {
            $statement = new PDO("mysql:host=".DB_HOST.";"."dbname=".DB_NAME, DB_USER, DB_PASS); 
        }
        catch(PDOException $exception) {
            die($exception->getMessage());
        }
    }        
    return $statement;
}

function disconnect() {     
    $statement = null;
}


?>