// JS for the login page
jQuery(document).ready(function(){
    jQuery('#user_login').attr( 'placeholder', 'Email Address' );
    jQuery('#user_pass').attr( 'placeholder', 'Password' );

    jQuery('#login h1 a').attr('href','https://papayaglobal.com/');

    jQuery(".submit").before(jQuery("#nav"));
});