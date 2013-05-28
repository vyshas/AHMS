<html>
<body>





<script language="javascript">
function f()
{
var e=document.form1.asd.value;
location.href="/php/sample.php?e="+e;

}
</script>

<?
$e=$_GET['e'];
echo $e;
?>

<form method="post" name="form1">
<input type="text" name="asd">
<input type="button" value="click" onclick='f()'>
</form>



</body>
</html>
