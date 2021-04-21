$(document).ready(function() {
	$('#currency').show(function(e) {
		$("#currencyen").prop('readonly', true);
		$("#currencyar").prop('readonly', true);
		$("#paypalcurrency").prop('readonly', true);
	});
});