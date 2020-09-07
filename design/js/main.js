jQuery(function($){
        // $('.news input[type="text"]').click(function(){
        //     $(this).val('');
        // })

        // $('.cep').click(function(){
        //     $(this).val('');
        // })

        $('#submit').click(function(){
            $('.box-map').css('display','none');
        });


        $('#custom_html-3').removeClass('col-md-2');
        $('#custom_html-3').addClass('col-md-3');

        $('#custom_html-3 h3').append('<span>0800-701-0316</span>');

        $('.cep').mask('00000-000');

        $('li#menu-item-95 a').prepend('<i class="fa fa-barcode" aria-hidden="true"></i>');
    }); 