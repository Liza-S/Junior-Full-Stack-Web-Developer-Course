$(function () {
   
   console.log($('.test').attr('title'));
   $('.test').attr('title', 'new title');
   $('.test').attr({
   	'title': 'new title',
   	'lang': 'en'
   });

});

