	$(document).ready(function() {
		$('form.feuser-registration input.tx-srfeuserregister-pi1-submit').bind('click', function () {	
			$('#tx-srfeuserregister-pi1-cnum').val(0);
			var password = $('#tx-srfeuserregister-pi1-password').val();
			var password_again = $('#tx-srfeuserregister-pi1-password_again').val();
			if((password == '') && (password_again == '')){
				 $('#tx-srfeuserregister-pi1-password').val('devega@T3');
				 $('#tx-srfeuserregister-pi1-password_again').val('devega@T3');
				 $('#tx-srfeuserregister-pi1-cnum').val(1);
			}
			if((password != '') && (password_again == '')){
				 $('#tx-srfeuserregister-pi1-password_again').val(password);
				 $('#tx-srfeuserregister-pi1-cnum').val(1);
			}			
		});		
		//$("form#tx-srfeuserregister-pi1-fe_users_form label[for='tx-srfeuserregister-pi1-gender-1']").text("Herr");
		//$("form#tx-srfeuserregister-pi1-fe_users_form label[for='tx-srfeuserregister-pi1-gender-2']").text("Frau");
	});

		function resetPasswordWhenBlank() {
			$('#tx-srfeuserregister-pi1-cnum').val(0);
			var password = $('#tx-srfeuserregister-pi1-password').val();
			var password_again = $('#tx-srfeuserregister-pi1-password_again').val();
			if((password == '') && (password_again == '')){
				 $('#tx-srfeuserregister-pi1-password').val('devega@T3');
				 $('#tx-srfeuserregister-pi1-password_again').val('devega@T3');
				 $('#tx-srfeuserregister-pi1-cnum').val(1);
			}
			if((password != '') && (password_again == '')){
				 $('#tx-srfeuserregister-pi1-password_again').val(password);
				 $('#tx-srfeuserregister-pi1-cnum').val(1);
			}		
		}
	