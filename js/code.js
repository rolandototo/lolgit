/* Toggle Class HTML */
$('html').toggleClass('js no-js');

$('.owl-carousel').owlCarousel({
    loop:true,
    autoplay:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
});

$('owl-prev').remove('span').append('<i class="fas fa-chevron-left"></i>');
$('owl-next').remove('span').append('<i class="fas fa-chevron-right"></i>');

$(window).scroll(function (event) { 

if($(this).scrollTop() > 100){
    $('.menu').attr('id', 'activeM');
    $('#logo-a img').attr('id', 'activeIM');
}
else{
    $('.menu').removeAttr('id', 'activeM');
    $('#logo-a img').removeAttr('id');
}

    
});

