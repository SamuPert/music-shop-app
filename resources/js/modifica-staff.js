
// On click, enable edit.
$('.enable-edit-staff').click(function (e) {
    e.preventDefault();
    let this_form = $(this).parent().parent();

    this_form.find('input.enable-me-on-edit').prop("disabled", false);
    this_form.find('.update-staff-submit-button').removeClass("no-pointer-events");

    this_form.find( "input" ).prop("disabled", false);

    this_form.find('.enable-edit-staff').prop("disabled", true);
    this_form.find('.enable-edit-staff').css("display", "none");
    this_form.find('.disable-edit-staff').prop("disabled", false);
    this_form.find('.disable-edit-staff').prop("hidden", false);
    this_form.find('.disable-edit-staff').css("display", "inline-block");
});

// On click, disable edit.
$('.disable-edit-staff').click(function (e) {
    e.preventDefault();
    let this_form = $(this).parent().parent();

    this_form.find('input.enable-me-on-edit').prop("disabled", true);
    this_form.find('.update-staff-submit-button').addClass("no-pointer-events");

    this_form.find( "input" ).prop("disabled", true);

    this_form.find('.disable-edit-staff').prop("disabled", true);
    this_form.find('.disable-edit-staff').css("display", "none");
    this_form.find('.enable-edit-staff').prop("disabled", false);
    this_form.find('.enable-edit-staff').css("display", "inline-block");
});



window.modificaUtente = (e, id) => {
    e.preventDefault();
    var edit_id = id;
    var nome = $('#id_utente_nome'+edit_id).val();
    var cognome = $('#id_utente_cognome'+edit_id).val();


    if( nome === undefined || cognome === undefined || nome === '' || cognome === '')
    {
        alert('Riempi tutti i campi');
        return;
    }

    let inputData = {
        id: edit_id,
        nome: nome,
        cognome: cognome
    };

    startLoading();
    return axios.post(rootUrl + '/api/staff/update', inputData)
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
