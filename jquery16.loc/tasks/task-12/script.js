$(function () {

    $('p.test').after('<p>after p.test</p>');
    $('<p>after p.test</p>').insertAfter($('p.test'));

    $('p.test').before('<p>after p.test</p>');
    $('<p>after p.test</p>').insertBefore($('p.test'));
    
});

