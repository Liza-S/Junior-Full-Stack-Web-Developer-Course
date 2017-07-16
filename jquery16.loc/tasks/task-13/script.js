$(function () {

    $('.fast').snow();
    $('.slow').snow(3000, function() {
    	alert('Анимация закончилась');
    });

    var option = [

    ]

    $('slow').show(option);
});

