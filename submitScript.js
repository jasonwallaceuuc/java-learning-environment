

function myFunction() {
var question = document.getElementById("question").value;
var is_active = document.getElementById("is_active").value;
var question_group = document.getElementById("question_group").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString ='&question1=' + question + '&is_active1=' + is_active + '&question_group1=' + question_group;
if (question == '' || is_active == '' || question_group == '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
$.ajax({
type: "POST",
url: "addQuestionProcess.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}