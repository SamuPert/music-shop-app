
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
    let nomeProdotto = $('#nomeProdottoInput').val();
    let prezzoMin = $('#prezzoMinInput').val();
    let prezzoMax = $('#prezzoMaxInput').val();

    let curUrl = new URL(window.location.href.split(/[?#]/)[0]);

    curUrl.searchParams.set("nomeProdotto", nomeProdotto);
    curUrl.searchParams.set("prezzoMin", prezzoMin);
    curUrl.searchParams.set("prezzoMax", prezzoMax);

    window.location.href = curUrl.toString();
}

window.resetFilters = () => {
    let curUrl = new URL( window.location.href );
    let newUrl = new URL( window.location.href.split(/[?#]/)[0] );

    let page = curUrl.searchParams.get("page");

    // Get page parameter from old url
    if( page !== null )
        newUrl.searchParams.set("page", page );


    window.location.href = newUrl.toString();
}