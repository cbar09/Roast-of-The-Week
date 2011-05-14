/* Author: 

*/

$(document).ready(function() {

	/**
	 * Initialize coffee-images slideshow 
	 */
	$("#slideshow-images").cycle({
		speed: 1500,
		timeout: 8000
	});
	
	$("#slideshow-captions").cycle({
		fx: 'scrollVert',
		speed: 700,
		timeout: 8000,
		delay: 500
	});
	
	$("#buy-now-button").parent().colorbox({
		width:'50%',
		opacity: 0.6
	});
	
	//Zip Code City, State Autofill
	$("#CustomerZipcode").live("keyup", function(){
		var zip = $(this).val();
		if(isValidUSZip(zip)){
			var data = $.getJSON("http://www.geonames.org/postalCodeLookupJSON?",
			{
				formatted: true,
				country: 'US',
				postalcode: zip
			},
			function(data){
				if(data.postalcodes.length){
					$("#CustomerCity").val(data.postalcodes[0].placeName);
					$("#CustomerState").val(data.postalcodes[0].adminCode1);
				}
			});
		}
	});
	
	/*
	** Quantity Box 
	*/
	$("#buyNowQuantity")
		.keydown(function(event){
			//If Key pressed was not a number or special key, cancel this event (codes 48-57, 96-105 or tab, backspace, enter, left, right)
			if($.inArray(event.which, [8,9,13,37,39,48,49,50,51,52,53,54,55,56,57,96,97,98,99,100,101,102,103,104,105]) === -1){
				return event.preventDefault();
			}
		})
		.keyup(function(event){
			$(this).val($.trim($(this).val())); 
			if($(this).val() === '0'){
				$(this).val(1);
			}
			if($(this).val().length){
				$("#price-text").text("$" + (parseInt($(this).val()) * parseFloat($("#price").val())).toFixed(2));
			}
		})
		.focusout(function(){
			if(!$(this).val().length){
				$(this).val(1);
			}
			$(this).keyup();
		});
});

function isValidUSZip(sZip) {
   return /^\d{5}([\-]\d{4})?$/.test(sZip);
}





















