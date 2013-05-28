
<html>
<body bgcolor="honeydew">
<script language="javascript">
window.resizeto(300,400);
</script>

<?

$uid= $_POST["text"];

$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");

$res=mysql_db_query("student","select purpose from bonafide where uid='$uid'") or die("cannot query");
 echo "<br>"; 
while($arr=mysql_fetch_row($res))
{
  echo $arr[0];
}

?>
<form method="POST" action="/mysite/services/internal/employees/jobq_bonafide.php"><br>
<input type="submit" class="style4" value="CLICK HERE TO GO BACK">
</form>
</body>
</html>


