$(function () {

	function getList() {
		$.post('/task-6/', {command: 'getList'}, function (list) {
			//var list;

				var html = '<table>';
				for (var i in list){
				
					html+= '<tr><td>'+list[i].name+'</td><td>'+list[i].family+'</td><td>'+list[i].age+'</td><td>'+list[i].sex+'</td><td>'+list[i].salary+'</td><td>'+list[i].dismissal+'</td></tr>';
				}
				html += '</table>';
				
				$('.list-employee').html(html);

		}, 'json');
	}
getList();

	$('#submit').click(function() {  
  		$.post('/task-6/', $('#form').serialize() , function(add) {
   			console.log(add);
   			getList();
  		}, 'json');
 	});

 	$('#chSalButton').click(function() {
 		$.post('/task-6/', $('#chSalary').serialize(), function(chSal) {
 			console.log(chSal);
 			getList();
 		}, 'json');
 	});

 	$('#dismissalButton').click(function() {
 		$.post('/task-6/', $('#dismissal').serialize(), function(dis) {
 			console.log(dis);
 			getList();
 		}, 'json');
 	}); 
});