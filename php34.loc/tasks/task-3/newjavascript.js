/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



var number = 5;
var number2 = 0;
var number3 = 6;
var string = '';

console.log(number && number3); //выведет 6
console.log(number && number2 && string); //выведет 0

console.log(string || number2); //выведет 0
console.log(string || number2 || number); //выведет 5


    var object = {
        age: 1,
        sex: 'male'
        
    };

  
