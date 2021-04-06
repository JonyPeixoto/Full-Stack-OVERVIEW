$(function(){

	checkClickMenu();

	function checkClickMenu(){
		$('a').click(function(){
			var href = $(this).attr('href');
			$.ajax({
				'beforeSend': function(){
					console.log("We are calling beforesend!");
				},
				'timeout': 10000,
				'url':href,
				'error':function(jqXHR,textStatus,errorThrown){
					if(jqXHR.statusText == 'Not Found'){
						console.log("Page not found.");
					}
				},
				'success':function(data){
					//$('#container').html(data);
					$('#container').html('');
					$(data).appendTo('#container').fadeIn();
				}
			})
			return false;
		})
	}

});	