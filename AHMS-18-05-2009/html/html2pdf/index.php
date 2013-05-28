<html>
<body>
<?
session_start();
$url=$_SESSION['pageurl'];
$strContent=$_SESSION['content'];

$url="..".$url;

$fname=basename($url);

$array=split("\.",$fname);

$output=$array[0].".pdf";

require('html2fpdf.php');
$pdf=new HTML2FPDF();
$pdf->AddPage();

$pdf->WriteHTML($strContent);
$pdf->Output("$output");
echo "PDF file is generated successfully!";header("location:http://localhost/html2pdf/$output");
?>
</body>
</html>
