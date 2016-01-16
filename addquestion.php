<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>QuizBee</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
<script>


function validateForm() {
	var z = document.forms["regform"]["qno"].value;
    var a = document.forms["regform"]["quest"].value;
	var c = document.forms["regform"]["option1"].value;
	var d = document.forms["regform"]["option2"].value;
	var e = document.forms["regform"]["option3"].value;
	var f = document.forms["regform"]["option4"].value;
	var g = document.forms["regform"]["right"].value;
	var h = document.forms["regform"]["event1"].value;
     
	 if (z == null || z == "") 
	{
        alert("Please select the question number");
        return false;
    }
		if (a == null || a == "") 
	{
        alert("Please enter the question");
        return false;
    }

	if (c == null || c == "") 
	{
        alert("Please enter option 1");
        return false;
    }
   if (d == null || d == "") 
	{
        alert("Please enter option 2");
        return false;
    }
	if (e == null || e == "") 
	{
        alert("Please enter option 3");
        return false;
    }
	if (f == null || f == "") 
	{
        alert("Please enter option 4");
        return false;
    }
	if (g == null || g == "") 
	{
        alert("Please select the right option");
        return false;
    }
		if (h == null || h == "") 
	{
        alert("Please select the type");
        return false;
    }
	
	}
	function valtxt(obj) 
       {
        str="0123456789-"
        l=obj.value.length;
        for(i=0;i<=l;i++)
        {
         if(str.indexOf(obj.value.charAt(i))==-1)
         {
          alert("Please enter valid mobile number");
          obj.value="";
          obj.focus();
          return false;
         }
        }
        return true;
       }
 </script>

 



    
</head>

<body>
<form action="update.php?page=question" method="post" enctype="multipart/form-data" name="regform" id="regform" onSubmit="return validateForm()">
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
if($name == "true"){
print "<span class='notification'>New Question has been added</span><br><br>";
}
}
?>
<?php
echo"<br><br>";
?>
<table width="474" border="0" cellpadding="10" cellspacing="0" class="formborders">
      <tr>
        <td colspan="2" class="formhead">Add Questions</td>
      </tr>
      <tr>
	    <tr>
<td class="formtext">Question Number</td>
 <td>      
<?php
echo '<select name="qno">
  <option value=""></option>
  <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
  <option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>
  <option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option>
  <option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option>
  <option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option>
  <option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option>
 
 </select>';
 ?>
</td>
      </tr>
	  <tr>
<td class="formtext">Type</td>
 <td>      
<?php
echo '<select name="event1">
  <option value=""></option>
  <option value="Web Designing">Quiz 1</option>
  <option value="Quiz">Quiz 2</option>
  <option value="Reverse Coding">Quiz 3</option>
<option value="Software Marketing">Quiz 4</option>

 </select>';
 ?>
</td>
</tr>

<tr>
        <td width="80" class="formtext">Question</td>
        <td width="352"><textarea rows="4" cols="50" id="quest" name="quest" onKeyUp="AllowAlphabet()"/></textarea></td>
      </tr>
      <tr>
        <td width="80" class="formtext">Option 1</td>
        <td width="352"><input type="text" name="option1"  size="50" id="option1" onKeyUp="AllowAlphabetcol()"></td>
      </tr>

 <tr>
        <td width="80" class="formtext">Option 2</td>
        <td width="352"><input type="text" name="option2"  size="50" id="option2"/></td>
      </tr>
	   <tr>
        <td width="80" class="formtext">Option 3 </td>
        <td width="352"><input type="text" name="option3"  size="50" id="option3" /></td>
      </tr>
      <tr>
        <td width="80" class="formtext">Option 4 </td>
        <td width="352"><input type="text" name="option4" size="50" id="option4" /></td>
      </tr>
	    <tr>
<td class="formtext">RightOption</td>
<td>
 <?php
echo '<select name="right">
 <option value=""></option>
  <option value="option1">Option 1</option>
  <option value="option2">Option 2</option>
  <option value="option3">Option 3</option>
  <option value="option4">Option 4</option>
   </select>';
 ?>
</td>
      </tr>
     

      
      <tr>
        <td class="formtext">&nbsp;</td>
        <td><input  name="button" id="button" type="submit" class="button" value="Add"  onClick="ValidateEmail(document.regform.email)" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="20" class="footerline" valign="bottom"><?php include 'footer.php'; ?></td>
  </tr>
</table>
</form>
 
</body>
</html>