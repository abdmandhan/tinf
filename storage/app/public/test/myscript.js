// parallax
$(window).scroll(function(){
    var wScroll=$(this).scrollTop();

    $('.jumbotron h1').css({
        'transform': 'translate(0px, '+ wScroll/8 +'%)'
    })
    $('.jumbotron p').css({
        'transform': 'translate(0px, '+ wScroll/1 +'%)'
    })
});






