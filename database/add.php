<?php
    session_start();

    $table_name = $_SESSION['table'];
    $_SESSION['table'] = '';

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $encrypted = password_hash($password, PASSWORD_BCRYPT);

    try{
        $command = "INSERT INTO 
            $table_name(first_name, last_name, email, password, created_at, updated_at)     
        VALUE 
            ('".$first_name."', '".$last_name."', '".$email."', '".$encrypted."', NOW(), NOW())";
            
        include('conexao.php');

        $conn->exec($command);
        $response =[
            'sucess'=>true,
            'message'=>$first_name . ' ' . $last_name . ' adicionado com sucesso ao sistema.'
        ];
    }catch (PDOException $e) {
        $response =[
            'sucess'=>false,
            'message'=>$e->getMessage()
        ];     
    }

    $_SESSION['response'] = $response;
    header('location: ../user-add.php');
    