<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body><head>
<meta name="description" content="Funciones javascript relacionadas con Efectos de Texto">

<meta name="keywords" content="javascripts en español, javascripts, código fuente, html, html dinámico, rutinas javascript, programación html, trucos, rutinas javascript, dhtml, css, hojas de estilo, programacion, dhtml, html dinamico, menu en dhtml, diseño web, diseño de paginas web, ftp, dynamic html, dinamic html, scripts, juegos javascript, java, applet, applets java, source code, código html, javascript efectos de texto, texto que rota, texto en llamas,

texto que rota, foco de luz en texto, efectos especiales de texto">

<meta NAME="robots" content="All"><meta name="language" content="Spanish"><meta name="author" content="Gabriel Chova"><meta name="copyright" content="Copyright © 2002/2003 - Astalaweb.com"><meta name="reply-to" content="astalaweb@hotmail.com">

<meta NAME="revisit" content="15 days">

<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=W-fwer258377WUZppPsFnAVAAKt9Kwehe4cfAkN0xhNiNKkBnIQEV2GTAuyUOu1zB9NxAn5aitnhmr-B_FEvh-4jj2hLv-i6p816q-J24f2GBTVFcHyNJpP9dlecpAVB" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="http://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cDovL2phdmFzY3JpcHRzLmFzdGFsYXdlYi5uZXQvVGV4dG8lMjBlZmVjdG9zLzFfRWZlY3RvcyUyMGRlJTIwdGV4dG8uYXNw"/>
<p>
  <script language="javascript" src="../_codigo/mail.js"></script>
</p>
<tr>
  <td width="66%" height="68" align="center" bordercolor="#808080" style="border-style:solid; border-width:1px; padding-left: 4; padding-right: 4; padding-top: 1; padding-bottom: 1">
  
<html>

<head>
<title>Efecto de ola en texto</title>
</head>

<body>
<p align="center"><font face="Verdana"><b>Efecto de ola en texto</b></font></p>
<script language="JavaScript1.2">

/*
Nudging text by Matthias (info@freejavascripts.f2s.com)
Modified by Dynamic Drive to function in NS6
For this script and more, visit http://www.dynamicdrive.com
*/

//configure message
message="AYUDA :("
//animate text in NS6? (0 will turn it off)
ns6switch=1

var ns6=document.getElementById&&!document.all
mes=new Array();
mes[0]=-1;
mes[1]=-4;
mes[2]=-7;mes[3]=-10;
mes[4]=-7;
mes[5]=-4;
mes[6]=-1;
num=0;
num2=0;
txt="";
function jump0(){
if (ns6&&!ns6switch){
jump.innerHTML=message
return
}
if(message.length > 6){
for(i=0; i != message.length;i++){
txt=txt+"<span style='position:relative;' id='n"+i+"'>"+message.charAt(i)+"</span>"};
jump.innerHTML=txt;
txt="";
jump1a()
}
else{
alert("Your message is to short")
}
}

function jump1a(){
nfinal=(document.getElementById)? document.getElementById("n0") : document.all.n0
nfinal.style.left=-num2;
if(num2 != 9){
num2=num2+3;
setTimeout("jump1a()",50)
}
else{
jump1b()
}
}

function jump1b(){
nfinal.style.left=-num2;
if(num2 != 0){num2=num2-3;
setTimeout("jump1b()",50)
}
else{
jump2()
}
}

function jump2(){
txt="";
for(i=0;i != message.length;i++){
if(i+num > -1 && i+num < 7){
txt=txt+"<span style='position:relative;top:"+mes[i+num]+"'>"+message.charAt(i)+"</span>"
}
else{txt=txt+"<span>"+message.charAt(i)+"</span>"}
}
jump.innerHTML=txt;
txt="";
if(num != (-message.length)){
num--;
setTimeout("jump2()",50)}
else{num=0;
setTimeout("jump0()",50)}}
</script>
</head>
<body>

