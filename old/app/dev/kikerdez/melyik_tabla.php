<html>
<?php


#Kikeresi a keresend� nevet, vagy fh-t, �s kiadja a mell�t tartoz� m�sik adatot
array($konyv_nev);
array($szam_fh);
$szam_fh[0]=0;
$konyv_nev[0]="";
for ($i=1;$i<=27;$i++)
    {
    $szam_fh[$i]=$i*1000000;
    }
#felt�lti sorban a megfelel� fh k�nyvinform�ci�kkal a $szam_fh t�mb�t
$fajl=fopen("./konyvek.dat","r");
$i=1;
while (!(feof($fajl)))
    {
    $konyv_nev[$i]=fgets($fajl);
    $konyv_nev[$i]=substr($konyv_nev[$i],0,strlen($konyv_nev[$i])-1);
    $i++;
    }
fclose($fajl);
#felt�lti sorban a megfelel� k�nyvnevekkel a $konyv_nev t�mbb�t, a konyvek.dat f�jl alalj�n
if ($nkeres!="")
    {
    $i=1;
    while (($i<=27) && ($konyv_nev[$i]!=$nkeres))
	{
	$i++;
	}
    return($szam_fh[$i]);
#    print($szam_fh[$i]);
    }
if ($fhkeres!="")
    {
    $fhkeres=floor($fhkeres/1000000)*1000000;
    $i=1;
    while (($i<=27) && ($szam_fh[$i]!=$fhkeres))
	{
	$i++;
	}
    return($konyv_nev[$i]);
#    print($konyv_nev[$i]);
    }
?>
</html>