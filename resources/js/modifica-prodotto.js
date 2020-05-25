
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