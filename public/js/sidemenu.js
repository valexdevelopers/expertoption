$(document).ready(function(){
    $('button.menutoggleopen').click(function (){
        $('div.sidebar-left').animate(
            {
                left:'0px',
            }
           );
        $('button.menutoggleopen').css('display', 'none');
        $('button.menutoggleclose').css('display', 'block');
    });


    $('button.menutoggleclose').click(function (){
        
        $('div.sidebar-left').animate(
            {
                left: '-280px',
            }
        );
        $('button.menutoggleopen').css('display', 'block');
        $('button.menutoggleclose').css('display', 'none');
    })
})