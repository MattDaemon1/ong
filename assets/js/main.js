$(document).ready(function(){
    $(".project-card").hover(function(){
        $(this).addClass('animate__animated animate__zoomIn');
    }, function(){
        $(this).removeClass('animate__animated animate__zoomIn');
    });
});

$(window).scroll(function() {
    $(".slideanim").each(function(){
        var pos = $(this).offset().top;
        var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
            $(this).addClass("slide");
        }
    });
});

$(document).ready(function(){
    $(".btn-donate").hover(function(){
        $(this).addClass('animate__animated animate__shakeX');
    }, function(){
        $(this).removeClass('animate__animated animate__shakeX');
    });
});

window.addEventListener("scroll", function(){
    var parallax = document.querySelector(".hero");
    var scrolled = window.pageYOffset;
    parallax.style.transform = 'translateY('+ scrolled * -0.5 + 'px)';
});