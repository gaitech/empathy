jQuery(document).ready(function(){
    jQuery('#country').on('change',function(){
        var countryShortName = jQuery(this).val();

        jQuery.ajax({
                type: 'GET',
                url: 'wp-content/themes/empathy/country.php?countryshortname=' + countryShortName,
                cache: false, 
                contentType: false, 
                processData: false,
                data: 'countryshortname=' + countryShortName,
                success: function(data) {
             	 jQuery(".countries_real__stories").html(data);
                }
			});

    });
}); 




