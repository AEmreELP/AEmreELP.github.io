var languages = ["Html","Php","JavaScript","ActionScript","AppleScript","Asp","Lisp","Perl","Python"]

$(document).ready(function () {
    $("#BDate").datepicker();

    $("#PLanguage").autocomplete({
        source:languages
    })


})