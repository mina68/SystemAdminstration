$(document).ready(function(){
	$.ajax({
		url:'requests/dealers.php',
		data:{request:'get_all_dealers_lifetime'},
		type:'POST',
		success:function(data){
			encoded_data = JSON.parse(data);

			if(encoded_data.length >0)
			{
				$('.table tbody').empty();
				for(var i=0 ;i<encoded_data.length ;i++)
				{
					if(encoded_data[i]['dealer_name'] == 'مجهول')
						continue;

					if(encoded_data[i]['feed'] > 0)
						$('.table tbody').append('<tr><td>'+encoded_data[i]['dealer_name']+'</td><td>0</td><td>'+encoded_data[i]['feed']+'</td><td><a href="profile.php?name='+encoded_data[i]['dealer_name']+'"> عرض </a></td></tr>');
					else if(encoded_data[i]['feed'] < 0)
						$('.table tbody').append('<tr><td>'+encoded_data[i]['dealer_name']+'</td><td>'+(encoded_data[i]['feed']*-1)+'</td><td>0</td><td><a href="profile.php?name='+encoded_data[i]['dealer_name']+'"> عرض </a></td></tr>');
				}
			}
			else
			{
				$('.content-quick-info-items').empty();
				$('.content-quick-info-items').append("<div class='info-item-added'><img src='images/sorry.png'></div>");
			}
		}
	})
})