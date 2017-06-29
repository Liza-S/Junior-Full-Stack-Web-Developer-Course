<?php


if(isset($_FILES['img'])) {
    
    $destination = __DIR__.DIRECTORY_SEPARATOR.'img.jpg';
    $fileType = exif_imagetype($_FILES['img']['tmp_name']);
    if($fileType == 2){
    $res = move_uploaded_file($_FILES['img']['tmp_name'], $destination);
    
    echo 'Вы загрузили картинку: ';
    echo '<img src="/tasks/task-16/img.jpg" />';
    
    } else {
        echo 'картинка не jpg';
    }

}

