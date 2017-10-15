<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<?php 
function conectar(){

$servidordb="localhost";
$userdb="difgdlgo_nominas";
$passdb="DifGdl2016$";
$nombredb="difgdlgo_difGdl2014";

if(!($con = mysql_connect($servidordb,$userdb,$passdb)))
{die("No se hizo la conexion al servidor favor de verificar");
}
if(!mysql_select_db($nombredb,$con))
{die("No se hizo la conexión con la base de datos favor de verificar");
}//*/
return $con;

}

$id=$_GET["id"];
$con=conectar();
$query="select nombre,departamento,puesto,total_persepciones as percepciones, total_deducciones as deducciones,neto,quincena,nomina_periodos.rango,nomina.anio from nomina 
left join nomina_periodos on (nomina.quincena=nomina_periodos.periodo)
where nomina.id='$id' limit 1";
//echo $query;
$query=mysql_query($query,$con);
$row=mysql_fetch_array($query);
?>

<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="610" cellspacing="0" cellpadding="0" border="0" background="nomina.png" height="417">
<tbody>
<tr>
<td>
<table width="610" cellspacing="0" cellpadding="0" border="0" height="437" align="left">
<tbody>
<tr>
<td width="50%" height="110" bgcolor="" align="left"> </td>

</tr>



<tr>
<td width="20%"> </td>
<td width="95%" height="45px" align="right">
<strong>
<font size="2" face="Arial, Helvetica, sans-serif"> <?php echo $row[quincena]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row[rango] ?> </font>
</strong>
</td>
</tr>








<tr>
<td bgcolor="" height="26" align="left" colspan="2">
<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tbody>

<tr>
<td width="5%"> </td>
<td width="95%" height="30px">
<strong>
<font size="2" face="Arial, Helvetica, sans-serif"> <?php echo utf8_encode($row[nombre]) ?> </font>
</strong>
</td>
</tr>
</tbody>
</table>

</td>
<td bgcolor="" align="left" colspan="2">
<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tbody>
</tbody>
</table>
</td>
</tr>
<tr>

<td bgcolor="" align="right" height="22px"><strong><font size="2" face="Arial, Helvetica, sans-serif"> <?php echo utf8_encode($row[departamento]) ?> </font></strong></td>
<td width="33%" align="right" bgcolor=""><strong><font size="1" face="Arial, Helvetica, sans-serif"><?php echo utf8_encode($row[puesto]) ?></font></strong></td>
<td width="9%" align="left" bgcolor="">&nbsp;</td>
</tr>

<tr>
<td bgcolor="" height="49" align="left"> </td>
<td bgcolor="" align="left"> </td>
<td bgcolor="" align="left"> </td>
<td width="8%" align="left" bgcolor=""> </td>
</tr>
<tr>
<td bgcolor="" height="26" align="left"> </td>
<td bgcolor="" align="left"> </td>
<td bgcolor="" align="left"> </td>
<td bgcolor="" align="left"> </td>
</tr>
<tr>
<td bgcolor="" height="25" align="right"><strong><font size="2" face="Arial, Helvetica, sans-serif" align="right">$ <?php echo number_format($row[percepciones],2) ?></font></strong></td>
<td bgcolor="" align="right"><strong></font></strong></td>
<td bgcolor="" align="left"> </td>
<td bgcolor="" align="right"><strong><font size="2" face="Arial, Helvetica, sans-serif">$<?php echo number_format($row[deducciones],2) ?> </font></strong></td>
</tr>
<tr>
<td background="" height="26" align="left"> </td>
<td background="" height="26" align="left"> </td>
<td background="" height="26" align="left"> </td>
<td background="" height="26" align="right"><strong><font size="2" face="Arial, Helvetica, sans-serif">$<?php echo number_format($row[neto],2) ?> </font></strong></td>
</tr>
<tr>
<td bgcolor="" height="38" align="left"> </td>
<td bgcolor="" align="left">
<table width="100%" cellspacing="0" cellpadding="0" border="0" height="30">
<tbody>
<tr>
<td width="40%"> </td>
<td width="60%">&nbsp;</td>
</tr>
</tbody>
</table>
</td>
<td bgcolor="" align="left">&nbsp;</td>
<td bgcolor="" align="left">
<table width="100%" cellspacing="0" cellpadding="0" border="0" height="30">
<tbody>
<tr>
<td width="40%"> </td>
<td width="60%">&nbsp;</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td bgcolor="" height="19" align="left">
<strong>
<font size="2" face="Arial, Helvetica, sans-serif"> </font>
</strong>
</td>
<td bgcolor="" align="left"> </td>
<td bgcolor="" align="left"> </td>
<td bgcolor="" align="left"> </td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</body>
</html>
