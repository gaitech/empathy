jQuery(document).ready(function(){
    var default_country = '';
    default_country = getParameterByName('country');
    if(default_country.length > 0) {
        jQuery('#country').val(default_country);
    } else {
        jQuery('#country').val('');
    }

    var read_more_flag = '';
    read_more_flag = jQuery('.total_result_count').html();
    if(read_more_flag.length > 0) {
        jQuery('.alm-load-more-btn').addClass('done');
    }
    
    jQuery('#country').on('change',function(){
        var countryShortName = jQuery(this).val();
        var base_url =  jQuery('.site_base_url').html();
        if(countryShortName.length > 0) {
        window.location.href = base_url+'?country='+countryShortName;
    } else {
        window.location.href = base_url;
    }
    });
}); 
 function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return '';
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }



