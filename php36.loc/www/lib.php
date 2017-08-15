<?php

//$db->query("BEGIN; 
//        CREATE TABLE foo(id INTEGER PRIMARY KEY, email CHAR(255)); 
//        INSERT INTO foo (email) VALUES('email@gmail.com'); 
//        INSERT INTO foo (email) VALUES('lena@gmail.com'); 
//        INSERT INTO foo (email) VALUES('fedor@gmail.com'); 
//        COMMIT;"); 

function selectTask5() {
    $db = new SQLite3('tasks/task-5/db.sqlite');
    
    $results = $db->query('SELECT * FROM foo');
    
    while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
        $foo[] = $row;
    }
    
    return $foo;
}

