$(function () {

    console.log($('h1').css('color'));
    $('h1').css('color', 'blue');

    $('h1').css({'color': 'blue',
				'font-size' : '45px',
				textDecoration: 'underline'});

});

