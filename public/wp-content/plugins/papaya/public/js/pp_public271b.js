/* Main JS for the Public view*/

jQuery(document).ready(function () {
    var token = getUrlParameter('token');
    var choice = getUrlParameter('choice');
    if (token) {
        Cookies.set('pp_token', token);
    }
    if (choice == '0') {
        // Bad choice
        jQuery('.gfield.buttons .gchoice_1_2_1 input').prop('checked',true);
    } else {
        // Good choice
        jQuery('.gfield.buttons .gchoice_1_2_0 input').prop('checked',true);
    }
});

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};