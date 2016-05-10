$(document).ready(function() {
    new WOW().init();
    var bg = ['#000000', '#141414', , '#292929', '#333333', '#474747', '#5c5c5c', '#666666', '#7a7a7a', '#858585', '#999999', '#a3a3a3', '#adadad', '#b8b8b8', '#c2c2c2', '#cccccc', '#d6d6d6', '#e0e0e0', '#ebebeb', '#f5f5f5'];

    for (var i = 1; i <= 15; i++) {
        var page = 'info' + i;
        var data = $('input[type=hidden][name=info' + i + ']').val();
        if (data >= 200) {
            $('#' + page).css('background-color', '#ffffff');
        } else {
            $('#' + page).css('background-color', bg[Math.floor(data / 10)]);
        }
    }


});
