<html>
<body bgcolor='honeydew'>

<?

$name=$_POST["text"];


$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");
$res=mysql_db_query("student","select * from collaboration where name='$name'") or die("cannot query");
  

while($arr=mysql_fetch_row($res))
{

  echo "Name          : $arr[0]";

  echo "<br>";
  echo "Specialization : $arr[1]"; 
  echo "<br>";
  
  echo "E-mail         : $arr[4]";
  echo "<br>";
echo  "Phone          :	$arr[5]";
   echo "<br>";
echo  "Address        : $arr[6]";
echo "<br>";
echo "Website	      : $arr[2]";
    echo "<br>";
}
?>

</body>
</html>


