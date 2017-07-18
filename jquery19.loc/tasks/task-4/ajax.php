<?php


if($_POST['getJSON'] == true) {
    
    
    
    
    echo json_encode(['status' => true, 'message' =>'Hello! What are you doing here?', 'author' => 'PHP7.1']);
    exit;
    
}


