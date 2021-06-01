<?php require_once('Connections/inventario.php'); ?>
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

if ((isset($_GET['oculto'])) && ($_GET['oculto'] != "")) {
  $deleteSQL = sprintf("DELETE FROM inventario_en_existencia WHERE id=%s",
                       GetSQLValueString($_GET['oculto'], "int"));

  mysql_select_db($database_inventario, $inventario);
  $Result1 = mysql_query($deleteSQL, $inventario) or die(mysql_error());

  $deleteGoTo = "index.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

$colname_eliminar_articulos = "-1";
if (isset($_GET['id'])) {
  $colname_eliminar_articulos = (get_magic_quotes_gpc()) ? $_GET['id'] : addslashes($_GET['id']);
}
mysql_select_db($database_inventario, $inventario);
$query_eliminar_articulos = sprintf("SELECT * FROM inventario_en_existencia WHERE id = %s", $colname_eliminar_articulos);
$eliminar_articulos = mysql_query($query_eliminar_articulos, $inventario) or die(mysql_error());
$row_eliminar_articulos = mysql_fetch_assoc($eliminar_articulos);
$totalRows_eliminar_articulos = mysql_num_rows($eliminar_articulos);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Eliminar Articulos Vendidos </title>
</head>

<body>
<p>Estas seguro de eliminar este articulo?</p>
<p><?php echo $row_eliminar_articulos['id']; ?></p>
<p><?php echo $row_eliminar_articulos['tipo de prenda']; ?></p>
<p><?php echo $row_eliminar_articulos['material']; ?></p>
<p><?php echo $row_eliminar_articulos['talla']; ?></p>
<p><?php echo $row_eliminar_articulos['precio']; ?></p>
<p><?php echo $row_eliminar_articulos['unidades existentes']; ?></p>
<p><?php echo $row_eliminar_articulos['color']; ?></p>
<p><?php echo $row_eliminar_articulos['estampado']; ?></p>
<p><?php echo $row_eliminar_articulos['accesorios']; ?></p>
<p><?php echo $row_eliminar_articulos['marca']; ?></p>
<form id="form1" name="form1" method="get" action="">
  <input name="oculto" type="hidden" id="oculto" value="<?php echo $row_eliminar_articulos['id']; ?>" />
  <label>
  <input type="submit" name="Submit" value="Eliminar" />
</label>
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($eliminar_articulos);
?>
