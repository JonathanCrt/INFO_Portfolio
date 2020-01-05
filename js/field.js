
/*********  Form functions   *************/

function isChiffres(s) {
	var regEx = new RegExp(/^([0-9]+)$/);
	return (regEx.test(s));
}
function isAlpha(s, mandatory) {
	var regEx;
	if (mandatory) {
		regEx = new RegExp(/^([a-zA-Z]+)$/);
	} else {
		regEx = new RegExp(/^([a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._ -]*)$/);
	}
	return (regEx.test(s));
}
function isAlphaNum(s) {
	var regEx = new RegExp(/^([a-zA-Z0-9]+)$/);

	return (regEx.test(s));
}

function isValidEmailAddress(s) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(s);
}
/************************************************************                READY              ***************************************************************************************************/

$(document).ready(function () {



$('#email').keyup(function () {
    if (!isValidEmailAddress($('#email').val())) {
		$(this).css('border','3px solid red');
		
	}
	else if (isValidEmailAddress($('#email').val())) {
		$(this).css ('border','3px solid green');
	}
	else {
		$(this).remove();
	}
});





$('#sujet').keyup(function () {
    if (!isAlpha($('#sujet').val())) {
		$(this).css('border','3px solid red');
		$('#error').show();
	}
	else if (isAlpha($('#sujet').val())) {
		$(this).css ('border','3px solid green');
		$('#error').hide();
		
	}
	else {
		$(this).remove();
	}
});


$('#message').keyup(function () {
    if (!isAlphaNum($('#message').val())) {
		$(this).css('border','3px solid red');
		$('#error').show();
	}
	else if (isAlphaNum($('#message').val())) {
		$(this).css ('border','3px solid green');
		$('#error').hide();
		
	}
	else {
		$(this).remove();
	}
});


$("#btnSend").click(function(){
	if (
	!isValidEmailAddress($('#email').val()) ||   
	!isAlpha($('#sujet').val()) ||
	!isAlphaNum($('#message').val())
    ) {
		alert('Le formulaire ne peut être envoyé car il existe des erreurs, merci de vérifier')
		return false;
	}
	else {
		alert('Merci! votre message a été envoyé! ')
		return true;
		
	}
})
});