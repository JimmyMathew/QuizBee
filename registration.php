<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>QuizBee</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
<script>
function validateForm() {
    var a = document.forms["regform"]["nametxt"].value;
	var c = document.forms["regform"]["colltxt"].value;
	var f = document.forms["regform"]["event1"].value;
    if (a == null || a == "") 
	{
        alert("Please enter the name");
        return false;
    }
	if (c == null || c == "") 
	{
        alert("Please select the year");
        return false;
	
	}
		if (f == null || f == "") 
	{
        alert("Please select the type");
        return false;
	
	}
	
}
 </script>
 <script type="text/javascript">
function AllowAlphabet()
{
if (!regform.nametxt.value.match(/^[a-zA-Z\s-, ]+$/) && regform.nametxt.value !="")
{
regform.nametxt.value="";
regform.nametxt.focus();
alert("Please enter a valid name");
}
}
</script>    
</head>

<body>
<form action="insert.php?page=student" method="post" enctype="multipart/form-data" name="regform" id="regform" onSubmit="return validateForm()">
<table class="mainpage" align="center" width="100%"  height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" height="130"><?php include 'head.php'; ?></td>
  </tr>
  <tr>
    <td align="center" valign="middle">
 <?php 
if (isset($_GET['notification']))  
{
 $name=$_GET["notification"];
if($name == "true")
{
print "<span class='notification'>New participant has been added</span><br><br>";
}
}
?>


<table width="300" border="0" cellpadding="10" cellspacing="0" class="formborders">
      <tr>
        <td colspan="2" class="formhead">Add Participants</td>
      </tr>
      <tr>
        <td width="81" class="formtext">Name</td>
        <td width="179"><input type="text" name="nametxt" id="nametxt" onKeyUp="AllowAlphabet()"></td>
      </tr>
      <tr>
        <td width="81" class="formtext">Year</td>
		<td>
		 
		<?php
echo '<select name="colltxt">
  <option value=""></option>
  <option value="I">I</option>
  <option value="II">II</option>
  <option value="III">III</option>

 </select>';
 ?></td>
       
      </tr>
		<tr>
        <td width="81" class="formtext">Username</td>
        <td width="179"><input type="text" name="un" id="un"></td>
      </tr>
	  <tr>
        <td width="81" class="formtext">Password</td>
        <td width="179"><input type="text" name="pw" id="pw"></td>
      </tr>
	

	  

      <tr>
<td class="formtext">Type</td>
 <td>      
<?php
echo '<select name="event1">
  <option value=""></option>
  <option value="Quiz 1">Quiz 1</option>
  <option value="Quiz 2">Quiz 2</option>
  <option value="Quiz 3">Quiz 3</option>
<option value="Quiz 3">Quiz 4</option>

 </select>';
 ?>
</td>
      </tr>
	    <tr>

      
      <tr>
        <td class="formtext">&nbsp;</td>
        <td><input  name="button" id="button" type="submit" class="button" value="Add"/></td>
      </tr>
	  </tr>
    </table></td>

  <tr>
    <td height="20" class="footerline" valign="bottom"><?php include 'footer.php'; ?></td>
  </tr>
</table>
</form>
</body>
</html>