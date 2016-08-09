<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="css/intostyle.css" />
<script src="submitScript.js"></script>
<style>p.indent{ padding-bottom: 0.25cm }</style>
</head>
<body>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=text1], select {
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=text2], select {
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=button] {
   background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

input[type=button]:hover {
    background-color: #45a049;
}

</style>
<body>
<?php include '/phpfunctions/indexl.php';?>

<div id="mainform">
<div class="innerdiv">
<h2>Add a quetion to the database here</h2>
<!-- Required Div Starts Here -->
<form id="form" name="form">
<h3>Add a Question</h3>
<div>

<label>Question</label>
<input id="question" type="text">
<p class="indent"></p>
<label>Active question?</label>
<p class="indent"></p>
<input id="is_active" type="text1">
<p class="indent"></p>
<label>Question Group</label>
<p class="indent"></p>
<input id="question_group" type="text2">
<input id="submit" onclick="myFunction()" type="button" value="Submit">

</div>
</form>
<div id="clear"></div>
</div>
<div id="clear"></div>
</div>
</body>
</html>