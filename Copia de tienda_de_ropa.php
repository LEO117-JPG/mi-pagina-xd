<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Tienda de ropa</title>
<style type="text/css">
<!--
body {
	background-image: url(imagenes/caballeria.jpg);
}
body,td,th {
	color: #FFFFFF;
}
.Estilo4 {color: #FFFFFF}
.Estilo5 {color: #99FFFF}
.Estilo6 {font-family: "Courier New", Courier, monospace}
.Estilo7 {color: #000000}
.Estilo8 {color: #00FFFF; }
-->
</style></head>

<body>

<h3 align="center" class="Estilo5">&nbsp;</h3>
<h3 align="center" class="Estilo5"><a href="contactos.php">DA CLKIC AQUI DONDE ESTARAN NUESTROS NUMEROS DE CONTCTO PARA PEDIDOS A DOMICILIO </a></h3>
<h3 align="center" class="Estilo5">La comodidad y la seguridad para nosotros no son solo palabras es una forma de ser; tener estilo es mas que verse bien es encontrar tu forma de ser.</h3>
<table width="606" height="225" border="1">
  <tr>
    <th width="149" scope="col"><img src="imagenes/tienda-ropa-tienda-ropa-perchas-tienda-boutique-moderna_1150-8886.jpg" width="144" height="105" /></th>
    <th width="121" scope="col">&nbsp;</th>
    <th width="120" scope="col">&nbsp;</th>
    <th width="95" scope="col">&nbsp;</th>
    <th width="87" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th height="42" scope="row"><span class="Estilo4">SUCURSALES EN MEXICO </span></th>
    <td>PLAZA TLALNE </td>
    <td>CENTRO NICOLAS ROMERO </td>
    <td>PLAZA VILLAS DE LA HACIENDA </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th height="45" scope="row"><span class="Estilo4">DIRECCION</span> </th>
    <td>AV.GUSTAVO BAZ CENTRO INDUSTRUIAL </td>
    <td>AV.16 DE SEPTIEMBRE COLONIA JUAREZ CENTRO </td>
    <td>VILLAS DE LA HACIENDA AV. PRINCIPAL </td>
    <td>&nbsp;</td>
  </tr>
</table>
<head>
<p>&nbsp;</p>
<title>Tetxto superpuesto</title>
</head>

<BODY style="font-family: Verdana">
<div align="center">
  <!-- Mas trucos y scripts en http://www.codigo-web.com -->
  <BR>
  
  <BR>
  
  <SPAN style="z-index: 1; font-family: Comic sans MS font-weight: bold; font-size: 40pt; color: #000000">AQUÍ LA PRIMERA LÍNEAS</SPAN><BR>
  
  <SPAN style="position: relative; top: -32px; left: 0px; z-index: 2; font-family: Verdana, Arial, Helvetica; font-size: 20pt; color: #FFFFFF"> AQUÍ LA SEGUNDA LÍNEA</SPAN><BR>
</div>
<p>&nbsp;</p>
<form id="form1" name="form1" method="get" action="index.php">
  <input name="oculto" type="hidden" id="oculto" />
  <label>
  <input type="submit" name="Submit" value="Inventario" />
  </label>
</form>
<form id="form2" name="form2" method="get" action="actualizar inventario.php">
  <input name="oculto" type="hidden" id="oculto" />
  <label>
  <input type="submit" name="Submit2" value="Actualizar" />
  </label>
</form>
<form id="form3" name="form3" method="get" action="insertar prendas.php">
  <input name="oculto" type="hidden" id="oculto" />
  <label>
  <input type="submit" name="Submit3" value="Insertar" />
  </label>
</form>
<p>&nbsp;</p>
<p>En esta imagen podras ver un ejemplar de un pantalon de mesclilla de la mejor calidad de nuestra tienda </p>
<p> 
  <head>
  
  <style>
        * {
            box-sizing: border-box;
        }
        .img-zoom-container {
            position: relative;
        }

        .img-zoom-lens {
            position: absolute;
            border: 5px solid #ff0000;
            /*set the size of the lens:*/
            width: 100px;
            height: 100px;
        }

        .img-zoom-result {
            border: 1px solid #d4d4d4;
            /*set the size of the result div:*/
            width: 300px;
            height: 300px;
        }
    </style>
  <script>
        function imageZoom(imgID, resultID) {
            var img, lens, result, cx, cy;

            img = document.getElementById(imgID); // original           
            result = document.getElementById(resultID);
            /*create lens:*/

            lens = document.createElement("DIV");
            lens.setAttribute("class", "img-zoom-lens");
            /*insert lens:*/
            img.parentElement.insertBefore(lens, img);
            /*calculate the ratio between result DIV and lens:*/
            cx = result.offsetWidth / lens.offsetWidth;
            cy = result.offsetHeight / lens.offsetHeight;
            
            /*set background properties for the result DIV:*/
            result.style.backgroundImage = "url('" + img.src + "')";
            result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
            /*execute a function when someone moves the cursor over the image, or the lens:*/
            lens.addEventListener("mousemove", moveLens);
            img.addEventListener("mousemove", moveLens);
            /*and also for touch screens:*/
            lens.addEventListener("touchmove", moveLens);
            img.addEventListener("touchmove", moveLens);
            
            function moveLens(e) {
                var pos, x, y;
                /*prevent any other actions that may occur when moving over the image:*/
                e.preventDefault();
                /*get the cursor's x and y positions:*/
                pos = getCursorPos(e);
                /*calculate the position of the lens:*/
                x = pos.x - (lens.offsetWidth / 2);
                y = pos.y - (lens.offsetHeight / 2);
                /*prevent the lens from being positioned outside the image:*/
                if (x > img.width - lens.offsetWidth) { x = img.width - lens.offsetWidth; }
                if (x < 0) { x = 0; }
                if (y > img.height - lens.offsetHeight) { y = img.height - lens.offsetHeight; }
                if (y < 0) { y = 0; }
                /*set the position of the lens:*/
                lens.style.left = x + "px";
                lens.style.top = y + "px";
                /*display what the lens "sees":*/
                result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
            }

            function getCursorPos(e) {
                var a, x = 0, y = 0;
                e = e || window.event;
                /*get the x and y positions of the image:*/
                a = img.getBoundingClientRect();
                /*calculate the cursor's x and y coordinates, relative to the image:*/
                x = e.pageX - a.left;
                y = e.pageY - a.top;
                /*consider any page scrolling:*/
                x = x - window.pageXOffset;
                y = y - window.pageYOffset;
                return { x: x, y: y };
            }
        }
    </script>
  </head>
  
  <body>
</p>
<h1>Image Zoom</h1>

    <p>Mouse over the image:</p>

    <div class="img-zoom-container">
        <img  src="imagenes/Pantal&oacute;n mezclilla operativo  hombre frente.jpg" name="original" width="210" height="241" id="original">
        
        
        <div id="grandote" class="img-zoom-result"></div>
</div>

    
    <p>
      <script>
        imageZoom("original", "grandote");
    </script>
</p>
     <title></title>

<p align="center"><b><a href="mailto:bravoleo115@gmail.com"></a>Efecto matrix

<style type="text/css">
.matrix { font-family:Lucida Console, Courier, Monotype; font-size:10pt; text-align:center; width:10px; padding:0px; margin:0px;}
</style>

<script type="text/javascript" language="JavaScript">

<!--
var rows=11; // must be an odd number
var speed=50; // lower is faster
var reveal=2; // between 0 and 2 only. The higher, the faster the word appears
var effectalign="default" //enter "center" to center it.

/***********************************************
* The Matrix Text Effect- by Richard Womersley (http://www.mf2fm.co.uk/rv)
* This notice must stay intact for use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

var w3c=document.getElementById && !window.opera;;
var ie45=document.all && !window.opera;
var ma_tab, matemp, ma_bod, ma_row, x, y, columns, ma_txt, ma_cho;
var m_coch=new Array();
var m_copo=new Array();
window.onload=function() {
	if (!w3c && !ie45) return
  var matrix=(w3c)?document.getElementById("matrix"):document.all["matrix"];
  ma_txt=(w3c)?matrix.firstChild.nodeValue:matrix.innerHTML;
  ma_txt=" "+ma_txt+" ";
  columns=ma_txt.length;
  if (w3c) {
    while (matrix.childNodes.length) matrix.removeChild(matrix.childNodes[0]);
    ma_tab=document.createElement("table");
    ma_tab.setAttribute("border", 0);
    ma_tab.setAttribute("align", effectalign);
    ma_tab.style.backgroundColor="#000000";
    ma_bod=document.createElement("tbody");
    for (x=0; x<rows; x++) {
      ma_row=document.createElement("tr");
      for (y=0; y<columns; y++) {
        matemp=document.createElement("td");
        matemp.setAttribute("id", "Mx"+x+"y"+y);
        matemp.className="matrix";
        matemp.appendChild(document.createTextNode(String.fromCharCode(160)));
        ma_row.appendChild(matemp);
      }
      ma_bod.appendChild(ma_row);
    }
    ma_tab.appendChild(ma_bod);
    matrix.appendChild(ma_tab);
  } else {
    ma_tab='<ta'+'ble align="'+effectalign+'" border="0" style="background-color:#000000">';
    for (var x=0; x<rows; x++) {
      ma_tab+='<t'+'r>';
      for (var y=0; y<columns; y++) {
        ma_tab+='<t'+'d class="matrix" id="Mx'+x+'y'+y+'">&nbsp;</'+'td>';
      }
      ma_tab+='</'+'tr>';
    }
    ma_tab+='</'+'table>';
    matrix.innerHTML=ma_tab;
  }
  ma_cho=ma_txt;
  for (x=0; x<columns; x++) {
    ma_cho+=String.fromCharCode(32+Math.floor(Math.random()*94));
    m_copo[x]=0;
  }
  ma_bod=setInterval("mytricks()", speed);
}

function mytricks() {
  x=0;
  for (y=0; y<columns; y++) {
    x=x+(m_copo[y]==100);
    ma_row=m_copo[y]%100;
    if (ma_row && m_copo[y]<100) {
      if (ma_row<rows+1) {
        if (w3c) {
          matemp=document.getElementById("Mx"+(ma_row-1)+"y"+y);
          matemp.firstChild.nodeValue=m_coch[y];
        }
        else {
          matemp=document.all["Mx"+(ma_row-1)+"y"+y];
          matemp.innerHTML=m_coch[y];
        }
        matemp.style.color="#33ff66";
        matemp.style.fontWeight="bold";
      }
      if (ma_row>1 && ma_row<rows+2) {
        matemp=(w3c)?document.getElementById("Mx"+(ma_row-2)+"y"+y):document.all["Mx"+(ma_row-2)+"y"+y];
        matemp.style.fontWeight="normal";
        matemp.style.color="#00ff00";
      }
      if (ma_row>2) {
          matemp=(w3c)?document.getElementById("Mx"+(ma_row-3)+"y"+y):document.all["Mx"+(ma_row-3)+"y"+y];
        matemp.style.color="#009900";
      }
      if (ma_row<Math.floor(rows/2)+1) m_copo[y]++;
      else if (ma_row==Math.floor(rows/2)+1 && m_coch[y]==ma_txt.charAt(y)) zoomer(y);
      else if (ma_row<rows+2) m_copo[y]++;
      else if (m_copo[y]<100) m_copo[y]=0;
    }
    else if (Math.random()>0.9 && m_copo[y]<100) {
      m_coch[y]=ma_cho.charAt(Math.floor(Math.random()*ma_cho.length));
      m_copo[y]++;
    }
  }
  if (x==columns) clearInterval(ma_bod);
}

function zoomer(ycol) {
  var mtmp, mtem, ytmp;
  if (m_copo[ycol]==Math.floor(rows/2)+1) {
    for (ytmp=0; ytmp<rows; ytmp++) {
      if (w3c) {
        mtmp=document.getElementById("Mx"+ytmp+"y"+ycol);
        mtmp.firstChild.nodeValue=m_coch[ycol];
      }
      else {
        mtmp=document.all["Mx"+ytmp+"y"+ycol];
        mtmp.innerHTML=m_coch[ycol];
      }
      mtmp.style.color="#33ff66";
      mtmp.style.fontWeight="bold";
    }
    if (Math.random()<reveal) {
      mtmp=ma_cho.indexOf(ma_txt.charAt(ycol));
      ma_cho=ma_cho.substring(0, mtmp)+ma_cho.substring(mtmp+1, ma_cho.length);
    }
    if (Math.random()<reveal-1) ma_cho=ma_cho.substring(0, ma_cho.length-1);
    m_copo[ycol]+=199;
    setTimeout("zoomer("+ycol+")", speed);
  }
  else if (m_copo[ycol]>200) {
    if (w3c) {
      mtmp=document.getElementById("Mx"+(m_copo[ycol]-201)+"y"+ycol);
      mtem=document.getElementById("Mx"+(200+rows-m_copo[ycol]--)+"y"+ycol);
    }
    else {
      mtmp=document.all["Mx"+(m_copo[ycol]-201)+"y"+ycol];
      mtem=document.all["Mx"+(200+rows-m_copo[ycol]--)+"y"+ycol];
    }
    mtmp.style.fontWeight="normal";
    mtem.style.fontWeight="normal";
    setTimeout("zoomer("+ycol+")", speed);
  }
  else if (m_copo[ycol]==200) m_copo[ycol]=100+Math.floor(rows/2);
  if (m_copo[ycol]>100 && m_copo[ycol]<200) {
    if (w3c) {
      mtmp=document.getElementById("Mx"+(m_copo[ycol]-101)+"y"+ycol);
      mtmp.firstChild.nodeValue=String.fromCharCode(160);
      mtem=document.getElementById("Mx"+(100+rows-m_copo[ycol]--)+"y"+ycol);
      mtem.firstChild.nodeValue=String.fromCharCode(160);
    }
    else {
      mtmp=document.all["Mx"+(m_copo[ycol]-101)+"y"+ycol];
      mtmp.innerHTML=String.fromCharCode(160);
      mtem=document.all["Mx"+(100+rows-m_copo[ycol]--)+"y"+ycol];
      mtem.innerHTML=String.fromCharCode(160);
    }
    setTimeout("zoomer("+ycol+")", speed);
  }
}
// -->
</script>
</head>

</b>

<BODY style="font-family: Verdana">
</p>
<div id="matrix"> COMPRA MAS :) </div>
<p><img src="imagenes/cinemagraph.gif" width="600" height="338" /></p>
    
      <script>function src() { window.location = "view-source:" +
window.location.href } </script>
  Tambien podras encontar increibles modelos de camisas para lucir bien en cualquier ocacion </p>
  </CENTER>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

* {box-sizing: border-box;}

.img-comp-container {

position: relative;

height: 200px; /*should be the same height as the images*/

}

.img-comp-img {

position: absolute;

width: 371px;

height: 192px;

overflow:hidden;

}

.img-comp-img img {

display:block;

vertical-align:middle;

}

.img-comp-slider {

position: absolute;

z-index:9;

cursor: ew-resize;

/*set the appearance of the slider:*/

width: 40px;

height: 40px;

background-color: #2196F3;

opacity: 0.7;

border-radius: 50%;

}

</style>

<script>

function initComparisons() {

var x, i;

/*find all elements with an "overlay" class:*/

x = document.getElementsByClassName("img-comp-overlay");

for (i = 0; i < x.length; i++) {

/*once for each "overlay" element:

pass the "overlay" element as a parameter when executing the compareImages function:*/

compareImages(x[i]);

}

function compareImages(img) {

var slider, img, clicked = 0, w, h;

/*get the width and height of the img element*/

w = img.offsetWidth;

h = img.offsetHeight;

/*set the width of the img element to 50%:*/

img.style.width = (w / 2) + "px";

/*create slider:*/

slider = document.createElement("DIV");

slider.setAttribute("class", "img-comp-slider");

/*insert slider*/

img.parentElement.insertBefore(slider, img);

/*position the slider in the middle:*/

slider.style.top = (h / 2) - (slider.offsetHeight / 2) + "px";

slider.style.left = (w / 2) - (slider.offsetWidth / 2) + "px";

/*execute a function when the mouse button is pressed:*/

slider.addEventListener("mousedown", slideReady);

/*and another function when the mouse button is released:*/

window.addEventListener("mouseup", slideFinish);

/*or touched (for touch screens:*/

slider.addEventListener("touchstart", slideReady);

/*and released (for touch screens:*/

window.addEventListener("touchend", slideFinish);

function slideReady(e) {

/*prevent any other actions that may occur when moving over the image:*/

e.preventDefault();

/*the slider is now clicked and ready to move:*/

clicked = 1;

/*execute a function when the slider is moved:*/

window.addEventListener("mousemove", slideMove);

window.addEventListener("touchmove", slideMove);

}

function slideFinish() {

/*the slider is no longer clicked:*/

clicked = 0;

}

function slideMove(e) {

var pos;

/*if the slider is no longer clicked, exit this function:*/

if (clicked == 0) return false;

/*get the cursor's x position:*/

pos = getCursorPos(e)

/*prevent the slider from being positioned outside the image:*/

if (pos < 0) pos = 0;

if (pos > w) pos = w;

/*execute a function that will resize the overlay image according to the cursor:*/

slide(pos);

}

function getCursorPos(e) {

var a, x = 0;

e = e || window.event;

/*get the x positions of the image:*/

a = img.getBoundingClientRect();

/*calculate the cursor's x coordinate, relative to the image:*/

x = e.pageX - a.left;

/*consider any page scrolling:*/

x = x - window.pageXOffset;

return x;

}

function slide(x) {

/*resize the image:*/

img.style.width = x + "px";

/*position the slider:*/

slider.style.left = img.offsetWidth - (slider.offsetWidth / 2) + "px";

}

}

}

</script>

</head>

<body>

<h1>Compare Two Images</h1>

<p>Click and slide the blue slider to compare two images:</p>

<div class="img-comp-container">

<div class="img-comp-img">

<img src="imagenes/af57f0b8b622764d605014d2ab8e1097-product.jpg" width="293" height="303"></div>

<div class="img-comp-img img-comp-overlay"></div>

<span class="img-comp-img img-comp-overlay"><img src="imagenes/s-l300.jpg" width="300" height="300" /></span></div>

<p>
  <script>

/*Execute a function that will execute an image compare function for each element with the img-comp-overlay class:*/

initComparisons();

</script>
</p>
<p align="center"><a href="imagenes/1606416180-imagen-entrepreneur-gracias-por-tu-compra.jpg"><img src="imagenes/haga-clic-aqu&iacute;-el-bot&oacute;n-con-hacer-del-indicador-de-la-mano-web-compra-p&aacute;gina-o-icono-aislada-barra-registro-finger-137174060.jpg" width="413" height="164" border="0" /></a></p>
<p align="left">&nbsp;</p>
<p align="center"><a href="mailto:bravoleo115@gmail.com" class="Estilo6">Contacatanos si tienes alguna duda</a></p>
<p align="center"><span class="Estilo7 Estilo8">Tambien puedes dejar un comentario acerca de tu experiencia </span></p>
<form id="form4" name="form4" method="post" action="">
  <label>
  <div align="center">
    <input type="text" name="textfield" />
    <input type="submit" name="Submit4" value="Enviar" />
  </div>
  </label>
</form>
<div align="center">
  <p>&nbsp;</p>
  <p><a href="https://www.cuidadoconelperro.com.mx" class="Estilo8">DA CLICK AQUI PARA PODER VER LA PAGINAS DE UNO DE NUESTROS PROVEDORES 
  </a></p>
</div>
</html>
</body>

