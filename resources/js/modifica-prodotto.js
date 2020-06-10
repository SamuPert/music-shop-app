
// On click, enable edit.
$('.enable-edit').click(function (e) {
e.preventDefault();
  let this_form = $(this).parent();

this_form.find('input.enable-me-on-edit').prop("disabled", false);
this_form.find('.modifica-submit-button').removeClass("no-pointer-events");

this_form.find( "input" ).prop("disabled", false);
this_form.find( "textarea" ).prop("disabled", false);
this_form.find( "select" ).prop("disabled", false);

this_form.find('.enable-edit').prop("disabled", true);
this_form.find('.enable-edit').css("display", "none");
this_form.find('.disable-edit').prop("disabled", false);
this_form.find('.disable-edit').css("display", "inline-block");
});

// On click, disable edit.
$('.disable-edit').click(function (e) {
e.preventDefault();
  let this_form = $(this).parent();

this_form.find('input.enable-me-on-edit').prop("disabled", true);
this_form.find('.modifica-submit-button').addClass("no-pointer-events");

this_form.find( "input" ).prop("disabled", true);
this_form.find( "textarea" ).prop("disabled", true);
this_form.find( "select" ).prop("disabled", true);

this_form.find('.disable-edit').prop("disabled", true);
this_form.find('.disable-edit').css("display", "none");
this_form.find('.enable-edit').prop("disabled", false);
this_form.find('.enable-edit').css("display", "inline-block");
});



$('.sconto').on('keyup',function() {
  let this_parent = $(this).parent().parent().parent();
  let prezzo = this_parent.find('.prezzo').val();
  let sconto = $(this).val();
  this_parent.find('.prezzo-scontato-div').find('.prezzo-scontato').text( Math.ceil( prezzo * ( 100 - sconto ) ) / 100 );
});

window.modificaProdotto = (e, id_prodotto) => {
    e.preventDefault();

    var edit_id = id_prodotto;
    var nome_prodotto = $('#nome_prodotto'+edit_id).val();
    var desc_breve = $('#desc_breve'+edit_id).val();
    var desc_estesa = $('#desc_estesa'+edit_id).val();
    var prezzo = $('#prezzo'+edit_id).val();
    var sconto = $('#sconto'+edit_id).val();
    var sotto_cat = $('#select_sotto_categoria_'+edit_id).val();
    var foto = $('#percorso_foto'+edit_id);


    if( nome_prodotto === undefined || desc_breve === undefined || desc_estesa === undefined || prezzo === undefined || sconto === undefined || sotto_cat === undefined ||nome_prodotto === '' || desc_breve === '' || desc_estesa === '' || prezzo === '' || sconto === '' || sotto_cat === '')
    {
        alert('Riempi tutti i campi');
    }


    var formData = new FormData();
    var imagefile = foto[0];

    formData.append("id_prodotto", edit_id);
    formData.append("nome_prodotto", nome_prodotto);
    formData.append("descrizione_breve", desc_breve);
    formData.append("descrizione_estesa", desc_estesa);
    formData.append("id_sotto_categoria", sotto_cat);
    formData.append("prezzo", prezzo);
    formData.append("sconto",sconto);
    formData.append("percorso_foto", imagefile.files[0]);

    startLoading();
    return axios.post(rootUrl + '/api/prodotto/update', formData, {
        headers: {
            'Content-Type': 'multipart/form-data'
        }
    })
        .then(function (response) {
            let data = response.data;
            // handle success
            if(data.success) {
                alert(data.message);
            }else{
                alert(data.error_message);
            }
        })
        .catch(function (error) {
            alert("Errore: " + error);
        })
        .then(function () {
            endLoading();
        });

}
