var available_rim_sizes 		= ['16','17','18','19','20','22.5','24','25','رواكد'];
var available_tyre_sizes 		= ['16/600','16/650','16/700','16/750','16/825','16/900','16/1050','17.5','18/1000','18/1200','18/18*12.5','19/600','20/600','20/650','20/700','20/750','20/825','20/900','20/1000','20/1100','20/1200','20/1300','20/1400','21','22.5/10','22.5/11','22.5/12','22.5/13','22.5/295/60','22.5/295/70','22.5/295/80','22.5/315/60','22.5/315/65','22.5/315/70','22.5/315/80','24/1200','24/1300','24/1400','24/16.9','24/17','24/18','25/15.5','25/17.5','25/20.5','25/32.5','25/26.5','25/29.5','رواكد'];
var available_tube_sizes 		= ['15','16','19','20','24','25','رواكد'];
var available_ribbon_sizes		= ['15','16','20','24','25','رواكد'];
var available_tyre_tubes_brands = ['ميشلان','ساميتومو','باروم','تايجر','كوبر','نانكانج','نيتو','باكيت','كليبر','اليانس','اودسو','سها','سوبر ستون','اورورا','دستون','دي ماستر','ميلر','ثاندرار','جيه كيه','سمسون','سمسونج','جود ريش','نسر','بريجستون','يوكوهاما','تويو','فايرستون','ميتس','بتلاس','جود يير','فولدا','صافا','كومهو','هانكوك','نوكيا','كونتننتال','مارشال','جي تي','فديرال','مكسيس','شمبيون','ريكن','كيندا','بريسا','صيني','اوتانا','روسي','اوكراني','سيريلانكي','فيتنامي','دانلوب','شات','بريللي','تريال','فاروس'];
var available_holes_number		= ['5','6','8','10','19'];



