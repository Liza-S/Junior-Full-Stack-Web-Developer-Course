$(function(){

    console.log($('#test').find('span'));
    console.log($('#test').children('div'));

    var allDiv = $('div');
    console.log(allDiv.filter('.test'));
    console.log(allDiv.filter('#test'));

    console.log(allDiv.is('#test'));
    console.log(allDiv.is('.test'));
    console.log(allDiv.is('.test2'));

    console.log(allDiv.has('span'));
    console.log($('.test').parent());

    console.log($('.test').parents());
    console.log($('.test').parents('div'));

    console.log($('div').eq(1));
});

