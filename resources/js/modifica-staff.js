
// On click, enable edit.
$('.enable-edit-staff').click(function (e) {
    e.preventDefault();
    let this_form = $(this).parent().parent();

    this_form.find('input.enable-me-on-edit').prop("disabled", false);
    this_form.find('.modifica-staff-submit-button').removeClass("no-pointer-events");

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
    this_form.find('.modifica-staff-submit-button').addClass("no-pointer-events");

    this_form.find( "input" ).prop("disabled", true);

    this_form.find('.disable-edit-staff').prop("disabled", true);
    this_form.find('.disable-edit-staff').css("display", "none");
    this_form.find('.enable-edit-staff').prop("disabled", false);
    this_form.find('.enable-edit-staff').css("display", "inline-block");
});
