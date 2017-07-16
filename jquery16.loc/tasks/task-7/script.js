$(function () {

    $('ul').css({
    	'background-color': 'blue',
    	'color': 'white'});

    var color = ['red', 'orange', 'blue', 'cyan', 'purple', 'green', 'yellow'];
    setInterval(function() {
        $('h1').css({backgroundColor:color[rand(0, color.length-1)]})
    }, 1000);

    function rand(min, max) {
        return Math.floor(min+ Math.random() * (max + 1 - min));
    }

});