$(document).ready(function(){

	var request_id = $('.edit_request').val();

	if (typeof request_id !== 'undefined')
	{
		$.ajax({
			url:'requests/sell.php',
			data:{request:'get_sell_data' , sell_id:request_id},
			type:'POST',
			success:function(data){
				encoded_data = JSON.parse(data);
				$(".buyer_name").val(encoded_data['buyer_name']);
				$(".sell_date").val(encoded_data['sell_date']);
				$('.total_paid').val(encoded_data['total_paid']);
				$('.paid').val(encoded_data['paid']);
				$('.sell_feed').text(encoded_data['sell_feed'])
				$('.notes').val(encoded_data['notes']);
			}
		})
		$.ajax({
			url:'requests/sell.php',
			data:{request:'get_sell_rims' , sell_id:request_id},
			type:'POST',
			success:function(data){
				encoded_data = JSON.parse(data);
				if(encoded_data.length > 0)
				{
					for(var i=0 ; i<encoded_data.length ; i++)
					{
						$(".number-items .rims h2").text("الجنوط المباعة");
    					$(".number-items .rims").append('<div class="item-added-info"><ul class="list-unstyled target_rim"><li><label> المقاس : </label><span>'+encoded_data[i]['size']+'</span></li><li><label> الحالة : </label><span>'+encoded_data[i]['status']+'</span></li><li><label>  النوع : </label><span>'+encoded_data[i]['new_old']+'</span></li><li><label>  العدد : </label><span class="item_count">'+encoded_data[i]['count']+'</span></li><li><label>  سعر القطعة : </label><span class="item_sell_price">'+encoded_data[i]['sell_price']+'</span></li><input hidden class="item_id" value="'+encoded_data[i]['rim_id']+'"><li><i title="تعديل على العنصر" class="fa fa-pencil edit"></i><i title="الغاء العنصر" class="fa fa-trash-o delete"></i></li></ul></div>');
					}
					
				}
			}
		})
		$.ajax({
			url:'requests/sell.php',
			data:{request:'get_sell_tyres' , sell_id:request_id},
			type:'POST',
			success:function(data){
				encoded_data = JSON.parse(data);
				if(encoded_data.length > 0)
				{
					for(var i=0 ; i<encoded_data.length ; i++)
					{
						$(".number-items .tyres h2").text("الاطارات المباعة");
	    				$(".number-items .tyres").append('<div class="item-added-info"><ul class="list-unstyled target_tyre"><li><label> المقاس : </label><span>'+encoded_data[i]['size']+'</span></li><li><label> الحالة : </label><span>'+encoded_data[i]['status']+'</span></li><li><label>  النوع : </label><span>'+encoded_data[i]['new_old']+'</span></li><li><label>  العدد : </label><span class="item_count">'+encoded_data[i]['count']+'</span></li><li><label>  سعر القطعة : </label><span class="item_sell_price">'+encoded_data[i]['sell_price']+'</span></li><input hidden class="item_id" value="'+encoded_data[i]['tyre_id']+'"><li><i title="تعديل على العنصر" class="fa fa-pencil edit"></i><i title="الغاء العنصر" class="fa fa-trash-o delete"></i></li></ul></div>');
	    			}	
				}
			}
		})
		$.ajax({
			url:'requests/sell.php',
			data:{request:'get_sell_tubes' , sell_id:request_id},
			type:'POST',
			success:function(data){
				encoded_data = JSON.parse(data);
				if(encoded_data.length > 0)
				{
					for(var i=0 ; i<encoded_data.length ; i++)
					{
						$(".number-items .tubes h2").text("الشنابر المباعة");
	    				$(".number-items .tubes").append('<div class="item-added-info"><ul class="list-unstyled target_tube"><li><label> المقاس : </label><span>'+encoded_data[i]['size']+'</span></li><li><label> الحالة : </label><span>'+encoded_data[i]['status']+'</span></li><li><label>  النوع : </label><span>'+encoded_data[i]['new_old']+'</span></li><li><label>  العدد : </label><span class="item_count">'+encoded_data[i]['count']+'</span></li><li><label>  سعر القطعة : </label><span class="item_sell_price">'+encoded_data[i]['sell_price']+'</span></li><input hidden class="item_id" value="'+encoded_data[i]['tube_id']+'"><li><i title="تعديل على العنصر" class="fa fa-pencil edit"></i><i title="الغاء العنصر" class="fa fa-trash-o delete"></i></li></ul></div>');
					}
				}
			}
		})
		$.ajax({
			url:'requests/sell.php',
			data:{request:'get_sell_ribbons' , sell_id:request_id},
			type:'POST',
			success:function(data){
				encoded_data = JSON.parse(data);
				if(encoded_data.length > 0)
				{
					for(var i=0 ; i<encoded_data.length ; i++)
					{
						$(".number-items .ribbons h2").text("الشرائط المباعة");
	    				$(".number-items .ribbons").append('<div class="item-added-info"><ul class="list-unstyled target_ribbon"><li><label> المقاس : </label><span>'+encoded_data[i]['size']+'</span></li><li><label> الحالة : </label><span>'+encoded_data[i]['status']+'</span></li><li><label>  النوع : </label><span>'+encoded_data[i]['new_old']+'</span></li><li><label>  العدد : </label><span class="item_count">'+encoded_data[i]['count']+'</span></li><li><label>  سعر القطعة : </label><span class="item_sell_price">'+encoded_data[i]['sell_price']+'</span></li><input hidden class="item_id" value="'+encoded_data[i]['ribbon_id']+'"><li><i title="تعديل على العنصر" class="fa fa-pencil edit"></i><i title="الغاء العنصر" class="fa fa-trash-o delete"></i></li></ul></div>');
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


	// SHOWING THE NAMES OF THE DEALERS

	$(document).on('keyup', ".buyer_name", function(){
		var val = $(".buyer_name").val();
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
		$(".buyer_name").val($(this).text());
		$(".result-client").css("display","none");
	});

	$(document).on('blur', ".buyer_name", function(){
		$(".result-client").css("display","none");
	});





	// SHOWING THE SEARCH RESULTS IN THE MODAL

	$(document).on('click', '.go-search', function(event){
		event.preventDefault();
		if($(".active").is(":contains('جنط')"))
			var element_type = 'جنط';
		if($(".active").is(":contains('اطار')"))
			var element_type = 'اطار';
		if($(".active").is(":contains('شنبر')"))
			var element_type = 'شنبر';
		if($(".active").is(":contains('شريط')"))
			var element_type = 'شريط';
		var size 			= $(".size .choose-from").val();
		var brand 			= $(".brand .choose-from").val();
		var holes_number 	= $(".holes_number .choose-from").val();
		var new_old 		= $(".new_old .choose-from").val();
		var status 			= $(".status .choose-from").val();
		var min_price 		= $(".min_price").val();
		var max_price 		= $(".max_price").val();
		var tyre_type 		= $(".tyre_type .choose-from").val();
		var rim_type 		= $(".rim_type .choose-from").val();
		var min_date 		= $(".min_date .choose-from").val();
		var max_date 		= $(".max_date .choose-from").val();
		var buy_id			= $(".buy_id .choose-from").val();
		var order_type		= 'date';
	
		$.ajax({
			url:"requests/search.php",
			data:{request:"item_search" ,search_type:"متاح" ,min_date:min_date ,max_date:max_date, buy_id:buy_id, order_type:order_type ,element_type:element_type ,size:size ,brand:brand ,holes_number:holes_number ,status:status ,min_price:min_price ,max_price:max_price ,tyre_type:tyre_type ,rim_type:rim_type ,new_old:new_old},
			type:"POST",
			success:function(data){
				$(".result-search .modal-body .result-items-search").empty();
				$(".result-search .modal-body .head-search").detach();
				$(".result-search h2").empty();
				if(element_type == 'جنط')
				{
					$(".result-search h2").text('  نتائج البحث لايجاد جنط ');
					$(".result-search .modal-body").prepend('<ul class="list-unstyled head-search"><li>المقاس</li><li> النوع </li><li> جديد/مستعمل </li><li> الحاله </li><li>سعر الشراء</li><li> عدد الثقوب </li><li> العدد المتاح </li><li>  السعر التقديرى </li><li>  تاريخ الشراء </li><li>  رقم الشراء </li></ul>');
				}
				if(element_type == 'اطار')
				{
					$(".result-search h2").text('  نتائج البحث لايجاد اطار ');
					$(".result-search .modal-body").prepend('<ul class="list-unstyled head-search"><li>المقاس</li><li> النوع </li><li> الماركة </li><li> جديد/مستعمل </li><li> الحاله </li><li>سعر الشراء</li><li> العدد المتاح </li><li>  السعر التقديرى </li><li>  تاريخ الشراء </li><li>  رقم الشراء </li></ul>');
				}
				if(element_type == 'شنبر')
				{
					$(".result-search h2").text('  نتائج البحث لايجاد شنبر ');
					$(".result-search .modal-body").prepend('<ul class="list-unstyled head-search"><li>المقاس</li><li> الماركة </li><li> جديد/مستعمل </li><li> الحاله </li><li>سعر الشراء</li><li> العدد المتاح </li><li>  السعر التقديرى </li><li>  تاريخ الشراء </li><li>  رقم الشراء </li></ul>');
				}
				if(element_type == 'شريط')
				{
					$(".result-search h2").text('  نتائج البحث لايجاد شريط ');
					$(".result-search .modal-body").prepend('<ul class="list-unstyled head-search"><li>المقاس</li><li> جديد/مستعمل </li><li> الحاله </li><li>سعر الشراء</li><li> العدد المتاح </li><li>  السعر التقديرى </li><li>  تاريخ الشراء </li><li>  رقم الشراء </li></ul>');
				}
				var encoded_data = JSON.parse(data);
				for(var i=0 ; i<encoded_data.length ; i++)
				{
					if(element_type == 'جنط')
						$(".result-search .modal-body .result-items-search").append('<ul class="list-unstyled"><li class="size_in_results">'+encoded_data[i]['size']+'</li><li class="type_in_results">'+encoded_data[i]['type']+'</li><li class="new_old_in_results">'+encoded_data[i]['new_old']+'</li><li class="status_in_results">'+encoded_data[i]['status']+'</li><li class="buy_price_in_results">'+encoded_data[i]['buy_price']+'</li><li class="holes_number_in_results">'+encoded_data[i]['holes_number']+'</li><li class="available_in_results">'+encoded_data[i]['available']+'</li><li class="evaluative_price_in_results">'+encoded_data[i]['evaluative_price']+'</li><li class="date_added_in_results">'+encoded_data[i]['date_added']+'</li><li class="foreign_buy_id_in_results">'+encoded_data[i]['foreign_buy_id']+'</li><input hidden class="id_in_results" value="'+encoded_data[i]['rim_id']+'"></ul>');
					if(element_type == 'اطار')
						$(".result-search .modal-body .result-items-search").append('<ul class="list-unstyled"><li class="size_in_results">'+encoded_data[i]['size']+'</li><li class="type_in_results">'+encoded_data[i]['type']+'</li><li class="brand_in_results">'+encoded_data[i]['brand']+'</li><li class="new_old_in_results">'+encoded_data[i]['new_old']+'</li><li class="status_in_results">'+encoded_data[i]['status']+'</li><li class="buy_price_in_results">'+encoded_data[i]['buy_price']+'</li><li class="available_in_results">'+encoded_data[i]['available']+'</li><li class="evaluative_price_in_results">'+encoded_data[i]['evaluative_price']+'</li><li class="date_added_in_results">'+encoded_data[i]['date_added']+'</li><li class="foreign_buy_id_in_results">'+encoded_data[i]['foreign_buy_id']+'</li><input hidden class="id_in_results" value="'+encoded_data[i]['tyre_id']+'"></ul>');
					if(element_type == 'شنبر')
						$(".result-search .modal-body .result-items-search").append('<ul class="list-unstyled"><li class="size_in_results">'+encoded_data[i]['size']+'</li><li class="brand_in_results">'+encoded_data[i]['brand']+'</li><li class="new_old_in_results">'+encoded_data[i]['new_old']+'</li><li class="status_in_results">'+encoded_data[i]['status']+'</li><li class="buy_price_in_results">'+encoded_data[i]['buy_price']+'</li><li class="available_in_results">'+encoded_data[i]['available']+'</li><li class="evaluative_price_in_results">'+encoded_data[i]['evaluative_price']+'</li><li class="date_added_in_results">'+encoded_data[i]['date_added']+'</li><li class="foreign_buy_id_in_results">'+encoded_data[i]['foreign_buy_id']+'</li><input hidden class="id_in_results" value="'+encoded_data[i]['tube_id']+'"></ul>');
					if(element_type == 'شريط')
						$(".result-search .modal-body .result-items-search").append('<ul class="list-unstyled"><li class="size_in_results">'+encoded_data[i]['size']+'</li><li class="new_old_in_results">'+encoded_data[i]['new_old']+'</li><li class="status_in_results">'+encoded_data[i]['status']+'</li><li class="buy_price_in_results">'+encoded_data[i]['buy_price']+'</li><li class="available_in_results">'+encoded_data[i]['available']+'</li><li class="evaluative_price_in_results">'+encoded_data[i]['evaluative_price']+'</li><li class="date_added_in_results">'+encoded_data[i]['date_added']+'</li><li class="foreign_buy_id_in_results">'+encoded_data[i]['foreign_buy_id']+'</li><input hidden class="id_in_results" value="'+encoded_data[i]['ribbon_id']+'"></ul>');
				}
			}
		});
	})




	// WHAT HAPPENS WHEN SELECTING A SPECIFIC ELEMENT TO SELL

	var selected_result_size ;
	var selected_result_status;
	var selected_result_new_old;
	var selected_result_available;
	var selected_result_buy_price;
	var selected_result_id;

	$(document).on('click' ,".result-items-search ul" ,function(){

		var item_exists = 0;
		selected_result_id = Number($(this).find(".id_in_results").val());
		if($(".type-search .list-unstyled .active").is(":contains('جنط')"))
		{
			$('.rims .item_id').each(function(){
				if(Number($(this).val())==selected_result_id)
					item_exists = 1;
			})
		}
		if($(".type-search .list-unstyled .active").is(":contains('اطار')"))
		{
			$('.tyres .item_id').each(function(){
				if(Number($(this).val())==selected_result_id)
					item_exists = 1;
			})
		}
		if($(".type-search .list-unstyled .active").is(":contains('شنبر')"))
		{
			$('.tubes .item_id').each(function(){
				if(Number($(this).val())==selected_result_id)
					item_exists = 1;
			})
		}
		if($(".type-search .list-unstyled .active").is(":contains('شريط')"))
		{
			$('.ribbons .item_id').each(function(){
				if(Number($(this).val())==selected_result_id)
					item_exists = 1;
			})
		}

		if(item_exists==0)
		{
			$('#result-search').modal('hide');
			$('#myModal').modal('show');
			selected_result_status = $(this).find(".status_in_results").text();
			selected_result_size = $(this).find(".size_in_results").text();
			selected_result_new_old = $(this).find(".new_old_in_results").text();
			selected_result_available = Number($(this).find(".available_in_results").text());
			selected_result_buy_price = Number($(this).find(".buy_price_in_results").text());
		}
		else
		{
			$('#error-modal .error').text('تم ادراج هذا العنصر بالفعل');
			$('#error-modal').modal('show')
			setTimeout(function(){
				$('#error-modal').modal('hide');
			},2500);
		}	
	})

	$(document).on('click' ,'.confirm_sell_item', function(event){
		event.preventDefault();
		var count = Number($(".enter_count").val());
		var single_sell_price = Number($(".enter_sell_price").val());
		if(count > selected_result_available)
			$(".warn-2").text("العدد الذي ادخلته اكبر من العدد المتاح !");
		else if(isNaN(count) || count.length==0 || count<=0)
			$(".warn-2").text("يجب ادخال عدد القطع المباعة !");
		else if(isNaN(single_sell_price) || single_sell_price.length==0)
			$(".warn-1").text("يجب ادخال سعر القطعة الواحدة !");
		else
		{
			$("#myModal").modal('hide');

			var sell_price = single_sell_price*count;
			var buy_price = selected_result_buy_price*count;
			var feed = sell_price - buy_price;

			var old_sell_price = Number($(".total_paid").val());
			if(isNaN(old_sell_price))
				old_sell_price = 0;
			var new_Sell_price = sell_price + old_sell_price;
			$(".total_paid").val(new_Sell_price);

			var old_sell_feed = Number($(".sell_feed").text());
			var new_Sell_feed = feed + old_sell_feed;
			$(".sell_feed").text(new_Sell_feed);

			// ADDING THE ADDED DATA TO THE PAGE 

			if($(".type-search .list-unstyled .active").is(":contains('جنط')"))
    		{
    			$(".number-items .rims h2").text("الجنوط المباعة");
    			$(".number-items .rims").append('<div class="item-added-info"><ul class="list-unstyled target_rim"><li><label> المقاس : </label><span>'+selected_result_size+'</span></li><li><label> الحالة : </label><span>'+selected_result_status+'</span></li><li><label>  النوع : </label><span>'+selected_result_new_old+'</span></li><li><label>  العدد : </label><span class="item_count">'+count+'</span></li><li><label>  سعر القطعة : </label><span class="item_sell_price">'+single_sell_price+'</span></li><input hidden class="item_id" value="'+selected_result_id+'"><li><i title="تعديل على العنصر" class="fa fa-pencil edit"></i><i title="الغاء العنصر" class="fa fa-trash-o delete"></i></li></ul></div>');
    		}
	    	if($(".type-search .list-unstyled .active").is(":contains('اطار')"))
	    	{
	    		$(".number-items .tyres h2").text("الاطارات المباعة");
    			$(".number-items .tyres").append('<div class="item-added-info"><ul class="list-unstyled target_tyre"><li><label> المقاس : </label><span>'+selected_result_size+'</span></li><li><label> الحالة : </label><span>'+selected_result_status+'</span></li><li><label>  النوع : </label><span>'+selected_result_new_old+'</span></li><li><label>  العدد : </label><span class="item_count">'+count+'</span></li><li><label>  سعر القطعة : </label><span class="item_sell_price">'+single_sell_price+'</span></li><input hidden class="item_id" value="'+selected_result_id+'"><li><i title="تعديل على العنصر" class="fa fa-pencil edit"></i><i title="الغاء العنصر" class="fa fa-trash-o delete"></i></li></ul></div>');
    		}
	    	if($(".type-search .list-unstyled .active").is(":contains('شنبر')"))
	    	{
	    		$(".number-items .tubes h2").text("الشنابر المباعة");
    			$(".number-items .tubes").append('<div class="item-added-info"><ul class="list-unstyled target_tube"><li><label> المقاس : </label><span>'+selected_result_size+'</span></li><li><label> الحالة : </label><span>'+selected_result_status+'</span></li><li><label>  النوع : </label><span>'+selected_result_new_old+'</span></li><li><label>  العدد : </label><span class="item_count">'+count+'</span></li><li><label>  سعر القطعة : </label><span class="item_sell_price">'+single_sell_price+'</span></li><input hidden class="item_id" value="'+selected_result_id+'"><li><i title="تعديل على العنصر" class="fa fa-pencil edit"></i><i title="الغاء العنصر" class="fa fa-trash-o delete"></i></li></ul></div>');
    		}
	    	if($(".type-search .list-unstyled .active").is(":contains('شريط')"))
	    	{
	    		$(".number-items .ribbons h2").text("الشرائط المباعة");
    			$(".number-items .ribbons").append('<div class="item-added-info"><ul class="list-unstyled target_ribbon"><li><label> المقاس : </label><span>'+selected_result_size+'</span></li><li><label> الحالة : </label><span>'+selected_result_status+'</span></li><li><label>  النوع : </label><span>'+selected_result_new_old+'</span></li><li><label>  العدد : </label><span class="item_count">'+count+'</span></li><li><label>  سعر القطعة : </label><span class="item_sell_price">'+single_sell_price+'</span></li><input hidden class="item_id" value="'+selected_result_id+'"><li><i title="تعديل على العنصر" class="fa fa-pencil edit"></i><i title="الغاء العنصر" class="fa fa-trash-o delete"></i></li></ul></div>');
    		}

    		$('#success-modal .message').text('تم اضافة العنصر');
			$('#success-modal').modal('show')
			setTimeout(function(){
				$('#success-modal').modal('hide');
			},2500);
		}
	})
	
	$("#myModal").on('hidden.bs.modal' ,function(){
		$(".warn-2").empty();
		$(".warn-1").empty();
		$(".enter_count").val('');
		$(".enter_sell_price").val('');
	})
	$("#editModal").on('hidden.bs.modal' ,function(){
		$(".warn-4").empty();
		$(".warn-3").empty();
		$(".edited_count").val('');
		$(".edited_sell_price").val('');
	})

	$(document).on('focus' ,'.enter_count' ,function(){
		$('.warn-2').empty();
	})
	$(document).on('focus' ,'.enter_sell_price' ,function(){
		$('.warn-1').empty();
	})
	$(document).on('focus' ,'.edited_count' ,function(){
		$('.warn-4').empty();
	})
	$(document).on('focus' ,'.edited_sell_price' ,function(){
		$('.warn-3').empty();
	})






	// TO EDIT A SOLD ITEM

	var sell_price_selector;
	var count_selector;
	var pre_sell_price;
	var pre_count;
	var pre_paid;
	var id;
	var request;
	var available;
	var buy_price;

	$(document).on('click' ,'.edit' ,function(){
		sell_price_selector = $(this).parent().siblings(":has('.item_sell_price')").find(".item_sell_price");
		count_selector = $(this).parent().siblings(":has('.item_count')").find(".item_count");
		pre_sell_price = Number(sell_price_selector.text());
		pre_count = Number(count_selector.text());
		pre_paid = pre_count*pre_sell_price;
		id = $(this).parent().siblings(".item_id").val();

		if($(this).parents(".rims").length)
			request = 'get_rim_data';
		else if($(this).parents(".tyres").length)
			request = 'get_tyre_data';
		else if($(this).parents(".tubes").length)
			request = 'get_tube_data';
		else if($(this).parents(".ribbons").length)
			request = 'get_ribbon_data';

		$(".edited_count").val(pre_count);
		$(".edited_sell_price").val(pre_sell_price);

		$('#editModal').modal('show');

		$.ajax({
			url:"requests/get_item_data.php",
			data:{request:request,id:id},
			type:"POST",
			success:function(data){
				encoded_data = JSON.parse(data);
				available = Number(encoded_data['available']);
				buy_price = Number(encoded_data['buy_price']);
			}
		})
	})


	$(document).on('click' ,'.confirm_edited_sell_item', function(event){

		event.preventDefault();
		var count = Number($(".edited_count").val());
		var single_sell_price = Number($(".edited_sell_price").val());
		if(count > available)
			$(".warn-4").text("العدد الذي ادخلته اكبر من العدد المتاح !");
		else if(isNaN(count) || count.length==0 || count==0)
			$(".warn-4").text("يجب ادخال عدد القطع المباعة !");
		else if(isNaN(single_sell_price) || single_sell_price.length==0 || single_sell_price==0)
			$(".warn-3").text("يجب ادخال سعر القطعة الواحدة !");
		else
		{

			$("#editModal").modal('hide');

			var new_paid = single_sell_price*count;
			var total_new_buy_price = buy_price*count;
			var new_feed = new_paid - total_new_buy_price;

			var total_old_buy_price = buy_price*pre_count;
			var pre_feed = pre_paid - total_old_buy_price;

			var old_sell_price = $(".total_paid").val();
			if(isNaN(old_sell_price))
				old_sell_price = 0;
			var new_Sell_price = (old_sell_price - pre_paid) + new_paid;
			$(".total_paid").val(new_Sell_price);

			var old_sell_feed = Number($(".sell_feed").text());
			var new_Sell_feed = (old_sell_feed - pre_feed) + new_feed;
			$(".sell_feed").text(new_Sell_feed);

			pre_count = count;
			pre_sell_price = single_sell_price;

			sell_price_selector.text(pre_sell_price);
			count_selector.text(pre_count);
		}
	})





	var item_selector;

	// TO DELETE A SOLD ITEM

	$(document).on('click' ,'.delete' ,function(){

		if (confirm('هل تريد حذف العنصر ؟'))
		{
			pre_sell_price = Number($(this).parent().siblings(":has('.item_sell_price')").find(".item_sell_price").text());
			pre_count = Number($(this).parent().siblings(":has('.item_count')").find(".item_count").text());
			pre_paid = pre_count*pre_sell_price;
			id = $(this).parent().siblings(".item_id").val();;
			request;
			buy_price;

			if($(this).parents(".rims").length)
				request = 'get_rim_data';
			else if($(this).parents(".tyres").length)
				request = 'get_tyre_data';
			else if($(this).parents(".tubes").length)
				request = 'get_tube_data';
			else if($(this).parents(".ribbons").length)
				request = 'get_ribbon_data';

			$.ajax({
				url:"requests/get_item_data.php",
				data:{request:request,id:id},
				type:"POST",
				success:function(data){
					encoded_data = JSON.parse(data);
					buy_price = Number(encoded_data['buy_price']);

					var total_old_buy_price = buy_price*pre_count;
					var pre_feed = pre_paid - total_old_buy_price;

					var old_sell_price = $(".total_paid").val();
					if(isNaN(old_sell_price))
						old_sell_price = 0;
					var new_Sell_price = old_sell_price - pre_paid;
					$(".total_paid").val(new_Sell_price);

					var old_sell_feed = Number($(".sell_feed").text());
					var new_Sell_feed = old_sell_feed - pre_feed;
					$(".sell_feed").text(new_Sell_feed);

				}
			})
			$(this).parents(".item-added-info").detach();
		}
	})





	$(document).on('focus' ,'.total_paid' ,function(){
		var old_total_paid = $('.total_paid').val();
		var old_sell_feed  = Number($('.sell_feed').text());

		$('.total_paid').keyup(function(){
			var new_total_paid 	= $('.total_paid').val();
			var extra_feed 		= new_total_paid - old_total_paid;
			var new_Sell_feed 	= old_sell_feed + extra_feed;
			$(".sell_feed").text(new_Sell_feed);
		})
	})







	//SET ACTIVE TO SELECTED ITEM TO ADD

	$(".type-search .type li").click(function(){
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






	// SELL PROCESS

	$(document).on('click' ,'.save_sell' ,function(event){
		event.preventDefault();
		var buyer_name 	= $('.buyer_name').val();
		var sell_date 	= $('.sell_date').val();
		var total_paid 	= Number($('.total_paid').val());
		var paid 		= Number($('.paid').val());
		var sell_feed 	= Number($('.sell_feed').text());
		var notes 		= $('.notes').val();

		if(buyer_name.length==0 || buyer_name.length>20)
		{
			$('.warn-6').text('من فضلك تاكد من صحة البيانات');
			$('.warn-7').text('يجب ادخال اسم مشتري لا يذيد عن 20 حرف');
		}
		else if(sell_date.length==0)
		{
			$('.warn-6').text('من فضلك تاكد من صحة البيانات');
			$('.warn-7').text('يجب ادخال تاريخ البيع');
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
		else if(paid.length==0)
		{
			$('.warn-6').text('من فضلك تاكد من صحة البيانات');
			$('.warn-5').text('من فضلك ادخل المبلغ المدفوع');
		}
		else
		{
			$.ajax({
				url:'requests/sell.php',
				data:{request:'make_sell' ,notes:notes ,sell_feed:sell_feed ,sell_date:sell_date ,buyer_name:buyer_name ,total_paid:total_paid ,paid:paid},
				type:"POST",
				success:function(data){
					if(!data)
						$('.warn-6').text("من فضلك تاكد من صحة البيانات المدخلة !");
					else
					{
						$('.target_rim').each(function(){
							var foreign_rim_id 	= Number($(this).find('.item_id').val());
							var count 			= Number($(this).find('.item_count').text());
							var sell_price 		= Number($(this).find('.item_sell_price').text());
							var foreign_sell_id = Number(data);

							$.ajax({
								url:'requests/sell_item.php',
								data:{request:'sell_rim' ,sell_date:sell_date ,sell_price:sell_price ,count:count ,foreign_sell_id:foreign_sell_id ,foreign_rim_id:foreign_rim_id},
								type:"POST",
							})
						})
						$('.target_tyre').each(function(){
							var foreign_tyre_id = Number($(this).find('.item_id').val());
							var count 			= Number($(this).find('.item_count').text());
							var sell_price 		= Number($(this).find('.item_sell_price').text());
							var foreign_sell_id = Number(data);

							$.ajax({
								url:'requests/sell_item.php',
								data:{request:'sell_tyre' ,sell_date:sell_date ,sell_price:sell_price ,count:count ,foreign_sell_id:foreign_sell_id ,foreign_tyre_id:foreign_tyre_id},
								type:"POST",
							})
						})
						$('.target_tube').each(function(){
							var foreign_tube_id = Number($(this).find('.item_id').val());
							var count 			= Number($(this).find('.item_count').text());
							var sell_price 		= Number($(this).find('.item_sell_price').text());
							var foreign_sell_id = Number(data);

							$.ajax({
								url:'requests/sell_item.php',
								data:{request:'sell_tube' ,sell_date:sell_date ,sell_price:sell_price ,count:count ,foreign_sell_id:foreign_sell_id ,foreign_tube_id:foreign_tube_id},
								type:"POST",
							})
						})
						$('.target_ribbon').each(function(){
							var foreign_ribbon_id 	= Number($(this).find('.item_id').val());
							var count 				= Number($(this).find('.item_count').text());
							var sell_price 			= Number($(this).find('.item_sell_price').text());
							var foreign_sell_id 	= Number(data);

							$.ajax({
								url:'requests/sell_item.php',
								data:{request:'sell_ribbon' ,sell_date:sell_date ,sell_price:sell_price ,count:count ,foreign_sell_id:foreign_sell_id ,foreign_ribbon_id:foreign_ribbon_id},
								type:"POST",
							})
						})

						$('#success-modal .message').text('تم حفظ عملية البيع');
						$('#success-modal').modal('show')
						setTimeout(function(){
							$('#success-modal').modal('hide');
							$('.sell_id').val(data);
							$('#redirect').submit();
						},2500);

						$("#success-modal").on('hidden.bs.modal' ,function(){
							$('.sell_id').val(data);
							$('#redirect').submit();
						})
					}
				}
			})
		}
	})


	$('.total_paid ,.paid').on('focus' ,function(){
		$('.warn-5').empty();
		$('.warn-6').empty();
	})
	$('.buyer_name ,.sell_date').on('focus' ,function(){
		$('.warn-7').empty();
		$('.warn-6').empty();
	})

	$('.edit_undo').on('click' ,function(){
		$('.sell_id').val(request_id);
		$('#redirect').submit();
	})

	$(document).on('click' ,'.edit_submit' ,function(event){
		event.preventDefault();
		var buyer_name 	= $('.buyer_name').val();
		var sell_date 	= $('.sell_date').val();
		var total_paid 	= Number($('.total_paid').val());
		var paid 		= Number($('.paid').val());
		var sell_feed 	= Number($('.sell_feed').text());
		var notes 		= $('.notes').val();

		if(buyer_name.length==0 || buyer_name.length>20)
		{
			$('.warn-6').text('من فضلك تاكد من صحة البيانات');
			$('.warn-7').text('يجب ادخال اسم مشتري لا يذيد عن 20 حرف');
		}
		else if(sell_date.length==0)
		{
			$('.warn-6').text('من فضلك تاكد من صحة البيانات');
			$('.warn-7').text('يجب ادخال تاريخ البيع');
		}
		else if(isNaN(total_paid)|| total_paid.length==0 || isNaN(paid) || isNaN(sell_feed))
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
				url:'requests/sell.php',
				data:{request:'delete_sell_rims' ,sell_id:request_id},
				type:"POST",
			})
			$.ajax({
				url:'requests/sell.php',
				data:{request:'delete_sell_tyres' ,sell_id:request_id},
				type:"POST",
			})
		
			$.ajax({
				url:'requests/sell.php',
				data:{request:'delete_sell_tubes' ,sell_id:request_id},
				type:"POST",
			})
		
			$.ajax({
				url:'requests/sell.php',
				data:{request:'delete_sell_ribbons' ,sell_id:request_id},
				type:"POST",
			})

			$.ajax({
				url:'requests/sell.php',
				data:{request:'cancel_sell' ,sell_id:request_id},
				type:"POST",
				success:function(data)
				{
					$.ajax({
						url:'requests/sell.php',
						data:{request:'make_sell_with_id' ,notes:notes ,sell_feed:sell_feed ,sell_date:sell_date ,buyer_name:buyer_name ,total_paid:total_paid ,paid:paid ,sell_id:request_id},
						type:"POST",
						success:function(data_2){
							$('.target_rim').each(function(){
								var foreign_rim_id 	= Number($(this).find('.item_id').val());
								var count 			= Number($(this).find('.item_count').text());
								var sell_price 		= Number($(this).find('.item_sell_price').text());
								var foreign_sell_id = Number(data_2);

								$.ajax({
									url:'requests/sell_item.php',
									data:{request:'sell_rim' ,sell_date:sell_date ,sell_price:sell_price ,count:count ,foreign_sell_id:foreign_sell_id ,foreign_rim_id:foreign_rim_id},
									type:"POST",
								})
							})
							$('.target_tyre').each(function(){
								var foreign_tyre_id = Number($(this).find('.item_id').val());
								var count 			= Number($(this).find('.item_count').text());
								var sell_price 		= Number($(this).find('.item_sell_price').text());
								var foreign_sell_id = Number(data_2);

								$.ajax({
									url:'requests/sell_item.php',
									data:{request:'sell_tyre' ,sell_date:sell_date ,sell_price:sell_price ,count:count ,foreign_sell_id:foreign_sell_id ,foreign_tyre_id:foreign_tyre_id},
									type:"POST",
								})
							})
							$('.target_tube').each(function(){
								var foreign_tube_id = Number($(this).find('.item_id').val());
								var count 			= Number($(this).find('.item_count').text());
								var sell_price 		= Number($(this).find('.item_sell_price').text());
								var foreign_sell_id = Number(data_2);

								$.ajax({
									url:'requests/sell_item.php',
									data:{request:'sell_tube' ,sell_date:sell_date ,sell_price:sell_price ,count:count ,foreign_sell_id:foreign_sell_id ,foreign_tube_id:foreign_tube_id},
									type:"POST",
								})
							})
							$('.target_ribbon').each(function(){
								var foreign_ribbon_id 	= Number($(this).find('.item_id').val());
								var count 				= Number($(this).find('.item_count').text());
								var sell_price 			= Number($(this).find('.item_sell_price').text());
								var foreign_sell_id 	= Number(data_2);

								$.ajax({
									url:'requests/sell_item.php',
									data:{request:'sell_ribbon' ,sell_date:sell_date ,sell_price:sell_price ,count:count ,foreign_sell_id:foreign_sell_id ,foreign_ribbon_id:foreign_ribbon_id},
									type:"POST",
								})
							})
							$('#success-modal .message').text('تم التعديل');
							$('#success-modal').modal('show')
							setTimeout(function(){
								$('#success-modal').modal('hide');
								$('.sell_id').val(request_id);
								$('#redirect').submit();
							},2500);

							$("#success-modal").on('hidden.bs.modal' ,function(){
								$('.sell_id').val(request_id);
								$('#redirect').submit();
							})
						}
					})
				}
			})
		}	
	})


	$(document).on('click' ,'.edit_cancel' ,function(event){
		event.preventDefault();
		if (confirm('هل تريد حذف العملية بالكامل ؟'))
		{
			$('.target_rim').each(function(){
				$.ajax({
					url:'requests/sell.php',
					data:{request:'delete_sell_rims' ,sell_id:request_id},
					type:"POST",
				})
			})
			$('.target_tyre').each(function(){
				$.ajax({
					url:'requests/sell.php',
					data:{request:'delete_sell_tyres' ,sell_id:request_id},
					type:"POST",
				})
			})
			$('.target_tube').each(function(){
				$.ajax({
					url:'requests/sell.php',
					data:{request:'delete_sell_tubes' ,sell_id:request_id},
					type:"POST",
				})
			})
			$('.target_ribbon').each(function(){
				$.ajax({
					url:'requests/sell.php',
					data:{request:'delete_sell_ribbons' ,sell_id:request_id},
					type:"POST",
				})
			})

			$.ajax({
				url:'requests/sell.php',
				data:{request:'cancel_sell' ,sell_id:request_id},
				type:"POST",
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