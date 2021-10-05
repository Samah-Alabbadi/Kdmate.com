$(document).ready(function(){



    $('.delete').click(function(){
        $('.overlay').css('display','flex');
        $('body').css('overflow-y','hidden');
    });


    $('.close').click(function(){
        $('.overlay').css('display','none');
        $('body').css('overflow-y','auto');
    });



});




