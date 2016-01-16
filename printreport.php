<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LITE</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
</head>

<body class="mainpage">


<script language="javascript">
function submit_name()  {
    document.myform.action = "printreport.php?notification=false&search=yes";
    document.myform.submit();
}
</script>
<script type="text/javascript">

       function PrintDoc() {

        var toPrint = document.getElementById('printarea');

        var popupWin = window.open('', '_blank', 'width=595,height=842,location=no,left=200px');

        popupWin.document.open();

        popupWin.document.write('<html><title>::Preview::</title><link rel="stylesheet" type="text/css" href="print.css" /></head><body onload="window.print()">')

        popupWin.document.write(toPrint.innerHTML);

        popupWin.document.write('</html>');

        popupWin.document.close();

    }

</script>

<?php include 'head.php'; ?>
  </tr>
  <tr>
    <td align="center" valign="middle">
    <center><table border='1' width='100%' cellpadding='10' cellspacing='0' class='formborders'>
    <tr class=texts>
	<?php 
   $name=$_GET["notification"];
if($name == "true"){
print "<span class='notification'>Success</span><br><br>";
}
?>
</table></center>
<form method="post"  name="myform" id="myform">
  <?php
$con = mysqli_connect("localhost","root","",'quiz');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

?>
 
<br><br>
</form>



<?php
$result = mysqli_query($con,"SELECT * FROM persons");

?>
 <form method="post">
 
  <tr><td> <center><input type="button" value="Print" id="button-search" class="button" onclick="PrintDoc()"/></center></td></tr>
  <tr>
  </form>
<div id="printarea">
 <div id="content-input">

<?php
echo "<table border='1' width='100%' cellpadding='10' cellspacing='0' class='formborders'>
<tr class=formhead>
<th>ID</th>
<th>Participant</th>
<th>Quiz type</th>
<th>Year</th>
<th>Username</th>
<th>Password</th>
<th>Score</th>


</tr>";

while($row = mysqli_fetch_assoc($result))
  {
	 if($row['year']!= "nil")
	 {
  echo "<tr class='texts'>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
 
   echo "<td>" . $row['type'] . "</td>";
   echo "<td>" . $row['year'] . "</td>";
   echo "<td>" . $row['username'] . "</td>";
   echo "<td>" . $row['password'] . "</td>";
 echo "<td>" . $row['points'] . "</td>";
 

 
   echo "</tr>";
 
  }
  }
echo "</table>";
echo "<br>";
mysqli_close($conn);
?>



 


</body>
</html>