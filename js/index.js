$(document).ready(function(){

	$('.submit-button').on('click' ,function(event){
		event.preventDefault();
		var username = $('.username').val();
		var password = $('.password').val();

		if(username.length == 0)
		{
			$('.warn-1').show();
		}
		else if(password.length == 0)
		{
			$('.warn-2').show();
		}
		else
		{
			$.ajax({
				url:'requests/login.php',
				data:{username:username ,password:password},
				type:'POST',
				success:function(data){
					if(!data)
						$('.warn-3').show();
					else
					{
						window.location = 'main_search.php';
					}
				}
			})
		}
	})

	$('.username').on('focus' ,function(){
		$('.warn-1').hide();
		$('.warn-3').hide();
	})

	$('.password').on('focus' ,function(){
		$('.warn-2').hide();
		$('.warn-3').hide();
	})
})