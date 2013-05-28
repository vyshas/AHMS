
<html>
<body>
<?
echo "asd";
$date1= date("Y-m-d");
$date2= '2009-02-30';
$time1=strtotime($date1);
$time2=strtotime($date2);
$res=$time2-$time1;
$q=24*60*60;
$r=$res/$q;
echo $r;
?>
</body>
</html>
