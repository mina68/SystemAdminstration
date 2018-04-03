var available_rim_sizes 		= ['16','17','18','19','20','22.5','24','25','رواكد'];
var available_tyre_sizes 		= ['16/600','16/650','16/700','16/750','16/825','16/900','16/1050','17.5','18/1000','18/1200','18/18*12.5','19/600','20/600','20/650','20/700','20/750','20/825','20/900','20/1000','20/1100','20/1200','20/1300','20/1400','21','22.5/10','22.5/11','22.5/12','22.5/13','22.5/295/60','22.5/295/70','22.5/295/80','22.5/315/60','22.5/315/65','22.5/315/70','22.5/315/80','24/1200','24/1300','24/1400','24/16.9','24/17','24/18','25/15.5','25/17.5','25/20.5','25/32.5','25/26.5','25/29.5','رواكد'];
var available_tube_sizes 		= ['15','16','19','20','24','25','رواكد'];
var available_ribbon_sizes		= ['15','16','20','24','25','رواكد'];
var available_tyre_tubes_brands = ['ميشلان','ساميتومو','باروم','تايجر','كوبر','نانكانج','نيتو','باكيت','كليبر','اليانس','اودسو','سها','سوبر ستون','اورورا','دستون','دي ماستر','ميلر','ثاندرار','جيه كيه','سمسون','سمسونج','جود ريش','نسر','بريجستون','يوكوهاما','تويو','فايرستون','ميتس','بتلاس','جود يير','فولدا','صافا','كومهو','هانكوك','نوكيا','كونتننتال','مارشال','جي تي','فديرال','مكسيس','شمبيون','ريكن','كيندا','بريسا','صيني','اوتانا','روسي','اوكراني','سيريلانكي','فيتنامي','دانلوب','شات','بريللي','تريال','فاروس'];
var available_holes_number		= ['5','6','8','10','19'];
var rims_to_delete				= [];
var tyres_to_delete				= [];
var tubes_to_delete				= [];
var ribbons_to_delete			= [];
var restrict_canceling			= 0;

