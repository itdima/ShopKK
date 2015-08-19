/**
 * Created by Дима on 18.08.2015.
 */

//Включение информера для корзины
$('[data-toggle="popover"]').popover();


// закрепление навигации
$('.breadcrumb, .template-slider').waypoint(function() {
    $('#navigation').toggleClass('navbar-fixed-top');

});

// меню каталога товаров справа
$(".dropdown").hover(
    function() {
        $('.dropdown-menu', this).fadeIn("fast");
    },
    function() {
        $('.dropdown-menu', this).fadeOut("fast");
    });
