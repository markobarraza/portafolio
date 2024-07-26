'use strict'
// with jQuery

$(document).ready(function () {
    $('.modal').modal();
});
// Pre Loader
window.onload = function (){
    $('#loader').fadeOut();
    $('body').removeClass('hidden');
}



