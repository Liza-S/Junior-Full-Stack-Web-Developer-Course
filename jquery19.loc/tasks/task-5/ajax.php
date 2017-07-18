<?php


if($_POST['login'] == 'admin' AND $_POST['pass'] == 'admin') {
    

    echo json_encode(['status' => true, 'auth' => true, 'message' => 'Аторизация прошла успешно!']);
    exit;
    
}


