$(function () {

    $('#a:in-viewport').addClass('animated fadeInDown');

    $(window).scroll(function () {
        $('#a:in-viewport(-300)').css('transform', 'translateX(10em)');
    });

    $(document).on('click', '#header__opener',
        function () {
            $('#header__nav').toggleClass("opened");
            $('.page').toggleClass("moved");
        });
    $(document).on('click', '.moved',
        function () {
            $('#header__nav').removeClass("opened");
            $('.page').removeClass("moved");
        });
});

