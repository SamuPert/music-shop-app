
window.toggleFiltriBar = () =>
{
    let toggleIcon = $('#iconToggleFiltri');
    let toggleDiv = $('#filtriInnerBar');

    if( toggleDiv.hasClass('show') )
    {
        toggleDiv.collapse('hide');
        toggleIcon.removeClass('fa-chevron-up');
        toggleIcon.addClass('fa-chevron-down');
    }else{
        toggleDiv.collapse('show');
        toggleIcon.removeClass('fa-chevron-down');
        toggleIcon.addClass('fa-chevron-up');
    }
}

window.applyFilters = () =>
{
    alert(1);
}