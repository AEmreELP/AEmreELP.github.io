var universities = ['AYBU','KU','TOBB']
var faculties = ['MEDICINE','EDUCATION','ENGINEERING','FORESTRY']
var departments = ['MEDICINE','TEACHER TRAINING IN FRENCH','TEACHER TRAINING IN ENGLISH','TEACHER TRAINING IN GERMAN','COMPUTER ENGINEERING','ELECTRICAL-ELECTRONIC ENGINEERING','INDUSTRIAL ENGINEERING','GEOPHYSICAL ENGINEERING','CIVIL ENGINEERING','FOREST ENGINEERING ','FOREST INDUSTRIES ENGINEERING ']
var classes = ['Preparatory class(English)','1.Class','2.Class','3.Class','4.Class','5.Class','6.Class','Graduated']
$(document).ready(function () {
    //datapicker
    $("#birthday").datepicker();
    
    //autocomplete
    $("#Uni").autocomplete({
        source:universities
    })
    $("#faculty").autocomplete({
        source:faculties
    })
    $("#department").autocomplete({
        source:departments
    })
    $("#StuClass").autocomplete({
        source:classes
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



})//ready end
