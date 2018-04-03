$(document).ready(function(){
	var name = $('.dealer_name').val();

	if(typeof name !== 'undefined')
	{
		if(name.length==0)
		{
			$('#error-modal .error').text('من فضلك ادخل اسم العميل');
			$('#error-modal').modal('show')
			setTimeout(function(){
				$('#error-modal').modal('hide');
				window.location = 'main_search.php';
			},3000);

			$("#error-modal").on('hidden.bs.modal' ,function(){
				window.location = 'main_search.php';
			})
		}
		$.ajax({
			url:'requests/dealers.php',
			data:{request:'get_dealer_lifetime' ,name:name},
			type:'POST',
			success:function(data){
				encoded_data = JSON.parse(data);
				if(encoded_data.length==0 || name =='مجهول')
				{
					$('#error-modal .error').text('لا يوجد عميل بهذا الاسم !');
					$('#error-modal').modal('show')
					setTimeout(function(){
						$('#error-modal').modal('hide');
						window.location = 'main_search.php';
					},3000);

					$("#error-modal").on('hidden.bs.modal' ,function(){
						window.location = 'main_search.php';
					})
				}
				else
				{
					if(encoded_data[0]['buy_total_paid'] == 0)
						$('.buy_word').hide();
					if(encoded_data[0]['sell_total_paid'] == 0)
						$('.sell_word').hide();
					if(encoded_data[0]['feed'] >= 0)
						$('.money-agnda .list-unstyled').append('<li class="nice">   صافى الفلوس عليه : '+encoded_data[0]['feed']+' </li>');
					else
						$('.money-agnda .list-unstyled').append('<li class="bad">  صافى الفلوس ليه  : '+(encoded_data[0]['feed']*-1)+' </li>');
				}
			}
		})
		$.ajax({
			url:'requests/dealers.php',
			data:{request:'get_dealer_sells' ,name:name},
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
			url:'requests/dealers.php',
			data:{request:'get_dealer_buys' ,name:name},
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