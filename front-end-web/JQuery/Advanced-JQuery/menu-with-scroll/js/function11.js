$(function(){

	$.ajax({
		'url':'Ajax-CONTENT-PART2.html',
		//'method':'post'
		//data:{'name:','age':'24'}

	}).done(function(data){
		$('#container').append(data);
	});

});