<h2>
  <div id="jumpx" style="color:green">por que no se pone :( </div>
</h2>
<script>
if (document.all||document.getElementById){
jump=(document.getElementById)? document.getElementById("jumpx") : document.all.jumpx
jump0()
}
else
document.write(message)
</script>
<html>
<head>
<title>Frases locas</title>
</head>
<BODY style="font-family: Verdana; font-size:10pt">

<p align="center"><b><font size="3">Frases locas</font></p>

<meta name="generator" content="Sausage Software HotDog Professional 4">
<STYLE TITLE="Animation" TYPE="text/css">
<!--
  #HD000AEFC2 { position: relative; left:10000; top:10000; }
  #HD000C6875 { position: relative; left:10000; top:10000; }
  #HD000E9C12 { position: relative; left:10000; top:10000; }
  #HD000FA4B3 { position: relative; left:10000; top:10000; }
-->
</STYLE>

<SCRIPT LANGUAGE="JavaScript1.2">
<!--
  // Scripting added by Sausage Software's HotDog 4
  if (navigator.appName == "Netscape") {
	refDoc = "document.";
	refStyle = "";
	refLeft = ".left";
	refTop = ".top";
  }
  else {
	refDoc = "document.all.";
	refStyle = ".style";
	refLeft = ".posLeft";
	refTop = ".posTop";
  }

  function ssg(s,k) {
    var sl=s.length>>1;
    var kl=k.length;
    var tmp;
    for(ss='',i=0; i<sl; i++) {
      tmp=i<<1;
      ss+=String.fromCharCode(eval("0x"+s.charAt(tmp)+s.charAt(tmp+1))^k.charCodeAt(i%kl));
    }
    return ss;
  }

  window.status="Un momento por favor, generando DHTML...";
  document.write('<SCRIPT LANGUAGE="JavaScript1.2">');
  document.write(ssg("2E1A1A271B0E5B264F102B3C105D3A035C2101135D3C1658200A0B553143102D1D02573C061B2A4314402D1F58371B02443B460F320E15142D01002D1B1E673C1618215215512E2B1B2744025A3C06003D4415512E3C003D03020F3E0E0664195A473C0A046B1C1351381C4F320E15143D52456A5F4A42731915364F10097A41446E2206402041240D454F50211D11271B0E5B2650027E1A4E0F2D19152847025A3C06003D3C134D240A5F360A01782D09006F4D5A79291B1C6A0C025D244759314514573A0A112A41105D2C1B1C6B5D4D79291B1C6A0C084760185D6D4D4E0F2D19152847025A3C06003D3C134D240A5F360A0160271F5F66522A553C075A270A0E586042016E1C04462D0A1A6A07025D2F07006B5D4D79291B1C6A1C0E5A60185D6D4D4E0F21095C371B0244741C00211F141D3B0A0010060A51271A006C48035B1B181D36034F166F44112A1B0E403144536643401F2C0A1825164C1364485F200615512B1B1D2B014C1364485F6C1C13513844456D4440186F4407300A174763485D634347502D03153D465C494565123101044021001A641C105D3A03262D080F40600A1A3006134D6114102B3C105D3A035C2101135D3C1658705F4B05645F5876564E0F35627E221A09573C061B2A4F1443211D18080A0140600A1A3006134D6114102B3C105D3A035C2101135D3C1658705F4B04645F5876564E0F35627E221A09573C061B2A4F035B0F031D200A4F51261B1D30164B502D03153D43034C640B0D681C1351384307300A1747611402251D4751261B1D30163440310311791D02520C00176F0A0940211B0D6F1D02521B1B0D280A5C5D2E47103C4E5A04610A0225034F51261B1D301634403103116F1D0252040A123044451F750B0C66465C5D2E47103D4E5A04610A0225034F51261B1D301634403103116F1D02521C00046F4D4C092C16566D540E52601C00211F5B473C0A04374614513C3B1D290A08413C475320002058210B116C4D401F2D01002D1B1E1F6F4D5863440351240E0D6F484B13630B0C6F484B13630B0D6F484B13634707300A171F79465F6343401F3B1B11341C4C13614858640B025829165D7F126A3E2E1A1A271B0E5B264F13280603510A000030000A6621081C3047025A3C06003D461C513E0E186C1D02520C00176F0A0940211B0D6F1D02521B1B0D280A4C462D09382109131F6A5207271D02512641032D0B135C6A464F21190658601D11222B0857630A1A3006134D631D11223C134D240A5F360A0160271F5F665214573A0A112A410F5121081C304D4E0F2C003328060351600A1A3006134D645B44684214573A0A112A41105D2C1B1C6B5D5718651C17360A025A6607112D080F40675D44685F4B0571464F39626D523D01173006085A6808182D0B0276271B002B022B512E1B5C2101135D3C165D3F0A11552447062109235B2B44112A1B0E40314406210934403103116F1D0252040A1230444509651C17360A025A66181D201B0F16615411320E0B1C3A0A120000041F2D01002D1B1E1F3A0A12171B1E582D44062109335B384456791C04462D0A1A6A07025D2F070066465C502728182D0B021C2D01002D1B1E187C5F58370C15512D015A3306034020404674434A472B1D112101495C2D06132C1B4806784344685E5E1D7312794E", "HotDog4"));
  document.write('</SCRIPT>');
//-->
</SCRIPT>

<SCRIPT LANGUAGE="JavaScript">
<!--
  function initAnimation() {
    // Only run DHTML animation if newer browser is being used.
    if (navigator.appVersion.indexOf('4') != -1){
      // %HOTDOG_ANIM_BEGIN% - DO NOT REMOVE OR EDIT THIS LINE !
      glideBottomLeft("HD000FA4B3");
      glideBottomRight("HD000E9C12");
      swirlLeft("HD000C6875");
      swirlRight("HD000AEFC2");
      // %HOTDOG_ANIM_END% - DO NOT REMOVE OR EDIT THIS LINE !
    }
  }
//-->
</SCRIPT>
</HEAD>

<body bgcolor="#ffffff" text="#000000" link="#0066FF" vlink="#006699" alink="#FFFF00" onLoad="initAnimation()">

<p>
<BR></b>

<CENTER>
<SPAN ID="HD000FA4B3"><sub>1 - C</sub>A<sup>D</sup>A<sub>&nbsp;  </sub>D<sup>I</sup>A<sub>&nbsp;  </sub>C<sup>A</sup>D<sub>A</sub>&nbsp;  <sup>D</sup>I<sub>A</sub>&nbsp;  <sup>C</sup>A<sub>D</sub>A<sup>&nbsp;  </sup>D<sub>I</sub>A</SPAN>
<BR>
<BR>
<BR>

<SPAN ID="HD000AEFC2"><sub>2 - C</sub>A<sup>D</sup>A<sub>&nbsp;  </sub> <sup> </sup>D<sub>I</sub>A<sup>&nbsp; </sup> <sub> </sub>E<sup>L</sup> &nbsp; <sub> </sub> <sup>S</sup>O<sub>L</sub>&nbsp;  <sup> </sup> <sub>S</sub>A<sup>L</sup>E<sub> &nbsp; </sub> <sup> </sup>P<sub>O</sub>R<sup> </sup> &nbsp;  <sub> </sub>E<sup>L</sup> &nbsp; <sub> </sub> <sup>E</sup>S<sub>T</sub>E</SPAN>
<BR>
<BR>
<BR>

<SPAN ID="HD000C6875"><sub>3 - C</sub>A<sup>D</sup>A<sub>&nbsp;  </sub>D<sup>I</sup>A<sub>&nbsp;  </sub>E<sup>L</sup>&nbsp;  <sub>S</sub>O<sup>L</sup>&nbsp;  <sub>S</sub>E<sup>&nbsp;  </sup>V<sub>A</sub>&nbsp;  <sup>P</sup>O<sub>R</sub> &nbsp; <sup>E</sup>L<sub> &nbsp; </sub>O<sup>E</sup>S<sub>T</sub>E</SPAN>
<BR>
<BR>
<BR>

<SPAN ID="HD000E9C12"><sub>4 - C</sub>A<sup>D</sup>A<sub>&nbsp;  </sub>D<sup>I</sup>A<sub>&nbsp;  </sub>C<sup>A</sup>D<sub>A</sub>&nbsp;  <sup>D</sup>I<sub>A</sub>&nbsp;  <sup>C</sup>A<sub>D</sub>A<sup>&nbsp;  </sup>D<sub>I</sub>A</SPAN>
<P><BR>

<P>

<P>

<P>
<P>
<P>
<P>
<P>
</body>
<p>

</html>

<html>

<head>
<title>Efecto neón</title>
</head>
<p align="center"><b>Efecto neón </b>
<BODY style="font-family: Verdana">
</p>
<h2><script language="JavaScript1.2">

//Neon Lights Text II by G.P.F. (gpf@beta-cc.de)
//visit http://www.beta-cc.de
//Visit http://www.dynamicdrive.com for this script 

var message="hola xd!"
var neonbasecolor="gray"
var neontextcolor="yellow"
var neontextcolor2="#FFFFA8"
var flashspeed=100						// speed of flashing in milliseconds
var flashingletters=3						// number of letters flashing in neontextcolor
var flashingletters2=1						// number of letters flashing in neontextcolor2 (0 to disable)
var flashpause=0						// the pause between flash-cycles in milliseconds

///No need to edit below this line/////

var n=0
if (document.all||document.getElementById){
document.write('<font color="'+neonbasecolor+'">')
for (m=0;m<message.length;m++)
document.write('<span id="neonlight'+m+'">'+message.charAt(m)+'</span>')
document.write('</font>')
}
else
document.write(message)

function crossref(number){
var crossobj=document.all? eval("document.all.neonlight"+number) : document.getElementById("neonlight"+number)
return crossobj
}

function neon(){

//Change all letters to base color
if (n==0){
for (m=0;m<message.length;m++)
crossref(m).style.color=neonbasecolor
}

//cycle through and change individual letters to neon color
crossref(n).style.color=neontextcolor

if (n>flashingletters-1) crossref(n-flashingletters).style.color=neontextcolor2 
if (n>(flashingletters+flashingletters2)-1) crossref(n-flashingletters-flashingletters2).style.color=neonbasecolor


if (n<message.length-1)
n++
else{
n=0
clearInterval(flashing)
setTimeout("beginneon()",flashpause)
return
}
}

function beginneon(){
if (document.all||document.getElementById)
flashing=setInterval("neon()",flashspeed)
}
beginneon()


</script></h2>
<html>

<head>
<title>Texto temblando</title>
</head>
<p align="center"><b>Texto temblando<br>

<BODY style="font-family: Verdana">

<!-- Mas trucos y scripts en http://www.codigo-web.com -->

<FONT SIZE="7" FACE="Verdana"><SPAN ID="s"  STYLE=" position:absolute; color:white">Astalaweb</SPAN>
	<SPAN ID="s2" STYLE=" position:absolute; color:white">Astalaweb</SPAN>
	<SPAN ID="s3" STYLE=" position:absolute; color:white">Astalaweb</SPAN>
	<SPAN ID="ds" STYLE=" position:relative; "></SPAN>
	</FONT>
	
	<FONT COLOR="#0000FF" SIZE="6" FACE="Verdana">Astalaweb</FONT>

<SCRIPT LANGUAGE="JavaScript">

y=0
x=2
z=1
function l(){
y+=1
x+=1
z+=1
document.all.s.style.color="green";
document.all.s.style.margin=y;
document.all.s3.style.color="yellow";
document.all.s3.style.margin=z;
document.all.s2.style.color="red";
document.all.s2.style.margin=x;

if (y>3){
y=0}
if (z>3){
z=0}
if (x>3){
x=0}
setTimeout("l(),1")
}

l()

</SCRIPT>

<script>

window.onload=function(){alert('Bienvenido a esta pagina');}

window.onunload=function(){alert('Vuelva en otro momento');}

</script>
<html>

<head>
<title>Efecto matrix</title>

<p align="center"><b>Efecto matrix

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
<div id="matrix">Dynamic Drive</div>
<A HREF="prueba.htm" TARGET="_self">
https://www.cuidadoconelperro.com.mx  
</A>
<style type="text/css">
.fondotabla{
background-attachment: fixed;
background-image: url(imagen.gif);
background-repeat: no-repeat;
background-position: center center;}
</style>
<table class="fondotabla">
</table>
<table width="200" border="1">
  <tr>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>


<input type="button" style="background-image:url('Pantalón mezclilla operativo  hombre frente.jpg)"/> 
</body>
</html>


  

