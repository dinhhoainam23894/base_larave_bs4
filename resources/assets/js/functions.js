



function init() {
    // side bar
    $('[data-toggle="offcanvas"]').on('click', function () {
        $('.row-offcanvas').toggleClass('active')
    })

    // top menu
    $('#top-menu').on('show.bs.collapse', function (e) {
    }).on('shown.bs.collapse', function (e) {
        if($('#top-navbar').height() > $( window ).height()){
            $('body').addClass('top-menu-open');
            $('body,html').scrollTop(0);
        }
    }).on('hide.bs.collapse', function (e) {
        $('body').removeClass('top-menu-open');
    });
}

$(function () {
    'use strict'

    init();

})