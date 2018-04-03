
$(document).ready(function()
{   
	$(".search_type").val('شراء');

	$(".p-1").on("click", function(){
		$(".search_type").val('بيع');
		$('.after-1').show();
		$('.after-2').hide();
		$(this).addClass('active');
    	$(this).siblings().removeClass('active');
		control_search_elements();
	});

	$(".p-2").on("click", function(){
		$(".search_type").val('شراء');
		$('.after-2').show();
		$('.after-1').hide();
		$(this).addClass('active');
    	$(this).siblings().removeClass('active');
		control_search_elements();
	});

    function control_search_elements()
    {	
	    $('.items-search').fadeOut(400,function(){
    		if($(".active em").is(":contains('بيع')"))
	    	{
	    		$(".items-search li").siblings().css("display","inline-block");
	    		$(".seller_name,.buy_id").hide();
	    	}
	    	if($(".active em").is(":contains('شراء')"))
	    	{
	    		$(".items-search li").siblings().css("display","inline-block");
	    		$(".buyer_name,.sell_feed").hide();
	    	}
    		$('.items-search').fadeIn();
    	});
    }

    $(document).on('keyup', ".buyer_name ,.seller_name", function(){

    	var request;
    	var val;
    	if($(".active em").is(":contains('بيع')"))
    	{
    		request = 'get_buyers_names';
    		val = $(".buyer_name .choose-from").val();
    	}
    	if($(".active em").is(":contains('شراء')"))
    	{
    		request = 'get_sellers_names';
    		val = $(".seller_name .choose-from").val();
    	}
  
		if(val.length==0)
		{
			$(".meun-search-1").css("display","none");
		}
		else
		{
			$(".meun-search-1 .menu-item").empty();

			$.ajax({
				url:"requests/dealers.php",
				data:{request:request},
				type:"POST",
				success:function(data){
					var encoded_data = JSON.parse(data);
					for(var i=0 ; i<encoded_data.length ; i++)
					{
						var count = 0;
						if(encoded_data[i].includes(val))
						{
							$(".meun-search-1 .menu-item").append('<li>'+encoded_data[i]+'</li>');
							count++;
						}
						if(count == 5)
							break;
					}
					$(".meun-search-1").css("display","block");
				}
			});
		}
	})


	$(document).on('mousedown', ".meun-search-1 .menu-item li", function(){
		if($(".active em").is(":contains('بيع')"))
			$(".buyer_name .choose-from").val($(this).text());
		else if($(".active em").is(":contains('شراء')"))
			$(".seller_name .choose-from").val($(this).text());
		$(".meun-search-1").css("display","none");
	})

	$(document).on('blur', ".buyer_name .choose-from ,.seller_name .choose-from", function(){
		$(".meun-search-1").css("display","none");
	});
});
    

