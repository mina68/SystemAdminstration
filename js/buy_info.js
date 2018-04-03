var available_rim_sizes 		= ['16','17','18','19','20','22.5','24','25','رواكد'];
var available_tyre_sizes 		= ['16/600','16/650','16/700','16/750','16/825','16/900','16/1050','17.5','18/1000','18/1200','18/18*12.5','19/600','20/600','20/650','20/700','20/750','20/825','20/900','20/1000','20/1100','20/1200','20/1300','20/1400','21','22.5/10','22.5/11','22.5/12','22.5/13','22.5/295/60','22.5/295/70','22.5/295/80','22.5/315/60','22.5/315/65','22.5/315/70','22.5/315/80','24/1200','24/1300','24/1400','24/16.9','24/17','24/18','25/15.5','25/17.5','25/20.5','25/32.5','25/26.5','25/29.5','رواكد'];
var available_tube_sizes 		= ['15','16','19','20','24','25','رواكد'];
var available_ribbon_sizes		= ['15','16','20','24','25','رواكد'];
var available_tyre_tubes_brands = ['ميشلان','ساميتومو','باروم','تايجر','كوبر','نانكانج','نيتو','باكيت','كليبر','اليانس','اودسو','سها','سوبر ستون','اورورا','دستون','دي ماستر','ميلر','ثاندرار','جيه كيه','سمسون','سمسونج','جود ريش','نسر','بريجستون','يوكوهاما','تويو','فايرستون','ميتس','بتلاس','جود يير','فولدا','صافا','كومهو','هانكوك','نوكيا','كونتننتال','مارشال','جي تي','فديرال','مكسيس','شمبيون','ريكن','كيندا','بريسا','صيني','اوتانا','روسي','اوكراني','سيريلانكي','فيتنامي','دانلوب','شات','بريللي','تريال','فاروس'];
var available_holes_number		= ['5','6','8','10','19'];

