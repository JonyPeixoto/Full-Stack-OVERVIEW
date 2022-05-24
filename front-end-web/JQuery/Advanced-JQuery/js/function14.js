$(function(){

	var currentIndex = 0;
	var maximumIndex = $('.slider img').length;
	var delay = 5000;
	initSlider();
	clickSlider();


	function initSlider(){
		for(var i = 0; i < maximumIndex; i++){
			/*<span style="background: #069;"></span>
			<span></span>
			<span></span>
			*/
			if(i == 0){
				$('.bullets-nav').append('<span style="background:#069;"></span>')
			}else{
				$('.bullets-nav').append('<span></span>');
			}
		}
		$('.slider img').eq(0).fadeIn();
		setInterval(function(){
			switchSlider();
		},delay);
	}

	function clickSlider(){
		$('.bullets-nav span').click(function(){
			$('.slider img').eq(currentIndex).stop().fadeOut(2000);
			currentIndex = $(this).index();
			$('.slider img').eq(currentIndex).stop().fadeIn(2000);
			$('.bullets-nav span').css('background-color','#ccc');
			$(this).css('background-color','#069');
		});
	}

	function switchSlider(){
		$('.slider img').eq(currentIndex).stop().fadeOut(2000);
		currentIndex+=1;
		if(currentIndex == maximumIndex)
			currentIndex = 0;
		$('.bullets-nav span').css('background-color','#ccc');
		$('.bullets-nav span').eq(currentIndex).css('background-color','#069');
		$('.slider img').eq(currentIndex).stop().fadeIn(2000);
	}

});	