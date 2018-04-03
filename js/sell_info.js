$(document).ready(function(){

	var sell_id = $(".id").val();

	$.ajax({
		url:'requests/sell.php',
		data:{request:"get_sell_data",sell_id:sell_id},
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
				$('.buyer_name').text(encoded_data['buyer_name']);
				$('.total_paid').text(encoded_data['total_paid']);
				$('.paid').text(encoded_data['paid']);
				$('.sell_date').text(encoded_data['sell_date']);
				$('.sell_feed').text(encoded_data['sell_feed']);
				$('.sell_notes').text(encoded_data['notes']);
			}
		}
	})

	$.ajax({
		url:'requests/sell.php',
		data:{request:"get_sell_rims",sell_id:sell_id},
		type:'POST',
		success:function(data){
			var encoded_data = JSON.parse(data);
			if(encoded_data.length>0)
			{
				$('.rims .info-item-added').detach();
			}
			for(var i=0 ; i<encoded_data.length ; i++)
			{
				$('.rims').append('<div class="info-item-added"><ul class="list-unstyled"><li><p class="size">'+encoded_data[i]['size']+'</p><label> المقاس  </label></li><li><p class="type">'+encoded_data[i]['type']+'</p><label> النوع  </label></li><li><p class="new_old">'+encoded_data[i]['new_old']+'</p><label> جديد/مستعمل </label></li><li><p class="status">'+encoded_data[i]['status']+'</p><label> الحاله  </label></li><hr><li><p class="holes_number">'+encoded_data[i]['holes_number']+'</p><label> عدد الثقوب </label></li><li><p class="count">'+encoded_data[i]['count']+'</p><label> العدد المباع  </label></li><li><p class="buy_price">'+encoded_data[i]['buy_price']+'</p><label> سعر الشراء  </label></li><li><p class="sell_price">'+encoded_data[i]['sell_price']+'</p><label> سعر البيع  </label></li></ul><div class="home-notice"><div class="icon-notice"><i class="fa fa-book show-notice" title="رؤيه الملاحظات"></i></div><div class="about-notice"><p>'+encoded_data[i]['notes']+'</p></div></div></div>');
			}
		}
	})

	$.ajax({
		url:'requests/sell.php',
		data:{request:"get_sell_tyres",sell_id:sell_id},
		type:'POST',
		success:function(data){
			var encoded_data = JSON.parse(data);
			if(encoded_data.length>0)
			{
				$('.tyres .info-item-added').detach();
			}
			for(var i=0 ; i<encoded_data.length ; i++)
			{
				$('.tyres').append('<div class="info-item-added"><ul class="list-unstyled"><li><p class="size">'+encoded_data[i]['size']+'</p><label> المقاس  </label></li><li><p class="type">'+encoded_data[i]['type']+'</p><label> النوع  </label></li><li><p class="new_old">'+encoded_data[i]['new_old']+'</p><label> جديد/مستعمل </label></li><li><p class="status">'+encoded_data[i]['status']+'</p><label> الحاله  </label></li><hr><li><p class="brand">'+encoded_data[i]['brand']+'</p><label> الماركة </label></li><li><p class="count">'+encoded_data[i]['count']+'</p><label> العدد المباع  </label></li><li><p class="buy_price">'+encoded_data[i]['buy_price']+'</p><label> سعر الشراء  </label></li><li><p class="sell_price">'+encoded_data[i]['sell_price']+'</p><label> سعر البيع  </label></li></ul><div class="home-notice"><div class="icon-notice"><i class="fa fa-book show-notice" title="رؤيه الملاحظات"></i></div><div class="about-notice"><p>'+encoded_data[i]['notes']+'</p></div></div></div>');
			}
		}
	})

	$.ajax({
		url:'requests/sell.php',
		data:{request:"get_sell_tubes",sell_id:sell_id},
		type:'POST',
		success:function(data){
			var encoded_data = JSON.parse(data);
			if(encoded_data.length>0)
				$('.tubes .info-item-added').detach();
			for(var i=0 ; i<encoded_data.length ; i++)
				$('.tubes').append('<div class="info-item-added"><ul class="list-unstyled"><li><p class="size">'+encoded_data[i]['size']+'</p><label> المقاس  </label></li><li><p class="new_old">'+encoded_data[i]['new_old']+'</p><label> جديد/مستعمل </label></li><li><p class="status">'+encoded_data[i]['status']+'</p><label> الحاله  </label></li><li><p class="brand">'+encoded_data[i]['brand']+'</p><label> الماركة </label></li><hr><li><p class="count">'+encoded_data[i]['count']+'</p><label> العدد المباع  </label></li><li><p class="buy_price">'+encoded_data[i]['buy_price']+'</p><label> سعر الشراء  </label></li><li><p class="sell_price">'+encoded_data[i]['sell_price']+'</p><label> سعر البيع  </label></li></ul><div class="home-notice"><div class="icon-notice"><i class="fa fa-book show-notice" title="رؤيه الملاحظات"></i></div><div class="about-notice"><p>'+encoded_data[i]['notes']+'</p></div></div></div>');
		}
	})

	$.ajax({
		url:'requests/sell.php',
		data:{request:"get_sell_ribbons",sell_id:sell_id},
		type:'POST',
		success:function(data){
			var encoded_data = JSON.parse(data);
			if(encoded_data.length>0)
				$('.ribbons .info-item-added').detach();
			for(var i=0 ; i<encoded_data.length ; i++)
			{
				$('.ribbons').append('<div class="info-item-added"><ul class="list-unstyled"><li><p class="size">'+encoded_data[i]['size']+'</p><label> المقاس  </label></li><li><p class="new_old">'+encoded_data[i]['new_old']+'</p><label> جديد/مستعمل </label></li><li><p class="status">'+encoded_data[i]['status']+'</p><label> الحاله  </label></li><hr><li><p class="count">'+encoded_data[i]['count']+'</p><label> العدد المباع  </label></li><li><p class="buy_price">'+encoded_data[i]['buy_price']+'</p><label> سعر الشراء  </label></li><li><p class="sell_price">'+encoded_data[i]['sell_price']+'</p><label> سعر البيع  </label></li></ul><div class="home-notice"><div class="icon-notice"><i class="fa fa-book show-notice" title="رؤيه الملاحظات"></i></div><div class="about-notice"><p>'+encoded_data[i]['notes']+'</p></div></div></div>');			}
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
			$(".edit_sell_button").fadeIn();
		}
	})

	$('.edit_sell').on('click' ,function(){
		if($('.sell_date').text().length > 0)
		{
			$('.edit_sell_id').val(sell_id);
			$('.edit_form').submit();
		}	
	})

})