$(function () {

    var $target = $('.block');
	var hold = 1000;

	$.each($target,function(i,t){
	     var $this = $(t);
	     setTimeout(function(){ $this.show('normal').delay(5000).hide('normal'); }, i*hold);
	});
});

