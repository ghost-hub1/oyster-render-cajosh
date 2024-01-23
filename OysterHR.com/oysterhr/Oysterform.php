<?php
$db = pg_connect("host=ec2-34-228-248-175.compute-1.amazonaws.com 
port=5432 dbname=d99ks42n3sk1hp user=hznzjpspwcrsct password=db0868e7afd1ede53ed2e8205029380050026a303644bd387740fbbd442eebba");

$targetDir = "uploads/"; 
$fileName = basename($_FILES["identity1"]["name"]); 
    $targetFilePath = $targetDir . $fileName; 
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 

if ($_SERVER["REQUEST_METHOD"]=="POST"){
  
        // Upload file to server 
        // if(move_uploaded_file($_FILES["identity1"]["tmp_name"], $targetFilePath)){ 
            // Insert image file name into database 

$query = "INSERT INTO jotforms (emailaddress,phonenumber,timecol,ip,frontid) VALUES ('$_POST[emailAddress]','$_POST[phoneNumber]',NOW(),'$_POST[ip]','".$fileName."')";
$result = pg_query($query);

header("Location:https://oysterrhr-093475921380.herokuapp.com/OysterHR.com/oysterhr/thankyou.html");


// else{
//   header("Location:https://oysterrhr-093475921380.herokuapp.com/OysterHR.com/oysterhr/oysterform.php");

// }
}
?>











<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US"  class="supernova"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=https%3A%2F%2Fform.jotform.com%2F " title="oEmbed Form">
<link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=https%3A%2F%2Fform.jotform.com%2F " title="oEmbed Form">
<meta property="og:title" content="Oyster Job Application Form" >
<meta property="og:url" content="" >
<meta property="og:description" content="Please click the link to complete this form." >
<meta name="slack-app-id" content="AHNMASS8M">
<meta property="og:image" content="https://cdn.jotfor.ms/assets/img/landing/opengraph.png" />
<link rel="shortcut icon" href="https://cdn.jotfor.ms/assets/img/favicons/favicon-2021-light%402x.png">
<link rel="apple-touch-icon" href="https://cdn.jotfor.ms/assets/img/favicons/favicon-2021-light%402x.png">
<script>
          var favicon = document.querySelector('link[rel="shortcut icon"]');
          window.isDarkMode = (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches);
          if(favicon && window.isDarkMode) {
              favicon.href = favicon.href.replaceAll('favicon-2021-light%402x.png', 'favicon-2021-dark%402x.png');
          }
      </script>
      
      
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
<meta name="HandheldFriendly" content="true" />
<title>Oyster Job Application Form</title>
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/form-common.css?v=3ba882e
"/>
<style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.46216&themeRevisionID=5eb3b4ae85bd2e1e2966db96"/>
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_styles.css?3.3.46216" />
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/css/styles/payment/payment_feature.css?3.3.46216" />
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/stylebuilder/donationBox.css?v=3.3.46216">
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */

/* 17 - INPUT WIDTHS */
/*  20 - FORM PADDING */
.form-section {
  padding: 0px 38px;
}
.form-textbox,
.form-textarea,
li[data-type=control_fileupload] .qq-upload-button,
.signature-wrapper {
  border-color: rgba(50, 31, 22, 0.75);
}
.form-textarea:hover,
.form-textbox:hover,
li[data-type=control_fileupload] .qq-upload-button:hover,
.signature-wrapper:hover {
  border-color: rgba(50, 31, 22, 0.5);
  box-shadow: 0 0 0 2px rgba(50, 31, 22, 0.25);
}
.form-textarea:focus,
.form-textbox:focus,
li[data-type=control_fileupload] .qq-upload-button:focus,
.signature-wrapper:focus {
  border-color: #321f16;
  box-shadow: 0 0 0 3px rgba(50, 31, 22, 0.25);
}
/* Heights */
li[data-type="control_textbox"] div[data-layout="half"],
li[data-type="control_dropdown"] div[data-layout="half"],
li[data-type="control_email"] div[data-layout="half"],
li[data-type="control_number"] div[data-layout="half"],
li[data-type="control_phone"] div[data-layout="half"],
li[data-type="control_datetime"] div[data-layout="half"],
li[data-type="control_signature"] div[data-layout="half"] {
  width: 100% !important;
  max-width: 380px;
}
.form-label {
  margin-right: 14px;
  margin-bottom: 0;
}
/* 11 - LINE PADDING */
/* LABEL STYLE */
.form-dropdown:first-child {
  border-color: rgba(50, 31, 22, 0.75);
  background-color: #ffffff;
}
[data-type="control_dropdown"] .form-input,
[data-type="control_birthdate"] .form-input,
[data-type="control_time"] .form-input,
[data-type="control_dropdown"] .form-input-wide,
[data-type="control_birthdate"] .form-input-wide,
[data-type="control_time"] .form-input-wide {
  width: 100% !important;
  max-width: 380px;
}
[data-type="control_dropdown"] .form-dropdown {
  width: 100% !important;
  max-width: 380px;
}
/* 12 - ROUNDED INPUTS */
.supernova .form-all,
.form-all {
  border-radius: 3px;
}
.form-section:first-child {
  border-radius: 3px 3px 0 0;
}
.form-section:last-child {
  border-radius: 0 0 3px 3px;
}
.form-radio-item,
.form-checkbox-item {
  padding-bottom: 0px;
}
.form-radio-item:last-child,
.form-checkbox-item:last-child {
  padding-bottom: 0;
}
.form-single-column .form-checkbox-item,
.form-single-column .form-radio-item {
  width: 100%;
}
.form-checkbox-item .editor-container div,
.form-radio-item .editor-container div {
  position: relative;
}
.form-checkbox-item .editor-container div:before,
.form-radio-item .editor-container div:before {
  display: inline-block;
  vertical-align: middle;
  left: 0;
  width: 20px;
  height: 20px;
}
.form-checkbox-item input,
.form-radio-item input {
  margin-top: 2px;
}
.form-checkbox:checked + label:before,
.form-checkbox:checked + span:before {
  background-color: rgba(50, 31, 22, 0.75);
  border-color: rgba(50, 31, 22, 0.75);
}
.form-radio:checked + label:before,
.form-radio:checked + span:before {
  border-color: rgba(50, 31, 22, 0.75);
}
.form-radio:checked + label:after,
.form-radio:checked + span:after {
  background-color: rgba(50, 31, 22, 0.75);
}
.form-checkbox:hover + label:before,
.form-checkbox:hover + span:before,
.form-radio:hover + label:before,
.form-radio:hover + span:before {
  border-color: rgba(50, 31, 22, 0.5);
  box-shadow: 0 0 0 2px rgba(50, 31, 22, 0.25);
}
.form-checkbox:focus + label:before,
.form-checkbox:focus + span:before,
.form-radio:focus + label:before,
.form-radio:focus + span:before {
  border-color: #321f16;
  box-shadow: 0 0 0 3px rgba(50, 31, 22, 0.25);
}
.submit-button {
  font-size: 16px;
  font-weight: normal;
  font-family: inherit;
  border-color: rgba(50, 31, 22, 0.75);
}
.submit-button {
  min-width: 180px;
}
.form-all .form-pagebreak-back,
.form-all .form-pagebreak-next {
  font-family: "Verdana", sans-serif;
  font-size: 16px;
  font-weight: normal;
}
.form-all .form-pagebreak-back,
.form-all .form-pagebreak-next {
  min-width: 128px;
}
li[data-type="control_image"] div {
  text-align: left;
}
li[data-type="control_image"] img {
  border: none;
  border-width: 0px !important;
  border-style: solid !important;
  border-color: false !important;
}
.supernova {
  height: 100%;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-repeat: repeat;
}
.supernova {
  background-image: none;
}
#stage {
  background-image: none;
}
/* | */
.form-all {
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-repeat: repeat;
}
.form-header-group {
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
}
.header-large h1.form-header {
  font-size: 2em;
}
.header-large h2.form-header {
  font-size: 1.5em;
}
.header-large h3.form-header {
  font-size: 1.17em;
}
.header-large h1 + .form-subHeader {
  font-size: 1em;
}
.header-large h2 + .form-subHeader {
  font-size: .875em;
}
.header-large h3 + .form-subHeader {
  font-size: .75em;
}
.header-default h1.form-header {
  font-size: 2em;
}
.header-default h2.form-header {
  font-size: 1.5em;
}
.header-default h3.form-header {
  font-size: 1.17em;
}
.header-default h1 + .form-subHeader {
  font-size: 1em;
}
.header-default h2 + .form-subHeader {
  font-size: .875em;
}
.header-default h3 + .form-subHeader {
  font-size: .75em;
}
.header-small h1.form-header {
  font-size: 2em;
}
.header-small h2.form-header {
  font-size: 1.5em;
}
.header-small h3.form-header {
  font-size: 1.17em;
}
.header-small h1 + .form-subHeader {
  font-size: 1em;
}
.header-small h2 + .form-subHeader {
  font-size: .875em;
}
.header-small h3 + .form-subHeader {
  font-size: .75em;
}
.form-header-group {
  text-align: left;
}
.form-header-group {
  font-family: "false", sans-serif;
}
div.form-header-group.header-large,
div.form-header-group.hasImage {
  margin: 0px -38px;
}
div.form-header-group.header-large,
div.form-header-group.hasImage {
  padding: 40px 52px;
}
.form-header-group .form-header,
.form-header-group .form-subHeader {
  color: #321f16;
}
.form-line-error {
  -webkit-transition-property: none;
  -moz-transition-property: none;
  -ms-transition-property: none;
  -o-transition-property: none;
  transition-property: none;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -ms-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -ms-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  background-color: #ffd6d6;
}
.form-line-error .form-error-message {
  background-color: #f23a3c;
  clear: both;
  float: none;
}
.form-line-error .form-error-message .form-error-arrow {
  border-bottom-color: #f23a3c;
}
.form-line-error input:not(#coupon-input),
.form-line-error textarea,
.form-line-error .form-validation-error {
  border: 1px solid #f23a3c;
  box-shadow: 0 0 3px #f23a3c;
}
.form-line-error {
  -webkit-transition-property: none;
  -moz-transition-property: none;
  -ms-transition-property: none;
  -o-transition-property: none;
  transition-property: none;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -ms-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -ms-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  background-color: #ffd6d6;
}
.form-header-group .form-header,
.form-header-group .form-subHeader {
  color: #321f16;
}
.form-line-active {
  background-color: #f1f5ff;
}
/* 29 - FORM COLUMNS */


  /*PREFERENCES STYLE*/
  /* NEW THEME STYLE */

  /* colors */

  .form-textbox, .form-textarea {
    color: undefined;
  }
  .FITB-inptCont .form-textbox, .FITB-inptCont .form-dropdown,
  span.FITB-inptCont[data-type=selectbox] select,
  span.FITB-inptCont[data-type=timebox] select {
    color: #FFFFFF;
  }
  .rating-item input:hover+label {
    color: rgba(17, 17, 27, 0.75);
  }
  li[data-type=control_fileupload] .qq-upload-button,
  .until-text,
  .form-submit-reset {
    color: #FFFFFF;
  }

  .stageEmpty,
  .btn-barebone,
  .formPage-stuff,
  .scrollToTop .scrollToTop-text {
    color: #FFFFFF;
  }
  .scrollToTop svg {
    fill: #FFFFFF;
  }
  .rating-item label {
    color: rgba(17, 17, 27, 0.75);
  }
  .currentDate,
  .pickerItem select,
  .appointmentCalendar .calendarDay,
  .calendar.popup th,
  .calendar.popup table tbody td,
  .calendar-new-header>*,
  .form-collapse-table {
    color: #FFFFFF;
  }
  .appointmentCalendar .dayOfWeek {
    color: #FFFFFF;
  }
  .appointmentSlotsContainer > * {
    color: rgba(17, 17, 27, 0.75);
  }
  li[data-type=control_fileupload] .jfUpload-heading,
  ::placeholder,
  .form-dropdown.is-active,
  .form-dropdown:first-child,
  .form-spinner-input {
    color: #1A1F2F;
  }
  .appointmentCalendar .calendarWeek .calendarDay.isUnavailable,
  .calendar tr.days td.otherDay,
  .calendar tr.days td:hover:not(.unselectable) {
    color: #1A1F2F;
  }
  span.form-sub-label, label.form-sub-label, div.form-header-group .form-subHeader,
  .rating-item-title.for-to > label:first-child,
  .rating-item-title.for-from > label:first-child,
  .rating-item-title .editor-container * {
    color: #838895;
  }
  .form-pagebreak-back{
    color: #FFFFFF;
  }
  .rating-item input:checked+label,
  .rating-item input:focus+label {
    color: #FFFFFF;
  }
  .clear-pad-btn {
    color: #FFFFFF;
  }
  .form-textbox::placeholder,
  .form-dropdown:not(.time-dropdown):not(:required),
  .form-dropdown:not(:required),
  .form-dropdown:required:invalid {
    color: #1A1F2F;
  }
  /* border-colors */
  .form-dropdown,
  .form-textarea,
  .form-textbox,
  li[data-type=control_fileupload] .qq-upload-button,
  .rating-item label,
  .rating-item input:focus+label,
  .rating-item input:checked+label,
  .jf-form-buttons,
  .form-checkbox+label:before, .form-checkbox+span:before, .form-radio+label:before, .form-radio+span:before,
  .signature-pad-passive,
  .signature-wrapper,
  .appointmentCalendarContainer,
  .appointmentField .timezonePickerName,
  .appointmentDayPickerButton,
  .appointmentCalendarContainer .monthYearPicker .pickerItem+.pickerItem,
  .appointmentCalendarContainer .monthYearPicker,
  .appointmentCalendar .calendarDay.isActive .calendarDayEach, .appointmentCalendar .calendarDay.isToday .calendarDayEach, .appointmentCalendar .calendarDay:not(.empty):hover .calendarDayEach,
  .calendar.popup:before,
  .calendar-new-month,
  .form-matrix-column-headers, .form-matrix-table td, .form-matrix-table td:last-child,
  .form-matrix-table th, .form-matrix-table th:last-child, .form-matrix-table tr:last-child td, .form-matrix-table tr:last-child th, .form-matrix-table tr:not([role=group])+tr[role=group] th,
  .form-matrix-headers.form-matrix-column-headers,
  .isSelected .form-matrix-column-headers:nth-last-of-type(2),
  li[data-type=control_inline] input[type=email], li[data-type=control_inline] input[type=number],
  li[data-type=control_inline] input[type=tel], li[data-type=control_inline] input[type=text] {
    border-color: rgba(17, 17, 27, 0.75);
  }
  .stageEmpty,
  .form-page-break:before,
  .welcome-page-break:before,
  .thankyou-page-break:before,
  .form-cover-break:before,
  .form-page-break:after,
  .welcome-page-break:after,
  .thankyou-page-break:after,
  .form-cover-break:after {
    border-color: rgba(17, 17, 27, 0.75);
  }

  .rating-item input:hover+label {
    border-color: rgba(17, 17, 27, 0.75);
  }
  .appointmentSlot,
  .form-checkbox:checked+label:before, .form-checkbox:checked+span:before, .form-checkbox:checked+span label:before,
  .form-radio:checked+label:before, .form-radio:checked+span:before,
  .form-dropdown:focus, .form-textarea:focus, .form-textbox:focus, .signature-wrapper:focus,
  .form-line[data-payment="true"] .form-product-item .p_checkbox .checked,
  .form-dropdown:hover, .form-textarea:hover, .form-textbox:hover, .signature-wrapper:hover {
    border-color: rgba(17, 17, 27, 0.75);
  }

  .calendar tr.days td:hover:not(.unselectable):after {
    border-color: #1A1F2F;
  }
  .form-header-group,
  .form-buttons-wrapper, .form-pagebreak, .form-submit-clear-wrapper,
  .form-pagebreak-next,
  .form-pagebreak-back,
  .form-checkbox:hover+label:before, .form-checkbox:hover+span:before, .form-radio:hover+label:before, .form-radio:hover+span:before,
  .divider {
    border-color: #11111B;
  }
  .form-pagebreak-back:focus, .form-pagebreak-next:focus, .form-submit-button:focus {
    border-color: rgba(17, 17, 27, 1);
  }
  /* background-colors */
  .form-line-active {
    background-color: #4F5B77;
  }
  .stageEmpty {
    background-color:  #11111B;
  }
  .form-line-error {
    background-color: #642733;
  }
  .form-matrix-column-headers, .form-matrix-row-headers,
  .form-spinner-button-container>*,
  .form-collapse-table,
  .form-collapse-table:hover,
  .appointmentDayPickerButton {
    background-color: #1A1F2F;
  }
  .calendar.popup, .calendar.popup table,
  .calendar.popup table tbody td:after{
    background-color: #424756;
  }

  .appointmentCalendar .calendarDay.isActive .calendarDayEach,
  .appointmentFieldRow.forSelectedDate,
  .calendar.popup tr.days td.selected:after,
  .calendar.popup:after,
  .submit-button,
  .form-checkbox:checked+label:before, .form-checkbox:checked+span:before, .form-checkbox:checked+span label:before,
  .form-radio+label:after, .form-radio+span:after,
  .rating-item input:checked+label,
  .appointmentCalendar .calendarDay:after,
  .form-line[data-payment="true"] .form-product-item .p_checkbox .checked,
  .rating-item input:focus+label,
  .formPage-removePage:hover,
  .btn-barebone:hover, .btn-barebone:active {
    background-color: #2E69FF;
  }
  .appointmentSlot.active {
    background-color: #2E69FF !important;
  }
  .clear-pad-btn,
  .appointmentCalendar .dayOfWeek,
  .calendar.popup th {
    background-color: #11111B !important;
  }
  .appointmentField .timezonePicker:hover+.timezonePickerName,
  .form-spinner-button-container>*:hover {
    background-color: #96B4FF;
  }
  .form-matrix-values,
  .form-matrix-values,
  .signature-wrapper,
  .signature-pad-passive,
  .rating-item label,
  .form-checkbox+label:before, .form-checkbox+span:before,
  .form-radio+label:before, .form-radio+span:before {
    background-color: #838895;
  }
  li[data-type=control_fileupload] .qq-upload-button {
    background-color: #838895;
  }
  .JotFormBuilder .appContainer #app li.form-line[data-type=control_matrix].isSelected
  .questionLine-editButton.forRemove:after,
  .JotFormBuilder .appContainer #app li.form-line[data-type=control_matrix].isSelected .questionLine-editButton.forRemove:before {
    background-color: #FFFFFF;
  }
  .appointmentCalendarContainer, .appointmentSlot,
  .rating-item-title.for-to > label:first-child,
  .rating-item-title.for-from > label:first-child,
  .rating-item-title .editor-container *,
  .calendar-opened {
    background-color: transparent;
  }
  .page-section li.form-line-active[data-type="control_button"] {
    background-color: #4F5B77;
  }
  .appointmentCalendar .calendarDay.isSelected:after {
    color: #838895;
  }
  /* shadow */
  .form-dropdown:hover, .form-textarea:hover, .form-textbox:hover, .signature-wrapper:hover,
  .calendar.popup:before,
  .jSignature:hover,
  li[data-type=control_fileupload] .qq-upload-button-hover,
  .form-line[data-payment="true"] .form-product-item .p_checkbox .checked,
  .form-line[data-payment="true"] .form-product-item .p_checkbox:hover .select_border,
  .form-checkbox:hover+label:before, .form-checkbox:hover+span:before, .form-radio:hover+label:before, .form-radio:hover+span:before,
  .calendar.popup:before {
    border-color: rgba(17, 17, 27, 0.5);
    box-shadow: 0 0 0 2px rgba(17, 17, 27, 0.25);
  }
  .form-dropdown:focus, .form-textarea:focus, .form-textbox:focus, .signature-wrapper:focus,
  li[data-type=control_fileupload] .qq-upload-button-focus,
  .form-checkbox:focus+label:before, .form-checkbox:focus+span:before, .form-radio:focus+label:before, .form-radio:focus+span:before,
  .calendar.popup:before {
    border-color: rgba(17, 17, 27, 1);
    box-shadow: 0 0 0 3px rgba(17, 17, 27, 0.25);
  }
  .calendar.popup table tbody td{
    box-shadow: none;
  }

  /* button colors */
  .submit-button {
    background-color: #2E69FF;
    border-color: #2E69FF;
  }
  .submit-button:hover {
    background-color: #1C3F99;
    border-color: #1C3F99;
  }
  .form-pagebreak-next {
    background-color: #11111B;
  }
  .form-pagebreak-back {
    background-color: #11111B;
  }
  .form-pagebreak-back:hover {
    background-color: #11141C;
    border-color: #11141C;
  }
  .form-pagebreak-next:hover {
    background-color: #11141C;
    border-color: #11141C;
  }
  .form-sacl-button, .form-submit-print {
    background-color: transparent;
    color: rgba(17, 17, 27, 0.75);
    border-color: rgba(17, 17, 27, 0.75);
  }
  .form-sacl-button:hover, .form-submit-print:hover,
  .appointmentSlot:not(.disabled):not(.active):hover,
  .appointmentDayPickerButton:hover,
  .rating-item input:hover+label {
    background-color: #96B4FF;
  }

  /* payment styles */

  .form-line[data-payment=true] .form-textbox,
  .form-line[data-payment=true] .select-area,
  .form-line[data-payment=true] #coupon-input,
  .form-line[data-payment=true] #coupon-container input,
  .form-line[data-payment=true] input#productSearch-input,
  .form-line[data-payment=true] .form-product-category-item:after,
  .form-line[data-payment=true] .filter-container .dropdown-container .select-content,
  .form-line[data-payment=true] .form-textbox.form-product-custom_quantity,
  .form-line[data-payment="true"] .form-product-item .p_checkbox .select_border,
  .form-line[data-payment="true"] .form-product-item .form-product-container .form-sub-label-container span.select_cont,
  .form-line[data-payment=true] select.form-dropdown,
  .form-line[data-payment=true] #payment-category-dropdown .select-area,
  .form-line[data-payment=true] #payment-sorting-products-dropdown .select-area,
  .form-line[data-payment=true] .dropdown-container .select-content {
    border-color: rgba(17, 17, 27, 0.75);
    border-color: rgba(17,17,27,.7);
  }
  .form-line[data-payment="true"] hr,
  .form-line[data-payment=true] .p_item_separator,
  .form-line[data-payment="true"] .payment_footer.new_ui,
  .form-line.card-3col .form-product-item.new_ui,
  .form-line.card-2col .form-product-item.new_ui {
    border-color: rgba(17, 17, 27, 0.75);
    border-color: rgba(17,17,27,.4);
  }
  .form-line[data-payment=true] .form-product-category-item {
    border-color: rgba(17, 17, 27, 0.75);
    border-color: undefined;
  }
  .form-line[data-payment=true] #coupon-input,
  .form-line[data-payment=true] .form-textbox.form-product-custom_quantity,
  .form-line[data-payment=true] input#productSearch-input,
  .form-line[data-payment=true] .select-area,
  .form-line[data-payment=true] .custom_quantity,
  .form-line[data-payment=true] .filter-container .select-content,
  .form-line[data-payment=true] .p_checkbox .select_border,
  .form-line[data-payment=true] #payment-category-dropdown .select-area,
  .form-line[data-payment=true] #payment-sorting-products-dropdown .select-area,
  .form-line[data-payment=true] .dropdown-container .select-content {
    background-color: #838895;
  }
  .form-line[data-payment=true] .form-product-category-item.title_collapsed.has_selected_product .selected-items-icon {
   background-color: #11111B;
   border-color: #11111B;
  }
  .form-line[data-payment=true].form-line.card-3col .form-product-item,
  .form-line[data-payment=true].form-line.card-2col .form-product-item {
   background-color: rgba(0,0,0,.05);
  }
  .form-line[data-payment=true] .payment-form-table input.form-textbox,
  .form-line[data-payment=true] .payment-form-table input.form-dropdown,
  .form-line[data-payment=true] .payment-form-table .form-sub-label-container > div,
  .form-line[data-payment=true] .payment-form-table span.form-sub-label-container iframe,
  .form-line[data-type=control_square] .payment-form-table span.form-sub-label-container iframe {
    border-color: rgba(17, 17, 27, 0.75);
  }

  /* icons */
  .appointmentField .timezonePickerName:before {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTYiIHZpZXdCb3g9IjAgMCAxNiAxNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0wIDcuOTYwMkMwIDMuNTY2MTcgMy41NTgyMSAwIDcuOTUyMjQgMEMxMi4zNTQyIDAgMTUuOTIwNCAzLjU2NjE3IDE1LjkyMDQgNy45NjAyQzE1LjkyMDQgMTIuMzU0MiAxMi4zNTQyIDE1LjkyMDQgNy45NTIyNCAxNS45MjA0QzMuNTU4MjEgMTUuOTIwNCAwIDEyLjM1NDIgMCA3Ljk2MDJaTTEuNTkzNzUgNy45NjAyQzEuNTkzNzUgMTEuNDc4NiA0LjQ0MzUgMTQuMzI4NCA3Ljk2MTkxIDE0LjMyODRDMTEuNDgwMyAxNC4zMjg0IDE0LjMzMDEgMTEuNDc4NiAxNC4zMzAxIDcuOTYwMkMxNC4zMzAxIDQuNDQxNzkgMTEuNDgwMyAxLjU5MjA0IDcuOTYxOTEgMS41OTIwNEM0LjQ0MzUgMS41OTIwNCAxLjU5Mzc1IDQuNDQxNzkgMS41OTM3NSA3Ljk2MDJaIiBmaWxsPSIjODM4ODk1Ii8+CjxwYXRoIGQ9Ik04LjM1ODA5IDMuOTc5OThINy4xNjQwNlY4Ljc1NjFMMTEuMzQzMiAxMS4yNjM2TDExLjk0MDIgMTAuMjg0NUw4LjM1ODA5IDguMTU5MDhWMy45Nzk5OFoiIGZpbGw9IiM4Mzg4OTUiLz4KPC9zdmc+Cg==);
  }
  .appointmentCalendarContainer .monthYearPicker .pickerArrow.prev:after {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAiIGhlaWdodD0iNiIgdmlld0JveD0iMCAwIDEwIDYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik04LjU5NzgyIDUuMzM2NjRDOC45MzMxMiA1LjY0MDE4IDkuNDM5MzkgNS42MzM2IDkuNzU2MTMgNS4zMTY2OUMxMC4wODEzIDQuOTkxMzYgMTAuMDgxMyA0LjQ2MzU0IDkuNzU2MTMgNC4xMzgyMUM5LjYwOTA0IDQuMDAwMjYgOS42MDkwMyA0LjAwMDI2IDkuMDg5NDkgMy41MTUwOUM4LjQzNzQyIDIuOTA2MDkgOC40Mzc0MyAyLjkwNjA5IDcuNjU1MTEgMi4xNzU0N0M2LjA4OTU2IDAuNzEzMzUzIDYuMDg5NTYgMC43MTMzNTIgNS41Njc3MyAwLjIyNjAwN0M1LjI0MTA0IC0wLjA3MDYwMDUgNC43NTA4NSAtMC4wNjk1OTY3IDQuNDMyMzUgMC4yMjU4MzVMMC4yNjI1NCA0LjExODE1Qy0wLjA4MDU0NTkgNC40NTkzNiAtMC4wODcxNzExIDQuOTg3ODggMC4yNDE0NjggNS4zMTY2OUMwLjU1OTU1OCA1LjYzNDk2IDEuMDY5NzUgNS42NDA1OSAxLjM5NzAzIDUuMzM2NTNMNC45OTg5MSAxLjk3NTIyTDguNTk3ODIgNS4zMzY2NFoiIGZpbGw9IndoaXRlIi8+Cjwvc3ZnPgo=);
  }
  .appointmentCalendarContainer .monthYearPicker .pickerArrow.next:after {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAiIGhlaWdodD0iNiIgdmlld0JveD0iMCAwIDEwIDYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0xLjQwMjE4IDAuMjI2OTE1QzEuMDY2ODcgLTAuMDc2Njg0OSAwLjU2MDYwMiAtMC4wNzAwODQ5IDAuMjQzODY5IDAuMjQ2ODE1Qy0wLjA4MTI4OTggMC41NzIxMTUgLTAuMDgxMjg5OCAxLjEwMDAyIDAuMjQzODY5IDEuNDI1MzJDMC4zOTA5NTYgMS41NjMyMiAwLjM5MDk2NiAxLjU2MzIyIDAuOTEwNTEgMi4wNDg0MkMxLjU2MjU3IDIuNjU3NDIgMS41NjI1NiAyLjY1NzQxIDIuMzQ0ODggMy4zODgwMkMzLjkxMDQ0IDQuODUwMTEgMy45MTA0MyA0Ljg1MDEyIDQuNDMyMjcgNS4zMzc1MkM0Ljc1ODk1IDUuNjM0MTIgNS4yNDkxNSA1LjYzMzEyIDUuNTY3NjQgNS4zMzc3Mkw5LjczNzQ2IDEuNDQ1NDJDMTAuMDgwNSAxLjEwNDEyIDEwLjA4NzEgMC41NzU2MTUgOS43NTg1MyAwLjI0NjgxNUM5LjQ0MDQ0IC0wLjA3MTQ4NDkgOC45MzAyNCAtMC4wNzcwODQ5IDguNjAyOTcgMC4yMjcwMTVMNS4wMDEwOCAzLjU4ODMyTDEuNDAyMTggMC4yMjY5MTVaIiBmaWxsPSJ3aGl0ZSIvPgo8L3N2Zz4K);
  }
  .appointmentField .timezonePickerName:after {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAiIGhlaWdodD0iNiIgdmlld0JveD0iMCAwIDEwIDYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0xIDFMNSA1TDkgMSIgc3Ryb2tlPSJ3aGl0ZSIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPC9zdmc+Cg==);
    width: 11px;
  }
  li[data-type=control_datetime] [data-wrapper-react=true].extended>div+.form-sub-label-container .form-textbox:placeholder-shown,
  li[data-type=control_datetime] [data-wrapper-react=true]:not(.extended) .form-textbox:not(.time-dropdown):placeholder-shown,
  .appointmentCalendarContainer .currentDate {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTciIGhlaWdodD0iMTYiIHZpZXdCb3g9IjAgMCAxNyAxNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE1Ljk0ODkgNVYxNS4wMjZDMTUuOTQ4OSAxNS41NjM5IDE1LjUwMjYgMTYgMTQuOTUyMSAxNkgwLjk5NjgwNUMwLjQ0NjI4NSAxNiAwIDE1LjU2MzkgMCAxNS4wMjZWNUgxNS45NDg5Wk00LjE5MjQ1IDExLjQxNjdIMi4zNzQ3NEwyLjI4NTE1IDExLjQyNDdDMi4xMTA3OCAxMS40NTY1IDEuOTY4MDEgMTEuNTc5MiAxLjkwNzUyIDExLjc0MjJMMS44ODQzNyAxMS44MjY4TDEuODc2MzQgMTEuOTE2N1YxMy42NjY3TDEuODg0MzcgMTMuNzU2NUMxLjkxNjAyIDEzLjkzMTUgMi4wMzg0IDE0LjA3NDcgMi4yMDA4MyAxNC4xMzU0TDIuMjg1MTUgMTQuMTU4NkwyLjM3NDc0IDE0LjE2NjdINC4xOTI0NUw0LjI4MjAzIDE0LjE1ODZDNC40NTY0MSAxNC4xMjY5IDQuNTk5MTggMTQuMDA0MSA0LjY1OTY3IDEzLjg0MTFMNC42ODI4MiAxMy43NTY1TDQuNjkwODUgMTMuNjY2N1YxMS45MTY3TDQuNjgyODIgMTEuODI2OEM0LjY1MTE3IDExLjY1MTkgNC41Mjg3OSAxMS41MDg2IDQuMzY2MzUgMTEuNDQ3OUw0LjI4MjAzIDExLjQyNDdMNC4xOTI0NSAxMS40MTY3Wk04Ljg4MzI5IDExLjQxNjdINy4wNjU1OUw2Ljk3NiAxMS40MjQ3QzYuODAxNjIgMTEuNDU2NSA2LjY1ODg1IDExLjU3OTIgNi41OTgzNyAxMS43NDIyTDYuNTc1MjIgMTEuODI2OEw2LjU2NzE5IDExLjkxNjdWMTMuNjY2N0w2LjU3NTIyIDEzLjc1NjVDNi42MDY4NyAxMy45MzE1IDYuNzI5MjUgMTQuMDc0NyA2Ljg5MTY4IDE0LjEzNTRMNi45NzYgMTQuMTU4Nkw3LjA2NTU5IDE0LjE2NjdIOC44ODMyOUw4Ljk3Mjg4IDE0LjE1ODZDOS4xNDcyNiAxNC4xMjY5IDkuMjkwMDMgMTQuMDA0MSA5LjM1MDUxIDEzLjg0MTFMOS4zNzM2NyAxMy43NTY1TDkuMzgxNyAxMy42NjY3VjExLjkxNjdMOS4zNzM2NyAxMS44MjY4QzkuMzQyMDIgMTEuNjUxOSA5LjIxOTY0IDExLjUwODYgOS4wNTcyIDExLjQ0NzlMOC45NzI4OCAxMS40MjQ3TDguODgzMjkgMTEuNDE2N1pNNC4xOTI0NSA2LjgzMzMzSDIuMzc0NzRMMi4yODUxNSA2Ljg0MTM5QzIuMTEwNzggNi44NzMxNCAxLjk2ODAxIDYuOTk1OTEgMS45MDc1MiA3LjE1ODg3TDEuODg0MzcgNy4yNDM0NkwxLjg3NjM0IDcuMzMzMzNWOS4wODMzM0wxLjg4NDM3IDkuMTczMjFDMS45MTYwMiA5LjM0ODE1IDIuMDM4NCA5LjQ5MTM3IDIuMjAwODMgOS41NTIwNUwyLjI4NTE1IDkuNTc1MjhMMi4zNzQ3NCA5LjU4MzMzSDQuMTkyNDVMNC4yODIwMyA5LjU3NTI4QzQuNDU2NDEgOS41NDM1MyA0LjU5OTE4IDkuNDIwNzUgNC42NTk2NyA5LjI1NzhMNC42ODI4MiA5LjE3MzIxTDQuNjkwODUgOS4wODMzM1Y3LjMzMzMzTDQuNjgyODIgNy4yNDM0NkM0LjY1MTE3IDcuMDY4NTIgNC41Mjg3OSA2LjkyNTI5IDQuMzY2MzUgNi44NjQ2MUw0LjI4MjAzIDYuODQxMzlMNC4xOTI0NSA2LjgzMzMzWk04Ljg4MzI5IDYuODMzMzNINy4wNjU1OUw2Ljk3NiA2Ljg0MTM5QzYuODAxNjIgNi44NzMxNCA2LjY1ODg1IDYuOTk1OTEgNi41OTgzNyA3LjE1ODg3TDYuNTc1MjIgNy4yNDM0Nkw2LjU2NzE5IDcuMzMzMzNWOS4wODMzM0w2LjU3NTIyIDkuMTczMjFDNi42MDY4NyA5LjM0ODE1IDYuNzI5MjUgOS40OTEzNyA2Ljg5MTY4IDkuNTUyMDVMNi45NzYgOS41NzUyOEw3LjA2NTU5IDkuNTgzMzNIOC44ODMyOUw4Ljk3Mjg4IDkuNTc1MjhDOS4xNDcyNiA5LjU0MzUzIDkuMjkwMDMgOS40MjA3NSA5LjM1MDUxIDkuMjU3OEw5LjM3MzY3IDkuMTczMjFMOS4zODE3IDkuMDgzMzNWNy4zMzMzM0w5LjM3MzY3IDcuMjQzNDZDOS4zNDIwMiA3LjA2ODUyIDkuMjE5NjQgNi45MjUyOSA5LjA1NzIgNi44NjQ2MUw4Ljk3Mjg4IDYuODQxMzlMOC44ODMyOSA2LjgzMzMzWk0xMy41NzQxIDYuODMzMzNIMTEuNzU2NEwxMS42NjY4IDYuODQxMzlDMTEuNDkyNSA2Ljg3MzE0IDExLjM0OTcgNi45OTU5MSAxMS4yODkyIDcuMTU4ODdMMTEuMjY2MSA3LjI0MzQ2TDExLjI1OCA3LjMzMzMzVjkuMDgzMzNMMTEuMjY2MSA5LjE3MzIxQzExLjI5NzcgOS4zNDgxNSAxMS40MjAxIDkuNDkxMzcgMTEuNTgyNSA5LjU1MjA1TDExLjY2NjggOS41NzUyOEwxMS43NTY0IDkuNTgzMzNIMTMuNTc0MUwxMy42NjM3IDkuNTc1MjhDMTMuODM4MSA5LjU0MzUzIDEzLjk4MDkgOS40MjA3NSAxNC4wNDE0IDkuMjU3OEwxNC4wNjQ1IDkuMTczMjFMMTQuMDcyNSA5LjA4MzMzVjcuMzMzMzNMMTQuMDY0NSA3LjI0MzQ2QzE0LjAzMjkgNy4wNjg1MiAxMy45MTA1IDYuOTI1MjkgMTMuNzQ4IDYuODY0NjFMMTMuNjYzNyA2Ljg0MTM5TDEzLjU3NDEgNi44MzMzM1oiIGZpbGw9IiM0MjQ3NTYiLz4KPHBhdGggZD0iTTEzLjA1NDIgMS4xMjVIMTUuMDQ3OEMxNS41OTgzIDEuMTI1IDE2LjA0NDYgMS42MDA3IDE2LjA0NDYgMi4xODc1VjRIMC4wOTU3MDMxVjIuMTg3NUMwLjA5NTcwMzEgMS42MDA3IDAuNTQxOTg4IDEuMTI1IDEuMDkyNTEgMS4xMjVIMy4wODYxMlYxLjA2MjVDMy4wODYxMiAwLjQ3NTY5NyAzLjUzMjQgMCA0LjA4MjkyIDBDNC42MzM0NCAwIDUuMDc5NzMgMC40NzU2OTcgNS4wNzk3MyAxLjA2MjVWMS4xMjVIMTEuMDYwNlYxLjA2MjVDMTEuMDYwNiAwLjQ3NTY5NyAxMS41MDY4IDAgMTIuMDU3NCAwQzEyLjYwNzkgMCAxMy4wNTQyIDAuNDc1Njk3IDEzLjA1NDIgMS4wNjI1VjEuMTI1WiIgZmlsbD0iIzQyNDc1NiIvPgo8L3N2Zz4K);
  }
  .form-star-rating-star.Stars {
    background-image: url(data:image/png;base64,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) !important;
  }
  .signature-pad-passive, .signature-placeholder:after {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTk4IiBoZWlnaHQ9IjQwIiB2aWV3Qm94PSIwIDAgMTk4IDQwIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cGF0aCBkPSJNNzQuMTA0NCA2LjM0NTA4SDc1LjU4NTlDNzUuNTQxMiA0LjcxNDQgNzQuMDk5NCAzLjUzMTE2IDcyLjAzMTIgMy41MzExNkM2OS45ODc5IDMuNTMxMTYgNjguNDIxOSA0LjY5OTQ4IDY4LjQyMTkgNi40NTQ0NkM2OC40MjE5IDcuODcxMzYgNjkuNDM2MSA4LjcwMTYyIDcxLjA3MTcgOS4xNDQwOUw3Mi4yNzQ5IDkuNDcyMjFDNzMuMzYzNiA5Ljc2MDU2IDc0LjIwMzggMTAuMTE4NSA3NC4yMDM4IDExLjAyMzNDNzQuMjAzOCAxMi4wMTc3IDczLjI1NDMgMTIuNjczOSA3MS45NDY3IDEyLjY3MzlDNzAuNzYzNSAxMi42NzM5IDY5Ljc3OTEgMTIuMTQ2OSA2OS42ODk2IDExLjAzODNINjguMTQ4NEM2OC4yNDc5IDEyLjg4MjcgNjkuNjc0NyAxNC4wMjEyIDcxLjk1NjcgMTQuMDIxMkM3NC4zNDggMTQuMDIxMiA3NS43MjUxIDEyLjc2MzQgNzUuNzI1MSAxMS4wMzgzQzc1LjcyNTEgOS4yMDM3NSA3NC4wODk1IDguNDkyODEgNzIuNzk2OSA4LjE3NDYzTDcxLjgwMjYgNy45MTYxQzcxLjAwNzEgNy43MTIyNyA2OS45NDgyIDcuMzM5NCA2OS45NTMxIDYuMzY0OTdDNjkuOTUzMSA1LjQ5OTkxIDcwLjc0MzYgNC44NTg1OCA3MS45OTY0IDQuODU4NThDNzMuMTY0OCA0Ljg1ODU4IDczLjk5NSA1LjQwNTQ1IDc0LjEwNDQgNi4zNDUwOFoiIGZpbGw9IiM0MjQ3NTYiLz4KPHBhdGggZD0iTTc3LjQ0MTYgMTMuODUyMkg3OC45MjgxVjYuMjE1ODJINzcuNDQxNlYxMy44NTIyWk03OC4xOTIzIDUuMDM3NTVDNzguNzA0NCA1LjAzNzU1IDc5LjEzMTkgNC42Mzk4MyA3OS4xMzE5IDQuMTUyNjFDNzkuMTMxOSAzLjY2NTM5IDc4LjcwNDQgMy4yNjI3IDc4LjE5MjMgMy4yNjI3Qzc3LjY3NTIgMy4yNjI3IDc3LjI1MjcgMy42NjUzOSA3Ny4yNTI3IDQuMTUyNjFDNzcuMjUyNyA0LjYzOTgzIDc3LjY3NTIgNS4wMzc1NSA3OC4xOTIzIDUuMDM3NTVaIiBmaWxsPSIjNDI0NzU2Ii8+CjxwYXRoIGQ9Ik04NC4xMjk2IDE2Ljg2Qzg2LjA3MzUgMTYuODYgODcuNTc0OSAxNS45NzAxIDg3LjU3NDkgMTQuMDIxMlY2LjIxNTgySDg2LjExODNWNy40NTM3NUg4Ni4wMDg5Qzg1Ljc0NTQgNi45ODE0NSA4NS4yMTg0IDYuMTE2MzkgODMuNzk2NSA2LjExNjM5QzgxLjk1MjEgNi4xMTYzOSA4MC41OTQ4IDcuNTczMDYgODAuNTk0OCAxMC4wMDQyQzgwLjU5NDggMTIuNDQwMyA4MS45ODE5IDEzLjczNzggODMuNzg2NiAxMy43Mzc4Qzg1LjE4ODYgMTMuNzM3OCA4NS43MzA1IDEyLjk0NzQgODUuOTk4OSAxMi40NjAxSDg2LjA5MzRWMTMuOTYxNkM4Ni4wOTM0IDE1LjEzOTggODUuMjczMSAxNS42NjE4IDg0LjE0NDUgMTUuNjYxOEM4Mi45MDY2IDE1LjY2MTggODIuNDI0NCAxNS4wNDA0IDgyLjE2MDkgMTQuNjE3OEw4MC44ODMyIDE1LjE0NDhDODEuMjg1OSAxNi4wNjQ1IDgyLjMwNSAxNi44NiA4NC4xMjk2IDE2Ljg2Wk04NC4xMTQ3IDEyLjUwNDlDODIuNzg3MyAxMi41MDQ5IDgyLjA5NjIgMTEuNDg1NyA4Mi4wOTYyIDkuOTg0MjlDODIuMDk2MiA4LjUxNzY3IDgyLjc3MjQgNy4zNzkxNyA4NC4xMTQ3IDcuMzc5MTdDODUuNDEyMyA3LjM3OTE3IDg2LjEwODMgOC40MzgxMiA4Ni4xMDgzIDkuOTg0MjlDODYuMTA4MyAxMS41NjAzIDg1LjM5NzQgMTIuNTA0OSA4NC4xMTQ3IDEyLjUwNDlaIiBmaWxsPSIjNDI0NzU2Ii8+CjxwYXRoIGQ9Ik05MS4wNTUgOS4zMTgwOUM5MS4wNTUgOC4xMDAwNSA5MS44MDA4IDcuNDA0MDMgOTIuODM0OSA3LjQwNDAzQzkzLjg0NDEgNy40MDQwMyA5NC40NTU2IDguMDY1MjUgOTQuNDU1NiA5LjE3MzkyVjEzLjg1MjJIOTUuOTQyMVY4Ljk5NDk0Qzk1Ljk0MjEgNy4xMDU3NCA5NC45MDMxIDYuMTE2MzkgOTMuMzQyIDYuMTE2MzlDOTIuMTkzNSA2LjExNjM5IDkxLjQ0MjggNi42NDgzNSA5MS4wODk4IDcuNDU4NzJIOTAuOTk1NFY2LjIxNTgySDg5LjU2ODVWMTMuODUyMkg5MS4wNTVWOS4zMTgwOVoiIGZpbGw9IiM0MjQ3NTYiLz4KPHBhdGggZD0iTTEwMS43NiAxMy44NTIySDEwMy4yOTZWOS40MTI1NUgxMDguMzcyVjEzLjg1MjJIMTA5LjkxNFYzLjY3MDM3SDEwOC4zNzJWOC4wOTUwOEgxMDMuMjk2VjMuNjcwMzdIMTAxLjc2VjEzLjg1MjJaIiBmaWxsPSIjNDI0NzU2Ii8+CjxwYXRoIGQ9Ik0xMTUuMzIzIDE0LjAwNjNDMTE2Ljk4OCAxNC4wMDYzIDExOC4xNjYgMTMuMTg2IDExOC41MDQgMTEuOTQzMUwxMTcuMDk3IDExLjY4OTVDMTE2LjgyOSAxMi40MTA0IDExNi4xODMgMTIuNzc4MyAxMTUuMzM4IDEyLjc3ODNDMTE0LjA2NSAxMi43NzgzIDExMy4yMSAxMS45NTMgMTEzLjE3IDEwLjQ4MTRIMTE4LjU5OVY5Ljk1NDQ2QzExOC41OTkgNy4xOTUyMiAxMTYuOTQ4IDYuMTE2MzkgMTE1LjIxOCA2LjExNjM5QzExMy4wOSA2LjExNjM5IDExMS42ODggNy43MzcxMyAxMTEuNjg4IDEwLjA4MzdDMTExLjY4OCAxMi40NTUyIDExMy4wNyAxNC4wMDYzIDExNS4zMjMgMTQuMDA2M1pNMTEzLjE3NSA5LjM2NzgxQzExMy4yMzUgOC4yODQgMTE0LjAyIDcuMzQ0MzcgMTE1LjIyOCA3LjM0NDM3QzExNi4zODIgNy4zNDQzNyAxMTcuMTM3IDguMTk5NDkgMTE3LjE0MiA5LjM2NzgxSDExMy4xNzVaIiBmaWxsPSIjNDI0NzU2Ii8+CjxwYXRoIGQ9Ik0xMjAuMjQ4IDEzLjg1MjJIMTIxLjczNVY5LjE4ODgzQzEyMS43MzUgOC4xODk1NCAxMjIuNTA1IDcuNDY4NjYgMTIzLjU1OSA3LjQ2ODY2QzEyMy44NjggNy40Njg2NiAxMjQuMjE2IDcuNTIzMzUgMTI0LjMzNSA3LjU1ODE1VjYuMTM2MjdDMTI0LjE4NiA2LjExNjM5IDEyMy44OTIgNi4xMDE0NyAxMjMuNzAzIDYuMTAxNDdDMTIyLjgwOSA2LjEwMTQ3IDEyMi4wNDMgNi42MDg1OCAxMjEuNzY1IDcuNDI4ODlIMTIxLjY4NVY2LjIxNTgySDEyMC4yNDhWMTMuODUyMloiIGZpbGw9IiM0MjQ3NTYiLz4KPHBhdGggZD0iTTEyOC42MzkgMTQuMDA2M0MxMzAuMzA1IDE0LjAwNjMgMTMxLjQ4MyAxMy4xODYgMTMxLjgyMSAxMS45NDMxTDEzMC40MTQgMTEuNjg5NUMxMzAuMTQ1IDEyLjQxMDQgMTI5LjQ5OSAxMi43NzgzIDEyOC42NTQgMTIuNzc4M0MxMjcuMzgxIDEyLjc3ODMgMTI2LjUyNiAxMS45NTMgMTI2LjQ4NiAxMC40ODE0SDEzMS45MTVWOS45NTQ0NkMxMzEuOTE1IDcuMTk1MjIgMTMwLjI2NSA2LjExNjM5IDEyOC41MzUgNi4xMTYzOUMxMjYuNDA3IDYuMTE2MzkgMTI1LjAwNSA3LjczNzEzIDEyNS4wMDUgMTAuMDgzN0MxMjUuMDA1IDEyLjQ1NTIgMTI2LjM4NyAxNC4wMDYzIDEyOC42MzkgMTQuMDA2M1pNMTI2LjQ5MSA5LjM2NzgxQzEyNi41NTEgOC4yODQgMTI3LjMzNiA3LjM0NDM3IDEyOC41NDUgNy4zNDQzN0MxMjkuNjk4IDcuMzQ0MzcgMTMwLjQ1NCA4LjE5OTQ5IDEzMC40NTkgOS4zNjc4MUgxMjYuNDkxWiIgZmlsbD0iIzQyNDc1NiIvPgo8cGF0aCBkPSJNMSAzNi4wMjI5QzEyLjI0NjEgMzkuMjIwNSAyMy4xODIgMzUuMDMyOCAzMi41MDg0IDI4Ljg1MTFDMzcuNDQwNCAyNS41ODIyIDQyLjMzNDEgMjEuNjY4NyA0NS4zMzI5IDE2LjUxMDFDNDYuNTI4MyAxNC40NTM5IDQ3Ljk4OTMgMTAuODg0NCA0NC4yMjcxIDEwLjg1MjhDNDAuMTMzNyAxMC44MTgzIDM3LjA4NjQgMTQuNTE0MiAzNS41NTg4IDE3Ljg3NDRDMzMuMzY4MSAyMi42OTMzIDMzLjI5MSAyOC40MDA0IDM1Ljk2NTYgMzMuMDQ0MUMzOC40OTcxIDM3LjQzOTYgNDIuNzQ0NSAzOS41MTg0IDQ3LjgxMTQgMzguNjYzOUM1My4xMDM3IDM3Ljc3MTMgNTcuNzMwNCAzNC4xNTYyIDYxLjU3NjUgMzAuNjc4NUM2Mi45OTMgMjkuMzk3NiA2NC4zMjA5IDI4LjA0NzUgNjUuNTQyIDI2LjU4NTdDNjUuNjg0MiAyNi40MTU1IDY2LjE4NDIgMjUuNTc5OCA2Ni41MDggMjUuNTIxOEM2Ni42Mjg0IDI1LjUwMDIgNjYuODA2NCAyOS4xNjQ1IDY2LjgzODUgMjkuMzY0M0M2Ny4xMjU1IDMxLjE1NDMgNjguMDI5NCAzMy4xNzA2IDcwLjE0MzEgMzMuMjMxOEM3Mi44MzMyIDMzLjMwOTcgNzUuMDgyNiAzMS4wNTkxIDc2Ljg5MjIgMjkuNDAxOEM3Ny41MDI2IDI4Ljg0MjggNzkuNDQyNSAyNi4xNjAxIDgwLjQ3NjQgMjYuMTYwMUM4MC45MDE0IDI2LjE2MDEgODEuNzI0OSAyOC4zMDM4IDgxLjkxMjcgMjguNTg4M0M4NC4zOTcyIDMyLjM1MjMgODguMDQ0NiAzMC45ODk0IDkwLjg3MzMgMjguMzUwNUM5MS4zOTM0IDI3Ljg2NTMgOTQuMTc4MSAyMy45ODM5IDk1LjMwOTEgMjQuNjgzMkM5Ni4yMjAzIDI1LjI0NjYgOTYuNjIxNyAyNi41NzY1IDk3LjA4ODYgMjcuNDYxOEM5Ny44NDg0IDI4LjkwMjkgOTguODEwNyAyOS45Mjk0IDEwMC40MTkgMzAuNDY1N0MxMDMuOTEyIDMxLjYzMSAxMDcuNjggMjguMzYzIDExMS4yMjIgMjguMzYzQzExMi4yNTUgMjguMzYzIDExMi43ODMgMjguOTMxNiAxMTMuMzMyIDI5LjcxNDhDMTE0LjA4MSAzMC43ODIzIDExNC44NTMgMzEuNTI3NiAxMTYuMjA1IDMxLjgxNzVDMTIwLjM5MyAzMi43MTU1IDEyMy44MjIgMjguNzM5OSAxMjcuODcyIDI5LjA4ODlDMTI5LjA1MyAyOS4xOTA3IDEyOS45MzUgMzAuMzgxNiAxMzAuODIxIDMxLjAxNjRDMTMyLjYwOSAzMi4yOTY5IDEzNC43NTkgMzMuMTgzNiAxMzYuOTQ4IDMzLjQ5NDdDMTQwLjQ1NyAzMy45OTM0IDE0My45NzUgMzMuMzMyNiAxNDcuMzk1IDMyLjU5MzVDMTUzLjMgMzEuMzE3NCAxNTkuMTQ3IDI5Ljc5NTggMTY1LjA2MiAyOC41NjMzIiBzdHJva2U9IiM0MjQ3NTYiIHN0cm9rZS13aWR0aD0iMS41IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPHBhdGggZD0iTTE5Ni41MTUgMTUuMDc3OEwxODQuNDkyIDAuNTUxNzk1QzE4NC4yNTcgMC4yNjc4MSAxODMuODM4IDAuMjI4MjYgMTgzLjU1NCAwLjQ2MzMwN0wxODAuNjQ5IDIuODY3ODhDMTgwLjM2NSAzLjEwMjkzIDE4MC4zMjUgMy41MjI0IDE4MC41NiAzLjgwNjM4TDE5Mi41ODMgMTguMzMyNEMxOTIuNyAxOC40NzQxIDE5Mi44NjQgMTguNTU1MSAxOTMuMDM0IDE4LjU3MTJDMTkzLjIwNCAxOC41ODcyIDE5My4zOCAxOC41MzgyIDE5My41MjIgMTguNDIwOUwxOTYuNDI3IDE2LjAxNjRDMTk2LjcxMSAxNS43ODEzIDE5Ni43NSAxNS4zNjE4IDE5Ni41MTUgMTUuMDc3OFoiIGZpbGw9IiM0MjQ3NTYiLz4KPHBhdGggZD0iTTE4MS40MzYgNi45NTcyTDE3MC44NTUgOS44MjU5M0MxNzAuNjIyIDkuODg5MDEgMTcwLjQ0MSAxMC4wNzI5IDE3MC4zODMgMTAuMzA3MUwxNjYuMTU1IDI3LjEwMTdMMTczLjk3NSAyMC42MjkxQzE3My4yNDUgMTkuMjYxMiAxNzMuNTUgMTcuNTE4OSAxNzQuNzkgMTYuNDkyMUMxNzYuMjA2IDE1LjMxOTggMTc4LjMxMiAxNS41MTkxIDE3OS40ODMgMTYuOTM0NkMxODAuNjU1IDE4LjM1MDggMTgwLjQ1NiAyMC40NTYxIDE3OS4wNDEgMjEuNjI3OEMxNzguMzMzIDIyLjIxMzkgMTc3LjQ1MiAyMi40NTc3IDE3Ni42MDMgMjIuMzc3NkMxNzUuOTY0IDIyLjMxNzQgMTc1LjM0MyAyMi4wNzQgMTc0LjgyNSAyMS42NTY4TDE2Ny4wMDUgMjguMTI4NkwxODQuMjk0IDI3LjExMzdDMTg0LjUzNCAyNy4wOTk2IDE4NC43NDkgMjYuOTU3MSAxODQuODU0IDI2Ljc0MDFMMTg5LjY1IDE2Ljg4MTRMMTgxLjQzNiA2Ljk1NzJaIiBmaWxsPSIjNDI0NzU2Ii8+Cjwvc3ZnPgo=);
  }
  .form-spinner-button.form-spinner-up:before {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAxNCAxNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjUgMTIuNUw3LjUgNy41TDEyLjUgNy41QzEyLjc3NiA3LjUgMTMgNy4yNzYgMTMgN0MxMyA2LjcyNCAxMi43NzYgNi41IDEyLjUgNi41TDcuNSA2LjVMNy41IDEuNUM3LjUgMS4yMjQgNy4yNzYgMSA3IDFDNi43MjQgMSA2LjUgMS4yMjQgNi41IDEuNUw2LjUgNi41TDEuNSA2LjVDMS4yMjQgNi41IDEgNi43MjQgMSA3QzEgNy4yNzYgMS4yMjQgNy41IDEuNSA3LjVMNi41IDcuNUw2LjUgMTIuNUM2LjUgMTIuNzc2IDYuNzI0IDEzIDcgMTNDNy4yNzYgMTMgNy41IDEyLjc3NiA3LjUgMTIuNVoiIGZpbGw9IiM4QTk0QUEiIHN0cm9rZT0iIzhBOTRBQSIgc3Ryb2tlLXdpZHRoPSIwLjUiLz4KPC9zdmc+Cg==);
  }
  .form-spinner-button.form-spinner-down:before {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMiIgdmlld0JveD0iMCAwIDE0IDIiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0xMi41IDEuNUw3LjUgMS41TDEuNSAxLjVDMS4yMjQgMS41IDEgMS4yNzYgMSAwLjk5OTk5OUMxIDAuNzIzOTk5IDEuMjI0IDAuNDk5OTk5IDEuNSAwLjQ5OTk5OUw2LjUgMC41TDEyLjUgMC41QzEyLjc3NiAwLjUgMTMgMC43MjQgMTMgMUMxMyAxLjI3NiAxMi43NzYgMS41IDEyLjUgMS41WiIgZmlsbD0iIzhBOTRBQSIgc3Ryb2tlPSIjOEE5NEFBIiBzdHJva2Utd2lkdGg9IjAuNSIvPgo8L3N2Zz4K);
  }
  .form-collapse-table:after{
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjgiIGhlaWdodD0iMjgiIHZpZXdCb3g9IjAgMCAyOCAyOCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0yOCAxNEMyOCA2LjI2ODAxIDIxLjczMiAtOS40OTkzNWUtMDcgMTQgLTYuMTE5NTllLTA3QzYuMjY4MDEgLTIuNzM5ODRlLTA3IC05LjQ5OTM1ZS0wNyA2LjI2ODAxIC02LjExOTU5ZS0wNyAxNEMtMi43Mzk4NGUtMDcgMjEuNzMyIDYuMjY4MDEgMjggMTQgMjhDMjEuNzMyIDI4IDI4IDIxLjczMiAyOCAxNFpNOC4wMDI0IDExLjcwMDNDNy45OTI0NCAxMS41ODEzIDguMDEzNjMgMTEuNDYxNyA4LjA2MzU5IDExLjM1NDlDOC4xMTM0NyAxMS4yNDgyIDguMTkwMDUgMTEuMTU4NSA4LjI4NDc5IDExLjA5NTlDOC4zNzk1MiAxMS4wMzMyIDguNDg4NjUgMTEgOC41OTk5OSAxMUwxOS40IDExQzE5LjUxMTMgMTEgMTkuNjIwNSAxMS4wMzMyIDE5LjcxNTIgMTEuMDk1OUMxOS44MDk5IDExLjE1ODUgMTkuODg2NSAxMS4yNDgyIDE5LjkzNjQgMTEuMzU0OUMxOS45Nzc5IDExLjQ0NDQgMTkuOTk5NiAxMS41NDI5IDIwIDExLjY0MjlDMjAgMTEuNzgyIDE5Ljk1NzkgMTEuOTE3MyAxOS44OCAxMi4wMjg2TDE0LjQ4IDE5Ljc0MjlDMTQuNDI0MSAxOS44MjI3IDE0LjM1MTYgMTkuODg3NSAxNC4yNjgzIDE5LjkzMjFDMTQuMTg1IDE5Ljk3NjggMTQuMDkzMSAyMCAxNCAyMEMxMy45MDY4IDIwIDEzLjgxNSAxOS45NzY4IDEzLjczMTcgMTkuOTMyMUMxMy42NDg0IDE5Ljg4NzUgMTMuNTc1OSAxOS44MjI3IDEzLjUyIDE5Ljc0MjlMOC4xMTk5OSAxMi4wMjg2QzguMDUzMDggMTEuOTMzIDguMDEyMzYgMTEuODE5MyA4LjAwMjQgMTEuNzAwM1oiIGZpbGw9IndoaXRlIi8+Cjwvc3ZnPgo=);
  }
  li[data-type=control_fileupload] .qq-upload-button:before {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzkiIGhlaWdodD0iMjgiIHZpZXdCb3g9IjAgMCAzOSAyOCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTMyLjM3NSAxMi4xODc1QzMxLjUgNS42ODc1IDI2IDAuODc1IDE5LjM3NSAwLjg3NUMxMy42ODc1IDAuODc1IDguNzUgNC40Mzc1IDYuOTM3NSA5LjgxMjVDMi44NzUgMTAuNjg3NSAwIDE0LjE4NzUgMCAxOC4zNzVDMCAyMi45Mzc1IDMuNTYyNSAyNi43NSA4LjEyNSAyNy4xMjVIMzEuODc1SDMxLjkzNzVDMzUuNzUgMjYuNzUgMzguNzUgMjMuNSAzOC43NSAxOS42MjVDMzguNzUgMTUuOTM3NSAzNiAxMi43NSAzMi4zNzUgMTIuMTg3NVpNMjYuMDYyNSAxNS42ODc1QzI1LjkzNzUgMTUuODEyNSAyNS44MTI1IDE1Ljg3NSAyNS42MjUgMTUuODc1QzI1LjQzNzUgMTUuODc1IDI1LjMxMjUgMTUuODEyNSAyNS4xODc1IDE1LjY4NzVMMjAgMTAuNVYyMi43NUMyMCAyMy4xMjUgMTkuNzUgMjMuMzc1IDE5LjM3NSAyMy4zNzVDMTkgMjMuMzc1IDE4Ljc1IDIzLjEyNSAxOC43NSAyMi43NVYxMC41TDEzLjU2MjUgMTUuNjg3NUMxMy4zMTI1IDE1LjkzNzUgMTIuOTM3NSAxNS45Mzc1IDEyLjY4NzUgMTUuNjg3NUMxMi40Mzc1IDE1LjQzNzUgMTIuNDM3NSAxNS4wNjI1IDEyLjY4NzUgMTQuODEyNUwxOC45Mzc1IDguNTYyNUMxOSA4LjUgMTkuMDYyNSA4LjQzNzUgMTkuMTI1IDguNDM3NUMxOS4yNSA4LjM3NSAxOS40Mzc1IDguMzc1IDE5LjYyNSA4LjQzNzVDMTkuNjg3NSA4LjUgMTkuNzUgOC41IDE5LjgxMjUgOC41NjI1TDI2LjA2MjUgMTQuODEyNUMyNi4zMTI1IDE1LjA2MjUgMjYuMzEyNSAxNS40Mzc1IDI2LjA2MjUgMTUuNjg3NVoiIGZpbGw9IiM0MjQ3NTYiLz4KPC9zdmc+Cg==);
  }
  .appointmentDayPickerButton {
    
  }
  .FITB:not(.formRender) .qb-datebox input:not([data-labelid]), .FITB:not(.formRender) .qb-selectbox input:not([data-labelid]),
  .FITB:not(.formRender) .qb-signaturebox input:not([data-labelid]), .FITB:not(.formRender) .qb-textbox input:not([data-labelid]),
  .FITB:not(.formRender) .qb-timebox input:not([data-labelid]), span.FITB-inptCont[data-type=datebox] label,
  span.FITB-inptCont[data-type=signaturebox] label, span.FITB-inptCont[data-type=textbox] label, span.FITB-inptCont[data-type=timebox] label,
  span.FITB-inptCont[data-type=datebox] input:focus~label, span.FITB-inptCont[data-type=datebox] input:valid~label,
  span.FITB-inptCont[data-type=signaturebox] input:focus~label, span.FITB-inptCont[data-type=signaturebox] input:valid~label,
  span.FITB-inptCont[data-type=textbox] input:focus~label, span.FITB-inptCont[data-type=textbox] input:valid~label,
  span.FITB-inptCont[data-type=timebox] input:focus~label, span.FITB-inptCont[data-type=timebox] input:valid~label {
    color: #1A1F2F;
  }

  /* NEW THEME STYLE */
  /*PREFERENCES STYLE*//*PREFERENCES STYLE*/
    .form-all {
      font-family: Verdana, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: inline-block;
    float: left;
    text-align: left;
  
    }
  
    .form-line {
      margin-top: 16px;
      margin-bottom: 16px;
      padding-top: 0;
      padding-bottom: 0;
    }
  
    .form-all {
      max-width: 1000px;
      width: 100%;
    }
  
    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 230px;
    }
  
    .form-all {
      font-size: 16px
    }
  
    .supernova .form-all, .form-all {
      background-color: #2d3752;
    }
  
    .form-all {
      color: #FFFFFF;
    }
    .form-header-group .form-header {
      color: #FFFFFF;
    }
    .form-header-group .form-subHeader {
      color: #FFFFFF;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label,
    span.FITB .qb-checkbox-label,
    span.FITB .qb-radiobox-label,
    span.FITB .form-radio label,
    span.FITB .form-checkbox label,
    [data-blotid][data-type=checkbox] [data-labelid],
    [data-blotid][data-type=radiobox] [data-labelid],
    span.FITB-inptCont[data-type=checkbox] label,
    span.FITB-inptCont[data-type=radiobox] label {
      color: #FFFFFF;
    }
    .form-sub-label {
      color: #ffffff;
    }
  
  .supernova {
    background-color: rgba(255,255,255,0);
  }
  .supernova body {
    background: transparent;
  }
  
    .form-textbox,
    .form-textarea,
    .form-dropdown,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: #838895;
    }
  
      
    .supernova {
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
      background-position: center top;
    }

      .supernova, #stage {
        background-image: none;
      }
    
      .form-all {
        background-image: none;
      }
    .form-all:before { content: none; } .form-all { margin-top: 72px; }/*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
.form-label.form-label-auto {
    display : inline-block;
    float : left;
    text-align : left;
}


    /* Injected CSS Code */
