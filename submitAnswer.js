

function myFunction() {
var answer = document.getElementById("answer").value;
var question_group = document.getElementById("question_group").value;
var is_correct = document.getElementById("is_correct").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString ='&answer1=' + answer + '&question_group1=' + question_group + '&is_correct1=' + is_correct;
if (answer == '' || question_group == '' || is_correct == '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
$.ajax({
type: "POST",
url: "addAnswerProcess.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}