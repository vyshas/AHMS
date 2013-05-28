
<html>
<body bgcolor='honeydew'>


<?
$_SESSION['pageurl']= $_SERVER["REQUEST_URI"];
?>


<?
$name= $_POST["text"];

echo "<font color='brown'>EMPLOYMENT INFO</font>";

echo "<p> <a href=\"http://localhost/html2pdf/index.php\" target=\"_blank\">GET PDF</a>";
$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");
$res=mysql_db_query("student","select * from employment where name='$name'") or die("cannot query");
  
ob_start();

while($arr=mysql_fetch_row($res))
{

  echo "Name          : $arr[0]";

  echo "<br>";
  echo "Date-of-Birth : $arr[1]"; 
  echo "<br>";
  echo "Sex	      : $arr[2]";
    echo "<br>";
 
 
echo  "Qualification  : $arr[7]";
echo "<br>";
echo "Category       : $arr[3]";
  echo "<br>";
 echo "E-mail         : $arr[4]";
  echo "<br>";
echo  "Phone          :	$arr[5]";
   echo "<br>";
echo  "Address        : $arr[6]";

}



$htmlbody = ob_get_contents();

$_SESSION['content']=$htmlbody;



?>


<form method="POST" action="/mysite/services/internal/employees/class2/external manager/em_jobq_employment.php"><br>
<input type="submit" class="style4" value="CLICK HERE TO GO BACK">
</form>
</body>
</html>


