require('./bootstrap');

let rootUrl = '';

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


window.riempiSelectByCategoria = (categoriaId, sottocategoriaId) => {
    let select__categoria = $(categoriaId);
    let select__sotto_categoria = $(sottocategoriaId);
    let selectValue = select__categoria.val();


    if(selectValue != undefined && selectValue != '#'){
        startLoading();
        axios.post(rootUrl + '/api/findByCategory/',
            {
                'id_categoria': selectValue
            }
        )
        .then(function (response) {
            let data = response.data;
            // handle success

            select__sotto_categoria.find('option').remove();
            $.each( response.data, function( key, value ) {
                $('<option>').val(value.id).text(value.sotto_categoria).appendTo(select__sotto_categoria);
            });
        })
        .catch(function (error) {
            alert("Errore: " + error);
        })
        .then(function () {
            endLoading();
        });
    }
};


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

// Loading bar
window.startLoading = () => {
    $('#loading-div').addClass('loading');
}

window.endLoading = () => {
    $('#loading-div').removeClass('loading');
}



registerRangeInputChange('#prezzoMaxInput', '#prezzoMaxValue');
registerRangeInputChange('#prezzoMinInput', '#prezzoMinValue');
