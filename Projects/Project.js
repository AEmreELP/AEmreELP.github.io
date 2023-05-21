//I initialized this variable for autocomplete
var universities = ['AYBU', 'KU', 'TOBB']
var faculties = ['MEDICINE', 'EDUCATION', 'ENGINEERING', 'FORESTRY']
var departments = ['MEDICINE', 'TEACHER TRAINING IN FRENCH', 'TEACHER TRAINING IN ENGLISH', 'TEACHER TRAINING IN GERMAN', 'COMPUTER ENGINEERING', 'ELECTRICAL-ELECTRONIC ENGINEERING', 'INDUSTRIAL ENGINEERING', 'GEOPHYSICAL ENGINEERING', 'CIVIL ENGINEERING', 'FOREST ENGINEERING ', 'FOREST INDUSTRIES ENGINEERING ']
var classes = ['Preparatory class(English)', '1.Class', '2.Class', '3.Class', '4.Class', '5.Class', '6.Class']

//I write this codes for random color code
var safeColors = ['00', '11', '22', '33', '44', '55', '66', '77', '88', '99', 'aa', 'bb', 'cc', 'dd', 'ee', 'ff'];
var rand = function () {
    return Math.floor(Math.random() * 16);
};
var randomColor = function () {
    var r = safeColors[rand()];
    var g = safeColors[rand()];
    var b = safeColors[rand()];
    return "#" + r + g + b;
};

$(document).ready(function () {
    //datapicker
    $("#birthday").datepicker();

    //autocomplete
    $("#Uni").autocomplete({
        source: universities
    })
    $("#faculty").autocomplete({
        source: faculties
    })
    $("#department").autocomplete({
        source: departments
    })
    $("#StuClass").autocomplete({
        source: classes
    })

    //fadeIn and fadeOut
    $("#ContactId").fadeOut(0)
    $("#MemberJoin").fadeOut(0)



    $("#CommentButton").click(function (evt) {

        $("#ContactId").fadeIn()
        $("#MemberJoin").fadeOut()

    })

    $("#JoinUsButton").click(function (evt) {

        $("#ContactId").fadeOut()
        $("#MemberJoin").fadeIn()
    })

    //$.fn,each() and .css() used to change background color

    $.fn.colorChange = function(){
        this.css('background', randomColor());
    }


    $('img[src="assets/images/logo.png"]').click(function () {
        alert("Content color changed");
        $('.content').colorChange();
    })

    $('h3').click(function () {
        alert("Pages all div parts color changed");
        $('div').each(function () {
            $(this).css('background', randomColor());
        });
    })

})//ready end
