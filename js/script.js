$(window).scroll(function() {
    var scrollDistance = $(window).scrollTop();
    if (scrollDistance >= 80) {
        $("#mahasuraNavbar").addClass("bg-white nav-shadow");
    } else {
      $("#mahasuraNavbar").removeClass("bg-white nav-shadow");
    }
}); //missing );
