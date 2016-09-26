$(function () {

    $('#a:in-viewport').addClass('animated fadeInDown');

    $(window).scroll(function () {
        $('#a:in-viewport(-300)').css('transform', 'translateX(10em)');
    });

    //$('#header__opener').css('cursor', 'pointer');
    $(document).on('click', '#header__opener',
        function (e) {
            e.preventDefault();
            $('#header__nav').toggleClass("header-opened");
            $('.page').toggleClass("page-moved");
        });
    $(document).on('click', '.page-moved',
        function (e) {
            e.preventDefault();
            $('#header__nav').removeClass("header-opened");
            $('.page').removeClass("page-moved");
        });

    var wpLogo = new Waypoint({
        element: document.getElementById('logo'),
        handler: function () {
            $('#logo').toggleClass("exited"),
            $('#title').toggleClass("exited")
        },
        offset: 50
    })

});
