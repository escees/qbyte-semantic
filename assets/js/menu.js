$(document).ready(function () {
    var setDefaultActive = function() {
        var path = window.location.pathname;
        var menuItem = $(".top-menu .item[href='" + path + "']");

        menuItem.addClass("active");
    };

    setDefaultActive();

    $('.ui.dropdown').dropdown({
        on: 'hover',
    })
    ;
});