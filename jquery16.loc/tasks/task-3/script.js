$(function(){
    
    console.log($('h1'));
    console.log($('h1', 'h2'));
    console.log($('.test'));
    console.log($('a[href^="#"'));
    console.log($('a[href^="http"'));

    console.log($(document.getElementById('test')));

    var test = $('#test');
    console.log($(test));

});

