<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>QuizBee</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
</head>

<body style="background-image:url(images/loginwood.png);">
<?php
$name=$_GET["login"];
if($name == "failure"){
print "<script type=\"text/javascript\">"; 
print "alert('You have entered a wrong Username/Password/Event')"; 
print "</script>";  
};

?>
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="middle"><form name="form1" method="post" action="checklogin.php"><table width="388" border="0" class="logintable" cellspacing="0" cellpadding="20">
      <tr>
        <td colspan="2" align="center" class="texts"><img src="images/lock-icon.png" width="153" height="120"></td>
        </tr>
      <tr>
        <td width="136" class="texts">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username</td>
        <td width="210">&nbsp;&nbsp;&nbsp;&nbsp;
          <input name="myusername" type="text" class="textfields" id="myusername" size="15"></td>
      </tr>
      <tr>
        <td class="texts">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;          <input name="mypassword" type="password" class="textfields" id="mypassword" size="15"></td>
      </tr>
      
	  <tr>
	    <td class="texts">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Event/Type</td>
	    <td>&nbsp;&nbsp;&nbsp;&nbsp;	      <?php
echo '<select name="type">
  <option value="">Select...</option>
  <option value="Quiz 1">Quiz 1</option>
  <option value="Quiz 2">Quiz 2</option>
  <option value="Quiz 3">Quiz 3</option>
<option value="Quiz 4">Quiz 4</option>
 <option value="Administrator">Administrator</option>

 </select>';
 ?></td>
	    </tr>
	  <tr>
	    <td colspan="2" align="center" class="texts"><input name="button" type="submit" class="button" id="button" value="Submit"></td>
	    </tr>
        
    </table></form></td>
  </tr>
</table>
</body>
</html>
