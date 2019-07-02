<?php

    require 'config/db.php';

    session_start();

    $user_id = $_SESSION['user_id'];
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

    $pdo = connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO contatos (user_id, empresa, contato, cargo, telefone, celular, site, email, endereco, bairro, cidade, uf, cep) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($user_id,$empresa,$contato,$cargo,$telefone,$celular,$site,$email,$endereco,$bairro,$cidade,$uf,$cep));

    disconnect();

    header("Location: index.php");

?>