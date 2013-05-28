<html>
<body>
<?php
session_start();
$uid=$_SESSION['usrname'];
$mysql=mysql_connect("localhost","apache","ahms");

$r=mysql_db_query("student","select distinct(jobid),date,requesttype,time,status from history where uid='$uid' group by jobid order by date") or die ("Cannot query");



ob_start(); 

echo "<center>";



echo "<h1> MY HISTORY </h1>";

echo "</center>";
echo "<ul>";
echo "<font color='brown'>JOBID";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "DATE";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "REQUEST TYPE</font><br><br>";

while($array=mysql_fetch_row($r))
{
$i=0;

echo $array[$i++];
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo $array[$i++];
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo $array[$i++];
echo "<br>";
}

echo "</ul>";


$htmlbody = ob_get_contents(); // adding output to the variable



$url=$_SESSION['pageurl'];


$a=split("\.",$url);


$a[0]=$a[0]."_pdf";

$furl=$a[0].".".$a[1];


$furl="..".$furl;
$fname=basename($furl);

$array=split("\.",$fname);

$output=$array[0].".pdf";
echo $output;

require('html2fpdf.php');
$pdf=new HTML2FPDF();
$pdf->AddPage();
//$fp = fopen("$furl","r");
//$strContent = fread($fp, filesize("$furl"));
//fclose($fp);
$pdf->WriteHTML($htmlbody);
$pdf->Output("$output");
echo "PDF file is generated successfully!";header("location:http://localhost/html2pdf/$output");



ob_end_clean();


?>


</body>
</html>
