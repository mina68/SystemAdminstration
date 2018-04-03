 
var available_rim_sizes 		= ['16','17','18','19','20','22.5','24','25','رواكد'];
var available_tyre_sizes 		= ['16/600','16/650','16/700','16/750','16/825','16/900','16/1050','17.5','18/1000','18/1200','18/18*12.5','19/600','20/600','20/650','20/700','20/750','20/825','20/900','20/1000','20/1100','20/1200','20/1300','20/1400','21','22.5/10','22.5/11','22.5/12','22.5/13','22.5/295/60','22.5/295/70','22.5/295/80','22.5/315/60','22.5/315/65','22.5/315/70','22.5/315/80','24/1200','24/1300','24/1400','24/16.9','24/17','24/18','25/15.5','25/17.5','25/20.5','25/32.5','25/26.5','25/29.5','رواكد'];
var available_tube_sizes 		= ['15','16','19','20','24','25','رواكد'];
var available_ribbon_sizes		= ['15','16','20','24','25','رواكد'];
var available_tyre_tubes_brands = ['ميشلان','ساميتومو','باروم','تايجر','كوبر','نانكانج','نيتو','باكيت','كليبر','اليانس','اودسو','سها','سوبر ستون','اورورا','دستون','دي ماستر','ميلر','ثاندرار','جيه كيه','سمسون','سمسونج','جود ريش','نسر','بريجستون','يوكوهاما','تويو','فايرستون','ميتس','بتلاس','جود يير','فولدا','صافا','كومهو','هانكوك','نوكيا','كونتننتال','مارشال','جي تي','فديرال','مكسيس','شمبيون','ريكن','كيندا','بريسا','صيني','اوتانا','روسي','اوكراني','سيريلانكي','فيتنامي','دانلوب','شات','بريللي','تريال','فاروس'];
var available_holes_number		= ['5','6','8','10','19'];

