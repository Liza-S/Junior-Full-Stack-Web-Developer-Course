<?php
header('Content-Type: text/html; charset=utf-8');
$request = $_SERVER['REQUEST_URI'];

if( preg_match("/^\/task-(\d+)\/(\?.*)?$/", $request, $match) ) {
    
    // страницы с заданиями
    $task_id = $match[1];
    
    if(!$task_id) {
        header( 'Location: /404/', true, 302 );
        exit();
    }  
    
    $path = "tasks/task-{$task_id}/index-{$task_id}.html";
    
    if(file_exists($path)) {
        
        include $path;
    } else die('file error');
    
    
} else {
    
    // остальные страницы
    switch($request) {

        case '/'            : include "www/index.html"; break;
        case '/task-list/'  : include "www/task_list.html"; break;
        default             : include "www/404.html"; break;
    }
    
}




die();




