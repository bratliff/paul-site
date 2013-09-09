/*global document: false */

if (typeof console === "undefined") {
    console = {
        log: function() { },
        debug: function() { },
    };
}

$(document).ready(function () {
    console.log('load jquery');

    function scrollPage(target){
        $('html, body').animate({ scrollTop: target }, 500);
    }

    $('.nav-menu').find('a').click(function () {

        $('#backbutton').show(500);

        var innerText = $(this).html();
        var shortID = innerText.slice(0, 4);
        var currentSection = '#' + shortID;
        var targetTop = $(currentSection).position().top + 200;
        scrollPage(targetTop);
        return false;
    });

    $('body').on('click','#backbutton',function(){
        scrollPage(0);
        $('#backbutton').hide(500);
    });

   $('body').on('click','.rightArrow',function(){
        if($('.textCont').position().left > -1800) {
            $(".textCont").animate({'left':'-=620px'}, 500, function(){
                console.log($('.textCont').position().left);
            });
        }

    });

    $('body').on('click','.leftArrow',function(){
       if($('.textCont').position().left < -600) {
        $(".textCont").animate({'left':'+=620px'}, 500);
        }
    });
    ///parallaxing elements 

   function backgroundScroller(){
    var scrolled = $(window).scrollTop();
        /*$('.moveElem1').css('top',(0-(scrolled*0.90))+250+'px');
        $('.moveElem2').css('top',(0-(scrolled*0.50))+1100+'px');
        $('.moveElem3').css('top',(0-(scrolled*0.80))+2000+'px');
        $('.moveElem4').css('top',(0-(scrolled*0.6))+2800+'px');
        $('.moveElem5').css('top',(0-(scrolled*1.2))+6200+'px');*/

        var elemX1 = true;
        var elemX2 = true;
        var elemX3 = true;
        var elemX4 = true;
        var elemX5 = true;

        if (elemX1) {
            $('.moveElem1').animate({left:'0px'}, 600);
            elemX1 = false;
        }

        if (scrolled < 500) {
            $('#backbutton').css({display:"none"});
        }

        if (scrolled > 500) {
             $('#backbutton').css({display:"block"});
            if (elemX2) {
                $('.moveElem2').animate({left:'0px'}, 600);
                elemX2 = false;
            }
        }

        if (scrolled > 1000) {
            if (elemX3) {
                $('.moveElem3').animate({right:'0px'}, 600);
                elemX2 = false;
            }
        }

        if (scrolled > 2200) {
            if (elemX4) {
                $('.moveElem4').animate({left:'100px'}, 600);
                elemX4 = false;
            }
        }
    }

    $(window).bind('scroll',function(e){
        backgroundScroller();
    });

});