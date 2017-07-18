$(function () {
	$.post('/task-3/', {getHTML: true}, function (html) {
		console.log(html);
		$('.jsblock').html(html);
	});

});










