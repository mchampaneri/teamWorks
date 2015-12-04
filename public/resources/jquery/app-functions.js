$(document).ready(function() {

	/**** Adding Boot strape class to the all componants **/
	$('input,label').before('<div class="form-group">');
	$('input[type="text"],input[type="password"],select').addClass('form-control');
	$('input,label').after('</div>');


});