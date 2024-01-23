let currentTab = 0; // Current tab is set to be the first tab (0)

let radioBoxes = document.getElementsByClassName("radiobox-data");
let radioData = {};

document.addEventListener("DOMContentLoaded", function () {
    showTab(currentTab); // Display the crurrent tab
});

/**
 * collect data from checkboxes
 */
let collectData = [];

/**
 * This function will display the specified tab of the form...
 * @param string n - tabs number
 */
function showTab(n) {

    let tabs = document.getElementsByClassName("tab");
    tabs[n].style.display = "block";

    /**
     * and fix the Previous/Next buttons:
     */
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "block";
    }

    if (n == (tabs.length - 1)) {
        $('#btns_group').addClass('hidden');

        /**
         * set collect data html
         */
        let html = '';
        for (i = 0; i < collectData.length; i++) {
            html += '<div>' + collectData[i] + '</div>';
        }
        //document.getElementById("collect-data").value = html;

        /**
         * seperate radioboxes for screens
         */
        let screenRadioData = '';

        for (i = 0; i < radioBoxes.length; i++) {

            /**
             * set value from radiobtn for hidden input
             */
            for (j = 0; j < radioData[i].length; j++) {
                screenRadioData += radioData[i][j] + ';';
            }
            radioBoxes[i].getElementsByTagName("input").item(0).value = screenRadioData;
            screenRadioData = '';

        }

    } else {
        $('#btns_group').removeClass('hidden');
    }
}

/**
 * This function will figure out which tab to display
 * @param string n - tabs number
 */
function nextPrev(n) {
    let tabs = document.getElementsByClassName("tab");

    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;

    // Hide the current tab:
    tabs[currentTab].style.display = "none";

    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;

    // if you have reached the end of the form...
    if (currentTab >= tabs.length) {
        //   console.log("currentTab", currentTab)
        //   console.log("tabs.length", tabs.length)
        // ... the form gets submitted:
        //document.getElementById("regForm").submit();

        return false;
    }

    // Otherwise, display the correct tab:
    showTab(currentTab);
}

/**
 * @returns valid
 */
function validateForm() {
    let tabs, y, i, valid = true;
    let errors = [];

    tabs = document.getElementsByClassName("tab");
    let checkboxes = tabs[currentTab].getElementsByTagName("input");

    radioData[currentTab] = [];

    for (i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked != true) {
            errors.push(false);
        } else {

            /**
             * collect data from checkbockses
             */
            collectData.push(checkboxes[i].value);

            /**
             * separate date from radioboxes
             */
            radioData[currentTab].push(checkboxes[i].value);

        }

        /**
         * and set the current valid status to false
         */
        if (errors.length >= checkboxes.length) {
            valid = false;
        }
    }

    return valid; // return the valid status
}

/**
 * @param id string
 * @return void
 */
function showMoreCheckboxes(id) {
    let btn = document.getElementById(id);
    btn.classList.toggle("visible");
}

/**
 * submit schedule-a-demo form
 */
function showThankYouMessage() {
    let tabs = document.getElementsByClassName("tab");
    for (i = 0; i < tabs.length; i++) {
        tabs[i].style.display = "none";
    }
    $('#btns_group').addClass('hidden');

    const thankYouWindow = document.getElementById("thank_you_window");
    thankYouWindow.style.display = "block";
}

document.addEventListener('wpcf7mailsent', function (event) {

    if (window.location.href.indexOf("wpcf7") > -1) {
        localStorage.setItem("successSubmitwpcf7", "true");
        window.history.back();
    }

    showThankYouMessage();

}, false);


/**
 * show form after wpcf7 form reload
 */
//let form = document.querySelector(".screen__sent_form form");
// form.addEventListener( 'submit', function( event ) {

document.addEventListener("DOMContentLoaded", function () {

    let successSubmitwpcf7 = localStorage.getItem("successSubmitwpcf7");

    if (successSubmitwpcf7) {

        showThankYouMessage();
        localStorage.removeItem("successSubmitwpcf7");

    } else {

        if (window.location.href.indexOf("wpcf7") > -1) {
            let tabs = document.getElementsByClassName("tab");
            for (i = 0; i < tabs.length; i++) {
                tabs[i].style.display = "none";
            }

            $('#btns_group').addClass('hidden');

            let form_parent_tab = document.querySelector(".screen__sent_form").parentElement.parentElement;
            form_parent_tab.style.display = "block";
        }

    }

}, false);

document.addEventListener("DOMContentLoaded", function () {

    jQuery('input[name="checkbox_group"]').on('change', function () {

        var currentCheckedvalue = jQuery(this).val();
        if (jQuery(this).is(":checked")) {
            jQuery('.hbspt-form input[type="checkbox"][value="' + currentCheckedvalue + '"]').prop('checked', true).change();
        } else {
            jQuery('.hbspt-form input[type="checkbox"][value="' + currentCheckedvalue + '"]').prop('checked', false).change();
        }
        //console.log(jQuery('.hbspt-form input[type="checkbox"]:checked').val());
    });


});

