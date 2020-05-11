require('./bootstrap');

$('.modal-toggle').click(function(e){
    var tab = e.target.hash;
    $('li > a[href="' + tab + '"]').tab("show");
});

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


function registerRangeInputChange(id_range_input, id_html_value_output)
{
    // Read value on page load
    $(id_html_value_output).html($(id_range_input).val());

    // Read value on change
    $(id_range_input).on('input', function(){
        let current_value = $(this).val() + '';


        let tmpOutput = '';

        for( let i = current_value.length; i < 7; i++ ){
            tmpOutput += '&nbsp;';
        }

        $(id_html_value_output).html(tmpOutput + current_value);
    });

}

registerRangeInputChange('#prezzoMaxInput', '#prezzoMaxValue');
registerRangeInputChange('#prezzoMinInput', '#prezzoMinValue');