<?php
session_start();

$command = $_POST['command'];

switch ($command) {
    case 'getList': 
    
    if( !$_SESSION['list'] ) {
        
        $_SESSION['list'] = array(
            1 => array('id' => 1, 'name' => 'John', 'family'=> 'Peterson', 'age'=> 39, 'sex' => 'male', 'salary' => 11500, 'dismissal' => false ),
            2 => array('id' => 2, 'name' => 'Collins', 'family'=> 'Ramirez', 'age'=> 29, 'sex' => 'female', 'salary' => 9500, 'dismissal' => false ),
            3 => array('id' => 3, 'name' => 'Davis', 'family'=> 'Sanders', 'age'=> 60, 'sex' => 'male', 'salary' => 25000, 'dismissal' => false ),
            4 => array('id' => 4, 'name' => 'Iren', 'family'=> 'Coleman', 'age'=> 40, 'sex' => 'female', 'salary' => 784, 'dismissal' => false ),
            5 => array('id' => 5, 'name' => 'Allen', 'family'=> 'Russell', 'age'=> 18, 'sex' => 'male', 'salary' => 14800, 'dismissal' => false ),
        );
        
    }
        
    
    echo json_encode($_SESSION['list']);
    die();
    
    break; 
    
    case 'add':
        
        if($_POST['name'] AND $_POST['family'] AND $_POST['age'] AND $_POST['sex'] AND $_POST['salary']) {
            
            $new = array(
                'name' =>   $_POST['name'],
                'family'=>  $_POST['family'],
                'age'=>     $_POST['age'],
                'sex' =>    $_POST['sex'],
                'salary' => $_POST['salary'],
                'dismissal' =>false,
            );
            
            $_SESSION['list'][] = $new;
            
            end($_SESSION['list']);
            $last_id = key($_SESSION['list']);
            
            echo json_encode(array('status' =>true, 'new_id' => $last_id));
            die();
        }
        else die('params error!');
        
    break;
    
    case 'changeSalary':
        
        if( $_POST['newSalary'] AND $_POST['id']) {
            
            $id = (int)$_POST['id'];
            $newSalary = (float)$_POST['newSalary'];
            
            if(isset($_SESSION['list'][$id])) {
               
                $_SESSION['list'][$id]['salary'] = $newSalary;
                echo json_encode(array('status' =>true));
                die();
            }
            
            echo json_encode(array('status' =>false));
            die();

        }
        else die('params error!');
        
    break;
    
    case 'dismissal':
        
        if( $_POST['dismissal'] AND $_POST['id']) {
            
            $id = (int)$_POST['id'];
            $dismissal = (bool)$_POST['dismissal'];
            
            if(isset($_SESSION['list'][$id])) {
               
                $_SESSION['list'][$id]['dismissal'] = $dismissal;
                echo json_encode(array('status' =>true));
                die();
            }
            
            echo json_encode(array('status' =>false));
            die();

        }
        else die('params error!');
        
    break;
}




