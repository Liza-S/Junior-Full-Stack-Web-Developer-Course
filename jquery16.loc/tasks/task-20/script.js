$(function () {
   
   	console.log($('.product').data());
   	console.log($('.product').data('type'));
   	console.log($('.product').data('productId'));

   	$('.product').data({'key': 5, 'key2': 6});
   	console.log($('.product').data());

   	$('product').data('key', 5);
   	$('product').data('type','product2');
   	console.log($('.product').data());

   	$('.product').data('test', {'1':1, 'test':2});
   	console.log($('.product').data());
});

