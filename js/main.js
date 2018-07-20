$(document).ready(function () {
    $(".wrapper").click(function () {
        $("body").css("background-color", "blue"); //edit, body must be in quotes!
    });
    console.log('javascript is working');


    $('.card__share > a').on('click', function (e) {
        e.preventDefault() // prevent default action - hash doesn't appear in url
        $(this).parent().find('div').toggleClass('card__social--active');
        $(this).toggleClass('share-expanded');
    });

});
