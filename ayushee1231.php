<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LIC Insurance</title>
<style type="text/css">
.header{
	width:100%;
	height:200px;

	background-color:#FFFF00;
	float:left;
	text-align:center;
	color:#09F;
		}
.footer{
	width:100%;
	height:200px;

	background-color:#FFFF00;
	float:left;
	text-align:center;
	color:#09F;
		}		
.menu{
	width:100%;
	height:50px;
	
	background-color:green;
	float:left;
	text-align:center;
	color: #FFF;
		}
.leftcontent{
	width:33%;
	height:250px;

	background-color:#FFFF66;
	float:left;
	text-align:center;
	color: #F00;
		}
.centercontent{
	width:33%;
	height:250px;
	background-image:url(1.jpg);
	float:left;
	text-align:center;
	color: #FFF;
		}
.rightcontent{
	width:32%;
	height:250px;
	
	background-color: #F90;
	float:left;
	text-align:center;
	color: #FFF;
		}		



.leftcontent2{
	width:33%;
	height:250px;

	background-color: #999;
	float:left;
	text-align:center;
	color: #FFF;
		}
.centercontent2{
	width:33%;
	height:250px;

	background-color: #3F6;
	float:left;
	text-align:center;
	color: #FFF;
		}
.rightcontent2{
	width:32%;
	height:250px;

	background-color: #66C;
	float:left;
	text-align:center;
	color: #FFF;
		}	
.frontform{
	margin-top:10px;
}
</style>
<script language="javascript1.5">
function f1()
{
var pa=parseInt(document.getElementById('pa').value);
var duration=parseInt(document.getElementById('duration').value);
var total=pa +(pa*10*duration)/100;
document.getElementById('ta').value=total;
}

</script>
</head>
<body>
<div class="header">
Site's Header 
<div class="image"><img src="1.jpg" height="300px;" width="100px;" border="12" />

</div>
<div class="menu">
Site's Menu
</div>
<form method="POST">
<div class="frontform"><input type="text" name="uname" placeholder="Your Name" required="required"  /></div>
<div class="frontform"><input type="email" name="uemail" placeholder="Your Email" required="required"  /></div>
<div class="frontform"><input type="text" name="contact" placeholder="Your Contact" maxlength="10" required="required"  /></div>
<div class="frontform">
<select name="course" id="course" required="required">
<option value="">Select Course</option>
<option value="20000">B.tech</option>
<option value="30000">BCA</option>
<option value="1000">BBA</option>
</select>

<div class="frontform"><input type="number" name="pa*id"="pa" placeholder="Amount"/></div>


<div class ="frontform"><input type="number" name="duration" placeholder="duration" onblur="f1()"/></div>
<div cass="frontform"><input type="number" name="ta" id="ta" readonly="readonly"placeholder="Total amount"/></div>
<div class="frontform"><input type="submit" name="duration" placeholder="duration"/></div>


Duration of course<input type="checkbox" name="duration of course" value="duration of course" /> <br />
Other<input type="checkbox" name="other" value="other" />
</div>
<div class="frontform"><textarea name="problem" required="required"> Problem ? </textarea></div>

<div class="frontform">
<select name="city" required="required">
<option value="">Select City </option><option value="Delhi">Delhi</option><option value="Meerut">Meerut</option>
</select>
<input type="submit" name="submit"  />
</div>
</div>
</form>

<div class="footer">
</div>

</body>
</html>