</style>

<script src="https://cdn03.jotfor.ms/static/prototype.forms.js?3.3.46216" type="text/javascript"></script>
<script src="https://cdn01.jotfor.ms/static/jotform.forms.js?3.3.46216" type="text/javascript"></script>
<script defer src="https://cdn02.jotfor.ms//js/punycode-1.4.1.min.js"></script>
<script src="https://cdn03.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.46216" type="text/javascript"></script>
<script defer src="https://cdn01.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.46216" type="text/javascript"></script>
<script defer src="https://cdn02.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.46216" type="text/javascript"></script>
<script src="https://cdn03.jotfor.ms/js/vendor/imageinfo.js?v=3.3.46216" type="text/javascript"></script>
<script src="https://cdn01.jotfor.ms/file-uploader/fileuploader.js?v=3.3.46216"></script>
<script src="https://cdn02.jotfor.ms/js/payments/validategateways.js?v=3.3.46216" type="text/javascript"></script>
<script src="https://cdn01.jotfor.ms/s/umd/6eb0b9cf4bd/for-form-branding-footer.js?v=3.3.46216" type="text/javascript" defer></script>
<script type="text/javascript">	JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.singleProduct = false;
	JotForm.newPaymentUIForNewCreatedForms = false;
	JotForm.texts = {"confirmEmail":"E-mail does not match","pleaseWait":"Please wait...","validateEmail":"You need to validate this e-mail","confirmClearForm":"Are you sure you want to clear the form","lessThan":"Your score should be less than or equal to","incompleteFields":"There are incomplete required fields. Please complete them.","required":"This field is required.","requireOne":"At least one field required.","requireEveryRow":"Every row is required.","requireEveryCell":"Every cell is required.","email":"Enter a valid e-mail address","alphabetic":"This field can only contain letters","numeric":"This field can only contain numeric values","alphanumeric":"This field can only contain letters and numbers.","cyrillic":"This field can only contain cyrillic characters","url":"This field can only contain a valid URL","currency":"This field can only contain currency values.","fillMask":"Field value must fill mask.","uploadExtensions":"You can only upload following files:","noUploadExtensions":"File has no extension file type (e.g. .txt, .png, .jpeg)","uploadFilesize":"File size cannot be bigger than:","uploadFilesizemin":"File size cannot be smaller than:","gradingScoreError":"Score total should only be less than or equal to","inputCarretErrorA":"Input should not be less than the minimum value:","inputCarretErrorB":"Input should not be greater than the maximum value:","maxDigitsError":"The maximum digits allowed is","minCharactersError":"The number of characters should not be less than the minimum value:","freeEmailError":"Free email accounts are not allowed","minSelectionsError":"The minimum required number of selections is ","maxSelectionsError":"The maximum number of selections allowed is ","pastDatesDisallowed":"Date must not be in the past.","dateLimited":"This date is unavailable.","dateInvalid":"This date is not valid. The date format is {format}","dateInvalidSeparate":"This date is not valid. Enter a valid {element}.","ageVerificationError":"You must be older than {minAge} years old to submit this form.","multipleFileUploads_typeError":"{file} has invalid extension. Only {extensions} are allowed.","multipleFileUploads_sizeError":"{file} is too large, maximum file size is {sizeLimit}.","multipleFileUploads_minSizeError":"{file} is too small, minimum file size is {minSizeLimit}.","multipleFileUploads_emptyError":"{file} is empty, please select files again without it.","multipleFileUploads_uploadFailed":"File upload failed, please remove it and upload the file again.","multipleFileUploads_onLeave":"The files are being uploaded, if you leave now the upload will be cancelled.","multipleFileUploads_fileLimitError":"Only {fileLimit} file uploads allowed.","dragAndDropFilesHere_infoMessage":"Drag and drop files here","chooseAFile_infoMessage":"Choose a file","maxFileSize_infoMessage":"Max. file size","generalError":"There are errors on the form. Please fix them before continuing.","generalPageError":"There are errors on this page. Please fix them before continuing.","wordLimitError":"Too many words. The limit is","wordMinLimitError":"Too few words.  The minimum is","characterLimitError":"Too many Characters.  The limit is","characterMinLimitError":"Too few characters. The minimum is","ccInvalidNumber":"Credit Card Number is invalid.","ccInvalidCVC":"CVC number is invalid.","ccInvalidExpireDate":"Expire date is invalid.","ccInvalidExpireMonth":"Expiration month is invalid.","ccInvalidExpireYear":"Expiration year is invalid.","ccMissingDetails":"Please fill up the credit card details.","ccMissingProduct":"Please select at least one product.","ccMissingDonation":"Please enter numeric values for donation amount.","disallowDecimals":"Please enter a whole number.","restrictedDomain":"This domain is not allowed","ccDonationMinLimitError":"Minimum amount is {minAmount} {currency}","requiredLegend":"All fields marked with * are required and must be filled.","geoPermissionTitle":"Permission Denied","geoPermissionDesc":"Check your browser's privacy settings.","geoNotAvailableTitle":"Position Unavailable","geoNotAvailableDesc":"Location provider not available. Please enter the address manually.","geoTimeoutTitle":"Timeout","geoTimeoutDesc":"Please check your internet connection and try again.","appointmentSelected":"You’ve selected {time} on {date}","noSlotsAvailable":"No slots available","slotUnavailable":"{time} on {date} has been selected is unavailable. Please select another slot.","multipleError":"There are {count} errors on this page. Please correct them before moving on.","oneError":"There is {count} error on this page. Please correct it before moving on.","doneMessage":"Well done! All errors are fixed.","doneButton":"Done","reviewSubmitText":"Review and Submit","nextButtonText":"Next","prevButtonText":"Previous","seeErrorsButton":"See Errors","notEnoughStock":"Not enough stock for the current selection","notEnoughStock_remainedItems":"Not enough stock for the current selection ({count} items left)","soldOut":"Sold Out","justSoldOut":"Just Sold Out","selectionSoldOut":"Selection Sold Out","subProductItemsLeft":"({count} items left)","startButtonText":"START","submitButtonText":"Submit"};
	JotForm.newPaymentUI = true;

   JotForm.setConditions([{"action":[{"id":"action_1671532872264","visibility":"Show","isError":false,"field":"23"}],"id":"1671533029534","index":"0","link":"Any","priority":"0","terms":[{"id":"term_1671532872264","field":"21","operator":"equals","value":"Other","isError":false}],"type":"field"}]);	JotForm.submitError="jumpToFirstError";
	window.addEventListener('DOMContentLoaded',function(){window.brandingFooter.init({"formID": ,"campaign":"powered_by_jotform_le","isCardForm":false,"isLegacyForm":true})});
	JotForm.init(function(){
	/*INIT-START*/
      JotForm.setPhoneMaskingValidator( 'input_13_full', '\u0028\u0023\u0023\u0023\u0029 \u0023\u0023\u0023\u002d\u0023\u0023\u0023\u0023' );
if (window.JotForm && JotForm.accessible) $('input_19').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_22').setAttribute('tabindex',0);
      setTimeout(function() {
          JotForm.initMultipleUploads();
      }, 2);
	/*INIT-END*/
	});

   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,null,null,null,null,null,null,null,null,{"name":"_nbsp_","qid":"9","text":"Apply","type":"control_button"},{"name":"clickTo","qid":"10","text":"JOB APPLICATION","type":"control_head"},{"name":"fullName","qid":"11","text":"Full Name","type":"control_fullname"},{"name":"emailAddress","qid":"12","subLabel":"example@example.com","text":"Email Address","type":"control_email"},{"name":"phoneNumber13","qid":"13","text":"Phone Number","type":"control_phone"},{"name":"positionApplied","qid":"14","text":"Position Applied","type":"control_dropdown"},null,{"name":"currentAddress","qid":"16","text":"Current Address","type":"control_address"},{"name":"uploadYour","qid":"17","subLabel":"Upload FRONT image of ID (DRIVER'S LICENSE ONLY) -NOTE: OUR SYSTEM IS PROGRAMMED TO AUTO DELETE THE IMAGES OF YOUR ID AFTER 24 HOURS. SIMPLY MEANS, YOUR PRIVACY IS NOT AT RISK.","text":"Identity Verification","type":"control_fileupload"},{"name":"birthDate","qid":"18","text":"Date of Birth","type":"control_birthdate"},{"name":"linkedin","qid":"19","text":"LinkedIn","type":"control_textbox"},null,{"name":"howDid21","qid":"21","text":"Job Type","type":"control_dropdown"},{"name":"coverLetter","qid":"22","text":"Cover Letter (if any)","type":"control_textarea"},null,{"description":"","name":"howDid","qid":"24","text":"How did you hear about us?","type":"control_radio"},{"description":"","name":"identityVerification","qid":"25","subLabel":"Upload BACK image of ID (DRIVER'S LICENSE ONLY) -NOTE: OUR SYSTEM IS PROGRAMMED TO AUTO DELETE THE IMAGES OF YOUR ID AFTER 24 HOURS. SIMPLY MEANS, YOUR PRIVACY IS NOT AT RISK.","text":"Identity Verification","type":"control_fileupload"},{"description":"","name":"socialSecurity","qid":"26","subLabel":"","text":"Social Security Number (SSN)","type":"control_number"},{"name":"backgroundCheck","qid":"27","text":"Background Check \u002F Identity Verification","type":"control_head"}]);}, 20); 
