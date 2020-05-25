require('./bootstrap');
require('./modifica-prodotto');
require('./filtri');
require('./loading-bar');

let rootUrl = '';

$('.modal-toggle').click(function(e){
    var tab = e.target.hash;
    $('li > a[href="' + tab + '"]').tab("show");
});



window.riempiSelectByCategoria = (categoriaId, sottocategoriaId) => {
    let select__categoria = $(categoriaId);
    let select__sotto_categoria = $(sottocategoriaId);
    let selectValue = select__categoria.val();


    if(selectValue != undefined && selectValue != '#'){
        startLoading();
        return axios.post(rootUrl + '/api/findByCategory/',
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

    return undefined;
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


registerRangeInputChange('#prezzoMaxInput', '#prezzoMaxValue');
registerRangeInputChange('#prezzoMinInput', '#prezzoMinValue');

$('.toast').toast({
    animation: true,
    autohide:  false
});










//