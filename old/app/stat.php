<html>

<head>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
<title>Statisztika</title>
</head>

<body>
<center><h1>Statisztik�k</h1></center>
<center><h3>A www.ehf.hu/ujszov oldal l�togatotts�ga 2004.10.10. �ta</h3></center>


<strong>D�tum&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Id�&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;host (IP)</strong>
<br><br>
<?
$f=file("newcounter.dat");
for ($i=sizeof($f)-50; $i<sizeof($f); $i++)
{
if ($i>=0)
{
$x=explode(":",$f[$i]);
echo substr($x[0],0,4).". ";
echo substr($x[0],4,2).". ";
echo substr($x[0],6,2).". ";
echo substr($x[0],8,2).":";
echo substr($x[0],10,2).":";
echo substr($x[0],12,2)." - ";
echo $x[2]." (".$x[1].")<br>\n";
}
}
?>

</body>

</html>