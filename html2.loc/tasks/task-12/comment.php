<?php

if(isset($_GET['username']) AND isset($_GET['family_name']) AND isset($_GET['comment'])) {
    
    
    echo '<h1>Данные, полученные сервером</h1>';
    echo '<pre>';
    
    foreach($_GET AS $key => $val) {
        echo $key, ' => ', $val;
        echo '<br>';
    }
    
    echo '</pre>';
    echo '<hr>';
    
}
