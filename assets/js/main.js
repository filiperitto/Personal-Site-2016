$(document).ready(function () {
    // MENU HAMBURGUER ANIMATION --------------------------------
    $('.hamburger-container').click(function () {
        $('#hamburger').toggleClass('open');
        $('#hamburger-content').toggleClass('nav-open');
        $('header').toggleClass('nav-open');
    });


});

$(document).ready(function () {

    // Cache selectors
    var lastId,
        topMenu = $(".ancor"),
        // All list items
        menuItems = topMenu.find("a"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function () {
            var item = $($(this).attr("href"));
            if (item.length) {
                return item;
            }
        });

    // Bind click handler to menu items
    // so we can get a fancy scroll animation
    menuItems.click(function (e) {

        var href = $(this).attr("href")
            //offsetTop = href === "#" ? 0 : $(href).offset().top+2;
        $('html, body').stop().animate({
            scrollTop: href === "#" ? 0 : $(href).offset().top - 100
        }, 300);

        e.preventDefault();
    });

});

// MAIN MENU ANIMATION
// Menu change
var btnUp = $('.btn-up');

$(window).scroll(function () {
    if ($(this).scrollTop() > 700) {
        btnUp.addClass("active");
    } else {
        btnUp.removeClass("active");
    }
});

// Scroll Suave
    $.scrollSpeed(50, 800);

$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });

    $('body').mousemove(function(e){
    var amountMovedX = (e.pageX * -1 / 100);
    // var amountMovedY = (e.pageY * -1 / 10);
    $('#parallax-mouse').css('background-position', amountMovedX + 'px ');
});

$(document).ready(function() {
    $('select').material_select();
  });


