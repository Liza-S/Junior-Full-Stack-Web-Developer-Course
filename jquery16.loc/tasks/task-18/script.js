$(function () {
   
   $('div').each(function(index, element) {
   	console.log('div №' + index + 'html code: ' + $(element).html());

   	console.log($(element));
   	console.log($(this));

   	function f() {
   		console.log($(element));
   		console.log($(this));
   	}

   	f();
   });
   
});

