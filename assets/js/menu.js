$(document).ready(function () {
    $(".item").click(function () {
        $(".item").removeClass("active");
        $(this).addClass("active");
    });
});