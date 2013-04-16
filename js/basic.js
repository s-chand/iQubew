/*
 * SimpleModal Basic Modal Dialog
 * http://www.ericmmartin.com/projects/simplemodal/
 * http://code.google.com/p/simplemodal/
 *
 * Copyright (c) 2010 Eric Martin - http://ericmmartin.com
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Revision: $Id: basic.js 254 2010-07-23 05:14:44Z emartin24 $
 */

jQuery(function ($) {
	// Load dialog on page load
	//$('#basic-modal-content').modal();

	// Load dialog on click
	$('#basic-modal .basic').click(function (e) {
		$('#basic-modal-content').modal();

		return false;
	});
	$('#muyiwa_profile .basic').click(function(e)
	{
		$('#muyiwa_profile_details').modal();
		return false;
	});
	$('#emeka_okoye_profile .basic').click(function(e)
	{
		$('#emeka_okoye_details').modal();
		return false;
	});
	$('#tim_akinbo .basic').click(function(e)
	{
		$('#tim_akinbo_details').modal();
		return false;
	});
	$('#osho_profile .basic').click(function(e)
	{
		$('#osho_profile_details').modal();
		return false;
	});
});