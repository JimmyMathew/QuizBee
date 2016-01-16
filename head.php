<?php include 'config.php'; ?>
<?php

session_start();
if($_SESSION['users'] == ""){
header("location:login.php");
}
?>
<link href="stylesheets.css" rel="stylesheet" type="text/css">


<table align ="left" width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td class="logo" bgcolor="#f2662e"><marquee>QuizBee</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    
    <td width="88%" class="texts">Welcome <?php echo $_SESSION['teamname']; ?>, <?php echo $_SESSION['type']; ?>,  <?php echo date("m/d/Y"); ?>, <?php $dateget=getdate(strtotime(date("m/d/Y"))); echo $dateget['weekday']; ?> | <a href="logout.php">Sign Out</a></td>
    <td width="7%" align="right" class="texts"> <td width="7%" align="right" class="texts"><img src="images/quizlogo.png" bgcolor="white" width="113" height="95" /></td></td>
  </tr>
</table>


 <table width="100%" border="0" cellpadding="10" cellspacing="0" class="menu">
  <tr>
  <td>
   <?php 
if($_SESSION['type'] == "Administrator")
{

echo"<li class='normal'><a href='instructions.php?notification=false'>Instructions</a></li>";
echo"<li class='normal'><a href='registration.php?notification=false'>Add Participants</a></li>";
echo"<li class='normal'><a href='report.php?notification=false&search=no'>Events Report</a></li>";
echo"<li class='normal'><a href='printreport.php?notification=false&search=no'>Print Report</a></li>";
echo"<li class='normal'><a href='addquestion.php?notification=false'>Add Questions</a></li>";
echo"<li class='normal'><a href='web.php?notification=false'>Quiz 1</font></a></li>";
echo"<li class='normal'><a href='quiz.php?notification=false'>Quiz 2</a></li>";
echo"<li class='normal'><a href='reverse.php?notification=false'>Quiz 3</a></li>";
echo"<li class='normal'><a href='swmarket.php?notification=false'>Quiz 4</a></li>";
}
?>
<?php

if($_SESSION['type'] == "Quiz 1")
{
echo"<li class='normal'><a href='instructions.php?notification=false'>Instructions</a></li>";
echo"<li class='normal'><a href='web.php?notification=false'>Quiz 1</a></li>";
}
else if($_SESSION['type'] == "Quiz 3")
{
echo"<li class='normal'><a href='instructions.php?notification=false'>Instructions</a></li>";
echo"<li class='normal'><a href='reverse.php?notification=false'>Quiz 3</a></li>";
}
else if($_SESSION['type'] == "Quiz 2")
{
echo"<li class='normal'><a href='instructions.php?notification=false'>Instructions</a></li>";
echo"<li class='normal'><a href='quiz.php?notification=false'>Quiz 2</a></li>";
}
else if($_SESSION['type'] == "Quiz 4")
{
echo"<li class='normal'><a href='instructions.php?notification=false'>Instructions</a></li>";
echo"<li class='normal'><a href='swmarket.php?notification=false'>Quiz 4</a></li>";
}

?>
</td>
</tr>
</table>


