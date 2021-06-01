<?php require_once('Connections/inventario.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO inventario_en_existencia (id, `tipo de prenda`, material, talla, precio, `unidades existentes`, color, estampado, accesorios, marca) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['id'], "int"),
                       GetSQLValueString($_POST['tipo_de_prenda'], "text"),
                       GetSQLValueString($_POST['material'], "text"),
                       GetSQLValueString($_POST['talla'], "text"),
                       GetSQLValueString($_POST['precio'], "text"),
                       GetSQLValueString($_POST['unidades_existentes'], "text"),
                       GetSQLValueString($_POST['color'], "text"),
                       GetSQLValueString($_POST['estampado'], "text"),
                       GetSQLValueString($_POST['accesorios'], "text"),
                       GetSQLValueString($_POST['marca'], "text"));

  mysql_select_db($database_inventario, $inventario);
  $Result1 = mysql_query($insertSQL, $inventario) or die(mysql_error());

  $insertGoTo = "index.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_inventario, $inventario);
$query_insertar = "SELECT * FROM inventario_en_existencia";
$insertar = mysql_query($query_insertar, $inventario) or die(mysql_error());
$row_insertar = mysql_fetch_assoc($insertar);
$totalRows_insertar = mysql_num_rows($insertar);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">Id:</td>
      <td>&nbsp;</td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Tipo de prenda:</td>
      <td><input type="text" name="tipo_de_prenda" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Material:</td>
      <td><input type="text" name="material" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Talla:</td>
      <td><input type="text" name="talla" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Precio:</td>
      <td><input type="text" name="precio" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Unidades existentes:</td>
      <td><input type="text" name="unidades_existentes" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Color:</td>
      <td><input type="text" name="color" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Estampado:</td>
      <td><input type="text" name="estampado" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Accesorios:</td>
      <td><input type="text" name="accesorios" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Marca:</td>
      <td><input type="text" name="marca" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Insertar registro"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1">
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($insertar);
?>
