 
$(document).ready(function()
{    

    get_notifications();   

    current_location = document.location.href;
    if(current_location.includes('main_search'))
        $('.nav-main_search').addClass('nav-active');
    if(current_location.includes('make_sell'))
        $('.nav-sell').addClass('nav-active');
    if(current_location.includes('make_buy'))
        $('.nav-buy').addClass('nav-active');
    if(current_location.includes('agenda'))
        $('.nav-agenda').addClass('nav-active');

    // PRINT TODAY'S DATE
    print_date();

    function print_date()
    {
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1; //January is 0!
        var yyyy = today.getFullYear();
        if(dd<10) {
            dd = '0'+dd
        } 
        if(mm<10) {
            mm = '0'+mm
        } 
        today = mm + '/' + dd + '/' + yyyy;
        $('.today_date').text(today);
    }   
    
    //show menu-links in navbar
    
    $(".navbar .bars .menu-button").click( function(){
        $(".bars .drop-down-menu").slideToggle('fast'); 
    });

    $(document).on('mouseup' ,function(event){
        var menu = $('.drop-down-menu');
        if(!menu.is(event.target) && menu.has(event.target).length === 0 && !$('.menu-button').is(event.target))
            $(".bars .drop-down-menu").slideUp('fast');
    })

    // SHOWING NOTIFICATIONS MENU

    var set_seen = 0 ;

    $(".navbar .bars").on('click' ,'.notification-button' ,function(){
        $(".bars .notificitions").slideToggle('fast');
        $('.notification-button label').detach();
        if(set_seen == 0)
        {
            $.ajax({
                url:'requests/notification.php',
                data:{request:'set_seen'},
                type:'POST',
                success:function(){
                    set_seen = 1;
                }
            })
        }
    });

    $(document).on('mouseup' ,function(event){
        var menu = $('.notificitions');
        if(!menu.is(event.target) && menu.has(event.target).length === 0 && !$('.notification-button').is(event.target) && $('.notification-button').has(event.target).length === 0 && !$('.show-notificitions').is(event.target) && $('.show-notificitions').has(event.target).length == 0)
            $(".bars .notificitions").slideUp('fast');
    })
    
    
    
    //show search in navbar
    
    $(".navbar .search .search-nav").click( function(){
        $(".navbar .search .input-search").show(); 
        $(".navbar .search .down").show(); 
        $(this).hide(); 
    });
    
    //hide search in navbar
    
    $(".navbar .search .down").click( function(){
        $(".navbar .search .input-search").hide(); 
        $(".navbar .search .search-nav").show(); 
        $(this).hide(); 
    });
    
        // scroll-button
	
	var scrollButton = $(".scroll-top");
	
    $(window).scroll(function(){
        $(this).scrollTop()>= 300 ? scrollButton.show(): scrollButton.hide();  
    });
  
    scrollButton.click(function(){
      $("html,body").animate({scrollTop : 0},600);  
    });
    

    // SHOWING THE NAMES OF THE DEALERS

    $(document).on('keyup', ".name", function(){
        var val = $(".name").val();
        if(val.length==0)
        {
            $(".result-client-nav").css("display","none");
        }
        else
        {
            $(".result-client-nav").empty();

            $.ajax({
                url:"requests/dealers.php",
                data:{request:"get_all_dealers"},
                type:"POST",
                success:function(data){
                    var encoded_data = JSON.parse(data);
                    for(var i=0 ; i<encoded_data.length ; i++)
                    {
                        var count = 0;
                        if(encoded_data[i].includes(val) && encoded_data[i] !== 'مجهول')
                        {
                            $(".result-client-nav").append('<div class="number-client"><div class="info-number-client"><h4>'+encoded_data[i]+'</h4></div></div>');
                            count++;
                        }
                        if(count == 5)
                            break;
                    }
                    $(".result-client-nav").css("display","block");
                }
            });
                
        }
    });

    $(document).on('mousedown', ".result-client-nav .number-client", function(){
        $(".name").val($(this).text());
        $(".result-client-nav").css("display","none");
    });

    $(document).on('blur', ".name", function(){
        $(".result-client-nav").css("display","none");
    });

    // OPEN THE NOTIFICATION

    $('.notificitions').on('click' ,'.notification' ,function(){
        $(this).removeClass('unseen');
        $('.show-notificitions .date').text($(this).find('em').text());
        $('.show-notificitions .content-notificitions').text($(this).find('span').text());
        $('#show-notificitions').modal('show');
    })

    // ADDING NEW NOTIFICATION

    $('.confirm-add-notification').on('click' , function(event){
        event.preventDefault();
        var body = $('.notification-body').val();
        var remember_date = $('.remember-date').val();
        if(body.length == 0 || remember_date.length == 0)
            $('.notification_warning').text('من فضلك ادخل البيانات المطلوبة !');
        else
        {
            $.ajax({
                url:'requests/notification.php',
                data:{request:'add_notification' ,remember_date:remember_date ,body:body},
                type:'POST',
                success:function(){
                    $('#write-notificitions').modal('hide');
                    $('#success-modal .message').text('تم اضافة التنبيه');
                    $('#success-modal').modal('show')
                    setTimeout(function(){
                        $('#success-modal').modal('hide');
                    },2500);
                }
            })
        }
    })

    $('.notification-body').on('focus' ,function(){
        $('.notification_warning').empty();
    })

    $('.remember-date').on('focus' ,function(){
        $('.notification_warning').empty();
    })

    // SHOWING NOTIFICATIONS IN THE MENU

    function get_notifications()
    {
        var remaining;
        $.ajax({
            url:'requests/notification.php',
            data:{request:'get_unseen_notifications'},
            type:'POST',
            success:function(data){
                encoded_data = JSON.parse(data);
                remaining = 10  - (encoded_data.length) ;
                if(encoded_data.length>0)
                    $('.notification-button').prepend("<label>"+encoded_data.length+"</label>");

                var today    = new Date();

                for(var i =0 ; i<encoded_data.length ; i++)
                {
                    var actual_date = encoded_data[i]['remember_date'];
                    var date        = new Date(actual_date);
                    if(date.setHours(0,0,0,0) == today.setHours(0,0,0,0))
                        actual_date = 'اليوم';
                    $('.cont-notificitions').append('<li class="unseen notification"> <span>' +encoded_data[i]['body']+ '</span><div class="time-added"><i class="fa fa-clock-o"></i><em>'+actual_date+'</em></div></li>');
                }

                // SEEN NOTIFICATIONS

                if(remaining>0)
                {
                    $.ajax({
                        url:'requests/notification.php',
                        data:{request:'get_seen_notifications'},
                        type:'POST',
                        success:function(data){
                            encoded_data = JSON.parse(data);
                            var today    = new Date();

                            for(var i =0 ; i<encoded_data.length && i<remaining ; i++)
                            {
                                var actual_date = encoded_data[i]['remember_date'];
                                var date        = new Date(actual_date);
                                if(date.setHours(0,0,0,0) == today.setHours(0,0,0,0))
                                    actual_date = 'اليوم';
                                $('.cont-notificitions').append('<li class="notification"> <span>' +encoded_data[i]['body']+ '</span><div class="time-added"><i class="fa fa-clock-o"></i><em>'+actual_date+'</em></div></li>');
                            }
                        }
                    })
                }
            }
        })
    }
    
});
    

