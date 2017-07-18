$(function () {
	$('#submit').click(function() {
		var login = $('#login').val();
		var pass = $('#pass').val();
		$.post('/task-5/', {login:login, pass:pass}, function(data) {
			console.log(data.status);
			if (data.status == true) {
				alert("Вы авторизированы");
			}
		}, 'json');
	});
});

