$(document).ready(function(){

	var buy_id = $(".id").val();

	$.ajax({
		url:'requests/buy.php',
		data:{request:"get_buy_data",buy_id:buy_id},
		type:'POST',
		success:function(data){
			var encoded_data = JSON.parse(data);
			if(!encoded_data)
			{
				$('.info-business').empty();
				$('.info-business').append("<div class='info-item-added'><img src='images/sorry.png'></div>");
			}
			else
			{
				$('.seller_name').text(encoded_data['seller_name']);
				$('.total_paid').text(encoded_data['total_paid']);
				$('.paid').text(encoded_data['paid']);
				$('.buy_date').text(encoded_data['buy_date']);
				$('.buy_id').text(encoded_data['buy_id']);
				$('.buy_notes').text(encoded_data['notes']);
			}
		}
	})

	$.ajax({
		url:'requests/buy.php',
		data:{request:"get_buy_rims",buy_id:buy_id},
		type:'POST',
		success:function(data){
			var encoded_data = JSON.parse(data);
			if(encoded_data.length>0)
			{
				$('.rims .info-item-added').detach();
			}
			for(var i=0 ; i<encoded_data.length ; i++)
			{
				$('.rims').append('<div class="info-item-added"><ul class="list-unstyled"><li><p class="size">'+encoded_data[i]['size']+'</p><label> المقاس  </label></li><li><p class="type">'+encoded_data[i]['type']+'</p><label> النوع  </label></li><li><p class="new_old">'+encoded_data[i]['new_old']+'</p><label> جديد/مستعمل </label></li><li><p class="status">'+encoded_data[i]['status']+'</p><label> الحاله  </label></li><li><p class="holes_number">'+encoded_data[i]['holes_number']+'</p><label> عدد الثقوب </label></li><hr><li><p class="total_count">'+encoded_data[i]['total_count']+'</p><label> العدد الكلي  </label></li><li><p class="available">'+encoded_data[i]['available']+'</p><label> العدد المتاح  </label></li><li><p class="buy_price">'+encoded_data[i]['buy_price']+'</p><label> سعر الشراء  </label></li><li><p class="evaluative_price">'+encoded_data[i]['evaluative_price']+'</p><label> السعر التقديرى  </label></li><input hidden class="item_id" type="text" value="'+encoded_data[i]['rim_id']+'"></ul><div class="home-notice"><div class="icon-notice"><i class="fa fa-pencil edit_item" title="تعديل"></i><i class="fa fa-book show-notice" title="رؤيه الملاحظات"></i></div><div class="about-notice"><p>'+encoded_data[i]['notes']+'</p></div></div></div>');
			}
		}
	})

	$.ajax({
		url:'requests/buy.php',
		data:{request:"get_buy_tyres",buy_id:buy_id},
		type:'POST',
		success:function(data){
			var encoded_data = JSON.parse(data);
			if(encoded_data.length>0)
			{
				$('.tyres .info-item-added').detach();
			}
			for(var i=0 ; i<encoded_data.length ; i++)
			{
				$('.tyres').append('<div class="info-item-added"><ul class="list-unstyled"><li><p class="size">'+encoded_data[i]['size']+'</p><label> المقاس  </label></li><li><p class="type">'+encoded_data[i]['type']+'</p><label> النوع  </label></li><li><p class="new_old">'+encoded_data[i]['new_old']+'</p><label> جديد/مستعمل </label></li><li><p class="status">'+encoded_data[i]['status']+'</p><label> الحاله  </label></li><li><p class="holes_number">'+encoded_data[i]['brand']+'</p><label> الماركة </label></li><hr><li><p class="total_count">'+encoded_data[i]['total_count']+'</p><label> العدد الكلي  </label></li><li><p class="available">'+encoded_data[i]['available']+'</p><label> العدد المتاح  </label></li><li><p class="buy_price">'+encoded_data[i]['buy_price']+'</p><label> سعر الشراء  </label></li><li><p class="evaluative_price">'+encoded_data[i]['evaluative_price']+'</p><label> السعر التقديرى  </label></li><input hidden type="text" class="item_id" value="'+encoded_data[i]['tyre_id']+'"></ul><div class="home-notice"><div class="icon-notice"><i class="fa fa-pencil edit_item" title="تعديل"></i><i class="fa fa-book show-notice" title="رؤيه الملاحظات"></i></div><div class="about-notice"><p>'+encoded_data[i]['notes']+'</p></div></div></div>');
			}
		}
	})

	$.ajax({
		url:'requests/buy.php',
		data:{request:"get_buy_tubes",buy_id:buy_id},
		type:'POST',
		success:function(data){
			var encoded_data = JSON.parse(data);
			if(encoded_data.length>0)
			{
				$('.tubes .info-item-added').detach();
			}
			for(var i=0 ; i<encoded_data.length ; i++)
			{
				$('.tubes').append('<div class="info-item-added"><ul class="list-unstyled"><li><p class="size">'+encoded_data[i]['size']+'</p><label> المقاس  </label></li><li><p class="new_old">'+encoded_data[i]['new_old']+'</p><label> جديد/مستعمل </label></li><li><p class="status">'+encoded_data[i]['status']+'</p><label> الحاله  </label></li><li><p class="holes_number">'+encoded_data[i]['brand']+'</p><label> الماركة </label></li><hr><li><p class="total_count">'+encoded_data[i]['total_count']+'</p><label> العدد الكلي  </label></li><li><p class="available">'+encoded_data[i]['available']+'</p><label> العدد المتاح  </label></li><li><p class="buy_price">'+encoded_data[i]['buy_price']+'</p><label> سعر الشراء  </label></li><li><p class="evaluative_price">'+encoded_data[i]['evaluative_price']+'</p><label> السعر التقديرى  </label></li><input type="text" class="item_id" hidden value="'+encoded_data[i]['tube_id']+'"></ul><div class="home-notice"><div class="icon-notice"><i class="fa fa-pencil edit_item" title="تعديل"></i><i class="fa fa-book show-notice" title="رؤيه الملاحظات"></i></div><div class="about-notice"><p>'+encoded_data[i]['notes']+'</p></div></div></div>');
			}
		}
	})

	$.ajax({
		url:'requests/buy.php',
		data:{request:"get_buy_ribbons",buy_id:buy_id},
		type:'POST',
		success:function(data){
			var encoded_data = JSON.parse(data);
			if(encoded_data.length>0)
			{
				$('.ribbons .info-item-added').detach();
			}
			for(var i=0 ; i<encoded_data.length ; i++)
			{
				$('.ribbons').append('<div class="info-item-added"><ul class="list-unstyled"><li><p class="size">'+encoded_data[i]['size']+'</p><label> المقاس  </label></li><li><p class="new_old">'+encoded_data[i]['new_old']+'</p><label> جديد/مستعمل </label></li><li><p class="status">'+encoded_data[i]['status']+'</p><label> الحاله  </label></li><hr><li><p class="total_count">'+encoded_data[i]['total_count']+'</p><label> العدد الكلي  </label></li><li><p class="available">'+encoded_data[i]['available']+'</p><label> العدد المتاح  </label></li><li><p class="buy_price">'+encoded_data[i]['buy_price']+'</p><label> سعر الشراء  </label></li><li><p class="evaluative_price">'+encoded_data[i]['evaluative_price']+'</p><label> السعر التقديرى  </label></li><input type="text" class="item_id" hidden value="'+encoded_data[i]['ribbon_id']+'"></ul><div class="home-notice"><div class="icon-notice"><i class="fa fa-pencil edit_item" title="تعديل"></i><i class="fa fa-book show-notice" title="رؤيه الملاحظات"></i></div><div class="about-notice"><p>'+encoded_data[i]['notes']+'</p></div></div></div>');			}
		}
	})

	$(document).on('click', ".home-notice .icon-notice .show-notice", function(){ 
          	$(this).parents(".home-notice").find(".about-notice").slideToggle(); 
    });

	$(document).on('click' ,'.dashbord .list-unstyled li' ,function(){
		$(this).siblings().removeClass('active-menu');
		$(this).addClass('active-menu');

		if($(this).find('p').is(":contains('جنط')"))
		{
			$(".rims").siblings().hide();
			$(".rims").fadeIn();
		}
		else if($(this).find('p').is(":contains('اطار')"))
		{
			$(".tyres").siblings().hide();
			$(".tyres").fadeIn();
		}
		else if($(this).find('p').is(":contains('شنبر')"))
		{
			$(".tubes").siblings().hide();
			$(".tubes").fadeIn();
		}
		else if($(this).find('p').is(":contains('شريط')"))
		{
			$(".ribbons").siblings().hide();
			$(".ribbons").fadeIn();
		}
		else 
		{
			$(".info-business").siblings().hide();
			$(".info-business").fadeIn();
			$(".edit_buy_button").fadeIn();
		}
	})

	$('.edit_buy').on('click' ,function(){
		if($('.buy_id').text().length > 0)
		{
			$('.edit_buy_id').val(buy_id);
			$('.edit_form').submit();
		}	
	})

	var id_for_edit;
	var item_selector;

	$(document).on('click' ,'.edit_item' ,function(){
		item_selector			= $(this).parents('.info-item-added');
		id_for_edit 			= Number($(this).parents('.home-notice').siblings('.list-unstyled').find('.item_id').val());
		var size 				= $(this).parents('.home-notice').siblings('.list-unstyled').find('.size').text();
		var brand 				= $(this).parents('.home-notice').siblings('.list-unstyled').find('.brand').text();
		var status 				= $(this).parents('.home-notice').siblings('.list-unstyled').find('.status').text();
		var holes_number 		= $(this).parents('.home-notice').siblings('.list-unstyled').find('.holes_number').text();
		var new_old 			= $(this).parents('.home-notice').siblings('.list-unstyled').find('.new_old').text();
		var evaluative_price 	= Number($(this).parents('.home-notice').siblings('.list-unstyled').find('.evaluative_price').text());
		var type 				= $(this).parents('.home-notice').siblings('.list-unstyled').find('.type').text();
		var item_notes 			= $(this).parents('.icon-notice').siblings('.about-notice').find('p').text();

		$('.modal_size .choose-from').val(size);
		$('.modal_status .choose-from').val(status);
		$('.modal_new_old .choose-from').val(new_old);
		$('.modal_evaluative_price .choose-from').val(evaluative_price);
		$('.modal_notes').val(item_notes);

		if($('.active-menu p').is(":contains('جنط')"))
		{
			$('.modal_size').siblings().show();
			$('.modal_brand ,.modal_tyre_type').hide();
			$('.modal_rim_type .choose-from').val(type);
			$('.modal_holes_number .choose-from').val(holes_number);
		}
		if($('.active-menu p').is(":contains('اطار')"))
		{
			$('.modal_size').siblings().show();
			$('.modal_holes_number ,.modal_rim_type').hide();
			$('.modal_tyre_type .choose-from').val(type);
			$('.modal_brand .choose-from').val(brand);
		}
		if($('.active-menu p').is(":contains('شنبر')"))
		{
			$('.modal_size').siblings().show();
			$('.modal_holes_number ,.modal_tyre_type ,.modal_rim_type').hide();
			$('.modal_brand .choose-from').val(brand);
		}
		if($('.active-menu p').is(":contains('شريط')"))
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
		var item_notes			= $('.modal_notes').val();
		var error				=0;

		if($('.active-menu p').is(":contains('جنط')"))
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

		else if($('.active-menu p').is(":contains('اطار')"))
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

		else if($('.active-menu p').is(":contains('شنبر')"))
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

		else if($('.active-menu p').is(":contains('شريط')"))
		{
			if($.inArray(size, available_ribbon_sizes)==-1)
			{
				$(".warn").text("المقاس الذي ادخلته غير موجود !");
				error = 1;
			}
		}

		if(error==0)
		{
			if(isNaN(evaluative_price) || evaluative_price==0)
			{
				$(".warn").text("من فضلك ادخل الاسعار بشكل صحيح");
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
			$(".warn").empty();
			$('#edit').modal('hide');
			document.getElementById('modal_edit_form').reset();

			// // ADDING THE ADDED DATA TO THE PAGE 

			item_selector.find('.about-notice p').text(item_notes);
			item_selector.find('.status').text(status);
			item_selector.find('.evaluative_price').text(evaluative_price);
			item_selector.find('.new_old').text(new_old);
			item_selector.find('.size').text(size);

			if($('.active-menu p').is(":contains('جنط')"))
    		{
   				item_selector.find('.holes_number').text(holes_number);
   				item_selector.find('.type').text(rim_type);

   				$.ajax({
   					url:'requests/edit_item.php',
   					data:{request:'edit_rim' ,rim_id:id_for_edit ,holes_number:holes_number ,type:rim_type ,size:size ,status:status ,new_old:new_old ,evaluative_price:evaluative_price ,notes:item_notes},
   					type:'POST'
   				})
       		}
	    	else if($('.active-menu p').is(":contains('اطار')"))
	    	{
				item_selector.find('.brand').text(brand);
				item_selector.find('.type').text(tyre_type);

				$.ajax({
   					url:'requests/edit_item.php',
   					data:{request:'edit_tyre' ,tyre_id:id_for_edit ,brand:brand ,type:tyre_type ,size:size ,status:status ,new_old:new_old ,evaluative_price:evaluative_price ,notes:item_notes},
   					type:'POST'
   				})	    		
    		}
	    	else if($('.active-menu p').is(":contains('شنبر')"))
	    	{
	    		item_selector.find('.brand').text(brand);

	    		$.ajax({
   					url:'requests/edit_item.php',
   					data:{request:'edit_tube' ,tube_id:id_for_edit ,brand:brand ,size:size ,status:status ,new_old:new_old ,evaluative_price:evaluative_price ,notes:item_notes},
   					type:'POST'
   				})	    		
	    	}
	    	else if($('.active-menu p').is(":contains('شريط')"))
	    	{
	    		$.ajax({
   					url:'requests/edit_item.php',
   					data:{request:'edit_ribbon' ,ribbon_id:id_for_edit ,size:size ,status:status ,new_old:new_old ,evaluative_price:evaluative_price ,notes:item_notes},
   					type:'POST'
   				})
	    	}
		}
	})

	$('.choose-from').on('focus' ,function(){
		$('.warn').empty();
	})






	$(document).on('keyup', ".modal_size", function(){
    	if($('.active-menu p').is(":contains('جنط')"))
    		var used_array = available_rim_sizes;
    	if($('.active-menu p').is(":contains('اطار')"))
    		var used_array = available_tyre_sizes;
    	if($('.active-menu p').is(":contains('شنبر')"))
    		var used_array = available_tube_sizes;
    	if($('.active-menu p').is(":contains('شريط')"))
    		var used_array = available_ribbon_sizes;
		var val = $(".modal_size .choose-from").val();
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

	$(document).on('keyup', ".modal_brand", function(){
    	if($('.active-menu p').is(":contains('جنط')"))
    		var used_array = available_rim_brands;
    	if($('.active-menu p').is(":contains('اطار')"))
    		var used_array = available_tyre_tubes_brands;
    	if($('.active-menu p').is(":contains('شنبر')"))
    		var used_array = available_tyre_tubes_brands;
   
		var val = $(".modal_brand .choose-from").val();
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

	$(document).on('keyup', ".modal_holes_number", function(){
    	var used_array = available_holes_number;
		var val = $(".modal_holes_number .choose-from").val();
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
		$(".modal_size .choose-from").val($(this).text());
		$(".meun-search-1").css("display","none");
	})

	$(document).on('blur', ".modal_size .choose-from", function(){
		$(".meun-search-1").css("display","none");
	});

	$(document).on('mousedown', ".meun-search-2 .menu-item li", function(){
		$(".modal_brand .choose-from").val($(this).text());
		$(".meun-search-2").css("display","none");
	})

	$(document).on('blur', ".modal_brand .choose-from", function(){
		$(".meun-search-2").css("display","none");
	});

	$(document).on('mousedown', ".meun-search-3 .menu-item li", function(){
		$(".modal_holes_number .choose-from").val($(this).text());
		$(".meun-search-3").css("display","none");
	})

	$(document).on('blur', ".modal_holes_number .choose-from", function(){
		$(".meun-search-3").css("display","none");
	});
})