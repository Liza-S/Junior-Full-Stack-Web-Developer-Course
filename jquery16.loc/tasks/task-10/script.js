$(function () {

	function showP(index) {
		alert('Вы готовы?');
		var currentP = $('p').eq(index);
		currentP.show();
		$('.load').animate({width: '100%'}, 10000,function() {
			$('.load').css('width', 0);
			$().hide();
			currentP.hide();
			if ((++index) <= 5) {
				showP(index);
			} else {
				return null;
			}
		});
	}
	showP(0);

});