$(document).ready(function(){

	var request_id = $('.edit_request').val();

	if (typeof request_id !== 'undefined')
	{
		$.ajax({
			url:'requests/buy.php',
			data:{request:'get_buy_data' , buy_id:request_id},
			type:'POST',
			success:function(data){
				encoded_data = JSON.parse(data);
				$(".seller_name").val(encoded_data['seller_name']);
				$(".buy_date").val(encoded_data['buy_date']);
				$('.total_paid').val(encoded_data['total_paid']);
				$('.paid').val(encoded_data['paid']);
				$('.buy_notes').val(encoded_data['notes']);
			}
		})
		$.ajax({
			url:'requests/buy.php',
			data:{request:'get_buy_rims' , buy_id:request_id},
			type:'POST',
			success:function(data){
				encoded_data = JSON.parse(data);
				if(encoded_data.length > 0)
				{
					$(".number-items .rims h2").text("الجنوط المشتراه");
					for(var i=0 ; i<encoded_data.length ; i++)
					{
						var number_sold;
						$.ajaxSetup({async: false});
						$.ajax({
							url:'requests/get_item_data.php',
							data:{request:'get_rim_number_sold' , id:encoded_data[i]['rim_id']},
							type:'POST',
							success:function(data_2){
								number_sold = JSON.parse(data_2);
								if(number_sold>0)
									restrict_canceling = 1;
							}
						})
						$.ajaxSetup({async: true});
						if(number_sold>0)
							$(".number-items .rims").append('<div class="item-added-info"><ul class="list-unstyled target_rim"><li><label> المقاس : </label><span class="text_size">'+encoded_data[i]['size']+'</span></li><li><label> الحالة : </label><span class="text_status">'+encoded_data[i]['status']+'</span></li><li><label>  النوع : </label><span class="text_new_old">'+encoded_data[i]['new_old']+'</span></li><li><label>  العدد : </label><span class="text_total_count">'+encoded_data[i]['total_count']+'</span></li><li><label>  سعر القطعة : </label><span class="text_buy_price">'+encoded_data[i]['buy_price']+'</span></li><input hidden class="item_total_count" value="'+encoded_data[i]['total_count']+'"><input hidden class="item_size" value="'+encoded_data[i]['size']+'"><input hidden class="item_holes_number" value="'+encoded_data[i]['holes_number']+'"><input hidden class="item_status" value="'+encoded_data[i]['status']+'"><input hidden class="item_new_old" value="'+encoded_data[i]['new_old']+'"><input hidden class="item_rim_type" value="'+encoded_data[i]['type']+'"><input hidden class="item_buy_price" value="'+encoded_data[i]['buy_price']+'"><input hidden class="item_evaluative_price" value="'+encoded_data[i]['evaluative_price']+'"><input hidden class="item_notes" value="'+encoded_data[i]['notes']+'"><input hidden class="item_id" value="'+encoded_data[i]['rim_id']+'"><input hidden class="number_sold" value="'+number_sold+'"><li><i title="تعديل على العنصر" class="fa fa-pencil edit"></i></li></ul></div>');						
						else
							$(".number-items .rims").append('<div class="item-added-info"><ul class="list-unstyled target_rim"><li><label> المقاس : </label><span class="text_size">'+encoded_data[i]['size']+'</span></li><li><label> الحالة : </label><span class="text_status">'+encoded_data[i]['status']+'</span></li><li><label>  النوع : </label><span class="text_new_old">'+encoded_data[i]['new_old']+'</span></li><li><label>  العدد : </label><span class="text_total_count">'+encoded_data[i]['total_count']+'</span></li><li><label>  سعر القطعة : </label><span class="text_buy_price">'+encoded_data[i]['buy_price']+'</span></li><input hidden class="item_total_count" value="'+encoded_data[i]['total_count']+'"><input hidden class="item_size" value="'+encoded_data[i]['size']+'"><input hidden class="item_holes_number" value="'+encoded_data[i]['holes_number']+'"><input hidden class="item_status" value="'+encoded_data[i]['status']+'"><input hidden class="item_new_old" value="'+encoded_data[i]['new_old']+'"><input hidden class="item_rim_type" value="'+encoded_data[i]['type']+'"><input hidden class="item_buy_price" value="'+encoded_data[i]['buy_price']+'"><input hidden class="item_evaluative_price" value="'+encoded_data[i]['evaluative_price']+'"><input hidden class="item_notes" value="'+encoded_data[i]['notes']+'"><input hidden class="item_id" value="'+encoded_data[i]['rim_id']+'"><li><i title="تعديل على العنصر" class="fa fa-pencil edit"></i><i title="الغاء العنصر" class="fa fa-trash-o delete"></i></li></ul></div>');
					}
				}
			}
		})
		$.ajax({
			url:'requests/buy.php',
			data:{request:'get_buy_tyres' , buy_id:request_id},
			type:'POST',
			success:function(data){
				encoded_data = JSON.parse(data);
				if(encoded_data.length > 0)
				{
					$(".number-items .tyres h2").text("الاطارات المشتراه");
					for(var i=0 ; i<encoded_data.length ; i++)
					{
						var number_sold;
						$.ajaxSetup({async: false});
						$.ajax({
							url:'requests/get_item_data.php',
							data:{request:'get_tyre_number_sold' , id:encoded_data[i]['tyre_id']},
							type:'POST',
							success:function(data_2){
								number_sold = JSON.parse(data_2);
								if(number_sold>0)
									restrict_canceling = 1;
							}
						})
						$.ajaxSetup({async: true});
						if(number_sold>0)
							$(".number-items .tyres").append('<div class="item-added-info"><ul class="list-unstyled target_tyre"><li><label> المقاس : </label><span class="text_size">'+encoded_data[i]['size']+'</span></li><li><label> الحالة : </label><span class="text_status">'+encoded_data[i]['status']+'</span></li><li><label>  النوع : </label><span class="text_new_old">'+encoded_data[i]['new_old']+'</span></li><li><label>  العدد : </label><span class="text_total_count">'+encoded_data[i]['total_count']+'</span></li><li><label>  سعر القطعة : </label><span class="text_buy_price">'+encoded_data[i]['buy_price']+'</span></li><input hidden class="item_total_count" value="'+encoded_data[i]['total_count']+'"><input hidden class="item_size" value="'+encoded_data[i]['size']+'"><input hidden class="item_brand" value="'+encoded_data[i]['brand']+'"><input hidden class="item_status" value="'+encoded_data[i]['status']+'"><input hidden class="item_new_old" value="'+encoded_data[i]['new_old']+'"><input hidden class="item_tyre_type" value="'+encoded_data[i]['type']+'"><input hidden class="item_buy_price" value="'+encoded_data[i]['buy_price']+'"><input hidden class="item_evaluative_price" value="'+encoded_data[i]['evaluative_price']+'"><input hidden class="item_notes" value="'+encoded_data[i]['notes']+'"><input hidden class="item_id" value="'+encoded_data[i]['tyre_id']+'"><input hidden class="number_sold" value="'+number_sold+'"><li><i title="تعديل على العنصر" class="fa fa-pencil edit"></i></li></ul></div>');						
						else
							$(".number-items .tyres").append('<div class="item-added-info"><ul class="list-unstyled target_tyre"><li><label> المقاس : </label><span class="text_size">'+encoded_data[i]['size']+'</span></li><li><label> الحالة : </label><span class="text_status">'+encoded_data[i]['status']+'</span></li><li><label>  النوع : </label><span class="text_new_old">'+encoded_data[i]['new_old']+'</span></li><li><label>  العدد : </label><span class="text_total_count">'+encoded_data[i]['total_count']+'</span></li><li><label>  سعر القطعة : </label><span class="text_buy_price">'+encoded_data[i]['buy_price']+'</span></li><input hidden class="item_total_count" value="'+encoded_data[i]['total_count']+'"><input hidden class="item_size" value="'+encoded_data[i]['size']+'"><input hidden class="item_brand" value="'+encoded_data[i]['brand']+'"><input hidden class="item_status" value="'+encoded_data[i]['status']+'"><input hidden class="item_new_old" value="'+encoded_data[i]['new_old']+'"><input hidden class="item_tyre_type" value="'+encoded_data[i]['type']+'"><input hidden class="item_buy_price" value="'+encoded_data[i]['buy_price']+'"><input hidden class="item_evaluative_price" value="'+encoded_data[i]['evaluative_price']+'"><input hidden class="item_notes" value="'+encoded_data[i]['notes']+'"><input hidden class="item_id" value="'+encoded_data[i]['tyre_id']+'"><li><i title="تعديل على العنصر" class="fa fa-pencil edit"></i><i title="الغاء العنصر" class="fa fa-trash-o delete"></i></li></ul></div>');
	    			}	
				}
			}
		})
		$.ajax({
			url:'requests/buy.php',
			data:{request:'get_buy_tubes' , buy_id:request_id},
			type:'POST',
			success:function(data){
				encoded_data = JSON.parse(data);
				if(encoded_data.length > 0)
				{
					$(".number-items .tubes h2").text("الشنابر المشتراه");
					for(var i=0 ; i<encoded_data.length ; i++)
					{
						var number_sold;
						$.ajaxSetup({async: false});
						$.ajax({
							url:'requests/get_item_data.php',
							data:{request:'get_tube_number_sold' , id:encoded_data[i]['tube_id']},
							type:'POST',
							success:function(data_2){
								number_sold = JSON.parse(data_2);
								if(number_sold>0)
									restrict_canceling = 1;
							}
						})
						$.ajaxSetup({async: true});
						if(number_sold>0)
							$(".number-items .tubes").append('<div class="item-added-info"><ul class="list-unstyled target_tube"><li><label> المقاس : </label><span class="text_size">'+encoded_data[i]['size']+'</span></li><li><label> الحالة : </label><span class="text_status">'+encoded_data[i]['status']+'</span></li><li><label>  النوع : </label><span class="text_new_old">'+encoded_data[i]['new_old']+'</span></li><li><label>  العدد : </label><span class="text_total_count">'+encoded_data[i]['total_count']+'</span></li><li><label>  سعر القطعة : </label><span class="text_buy_price">'+encoded_data[i]['buy_price']+'</span></li><input hidden class="item_total_count" value="'+encoded_data[i]['total_count']+'"><input hidden class="item_size" value="'+encoded_data[i]['size']+'"><input hidden class="item_brand" value="'+encoded_data[i]['brand']+'"><input hidden class="item_status" value="'+encoded_data[i]['status']+'"><input hidden class="item_new_old" value="'+encoded_data[i]['new_old']+'"><input hidden class="item_buy_price" value="'+encoded_data[i]['buy_price']+'"><input hidden class="item_evaluative_price" value="'+encoded_data[i]['evaluative_price']+'"><input hidden class="item_notes" value="'+encoded_data[i]['notes']+'"><input hidden class="item_id" value="'+encoded_data[i]['tube_id']+'"><input hidden class="number_sold" value="'+number_sold+'"><li><i title="تعديل على العنصر" class="fa fa-pencil edit"></i></li></ul></div>');
						else
							$(".number-items .tubes").append('<div class="item-added-info"><ul class="list-unstyled target_tube"><li><label> المقاس : </label><span class="text_size">'+encoded_data[i]['size']+'</span></li><li><label> الحالة : </label><span class="text_status">'+encoded_data[i]['status']+'</span></li><li><label>  النوع : </label><span class="text_new_old">'+encoded_data[i]['new_old']+'</span></li><li><label>  العدد : </label><span class="text_total_count">'+encoded_data[i]['total_count']+'</span></li><li><label>  سعر القطعة : </label><span class="text_buy_price">'+encoded_data[i]['buy_price']+'</span></li><input hidden class="item_total_count" value="'+encoded_data[i]['total_count']+'"><input hidden class="item_size" value="'+encoded_data[i]['size']+'"><input hidden class="item_brand" value="'+encoded_data[i]['brand']+'"><input hidden class="item_status" value="'+encoded_data[i]['status']+'"><input hidden class="item_new_old" value="'+encoded_data[i]['new_old']+'"><input hidden class="item_buy_price" value="'+encoded_data[i]['buy_price']+'"><input hidden class="item_evaluative_price" value="'+encoded_data[i]['evaluative_price']+'"><input hidden class="item_notes" value="'+encoded_data[i]['notes']+'"><input hidden class="item_id" value="'+encoded_data[i]['tube_id']+'"><li><i title="تعديل على العنصر" class="fa fa-pencil edit"></i><i title="الغاء العنصر" class="fa fa-trash-o delete"></i></li></ul></div>');
					}
				}
			}
		})
		$.ajax({
			url:'requests/buy.php',
			data:{request:'get_buy_ribbons' , buy_id:request_id},
			type:'POST',
			success:function(data){
				encoded_data = JSON.parse(data);
				if(encoded_data.length > 0)
				{
					$(".number-items .ribbons h2").text("الشرائط المشتراه");
					for(var i=0 ; i<encoded_data.length ; i++)
					{
						var number_sold;
						$.ajaxSetup({async:false});
						$.ajax({
							url:'requests/get_item_data.php',
							data:{request:'get_ribbon_number_sold' , id:encoded_data[i]['ribbon_id']},
							type:'POST',
							success:function(data_2){
								number_sold = JSON.parse(data_2);
								if(number_sold>0)
									restrict_canceling = 1;
							}
						})
						$.ajaxSetup({async:true});
						if(number_sold>0)
							$(".number-items .ribbons").append('<div class="item-added-info"><ul class="list-unstyled target_ribbon"><li><label> المقاس : </label><span class="text_size">'+encoded_data[i]['size']+'</span></li><li><label> الحالة : </label><span class="text_status">'+encoded_data[i]['status']+'</span></li><li><label>  النوع : </label><span class="text_new_old">'+encoded_data[i]['new_old']+'</span></li><li><label>  العدد : </label><span class="text_total_count">'+encoded_data[i]['total_count']+'</span></li><li><label>  سعر القطعة : </label><span class="text_buy_price">'+encoded_data[i]['buy_price']+'</span></li><input hidden class="item_total_count" value="'+encoded_data[i]['total_count']+'"><input hidden class="item_size" value="'+encoded_data[i]['size']+'"><input hidden class="item_status" value="'+encoded_data[i]['status']+'"><input hidden class="item_new_old" value="'+encoded_data[i]['new_old']+'"><input hidden class="item_buy_price" value="'+encoded_data[i]['buy_price']+'"><input hidden class="item_evaluative_price" value="'+encoded_data[i]['evaluative_price']+'"><input hidden class="item_notes" value="'+encoded_data[i]['notes']+'"><input hidden class="item_id" value="'+encoded_data[i]['ribbon_id']+'"><input hidden class="number_sold" value="'+number_sold+'"><li><i title="تعديل على العنصر" class="fa fa-pencil edit"></i></li></ul></div>');
						else
							$(".number-items .ribbons").append('<div class="item-added-info"><ul class="list-unstyled target_ribbon"><li><label> المقاس : </label><span class="text_size">'+encoded_data[i]['size']+'</span></li><li><label> الحالة : </label><span class="text_status">'+encoded_data[i]['status']+'</span></li><li><label>  النوع : </label><span class="text_new_old">'+encoded_data[i]['new_old']+'</span></li><li><label>  العدد : </label><span class="text_total_count">'+encoded_data[i]['total_count']+'</span></li><li><label>  سعر القطعة : </label><span class="text_buy_price">'+encoded_data[i]['buy_price']+'</span></li><input hidden class="item_total_count" value="'+encoded_data[i]['total_count']+'"><input hidden class="item_size" value="'+encoded_data[i]['size']+'"><input hidden class="item_status" value="'+encoded_data[i]['status']+'"><input hidden class="item_new_old" value="'+encoded_data[i]['new_old']+'"><input hidden class="item_buy_price" value="'+encoded_data[i]['buy_price']+'"><input hidden class="item_evaluative_price" value="'+encoded_data[i]['evaluative_price']+'"><input hidden class="item_notes" value="'+encoded_data[i]['notes']+'"><input hidden class="item_id" value="'+encoded_data[i]['ribbon_id']+'"><li><i title="تعديل على العنصر" class="fa fa-pencil edit"></i><i title="الغاء العنصر" class="fa fa-trash-o delete"></i></li></ul></div>');
					}
				}
			}
		})
	}


	// SWITCHING BETWEEN TAPS WITH THE BAR

	$('.show_info_client ,.show_first_step ,.show_number_items ,.show_notice_sale ,.show_final_total').on('click' ,function(event){
		$(this).siblings().removeClass('active-menu-bar');
		$(this).addClass('active-menu-bar');
		if($(this).hasClass('show_info_client'))
			switch_tap($('.info-client'));
		else if($(this).hasClass('show_first_step'))
			switch_tap($('.first-step'));
		else if($(this).hasClass('show_number_items'))
			switch_tap($('.number-items'));
		else if($(this).hasClass('show_notice_sale'))
			switch_tap($('.notice-sale'));
		else if($(this).hasClass('show_final_total'))
			switch_tap($('.final-total'));
	})

	function switch_tap(to_show)
	{
		$('.info-client ,.first-step ,.number-items ,.notice-sale ,.final-total').hide();
		$(to_show).fadeIn();
	}


	// SWITCHING BETWEEN TABS WITH NEXT AND PRE BUTTONS

	$('.next_to_info_client').on('click' ,function(){
		$('.show_info_client').siblings().removeClass('active-menu-bar');
		$('.show_info_client').addClass('active-menu-bar');
		var current = $('.first-step');
		var next = $('.info-client');
		show_next(current,next);
	})
	$('.next_to_number_items').on('click' ,function(){
		$('.show_number_items').siblings().removeClass('active-menu-bar');
		$('.show_number_items').addClass('active-menu-bar');
		var current = $('.info-client');
		var next = $('.number-items');
		show_next(current,next);
	})
	$('.pre_to_first_step').on('click' ,function(){
		$('.show_first_step').siblings().removeClass('active-menu-bar');
		$('.show_first_step').addClass('active-menu-bar');
		var current = $('.info-client');
		var pre = $('.first-step');
		show_pre(current,pre);
	})
	$('.next_to_final_total').on('click' ,function(){
		$('.show_final_total').siblings().removeClass('active-menu-bar');
		$('.show_final_total').addClass('active-menu-bar');
		var current = $('.number-items');
		var next = $('.final-total');
		show_next(current,next);
	})
	$('.pre_to_info_client').on('click' ,function(){
		$('.show_info_client').siblings().removeClass('active-menu-bar');
		$('.show_info_client').addClass('active-menu-bar');
		var current = $('.number-items');
		var pre = $('.info-client');
		show_pre(current,pre);
	})
	$('.next_to_notice_sale').on('click' ,function(){
		$('.show_notice_sale').siblings().removeClass('active-menu-bar');
		$('.show_notice_sale').addClass('active-menu-bar');
		var current = $('.final-total');
		var next = $('.notice-sale');
		show_next(current,next);
	})
	$('.pre_to_number_items').on('click' ,function(){
		$('.show_number_items').siblings().removeClass('active-menu-bar');
		$('.show_number_items').addClass('active-menu-bar');
		var current = $('.final-total');
		var pre = $('.number-items');
		show_pre(current,pre);
	})
	$('.pre_to_final_total').on('click' ,function(){
		$('.show_final_total').siblings().removeClass('active-menu-bar');
		$('.show_final_total').addClass('active-menu-bar');
		var current = $('.notice-sale');
		var pre = $('.final-total');
		show_pre(current,pre);
	})


	function show_next(current ,next)
	{
		current.animate({right:'100%'} ,function(){
			next.css('left' ,'100%');
			current.hide().css({'right' : '' , 'left' : ''});
			next.show().animate({left:'0%'} ,function(){
				next.css('left' , '');
			});
		})
	}
	function show_pre(current ,pre)
	{
		current.animate({left:'100%'} ,function(){
			pre.css('right' ,'100%');
			current.hide().css({'right' : '' , 'left' : ''});
			pre.show().animate({right:'0%'} ,function(){
				pre.css('right' , '');
			});
		})
	}


	// SHOWING DEALERS' NAMES IN THE MENU

	$(document).on('keyup', ".seller_name", function(){
		var val = $(".seller_name").val();
		if(val.length==0)
		{
			$(".result-client").css("display","none");
		}
		else
		{
			$(".result-client").empty();

			$.ajax({
				url:"requests/dealers.php",
				data:{request:"get_all_dealers"},
				type:"POST",
				success:function(data){
					var encoded_data = JSON.parse(data);
					for(var i=0 ; i<encoded_data.length ; i++)
					{
						var count = 0;
						if(encoded_data[i].includes(val))
						{
							$(".result-client").append('<div class="number-client"><div class="info-number-client"><h3>'+encoded_data[i]+'</h3></div><div class="pic"><img src="images/6.png" alt="client picture"></div></div>');
							count++;
						}
						if(count == 5)
							break;
					}
					$(".result-client").css("display","block");
				}
			});
				
		}
	});

	$(document).on('mousedown', ".result-client .number-client", function(){
		$(".seller_name").val($(this).text());
		$(".result-client").css("display","none");
	});

	$(document).on('blur', ".seller_name", function(){
		$(".result-client").css("display","none");
	});






	//SET ACTIVE TO SELECTED ITEM TO ADD

	$(".type-search .type li").click(function(){
		$(".warn-8").empty();
		document.getElementById('adding_item').reset();
    	$(this).addClass('active');
    	$(this).siblings().removeClass('active');
    	$(".element_type").val($(".active").text());
    	if($(this).is(":contains('جنط')"))
    	{
    		$('.items-search').fadeOut(400,function(){
    			$(".items-search li").siblings().css("display","inline-block");
	    		$(".tyre_type,.brand").hide();
	    		$('.items-search').fadeIn();
    		})
    	}
    	if($(this).is(":contains('اطار')"))
    	{
    		$('.items-search').fadeOut(400,function(){
    			$(".items-search li").siblings().css("display","inline-block");
    			$(".rim_type,.holes_number").hide();
	    		$('.items-search').fadeIn();
    		})
    	}
    	if($(this).is(":contains('شنبر')"))
    	{
    		$('.items-search').fadeOut(400,function(){
    			$(".items-search li").siblings().css("display","inline-block");
    			$(".tyre_type,.rim_type,.holes_number").hide();
	    		$('.items-search').fadeIn();
    		})
    	}
    	if($(this).is(":contains('شريط')"))
    	{
    		$('.items-search').fadeOut(400,function(){
    			$(".items-search li").siblings().css("display","inline-block");
    			$(".tyre_type,.rim_type,.holes_number,.brand").hide();
	    		$('.items-search').fadeIn();
    		})
    	}
    });




    //CONTROLLING THE SEARCH INPUT FIELDS

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


	// ADDING ITEM TO THE PAGE

	$(document).on('click' ,'.add_item', function(event){
		event.preventDefault();
		var brand 				= $('.brand .choose-from').val();
		var size 				= $('.size .choose-from').val();
		var holes_number 		= $('.holes_number .choose-from').val();
		var tyre_type 			= $('.tyre_type .choose-from').val();
		var rim_type 			= $('.rim_type .choose-from').val();
		var status 				= $('.status .choose-from').val();
		var new_old 			= $('.new_old .choose-from').val();
		var total_count 		= Number($(".total_count .choose-from").val());
		var buy_price 			= Number($(".buy_price .choose-from").val());
		var evaluative_price	= Number($(".evaluative_price .choose-from").val());
		var item_notes			= $('.add-notice textarea').val();
		var error				=0;

		if($(".type-search .list-unstyled .active").is(":contains('جنط')"))
		{
			if($.inArray(holes_number, available_holes_number)==-1)
			{
				$(".warn-8").text("من فضلك ادخل عدد ثقوب صحيح !");
				error = 1;
			}
			else if($.inArray(size, available_rim_sizes)==-1){
				$(".warn-8").text("المقاس الذي ادخلته غير موجود !");
				error = 1;
			}
			else if(rim_type=='')
			{
				$(".warn-8").text("من فضلك حدد نوع الجنط");
				error=1
			}
		}

		else if($(".type-search .list-unstyled .active").is(":contains('اطار')"))
		{
			if($.inArray(brand,available_tyre_tubes_brands)==-1)
			{
				$(".warn-8").text("الماركة التي ادخلتها غير موجودة !");
				error = 1;
			}
			else if($.inArray(size, available_tyre_sizes)==-1)
			{
				$(".warn-8").text("المقاس الذي ادخلته غير موجود !");
				error = 1;
			}
			else if(tyre_type=='')
			{
				$(".warn-8").text("من فضلك حدد نوع الاطار");
				error=1
			}
		}

		else if($(".type-search .list-unstyled .active").is(":contains('شنبر')"))
		{
			if($.inArray(brand,available_tyre_tubes_brands)==-1)
			{
				$(".warn-8").text("الماركة التي ادخلتها غير موجودة !");
				error = 1;
			}
			else if($.inArray(size, available_tube_sizes)==-1)
			{
				$(".warn-8").text("المقاس الذي ادخلته غير موجود !");
				error = 1;
			}
		}

		else if($(".type-search .list-unstyled .active").is(":contains('شريط')"))
		{
			if($.inArray(size, available_ribbon_sizes)==-1)
			{
				$(".warn-8").text("المقاس الذي ادخلته غير موجود !");
				error = 1;
			}
		}

		if(error==0)
		{
			if(isNaN(buy_price) || isNaN(evaluative_price) || evaluative_price==0 || buy_price==0)
			{
				$(".warn-8").text("من فضلك ادخل الاسعار بشكل صحيح");
				error=1;
			}
			else if(total_count==0 || isNaN(total_count))
			{
				$(".warn-8").text("من فضلك ادخل عدد القطع بشكل صحيح");
				error=1
			}
			else if(new_old=='')
			{
				$(".warn-8").text("من فضلك حدد جديد/مستعمل");
				error=1
			}
			else if(status=='')
			{
				$(".warn-8").text("من فضلك حدد الحالة");
				error=1
			}

		}
		
		if(error==0)
		{
			$(".warn-8").empty();
			document.getElementById('adding_item').reset();
			$('.add-notice textarea').val('');

			var total_buy_price = buy_price*total_count;

			var old_buy_price = Number($(".total_paid").val());
			if(isNaN(old_buy_price))
				old_buy_price = 0;
			var new_buy_price = old_buy_price + total_buy_price;
			$(".total_paid").val(new_buy_price);

			// // ADDING THE ADDED DATA TO THE PAGE 

			if($(".type-search .list-unstyled .active").is(":contains('جنط')"))
    		{
    			$(".number-items .rims h2").text("الجنوط المشتراه");
    			$(".number-items .rims").append('<div class="item-added-info"><ul class="list-unstyled target_rim"><li><label> المقاس : </label><span class="text_size">'+size+'</span></li><li><label> الحالة : </label><span class="text_status">'+status+'</span></li><li><label>  النوع : </label><span class="text_new_old">'+new_old+'</span></li><li><label>  العدد : </label><span class="text_total_count">'+total_count+'</span></li><li><label>  سعر القطعة : </label><span class="text_buy_price">'+buy_price+'</span></li><input hidden class="item_total_count" value="'+total_count+'"><input hidden class="item_size" value="'+size+'"><input hidden class="item_holes_number" value="'+holes_number+'"><input hidden class="item_status" value="'+status+'"><input hidden class="item_new_old" value="'+new_old+'"><input hidden class="item_rim_type" value="'+rim_type+'"><input hidden class="item_buy_price" value="'+buy_price+'"><input hidden class="item_evaluative_price" value="'+evaluative_price+'"><input hidden class="item_notes" value="'+item_notes+'"><li><i title="تعديل على العنصر" class="fa fa-pencil edit"></i><i title="الغاء العنصر" class="fa fa-trash-o delete"></i></li></ul></div>');
    		}
	    	if($(".type-search .list-unstyled .active").is(":contains('اطار')"))
	    	{
	    		$(".number-items .tyres h2").text("الاطارات المشتراه");
    			$(".number-items .tyres").append('<div class="item-added-info"><ul class="list-unstyled target_tyre"><li><label> المقاس : </label><span class="text_size">'+size+'</span></li><li><label> الحالة : </label><span class="text_status">'+status+'</span></li><li><label>  النوع : </label><span class="text_new_old">'+new_old+'</span></li><li><label>  العدد : </label><span class="text_total_count">'+total_count+'</span></li><li><label>  سعر القطعة : </label><span class="text_buy_price">'+buy_price+'</span></li><input hidden class="item_total_count" value="'+total_count+'"><input hidden class="item_size" value="'+size+'"><input hidden class="item_brand" value="'+brand+'"><input hidden class="item_status" value="'+status+'"><input hidden class="item_new_old" value="'+new_old+'"><input hidden class="item_tyre_type" value="'+tyre_type+'"><input hidden class="item_buy_price" value="'+buy_price+'"><input hidden class="item_evaluative_price" value="'+evaluative_price+'"><input hidden class="item_notes" value="'+item_notes+'"><li><i title="تعديل على العنصر" class="fa fa-pencil edit"></i><i title="الغاء العنصر" class="fa fa-trash-o delete"></i></li></ul></div>');
    		}
	    	if($(".type-search .list-unstyled .active").is(":contains('شنبر')"))
	    	{
	    		$(".number-items .tubes h2").text("الشنابر المشتراه");
    			$(".number-items .tubes").append('<div class="item-added-info"><ul class="list-unstyled target_tube"><li><label> المقاس : </label><span class="text_size">'+size+'</span></li><li><label> الحالة : </label><span class="text_status">'+status+'</span></li><li><label>  النوع : </label><span class="text_new_old">'+new_old+'</span></li><li><label>  العدد : </label><span class="text_total_count">'+total_count+'</span></li><li><label>  سعر القطعة : </label><span class="text_buy_price">'+buy_price+'</span></li><input hidden class="item_total_count" value="'+total_count+'"><input hidden class="item_size" value="'+size+'"><input hidden class="item_brand" value="'+brand+'"><input hidden class="item_status" value="'+status+'"><input hidden class="item_new_old" value="'+new_old+'"><input hidden class="item_buy_price" value="'+buy_price+'"><input hidden class="item_evaluative_price" value="'+evaluative_price+'"><input hidden class="item_notes" value="'+item_notes+'"><li><i title="تعديل على العنصر" class="fa fa-pencil edit"></i><i title="الغاء العنصر" class="fa fa-trash-o delete"></i></li></ul></div>');
    		}
	    	if($(".type-search .list-unstyled .active").is(":contains('شريط')"))
	    	{
	    		$(".number-items .ribbons h2").text("الشرائط المشتراه");
    			$(".number-items .ribbons").append('<div class="item-added-info"><ul class="list-unstyled target_ribbon"><li><label> المقاس : </label><span class="text_size">'+size+'</span></li><li><label> الحالة : </label><span class="text_status">'+status+'</span></li><li><label>  النوع : </label><span class="text_new_old">'+new_old+'</span></li><li><label>  العدد : </label><span class="text_total_count">'+total_count+'</span></li><li><label>  سعر القطعة : </label><span class="text_buy_price">'+buy_price+'</span></li><input hidden class="item_total_count" value="'+total_count+'"><input hidden class="item_size" value="'+size+'"><input hidden class="item_status" value="'+status+'"><input hidden class="item_new_old" value="'+new_old+'"><input hidden class="item_buy_price" value="'+buy_price+'"><input hidden class="item_evaluative_price" value="'+evaluative_price+'"><input hidden class="item_notes" value="'+item_notes+'"><li><i title="تعديل على العنصر" class="fa fa-pencil edit"></i><i title="الغاء العنصر" class="fa fa-trash-o delete"></i></li></ul></div>');
    		}

    		$('#success-modal .message').text('تم اضافة العنصر');
			$('#success-modal').modal('show')
			setTimeout(function(){
				$('#success-modal').modal('hide');
			},2500);
		}
	})

	// TO DELETE A SOLD ITEM

	$(document).on('click' ,'.delete' ,function(){

		if (confirm('هل تريد حذف العنصر ؟'))
		{
			if($(this).parent().siblings('.item_id').length)
			{
				if($(this).parents('.target_rim').length)
					rims_to_delete.push(Number($(this).parent().siblings('.item_id').val()));
				else if($(this).parents('.target_tyre').length)
					tyres_to_delete.push(Number($(this).parent().siblings('.item_id').val()));
				else if($(this).parents('.target_tube').length)
					tubes_to_delete.push(Number($(this).parent().siblings('.item_id').val()));
				else if($(this).parents('.target_ribbon').length)
					ribbons_to_delete.push(Number($(this).parent().siblings('.item_id').val()));
			}
				
			var buy_price = Number($(this).parent().siblings('.item_buy_price').val());
			var count = Number($(this).parent().siblings('.item_total_count').val());
			var paid = count*buy_price;

			var old_total_paid = Number($(".total_paid").val());
			if(isNaN(old_total_paid))
				old_total_paid = 0;
			var new_total_paid = old_total_paid - paid;
			$(".total_paid").val(new_total_paid);

			$(this).parents(".item-added-info").detach();
		}
	})


	//	TO EDIT AN ITEM

	var item_selector;

	$(document).on('click' ,'.edit' ,function(){

		item_selector = $(this).parents('.item-added-info');
		var size 				= $(this).parents('.list-unstyled').find('.item_size').val();
		var brand 				= $(this).parents('.list-unstyled').find('.item_brand').val();
		var status 				= $(this).parents('.list-unstyled').find('.item_status').val();
		var holes_number 		= $(this).parents('.list-unstyled').find('.item_holes_number').val();
		var new_old 			= $(this).parents('.list-unstyled').find('.item_new_old').val();
		var evaluative_price 	= Number($(this).parents('.list-unstyled').find('.item_evaluative_price').val());
		var rim_type 			= $(this).parents('.list-unstyled').find('.item_rim_type').val();
		var tyre_type 			= $(this).parents('.list-unstyled').find('.item_tyre_type').val();
		var total_count 		= Number($(this).parents('.list-unstyled').find('.item_total_count').val());
		var buy_price 			= Number($(this).parents('.list-unstyled').find('.item_buy_price').val());
		var item_notes 			= $(this).parents('.list-unstyled').find('.item_notes').val();

		old_total_paid = total_count*buy_price;

		$('.modal_size .choose-from').val(size);
		$('.modal_status .choose-from').val(status);
		$('.modal_new_old .choose-from').val(new_old);
		$('.modal_evaluative_price .choose-from').val(evaluative_price);
		$('.modal_notes').val(item_notes);
		$('.modal_buy_price .choose-from').val(buy_price);
		$('.modal_total_count .choose-from').val(total_count);

		if(item_selector.siblings('h2').is(":contains('جنوط')"))
		{
			$('.modal_size').siblings().show();
			$('.modal_brand ,.modal_tyre_type').hide();
			$('.modal_rim_type .choose-from').val(rim_type);
			$('.modal_holes_number .choose-from').val(holes_number);
		}
		if(item_selector.siblings('h2').is(":contains('اطارات')"))
		{
			$('.modal_size').siblings().show();
			$('.modal_holes_number ,.modal_rim_type').hide();
			$('.modal_tyre_type .choose-from').val(tyre_type);
			$('.modal_brand .choose-from').val(brand);
		}
		if(item_selector.siblings('h2').is(":contains('شنابر')"))
		{
			$('.modal_size').siblings().show();
			$('.modal_holes_number ,.modal_tyre_type ,.modal_rim_type').hide();
			$('.modal_brand .choose-from').val(brand);
		}
		if(item_selector.siblings('h2').is(":contains('شرائط')"))
		{
			$('.modal_size').siblings().show();
			$('.modal_holes_number ,.modal_tyre_type ,.modal_rim_type ,.modal_brand').hide();
		}
		$('#edit').modal('show');
	})


	$(document).on('click' ,'.modal_save_edit' ,function(event){
		event.preventDefault();
		var brand 				= $('.modal_brand .choose-from').val();
		var size 				= $('.modal_size .choose-from').val();
		var holes_number 		= $('.modal_holes_number .choose-from').val();
		var tyre_type 			= $('.modal_tyre_type .choose-from').val();
		var rim_type 			= $('.modal_rim_type .choose-from').val();
		var status 				= $('.modal_status .choose-from').val();
		var new_old 			= $('.modal_new_old .choose-from').val();
		var evaluative_price	= Number($(".modal_evaluative_price .choose-from").val());
		var buy_price			= Number($(".modal_buy_price .choose-from").val());
		var total_count			= Number($(".modal_total_count .choose-from").val());
		var item_notes			= $('.modal_notes').val();
		var error				=0;

		new_total_paid = total_count*buy_price;

		if(item_selector.siblings('h2').is(":contains('جنوط')"))
		{
			if($.inArray(holes_number, available_holes_number)==-1)
			{
				$(".warn").text("من فضلك ادخل عدد ثقوب صحيح !");
				error = 1;
			}
			else if($.inArray(size, available_rim_sizes)==-1){
				$(".warn").text("المقاس الذي ادخلته غير موجود !");
				error = 1;
			}
			else if(rim_type=='')
			{
				$(".warn").text("من فضلك حدد نوع الجنط");
				error=1
			}
		}

		else if(item_selector.siblings('h2').is(":contains('اطارات')"))
		{
			if($.inArray(brand,available_tyre_tubes_brands)==-1)
			{
				$(".warn").text("الماركة التي ادخلتها غير موجودة !");
				error = 1;
			}
			else if($.inArray(size, available_tyre_sizes)==-1)
			{
				$(".warn").text("المقاس الذي ادخلته غير موجود !");
				error = 1;
			}
			else if(tyre_type=='')
			{
				$(".warn").text("من فضلك حدد نوع الاطار");
				error=1
			}
		}

		else if(item_selector.siblings('h2').is(":contains('شنابر')"))
		{
			if($.inArray(brand,available_tyre_tubes_brands)==-1)
			{
				$(".warn").text("الماركة التي ادخلتها غير موجودة !");
				error = 1;
			}
			else if($.inArray(size, available_tube_sizes)==-1)
			{
				$(".warn").text("المقاس الذي ادخلته غير موجود !");
				error = 1;
			}
		}

		else if(item_selector.siblings('h2').is(":contains('شرائط')"))
		{
			if($.inArray(size, available_ribbon_sizes)==-1)
			{
				$(".warn").text("المقاس الذي ادخلته غير موجود !");
				error = 1;
			}
		}

		if(item_selector.find('.number_sold').length)
		{
			if(total_count < Number(item_selector.find('.number_sold').val()))
			{
				$(".warn").text("العدد المدخل غير صحيح ! تم بيع " + item_selector.find('.number_sold').val() +" قطعة من هذا العنصر !");
				error = 1;
			}
		}

		if(error==0)
		{
			if(isNaN(evaluative_price) || evaluative_price==0 || isNaN(buy_price) || buy_price==0)
			{
				$(".warn").text("من فضلك ادخل الاسعار بشكل صحيح");
				error=1;
			}
			if(isNaN(total_count) || total_count==0)
			{
				$(".warn").text("من فضلك ادخل العدد بشكل صحيح");
				error=1;
			}
			else if(new_old=='')
			{
				$(".warn").text("من فضلك حدد جديد/مستعمل");
				error=1
			}
			else if(status=='')
			{
				$(".warn").text("من فضلك حدد الحالة");
				error=1
			}

		}
		
		if(error==0)
		{
			if(item_selector.find('.item_id').length)
				item_selector.addClass('to_edit');

			$(".warn").empty();
			$('#edit').modal('hide');
			document.getElementById('modal_edit_form').reset();

			var total_paid = Number($(".total_paid").val());
			if(isNaN(total_paid))
				total_paid = 0;
			total_paid = total_paid + (new_total_paid - old_total_paid);
			$(".total_paid").val(total_paid);

			// // ADDING THE ADDED DATA TO THE PAGE 

			item_selector.find('.item_notes').val(item_notes);
			item_selector.find('.item_status').val(status);
			item_selector.find('.item_evaluative_price').val(evaluative_price);
			item_selector.find('.item_new_old').val(new_old);
			item_selector.find('.item_size').val(size);
			item_selector.find('.item_buy_price').val(buy_price);
			item_selector.find('.item_total_count').val(total_count);
			item_selector.find('.text_total_count').text(total_count);
			item_selector.find('.text_status').text(status);
			item_selector.find('.text_size').text(size);
			item_selector.find('.text_buy_price').text(buy_price);
			item_selector.find('.text_new_old').text(new_old);

			if(item_selector.siblings('h2').is(":contains('جنوط')"))
    		{
   				item_selector.find('.item_holes_number').val(holes_number);
   				item_selector.find('.item_rim_type').val(rim_type);
       		}
	    	else if(item_selector.siblings('h2').is(":contains('اطارات')"))
	    	{
				item_selector.find('.item_brand').val(brand);
				item_selector.find('.item_tyre_type').val(tyre_type);    		
    		}
	    	else if(item_selector.siblings('h2').is(":contains('شنابر')"))
	    	{
	    		item_selector.find('.item_brand').val(brand);   		
	    	}
		}
	})

	$('.choose-from').on('focus' ,function(){
		$('.warn').empty();
	})


	$(document).on('keyup', ".modal_size", function(){
    	if(item_selector.siblings('h2').is(":contains('جنوط')"))
    		var used_array = available_rim_sizes;
    	if(item_selector.siblings('h2').is(":contains('اطارات')"))
    		var used_array = available_tyre_sizes;
    	if(item_selector.siblings('h2').is(":contains('شنابر')"))
    		var used_array = available_tube_sizes;
    	if(item_selector.siblings('h2').is(":contains('شرائط')"))
    		var used_array = available_ribbon_sizes;
		var val = $(".modal_size .choose-from").val();
		if(val.length==0)
		{
			$(".modal-meun-search-1").css("display","none");
		}
		else
		{
			$(".modal-meun-search-1 .menu-item").empty();
			var count = 0;
			for(var i=0 ; i<used_array.length ; i++)
			{
				if(used_array[i].includes(val))
				{
					$(".modal-meun-search-1 .menu-item").append("<li>"+used_array[i]+"</li>");
					count++;
				}
				if(count == 5)
					break;
			}
			$(".modal-meun-search-1").css("display","block");
		}
	})

	$(document).on('keyup', ".modal_brand", function(){
    	if(item_selector.siblings('h2').is(":contains('جنوط')"))
    		var used_array = available_rim_brands;
    	if(item_selector.siblings('h2').is(":contains('اطارات')"))
    		var used_array = available_tyre_tubes_brands;
    	if(item_selector.siblings('h2').is(":contains('شنابر')"))
    		var used_array = available_tyre_tubes_brands;
   
		var val = $(".modal_brand .choose-from").val();
		if(val.length==0)
		{
			$(".modal-meun-search-2").css("display","none");
		}
		else
		{
			$(".modal-meun-search-2 .menu-item").empty();
			var count = 0;
			for(var i=0 ; i<used_array.length ; i++)
			{
				if(used_array[i].includes(val))
				{
					$(".modal-meun-search-2 .menu-item").append("<li>"+used_array[i]+"</li>");
					count++;
				}
				if(count == 5)
					break;
			}
			$(".modal-meun-search-2").css("display","block");
		}
	})

	$(document).on('keyup', ".modal_holes_number", function(){
    	var used_array = available_holes_number;
		var val = $(".modal_holes_number .choose-from").val();
		if(val.length==0)
		{
			$(".modal-meun-search-3").css("display","none");
		}
		else
		{
			$(".modal-meun-search-3 .menu-item").empty();
			var count = 0;
			for(var i=0 ; i<used_array.length ; i++)
			{
				if(used_array[i].includes(val))
				{
					$(".modal-meun-search-3 .menu-item").append("<li>"+used_array[i]+"</li>");
					count++;
				}
				if(count == 5)
					break;
			}
			$(".modal-meun-search-3").css("display","block");
		}
	})

	$(document).on('mousedown', ".modal-meun-search-1 .menu-item li", function(){
		$(".modal_size .choose-from").val($(this).text());
		$(".modal-meun-search-1").css("display","none");
	})

	$(document).on('blur', ".modal_size .choose-from", function(){
		$(".modal-meun-search-1").css("display","none");
	});

	$(document).on('mousedown', ".modal-meun-search-2 .menu-item li", function(){
		$(".modal_brand .choose-from").val($(this).text());
		$(".modal-meun-search-2").css("display","none");
	})

	$(document).on('blur', ".modal_brand .choose-from", function(){
		$(".modal-meun-search-2").css("display","none");
	});

	$(document).on('mousedown', ".modal-meun-search-3 .menu-item li", function(){
		$(".modal_holes_number .choose-from").val($(this).text());
		$(".modal-meun-search-3").css("display","none");
	})

	$(document).on('blur', ".modal_holes_number .choose-from", function(){
		$(".modal-meun-search-3").css("display","none");
	});


	// UPDATE PROCESS

	$('.total_paid ,.paid').on('focus' ,function(){
		$('.warn-5').empty();
		$('.warn-6').empty();
	})
	$('.buyer_name ,.buy_date').on('focus' ,function(){
		$('.warn-7').empty();
		$('.warn-6').empty();
	})

	$('.edit_undo').on('click' ,function(){
		$('.buy_id').val(request_id);
		$('#redirect').submit();
	})

	$(document).on('click' ,'.edit_submit' ,function(event){
		event.preventDefault();
		var seller_name = $('.seller_name').val();
		var buy_date 	= $('.buy_date').val();
		var total_paid 	= Number($('.total_paid').val());
		var paid 		= Number($('.paid').val());
		var buy_notes 	= $('.buy_notes').val();

		if(seller_name.length==0 || seller_name.length>20)
		{
			$('.warn-6').text('من فضلك تاكد من صحة البيانات');
			$('.warn-7').text('يجب ادخال اسم بائع لا يذيد عن 20 حرف');
		}
		else if(buy_date.length==0)
		{
			$('.warn-6').text('من فضلك تاكد من صحة البيانات');
			$('.warn-7').text('يجب ادخال تاريخ الشراء');
		}
		else if(isNaN(total_paid)|| total_paid.length==0 || isNaN(paid))
		{
			$('.warn-6').text('من فضلك تاكد من صحة البيانات');
			$('.warn-5').text('من فضلك ادخل رقم صحيح');
		}
		else if(paid>total_paid)
		{
			$('.warn-6').text('من فضلك تاكد من صحة البيانات');
			$('.warn-5').text('المبلغ المدفوع اكبر من المبلغ المطلوب');
		}
		else
		{
			$.ajax({
				url:'requests/buy.php',
				data:{request:'update_buy_data' ,notes:buy_notes ,buy_date:buy_date ,seller_name:seller_name ,total_paid:total_paid ,paid:paid ,buy_id:request_id},
				type:"POST",
				success:function(data){
					$('.target_rim').each(function(){
						var total_count 		= Number($(this).find('.item_total_count').val());
						var buy_price 			= Number($(this).find('.item_buy_price').val());
						var size 				= $(this).find('.item_size').val();
						var holes_number 		= Number($(this).find('.item_holes_number').val());
						var status 				= Number($(this).find('.item_status').val());
						var rim_type 			= $(this).find('.item_rim_type').val();
						var evaluative_price 	= Number($(this).find('.item_evaluative_price').val());
						var new_old 			= $(this).find('.item_new_old').val();
						var notes 				= $(this).find('.item_notes').val();
						var date_added 			= buy_date;
						var foreign_buy_id 		= data;
						if($(this).find('.item_id').length == 0)
						{
							$.ajax({
								url:'requests/add_item.php',
								data:{request:'add_rim',type:rim_type,date_added:date_added,buy_price:buy_price,total_count:total_count,foreign_buy_id:foreign_buy_id,size:size,holes_number:holes_number,status:status,evaluative_price:evaluative_price,new_old:new_old,notes:notes},
								type:"POST"
							})
						}
						else if($(this).parents('.to_edit').length)
						{
							var item_id = $(this).find('.item_id').val();
							$.ajax({
								url:'requests/edit_item.php',
								data:{request:'edit_rim',rim_id:item_id,type:rim_type,date_added:date_added,buy_price:buy_price,total_count:total_count,size:size,holes_number:holes_number,status:status,evaluative_price:evaluative_price,new_old:new_old,notes:notes},
								type:"POST"
							})
						}
					})

					$('.target_tyre').each(function(){
						var total_count 		= Number($(this).find('.item_total_count').val());
						var buy_price 			= Number($(this).find('.item_buy_price').val());
						var size 				= $(this).find('.item_size').val();
						var brand 				= $(this).find('.item_brand').val();
						var status 				= Number($(this).find('.item_status').val());
						var tyre_type 			= $(this).find('.item_tyre_type').val();
						var evaluative_price 	= Number($(this).find('.item_evaluative_price').val());
						var new_old 			= $(this).find('.item_new_old').val();
						var notes 				= $(this).find('.item_notes').val();
						var date_added 			= buy_date;
						var foreign_buy_id 		= data;
						if($(this).find('.item_id').length == 0)
						{
							$.ajax({
								url:'requests/add_item.php',
								data:{request:'add_tyre',date_added:date_added,buy_price:buy_price,total_count:total_count,foreign_buy_id:foreign_buy_id,size:size,brand:brand,status:status,type:tyre_type,evaluative_price:evaluative_price,new_old:new_old,notes:notes},
								type:"POST"
							})
						}
						else if($(this).parents('.to_edit').length)
						{
							var item_id = $(this).find('.item_id').val();
							$.ajax({
								url:'requests/edit_item.php',
								data:{request:'edit_tyre',tyre_id:item_id,date_added:date_added,buy_price:buy_price,total_count:total_count,size:size,brand:brand,status:status,type:tyre_type,evaluative_price:evaluative_price,new_old:new_old,notes:notes},
								type:"POST"
							})
						}
					})
					$('.target_tube').each(function(){
						var total_count 		= Number($(this).find('.item_total_count').val());
						var buy_price 			= Number($(this).find('.item_buy_price').val());
						var size 				= $(this).find('.item_size').val();
						var brand 				= $(this).find('.item_brand').val();
						var status 				= Number($(this).find('.item_status').val());
						var evaluative_price 	= Number($(this).find('.item_evaluative_price').val());
						var new_old 			= $(this).find('.item_new_old').val();
						var notes 				= $(this).find('.item_notes').val();
						var date_added 			= buy_date;
						var foreign_buy_id 		= data;
						if($(this).find('.item_id').length == 0)
						{
							$.ajax({
								url:'requests/add_item.php',
								data:{request:'add_tube',date_added:date_added,buy_price:buy_price,total_count:total_count,foreign_buy_id:foreign_buy_id,size:size,brand:brand,status:status,evaluative_price:evaluative_price,new_old:new_old,notes:notes},
								type:"POST"
							})
						}
						else if($(this).parents('.to_edit').length)
						{
							var item_id = $(this).find('.item_id').val();
							$.ajax({
								url:'requests/edit_item.php',
								data:{request:'edit_tube',tube_id:item_id,date_added:date_added,buy_price:buy_price,total_count:total_count,size:size,brand:brand,status:status,evaluative_price:evaluative_price,new_old:new_old,notes:notes},
								type:"POST"
							})
						}
					})
					$('.target_ribbon').each(function(){
						var total_count 		= Number($(this).find('.item_total_count').val());
						var buy_price 			= Number($(this).find('.item_buy_price').val());
						var size 				= $(this).find('.item_size').val();
						var status 				= Number($(this).find('.item_status').val());
						var evaluative_price 	= Number($(this).find('.item_evaluative_price').val());
						var new_old 			= $(this).find('.item_new_old').val();
						var notes 				= $(this).find('.item_notes').val();
						var date_added 			= buy_date;
						var foreign_buy_id 		= data;
						if($(this).find('.item_id').length == 0)
						{
							$.ajax({
								url:'requests/add_item.php',
								data:{request:'add_ribbon',date_added:date_added,buy_price:buy_price,total_count:total_count,foreign_buy_id:foreign_buy_id,size:size,status:status,evaluative_price:evaluative_price,new_old:new_old,notes:notes},
								type:"POST"
							})
						}
						else if($(this).parents('.to_edit').length)
						{
							var item_id = $(this).find('.item_id').val();
							$.ajax({
								url:'requests/edit_item.php',
								data:{request:'edit_ribbon',ribbon_id:item_id ,date_added:date_added,buy_price:buy_price,total_count:total_count,size:size,status:status,evaluative_price:evaluative_price,new_old:new_old,notes:notes},
								type:"POST",
							})
						}
					})
					for(var i=0 ; i<rims_to_delete.length ;i++)
					{
						$.ajax({
							url:'requests/delete_item.php',
							data:{request:'delete_rim' ,rim_id:rims_to_delete[i]},
							type:'POST'
						})
					}
					for(var i=0 ; i<tyres_to_delete.length ;i++)
					{
						$.ajax({
							url:'requests/delete_item.php',
							data:{request:'delete_tyre' ,tyre_id:tyres_to_delete[i]},
							type:'POST'
						})
					}
					for(var i=0 ; i<tubes_to_delete.length ;i++)
					{
						$.ajax({
							url:'requests/delete_item.php',
							data:{request:'delete_tube' ,tube_id:tubes_to_delete[i]},
							type:'POST'
						})
					}
					for(var i=0 ; i<ribbons_to_delete.length ;i++)
					{
						$.ajax({
							url:'requests/delete_item.php',
							data:{request:'delete_ribbon' ,ribbon_id:ribbons_to_delete[i]},
							type:'POST'
						})
					}
					$('#success-modal .message').text('تم التعديل');
					$('#success-modal').modal('show')
					setTimeout(function(){
						$('#success-modal').modal('hide');
						$('.buy_id').val(request_id);
						$('#redirect').submit();
					},2500);

					$("#success-modal").on('hidden.bs.modal' ,function(){
						$('.buy_id').val(request_id);
						$('#redirect').submit();
					})
				}
			})
		}	
	})


	$(document).on('click' ,'.edit_cancel' ,function(event){
		event.preventDefault();
		if(restrict_canceling == 1)
		{
			$('#error-modal .error').text('فشل الحذف ! تم بيع عناصر بالفعل من هذة العملية ..');
			$('#error-modal').modal('show')
			setTimeout(function(){
				$('#error-modal').modal('hide');
			},5000);
		}
		else if (confirm('هل تريد حذف العملية بالكامل ؟'))
		{
			$.ajax({
				url:'requests/buy.php',
				data:{request:'cancel_buy' ,buy_id:request_id},
				type:"POST"
			})
			$('#success-modal .message').text('تم الحذف');
			$('#success-modal').modal('show')
			setTimeout(function(){
				$('#success-modal').modal('hide');
				window.location = 'main_search.php';
			},2500);

			$("#success-modal").on('hidden.bs.modal' ,function(){
				window.location = 'main_search.php';
			})
		}
	})

});