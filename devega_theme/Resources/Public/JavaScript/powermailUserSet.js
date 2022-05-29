	$(document).ready(function() {
		if(globalCountryUser != '') {
			$('#powermail_field_country :nth-child('+globalCountryUser+')').prop('selected', true);
		}
		if(globalSexUser != '') {
			$('#powermail_field_sex :nth-child('+globalSexUser+')').prop('selected', true);
		}
	});
