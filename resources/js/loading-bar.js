
// Loading bar
window.startLoading = () => {
    $('#loading-div').addClass('loading');
}

window.endLoading = () => {
    $('#loading-div').removeClass('loading');
}

// Display loading on Ajax requests
$(document).on({
    ajaxStart: function() { startLoading(); },
    ajaxStop: function() { endLoading() }
});