$(function () {

    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"

    });

    // MOVE-UP
    $(window).scroll(() => {
        if ($(this).scrollTop() > 0)
            $('.move-up').fadeIn();
        else
            $('.move-up').fadeOut();
    });

    $('.move-up').click((e) => {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 500)
    });

    /* FIXA O NAVBAR */
    const navbar = document.querySelector('#nav');

    window.onscroll = () => (window.scrollY > 100
        ? navbar.classList.add('active')
        : navbar.classList.remove('active'))

});