$(document).ready(function()
{   
	$(".search_type").val('متاح');
	$(".element_type").val($(".active").text());

	$(".p-1").on("click", function(){
		$(".search_type").val('مباع');
		$('.after-1').show();
		$('.after-2').hide();
    	$('.items-search').fadeOut(400,function(){
    		$('.buy_id').hide();
    		$('.items-search').fadeIn();
    	});
	});

	$(".p-2").on("click", function(){
		$(".search_type").val('متاح');
		$('.after-2').show();
		$('.after-1').hide();
		$('.items-search').fadeOut(400,function(){
    		$('.buy_id').show();
    		$('.items-search').fadeIn();
    	});
	});

    $(".type-search .list-unstyled .select_element").click(function(){
    	var target = $(this);
    	$(this).addClass('active');
    	$(this).siblings().removeClass('active');
    	$(".element_type").val($(".active").text());
    	$('.items-search').fadeOut(400 ,function(){
    		if(target.is(":contains('جنط')"))
	    	{
	    		$(".items-search li").siblings().css("display","inline-block");
	    		$(".tyre_type,.brand").hide();
	    	}
	    	else if(target.is(":contains('اطار')"))
	    	{
	    		$(".items-search li").siblings().css("display","inline-block");
	    		$(".rim_type,.holes_number").hide();
	    	}
	    	else if(target.is(":contains('شنبر')"))
	    	{
	    		$(".items-search li").siblings().css("display","inline-block");
	    		$(".tyre_type,.rim_type,.holes_number").hide();
	    	}
	    	else if(target.is(":contains('شريط')"))
	    	{
	    		$(".items-search li").siblings().css("display","inline-block");
	    		$(".tyre_type,.rim_type,.holes_number,.brand").hide();
	    	}
	    	if($(".search_type").val()=='مباع')
				$('.buy_id').hide();
	    	$('.items-search').fadeIn();
    	});
    });

    $(document).on('keyup', ".size", function(){
    	if($(".type-search .list-unstyled .active").is(":contains('جنط')"))
    		var used_array = available_rim_sizes;
    	if($(".type-search .list-unstyled .active").is(":contains('اطار')"))
    		var used_array = available_tyre_sizes;
    	if($(".type-search .list-unstyled .active").is(":contains('شنبر')"))
    		var used_array = available_tube_sizes;
    	if($(".type-search .list-unstyled .active").is(":contains('شريط')"))
    		var used_array = available_ribbon_sizes;
		var val = $(".size .choose-from").val();
		if(val.length==0)
		{
			$(".meun-search-1").css("display","none");
		}
		else
		{
			$(".meun-search-1 .menu-item").empty();
			var count = 0;
			for(var i=0 ; i<used_array.length ; i++)
			{
				if(used_array[i].includes(val))
				{
					$(".meun-search-1 .menu-item").append("<li>"+used_array[i]+"</li>");
					count++;
				}
				if(count == 5)
					break;
			}
			$(".meun-search-1").css("display","block");
		}
	})

	$(document).on('keyup', ".brand", function(){
    	if($(".type-search .list-unstyled .active").is(":contains('جنط')"))
    		var used_array = available_rim_brands;
    	if($(".type-search .list-unstyled .active").is(":contains('اطار')"))
    		var used_array = available_tyre_tubes_brands;
    	if($(".type-search .list-unstyled .active").is(":contains('شنبر')"))
    		var used_array = available_tyre_tubes_brands;
   
		var val = $(".brand .choose-from").val();
		if(val.length==0)
		{
			$(".meun-search-2").css("display","none");
		}
		else
		{
			$(".meun-search-2 .menu-item").empty();
			var count = 0;
			for(var i=0 ; i<used_array.length ; i++)
			{
				if(used_array[i].includes(val))
				{
					$(".meun-search-2 .menu-item").append("<li>"+used_array[i]+"</li>");
					count++;
				}
				if(count == 5)
					break;
			}
			$(".meun-search-2").css("display","block");
		}
	})

	$(document).on('keyup', ".holes_number", function(){
    	var used_array = available_holes_number;
		var val = $(".holes_number .choose-from").val();
		if(val.length==0)
		{
			$(".meun-search-3").css("display","none");
		}
		else
		{
			$(".meun-search-3 .menu-item").empty();
			var count = 0;
			for(var i=0 ; i<used_array.length ; i++)
			{
				if(used_array[i].includes(val))
				{
					$(".meun-search-3 .menu-item").append("<li>"+used_array[i]+"</li>");
					count++;
				}
				if(count == 5)
					break;
			}
			$(".meun-search-3").css("display","block");
		}
	})

	$(document).on('mousedown', ".meun-search-1 .menu-item li", function(){
		$(".size .choose-from").val($(this).text());
		$(".meun-search-1").css("display","none");
	})

	$(document).on('blur', ".size .choose-from", function(){
		$(".meun-search-1").css("display","none");
	});

	$(document).on('mousedown', ".meun-search-2 .menu-item li", function(){
		$(".brand .choose-from").val($(this).text());
		$(".meun-search-2").css("display","none");
	})

	$(document).on('blur', ".brand .choose-from", function(){
		$(".meun-search-2").css("display","none");
	});

	$(document).on('mousedown', ".meun-search-3 .menu-item li", function(){
		$(".holes_number .choose-from").val($(this).text());
		$(".meun-search-3").css("display","none");
	})

	$(document).on('blur', ".holes_number .choose-from", function(){
		$(".meun-search-3").css("display","none");
	});
});

 	$(".type-search .list-unstyled .select_element").click(function(){
    	var target = $(this);
    	$(this).addClass('active');
    	$(this).siblings().removeClass('active');
    	$('.items-search').fadeOut(400 ,function(){
    		if(target.is(":contains('جنط')"))
	    	{
	    		$(".items-search li").siblings().css("display","inline-block");
	    		$(".tyre_type,.brand").hide();
	    	}
	    	else if(target.is(":contains('اطار')"))
	    	{
	    		$(".items-search li").siblings().css("display","inline-block");
	    		$(".rim_type,.holes_number").hide();
	    	}
	    	else if(target.is(":contains('شنبر')"))
	    	{
	    		$(".items-search li").siblings().css("display","inline-block");
	    		$(".tyre_type,.rim_type,.holes_number").hide();
	    	}
	    	else if(target.is(":contains('شريط')"))
	    	{
	    		$(".items-search li").siblings().css("display","inline-block");
	    		$(".tyre_type,.rim_type,.holes_number,.brand").hide();
	    	}
	    	$('.items-search').fadeIn();
    	});
    });
    

