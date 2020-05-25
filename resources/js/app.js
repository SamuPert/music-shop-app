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

// Display loading on Ajax requests
$(document).on({
    ajaxStart: function() { startLoading(); },
    ajaxStop: function() { endLoading() }
});

registerRangeInputChange('#prezzoMaxInput', '#prezzoMaxValue');
registerRangeInputChange('#prezzoMinInput', '#prezzoMinValue');

$('.toast').toast({
    animation: true,
    autohide:  false
});





// show loading image
$('.image_loading').hide();
$('.image_loading').parent().children('.loader_image').show();

$(".image_loading").one("load", function() {
    $(this).parent().children('.loader_image').hide();
    $(this).show();
}).each(function() {
    if(this.complete) {
        // $(this).load(); // For jQuery < 3.0
        $(this).trigger('load'); // For jQuery >= 3.0
    }
});



// On clock on enable-edit button, removes disabled attribute from input
$('.enable-edit').click(function (e) {
    e.preventDefault();
    let this_form = $(this).parent();

    this_form.find( "input" ).prop("disabled", false);
    this_form.find( "textarea" ).prop("disabled", false);
});





//