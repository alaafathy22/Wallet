/*global  document,window, $ */
$(document).ready(function () {
    'use strict';
    $("body").niceScroll({
        cursorcolor: '#f7600e'
    });
    // strat header 
    $(".header").height($(window).height());
    // end header 
    //strat second tab
    $(".header .arrow .item2").on("click", function () {
        $("html,body").animate({
            scrollTop: $(".features").offset().top
            
        }, 500);
    });
    //end second tab
    //start showmore tab
    $(".show-more").on("click", function () {
        if ($(".hidden").is(":visible")) {
            $(".show-more").css({
              
                
            });
        } else {
            $(".hidden").fadeIn(1000);
            $(".show-more").css({
                cursor: "not-allowed"
                
            });
            
        }
    });
    //end showmore tab
    //start tistmonials tab
    var chevright = $(".fa-chevron-right"),
        chevleft = $(".fa-chevron-left");
    function autoslider() {
        if ($(".contact:first").hasClass("active")) {
            chevleft.fadeOut();
        } else {
            chevleft.fadeIn();
        }
        if ($(".contact:last").hasClass("active")) {
            chevright.fadeOut();
        } else {
            chevright.fadeIn();
        }
    }
    autoslider();
    chevright.on("click", function () {
        $(".active").fadeOut(500, function () {
            $(this).removeClass("active").next(".contact").addClass("active").fadeIn();
            autoslider();
        });
        
    });
    chevleft.on("click", function () {
        $(".active").fadeOut(500, function () {
            $(this).removeClass("active").prev(".contact").addClass("active").fadeIn();
            autoslider();
        });
        
    });
    //end tistmonials tab
    $(".hire-us").on("click", function () {
        $("html,body").animate({
            scrollTop: $(".ourteam").offset().top
        }, 1000);
        
    });
    //start arrow
    function animat() {
        $(".arrow").animate({
            bottom: "10px"
        }, 1000, function () {
            $(this).animate({
                bottom: "0px"
                
            }, 1000, function () {
                animat();
            });
            
        });
        
    }
    
    animat();
    //end arrow

});

