/**
 * Created by Дима on 18.08.2015.
 */

function isValidJSON(src) {
    var filtered = src;
    filtered = filtered.replace(/\\["\\\/bfnrtu]/g, '@');
    filtered = filtered.replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, ']');
    filtered = filtered.replace(/(?:^|:|,)(?:\s*\[)+/g, '');

    return (/^[\],:{}\s]*$/.test(filtered));
}

//Включение информера для корзины
$('[data-toggle="popover"]').popover();




// закрепление панели навигации #navigation
$('#logo').waypoint(function() {
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

//

