$(document).ready(function(){
	
	var date = $('.day_date').val();
	var min_date = $('.min_date').val();
	var max_date = $('.max_date').val();

	if(typeof date !== 'undefined')
	{
		$.ajax({
			url:'requests/agenda.php',
			data:{request:'get_day_events' ,date:date},
			type:'POST',
			success:function(data){
				encoded_data = JSON.parse(data);
				if(encoded_data['feed'] == null)
				{
					$('.outgoings').text(0);
					$('.expected_feed').text(0);
					$('.feed').text(0);
				}
				else
				{
					$('.outgoings').text(encoded_data['outgoings']);
					$('.expected_feed').text(encoded_data['expected_feed']);
					$('.feed').text(encoded_data['feed']);
				}
			}
		})
		$.ajax({
			url:'requests/agenda.php',
			data:{request:'get_day_outgoings' ,date:date},
			type:'POST',
			success:function(data){
				encoded_data = JSON.parse(data);
				if(encoded_data.length != 0)
					$('.notice-extra').detach();
				for(var i=0 ;i<encoded_data.length ;i++)
				{
					$('.extra-money').append('<article class="notice-extra"><div class="info-notice-extra"><em> مصاريف : '+encoded_data[i]['paid']+' </em><em>  التاريخ : '+encoded_data[i]['date']+' </em></div><p>'+encoded_data[i]['comment']+'</p></article>');
				}
			}
		})
		$.ajax({
			url:'requests/agenda.php',
			data:{request:'get_day_sells' ,date:date},
			type:'POST',
			success:function(data){
				encoded_data = JSON.parse(data);
				if(encoded_data.length !=0)
					$('.sell .content-number-items .info-item-added').detach();
				for(var i=0 ;i<encoded_data.length ;i++)
				{
					$('.sell .content-number-items').append('<div class="item-added-info"><ul class="list-unstyled"><li><label>  التاريخ : </label><span> '+encoded_data[i]['sell_date']+' </span></li><li><label>  المبلغ الكلى : </label><span> '+encoded_data[i]['total_paid']+' </span></li><li><label> المبلغ المدفوع : </label><span> '+encoded_data[i]['paid']+' </span></li><li><label> الارباح الكليه : </label><span> '+encoded_data[i]['sell_feed']+' </span></li><li><a href="sell_info.php?sell_id='+encoded_data[i]['sell_id']+'"><i title=" عرض عملية البيع " class="fa fa-eye"></i></a></li></ul></div>');
				}
			}
		})
		$.ajax({
			url:'requests/agenda.php',
			data:{request:'get_day_buys' ,date:date},
			type:'POST',
			success:function(data){
				encoded_data = JSON.parse(data);
				if(encoded_data.length !=0)
					$('.buy .content-number-items .info-item-added').detach();
				for(var i=0 ;i<encoded_data.length ;i++)
				{
					$('.buy .content-number-items').append('<div class="item-added-info"><ul class="list-unstyled"><li><label>  التاريخ : </label><span> '+encoded_data[i]['buy_date']+' </span></li><li><label>  المبلغ الكلى : </label><span> '+encoded_data[i]['total_paid']+' </span></li><li><label> المبلغ المدفوع : </label><span> '+encoded_data[i]['paid']+' </span></li><li><label> رقم العملية : </label><span> '+encoded_data[i]['buy_id']+' </span></li><li><a href="buy_info.php?buy_id='+encoded_data[i]['buy_id']+'"><i title=" عرض عملية الشراء " class="fa fa-eye"></i></a></li></ul></div>');
				}
			}
		})
	}

	else
	{
		$.ajax({
			url:'requests/agenda.php',
			data:{request:'get_period_events' ,min_date:min_date ,max_date:max_date},
			type:'POST',
			success:function(data){
				encoded_data = JSON.parse(data);
				if(encoded_data['feed'] == null)
				{
					$('.outgoings').text(0);
					$('.expected_feed').text(0);
					$('.feed').text(0);
				}
				else
				{
					$('.outgoings').text(encoded_data['outgoings']);
					$('.expected_feed').text(encoded_data['expected_feed']);
					$('.feed').text(encoded_data['feed']);
				}
			}
		})
		$.ajax({
			url:'requests/agenda.php',
			data:{request:'get_period_outgoings' ,min_date:min_date ,max_date:max_date},
			type:'POST',
			success:function(data){
				encoded_data = JSON.parse(data);
				if(encoded_data.length != 0)
					$('.notice-extra').detach();
				for(var i=0 ;i<encoded_data.length ;i++)
				{
					$('.extra-money').append('<article class="notice-extra"><div class="info-notice-extra"><em> مصاريف : '+encoded_data[i]['paid']+' </em><em>  التاريخ : '+encoded_data[i]['date']+' </em></div><p>'+encoded_data[i]['comment']+'</p></article>');
				}
			}
		})
		$.ajax({
			url:'requests/agenda.php',
			data:{request:'get_period_sells' ,min_date:min_date ,max_date:max_date},
			type:'POST',
			success:function(data){
				encoded_data = JSON.parse(data);
				if(encoded_data.length !=0)
					$('.sell .content-number-items .info-item-added').detach();
				for(var i=0 ;i<encoded_data.length ;i++)
				{
					$('.sell .content-number-items').append('<div class="item-added-info"><ul class="list-unstyled"><li><label>  التاريخ : </label><span> '+encoded_data[i]['sell_date']+' </span></li><li><label>  المبلغ الكلى : </label><span> '+encoded_data[i]['total_paid']+' </span></li><li><label> المبلغ المدفوع : </label><span> '+encoded_data[i]['paid']+' </span></li><li><label> الارباح الكليه : </label><span> '+encoded_data[i]['sell_feed']+' </span></li><li><a href="sell_info.php?sell_id='+encoded_data[i]['sell_id']+'"><i title=" عرض عملية البيع " class="fa fa-eye"></i></a></li></ul></div>');
				}
			}
		})
		$.ajax({
			url:'requests/agenda.php',
			data:{request:'get_period_buys' ,min_date:min_date ,max_date:max_date},
			type:'POST',
			success:function(data){
				encoded_data = JSON.parse(data);
				if(encoded_data.length !=0)
					$('.buy .content-number-items .info-item-added').detach();
				for(var i=0 ;i<encoded_data.length ;i++)
				{
					$('.buy .content-number-items').append('<div class="item-added-info"><ul class="list-unstyled"><li><label>  التاريخ : </label><span> '+encoded_data[i]['buy_date']+' </span></li><li><label>  المبلغ الكلى : </label><span> '+encoded_data[i]['total_paid']+' </span></li><li><label> المبلغ المدفوع : </label><span> '+encoded_data[i]['paid']+' </span></li><li><label> رقم العملية : </label><span> '+encoded_data[i]['buy_id']+' </span></li><li><a href="buy_info.php?buy_id='+encoded_data[i]['buy_id']+'"><i title=" عرض عملية الشراء " class="fa fa-eye"></i></a></li></ul></div>');
				}
			}
		})
	}

	$(document).on('click' ,".info-search .extra-money" ,function(){
		$(".info-search .extra-money .notice-extra").slideToggle(); 
	});

	$(".p-1").on("click", function(){
		$('.after-1').show();
		$('.after-2').hide();
    	$('.buy').fadeOut(400,function(){
    		$('.sell').fadeIn();
    	});
	});

	$(".p-2").on("click", function(){
		$('.after-2').show();
		$('.after-1').hide();
		$('.sell').fadeOut(400,function(){
    		$('.buy').fadeIn();
    	});
	});
})