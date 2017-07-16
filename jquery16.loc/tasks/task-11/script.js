$(function () {

    $('ul').append('<li>three</li>');
    $('<li>three</li>').appendTo($('ul'));

    $('ul').prepend('<li>zero</li>');
    $('<li>zero</li>').prependTo($('ul'));

});

