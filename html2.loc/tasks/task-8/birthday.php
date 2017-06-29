<?php

if(isset($_GET['day']) AND isset($_GET['month']) AND isset($_GET['year'])) {
    
    
    $date = $_GET['day'].'.'.$_GET['month'].'.'.$_GET['year'];
    
    echo '<h3>Дата моего рождения: '.$date.'</h3>';
    
    echo '<hr>';
}

?>