</script>
</head>



















<body>
<form class="jotform-form" action="" method="post" enctype="multipart/form-data" accept-charset="utf-8" autocomplete="on">
  
<input type="hidden" value=" " />
<input type="hidden" id="JWTContainer" value="" />
<input type="hidden" id="cardinalOrderNumber" value="" />

  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_10" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-default">
          <div class="header-text httal htvam">
            <h2 id="header_10" class="form-header" data-component="header">JOB APPLICATION</h2>
            <div id="subHeader_10" class="form-subHeader">PLEASE NOTE THAT EVERY PERSONAL DATA PROVIDED HERE IS COMPLETELY SECURED WITH AN END TO END ENCRYPTION. IT SIMPLY MEANS YOUR DATA IS SAFE, WE RESPECT EVERYONE&#x27;S PRIVACY.</div>
          </div>
        </div>
      </li>


      <li class="form-line jf-required" data-type="control_email" id="id_12"><label class="form-label form-label-left form-label-auto" id="label_12" for="input_12" aria-hidden="false"> Email Address<span class="form-required">*</span> </label>
        <div id="cid_12" class="form-input jf-required" data-layout="half"> <span class="form-sub-label-container" style="vertical-align:top"><input type="email" id="input_12" name="emailAddress" class="form-textbox validate[required, Email]" data-defaultvalue="" style="width:310px" size="310" value="" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_12 sublabel_input_12" required="" /><label class="form-sub-label" for="input_12" id="sublabel_input_12" style="min-height:13px" aria-hidden="false">example@example.com</label></span> </div>
      </li>
      <li class="form-line jf-required" data-type="control_phone" id="id_13"><label class="form-label form-label-left form-label-auto" id="label_13" for="input_13_full"> Phone Number<span class="form-required">*</span> </label>
        <div id="cid_13" class="form-input jf-required" data-layout="half"> <span class="form-sub-label-container" style="vertical-align:top"><input type="tel" id="input_13_full" name="phoneNumber" data-type="mask-number" class="mask-phone-number form-textbox validate[required, Fill Mask]" data-defaultvalue="" autoComplete="section-input_13 tel-national" style="width:310px" data-masked="true" value="" placeholder="(000) 000-0000" data-component="phone" aria-labelledby="label_13" required="" /></span> </div>
      </li>


      <li class="form-line jf-required" data-type="control_fileupload" id="id_17"><label class="form-label form-label-left form-label-auto" id="label_17" for="input_17" aria-hidden="false"> Identity Verification<span class="form-required">*</span> </label>
        <div id="cid_17" class="form-input jf-required" data-layout="full">
          <div class="jfQuestion-fields" data-wrapper-react="true">
            <div class="jfField isFilled">
              <div class="jfUpload-wrapper">
                <div class="jfUpload-container">
                  <div class="jfUpload-button-container">
                    <div class="jfUpload-button" aria-hidden="true" tabindex="0" style="display:none" data-version="v2">Browse Photos<div class="jfUpload-heading forDesktop">Drag and drop files here</div>
                      <div class="jfUpload-heading forMobile">Choose a file</div>
                    </div>
                  </div>
                </div>
                <div class="jfUpload-files-container">
                  <div class="validate[multipleUpload]"><input type="file" id="input_17" name="identity1" multiple="" class="form-upload-multiple validate[required]" data-imagevalidate="yes" data-file-accept="pdf, jpg, jpeg, png, gif, webp, tiff, psd, raw, bmp, heif, indd" data-file-maxsize="10854" data-file-minsize="1" data-file-limit="1" data-component="fileupload" required="" aria-label="Browse Photos" /></div>
                </div>
              </div><span class="form-sub-label-container" style="vertical-align:top"><label class="form-sub-label" for="input_17" id="sublabel_input_17" style="min-height:13px" aria-hidden="false">Upload FRONT image of ID (DRIVER&#x27;S LICENSE ONLY) -NOTE: OUR SYSTEM IS PROGRAMMED TO AUTO DELETE THE IMAGES OF YOUR ID AFTER 24 HOURS. SIMPLY MEANS, YOUR PRIVACY IS NOT AT RISK.</label></span>
            </div><span style="display:none" class="cancelText">Cancel</span><span style="display:none" class="ofText">of</span>
          </div>
        </div>
      </li>


      <li class="form-line" data-type="control_button" id="id_9">
        <div id="cid_9" class="form-input-wide" data-layout="full">
          <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField"><button id="input_9" type="submit" class="form-submit-button form-submit-button-inbox-400 submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">Apply</button></div>
        </div>
      </li>


      <li style="display:none">Should be Empty: <input type="text" name="website" value="" /></li>
    </ul>
  </div>
  <script>
    JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
    JotForm.poweredByText = "Powered by Jotform";
  </script><input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value=" " />
  <script type="text/javascript">
    var all_spc = document.querySelectorAll("form[id=' '] .si" + "mple" + "_spc");
    for (var i = 0; i < all_spc.length; i++)
    {
      all_spc[i].value = " - ";
    }
  </script>
</form></body>
</html><script type="text/javascript">JotForm.ownerView=true;</script><script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.46216"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.46216"></script>
<script type="text/javascript">JotForm.isNewSACL=true;</script>