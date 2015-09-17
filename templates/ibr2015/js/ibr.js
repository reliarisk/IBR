// JavaScript Document

$(document).ready(function(){

    $('#container-1').hide();
    $('#container-2').hide();



    $('li.menu-home a').on('click', function(e){
        e.preventDefault();
        var id = $(this).attr('id');
        switch(id){
            case 'menu-1': //home
                $('.jumbotron').show();
                $('#container-1').hide();
				$('#container-2').hide();
                break;
            case "menu-2": //punch
               // $('#container-2').html('<object id="googleDoc" data="https://docs.google.com/forms/d/1ZSNuMGHvsBiWJpggjfXaCl9D7eAUqnj7GuvJB5aQ35M/viewform" width="100%" height="700px"/>');
                $('.jumbotron').hide();
                $('#container-1').show();
				$('#container-2').hide();
                break;
            case "menu-3": //Video
			$('.jumbotron').hide();
                $('#container-1').hide();
				$('#container-2').show();
                break;

        }

    });
    // add remove active class on default navbar
    $(".nav li").on("click", function() {
        $(".nav li").removeClass("active");
        $(this).addClass("active");
    });


});


