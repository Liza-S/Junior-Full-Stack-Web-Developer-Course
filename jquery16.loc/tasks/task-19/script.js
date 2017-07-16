$(function () {
   
   	$('li').each(function(i, elem) {
   		alert($(elem).text());
   	});

   	$('#one > li').prepend(function(i) {
   		return (i+1) +'. ';
   	});

   	$('#two > li').prepend(function(i) {
   		return (i+1) +'. ';
   	});

   	$("img:not([alt])").each(function (i, elem) {
   		$(elem).attr('alt', 'nature'+(i+1)+'.jpg');
   	});

   
});

