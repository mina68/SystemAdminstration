 
$(document).ready(function()
{    
    $('.choose-button span').on('click' ,function(){
        $(this).siblings().removeClass('active-button');
        $(this).addClass('active-button');

        if($(this).is(':contains("اجندة")'))
        {
            $('.outlay').fadeOut(400 ,function(){
                $('.search-earning').fadeIn();
            })
        }
        else if($(this).is(':contains("مصاريف")'))
        {
            $('.search-earning').fadeOut(400 ,function(){
                $('.outlay').fadeIn();
            })
        }
    })

    $('.add_outgoings').on('click' ,function(event){
        event.preventDefault();
        var outgoings   = $('.outgoings').val();
        var comment     = $('.comment').val();
        var date        = $('.outgoings_date').val();

        if(outgoings.length === 0 || comment.length === 0 || date.length === 0)
            $('.warn').text('من فضلك ادخل جميع البيانات المطلوبة');

        else
        {
            $('.warn').empty();
            $.ajax({
                url:'requests/agenda.php',
                data:{request:'add_outgoings' ,date:date ,outgoings:outgoings ,comment:comment},
                type:'POST',
                success:function(data){
                    document.getElementById('outgoings').reset();
                    $('#success-modal .message').text('تم اضافة المصروفات');
                    $('#success-modal').modal('show')
                    setTimeout(function(){
                        $('#success-modal').modal('hide');
                    },2500);
                }
            })
        }
    })

    $('.outgoings , .comment , .outgoings_date').click(function(){
        $('.warn').empty();
    })
});
    

