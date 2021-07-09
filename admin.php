<title>Admin</title>
<meta name="google" value="notranslate">
<link rel="preconnect" href="https://fonts.gstatic.com">
   <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
      <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
         <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<style>
*{
  margin: 0;
  outline: none;
}
body{
  background:#2a2b3d;
      font-family: 'Roboto', sans-serif;
      color: #fff;
}
  .material-icons{
    color: red;
  }
  a{
    text-decoration: none;
    color: #71bafa;
  }
  .left{
    height: 100%;
    background: #252636;
    width: 13%;
 position: fixed;
    font-size: 13px;
  }
  .top{
    height: 50px;
    background: #6f6486;
    width: 87%;
    left: 13%;
    position: absolute;
  }
  .divs{
    position: absolute;
    left: 15%;
    top: 10%;
        border-radius: .3rem!important;
            background: #313348;
            width: 81%;
            height: 60px;
  }
</style>

<div class="left">
  <center><br>
  <img src="https://lh3.googleusercontent.com/a-/AOh14GjqZACjocwGSwfL0XGRVCa-EsZ89xgIiHFQGCovaw=s600-k-no-rp-mo" width="50px" style="border-radius: 50px;"><br><br>
  <p>STAPE</p><br>
  <p style="color:gold;"><span style="color:gold; font-size: 10px;" class="material-icons">
build
</span> Создатель сата</p>
<p style="color:purple;"><span style="color:gold; font-size: 10px;" class="material-icons">
star
</span> Модератор</p>
<br>
<hr style="background: #2a2b3c; border: none;height: 1px;"><br>
<p>Чаты</p><br>
  <p><a href="index.php" style="color: #9CA3AF;">1. Основной чат</a></p>
  <p><a href="chat.php" style="color: #9CA3AF;">2. Чат бот</a></p>
<br>
<div style="color: #9CA3AF; font-size: 13px; text-align: center;"> 
<?php
//Установка счетчика - ставится в начале страницы
//Для настроек - указать путь, где будет создаваться файл счетчика
$files = $_SERVER['DOCUMENT_ROOT']."count.txt";
if ( !file_exists($files) ) {file_put_contents($files, date('d.m.Y').":0,0%%%0,0"); } //создаем и записываем данные по умолчанию, если файла нет
else {
$rez = file_get_contents($files);
$rez = explode("%%%", $rez);
//В массиве $rez[0]: 19.05.2014: 0, 0 - т.е. дата, кол просм, кол посет.
//В массиве $rez[1]: 0, 0 - кол просм, кол посет. за все время
$rezall = explode(",", $rez[1]);
//echo $rezall[0]; //Просмотры за все врем
//echo $rezall[1]; //Посетители за все время
$rezdata = preg_replace('/:.*/', '', $rez[0]); //В $rezdata только дата типа 19.05.2014
$rezpr = preg_replace('/.*:/', '', $rez[0]); //В $rezpr только данные типа 0,0
$rezpr = explode(",", $rezpr); //В $rezpr[0] - просмотры, $rezpr[1] - посетители
if (strtotime(date('d.m.Y')) == strtotime($rezdata)) {
$rezpr[0] = $rezpr[0] + 1; //просмотры +1
if (!isset($_COOKIE['visitors'])) {
setcookie("visitors", "yes", time()+3600*24); //уникальный посетитель на 24 часа
$rezpr[1] = $rezpr[1] + 1; } //посетитель +1
file_put_contents($files, date('d.m.Y').":".$rezpr[0].",".$rezpr[1]."%%%".$rezall[0].",".$rezall[1].""); //записываем результат в файл
}
else { //Дата устаревшая Обнуляем счетчик за сегодня, а старые данные добавляем к за все время
$rezall[0] = $rezpr[0] + $rezall[0]; //сохраняем все просмотры
$rezall[1] = $rezpr[1] + $rezall[1]; //сохраняем всех посетителей
if (!isset($_COOKIE['visitors'])) {
setcookie("visitors", "yes", time()+3600*24); //уникальный посетитель на 24 часа
$ynikuser = 1; } //посетитель +1
else $ynikuser = 0;
file_put_contents($files, date('d.m.Y').":1,".$ynikuser."%%%".$rezall[0].",".$rezall[1].""); //записываем результат в файл
}
}

//Вывод данных счетчика
$rezview = file_get_contents($files);
$rezview = explode("%%%", $rezview);
$rezview = preg_replace('/.*:/', '', $rezview[0]);
$rezview = explode(",", $rezview);


echo " Посетителей: ".$rezview[1];
?>
<br>
<?php
  echo "Просмотров: ".$rezview[0];
 ?>
</div>
  </center>
</div>

<div class="top"><p style="margin-left: 10px; margin-top:15px;">ADMIN<p5 style="color: #ffc107;">Panel</p5></p></div>



<div class="divs">
  



<?

include "config.php";

if (!isset($_GET['pswrd'])) 

{echo'
<style>
  :root {
  --dg: #101212;
  --lg: #C0B0B5;
  --g: #0F6;
  --c: #0FF;
  --m: #F03;
  --p: #0FF;
}

@keyframes colorshift {
  0% {
    --p: var(--g);
  }
  50% {
    --p: var(--c);
  }
  100% {
    --p: var(--m);
  }
}

html,
body {
  width: 100%;
  height: 100%;
  margin: 0;
  background-color: var(--dg);
  font-family: "Aldrich", sans-serif;
  font-color: var(--lg);
  transition: color 1s;
  animation: colorshift 5s infinite;
  animation-direction: alternate;
}

.container {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: auto;
}

.float {
  margin: auto;
}

.fixed {
  width: 100px;
  height: 50px;
  background-color: transparent;
}

.stack-g {
  padding: 10px;
  border-radius: 10px;
  box-shadow: 2px 2px 1px var(--p), 4px 4px 0 var(--dg), 6px 6px 1px var(--p);
}

input,
button {
  display: block;
  border-radius: 5px;
  border-style: none;
  padding: 5px;
  margin: 5px;
  background-color: var(--dg) !important;
  box-shadow: 1px 1px 1px var(--p) inset;
  font-size: 1.5em;
  font-family: "Aldrich", sans-serif;
  font-weight: bold;
  color: var(--lg);
  outline: none;
/*   text-shadow: 2px 2px 1px var(--p); */
}

input:hover,
button:hover {
  box-shadow: 2px 2px 2px var(--p) inset;
}

button {
  display: inline-block;
}

.error-text {
  text-shadow: 1px 1px 2px #F00;
}

.inline {
  display: inline-block;
  vertical-align: middle;
  align-contet: center;
}

.divider {
  border-radius: 5px;
  border-style: solid;
  border-width: 2px;
  border-color: var(--dg);
  height: 100px;
  box-shadow: 2px 2px 1px var(--p);
}
</style>
<body>
  <div class=container style="position:absolute; top:400%;">
  <div class=float>
    <div class=stack-g>
      <div class=inline id=login>
      <form action="admin.php" method=GET name=pass>
        <input type=password  name=pswrd placeholder=Password>
        <button type=submit>Войти</button>
        </form>
      </div>

    </div>
  </div>
</div>
</body>


<SCRIPT language=JavaScript>document.pass.pswrd.focus();</SCRIPT><BR><BR><BR>';}
else {if ($_GET['pswrd']=="$password")
{ 


if (isset($_GET['id'])) { $page=$_GET['page'];
$file=file("data/news.txt"); $itogo=count($file)-1;
if ($msginout==1) {$id=$itogo-$_GET['id'];} else {$id=$itogo-$_GET['id']+2;}
if ($itogo<1) {print"$back. У вас должна быть хотя бы одна новость на сайте"; exit;}

$fp=fopen("data/news.txt","w");
flock ($fp,LOCK_EX);
for ($i=0;$i< sizeof($file);$i++) { if ($i==$id) {unset($file[$i]);} }
fputs($fp, implode("",$file));
flock ($fp,LOCK_UN);
fclose($fp);

Header("Location: admin.php?pswrd=$password&page=$page"); exit; }


else {

if (isset($_GET['page'])) {$page=$_GET['page'];} else {$page="1";}

print "<html><head>
<title>$gname</title>
<META HTTP-EQUIV='Pragma' CONTENT='no-cache'>
<META HTTP-EQUIV='Cache-Control' CONTENT='no-cache'>
<META content='text/html; charset=windows-1251' http-equiv=Content-Type>
</head>
<body>
<center>
<br>

<TABLE width=780 align=center cellPadding=0 cellSpacing=0><TBODY>
<TD>
<table width=100%><TR>";

print"<TD align=center><B>";
$lines=file("data/news.txt");
$itogo=count($lines);
$maxi=$itogo-1;
print "<b><font color=#ffffff size=3 face=verdana>Создано новостей <font color='red'>$itogo</font> </b></font>";






print"
</TD></TR></TABLE>
</TD>
</TR>
</TBODY></TABLE>";





if ((!isset($_GET['event'])) or (isset($_GET['event'])) & ($_GET['event']!="add"))  {
$lines=file("data/news.txt");
$itogo=count($lines);
$maxi=$itogo-1;
print "
<TABLE width=780 align=center cellPadding=0 cellSpacing=0><TBODY>

<center><table ><tr><td>";  



?>
</div>
<br><br>


<center>
  <a href="https://docs.google.com/forms/d/1M4ClgF6r0Bpc_i6bNuneC0M6hpAuzI4d8loT0BIwh8U/edit" >Редактировать заявки</a>
<TABLE style="background:#313348 ; width: 450px; padding: 20px;border-radius: .3rem!important;" >
<TR>
<TD>
<TABLE cellSpacing=0 cellPadding=1 width="100%" align=center border=0>
<TR ><TD align=middle colSpan=2><FONT face=verdana color=#9CA3AF size=1><B>Форма создания новости</B></FONT></TD></TR>
<form action="status.php" method=post style="">
<TR>
<TD align=middle><INPUT style="height: 30px; border-radius: 20px;border: none; margin-top:20px;" class=name onblur="id=''" style="WIDTH: 314px" onfocus=id=className size=48 name=name ? placeholder="Название:"></TD></TR>
<TR>
<TD align=middle><INPUT style="height: 30px; border-radius: 20px;border: none;" class=name onblur="id=''" style="WIDTH: 314px" onfocus=id=className size=48 name=url ? placeholder="Источник:"></TD></TR>
<TR>
<TD align=middle><textarea style="width: 340px; border-radius: 20px;border: none;" class=name onblur="id=''"  onfocus=id=className style="WIDTH: 314px; height: 100px" cols=50 rows=4 size=500 name=mes placeholder="Описание:"></textarea></TD></TR>

<TR>
<TD align=middle><INPUT style="height: 30px; border-radius: 20px;border: none;" class=name onblur="id=''" style="WIDTH: 314px" onfocus=id=className size=48 name=img ? placeholder="Ссылка на картинку:"></TD></TR>


<TR>
<TD align=center colspan=2>
<TABLE>
<TR><TD><INPUT class=submit style="CURSOR: hand;height: 30px; border-radius: 20px;border: none; color:#fff; background: #252636; padding:5px;" type=submit value="Создать новость"></TD></TR></TABLE></TD></TR>

</FORM></TABLE></TD></TR></FONT></TD></TR></TABLE>
</center>

<br><br><br><center><p style="font-size: 17px;">Созданные новости</p></center>

<?php


if (isset($_GET['rd']))  {
if ($msginout==1) {$rd=$maxi-$_GET['rd'];} else {$rd=$maxi-$_GET['rd']+2;}

$dt=explode("|",$lines[$rd]);
$dt[0]=str_replace("<br>", "\r\n", $dt[0]);


}
else 

print"</tr></td></table></TD></TR></TBODY></TABLE>";


if ($page=="0") {$page="1";} else {$page=abs($page);}

$maxpage=ceil(($maxi+1)/$qq); if ($page>$maxpage) {$page=$maxpage;}

if ($msginout=="1") 
{ $fm=$qq*($page-1); if ($fm>$maxi) {$fm=$maxi-$qq;}
  $lm=$fm+$qq; if ($lm>$maxi) {$lm=$maxi+1;} }
else 
{ $fm=$maxi-$qq*($page-1); if ($fm<"0") {$fm=$qq;}
  $lm=$fm-$qq; if ($lm<"0") {$lm="-1";} }


do { $dt = explode("|", $lines[$fm]);
if ($msginout=="1") {$fm++;} else {$fm--;}
$num=$itogo-$fm;



print"
<TABLE width=780 align=center cellPadding=0 cellSpacing=0><TBODY>

<br>
<em>$dt[0]</em><BR>
<div align=right>
<table border=0 bordercolor='1f2f3f'><TR><TD><a href='admin.php?pswrd=$password&id=$num&page=$page'><b><span class=material-icons>
delete
</span></b></a>
</B></TD></TR></TABLE></div></TD></TR></TBODY></TABLE>
";

if ($msginout=="1") {$whm=$fm; $whe=$lm;} else {$whm=$lm; $whe=$fm;}
} while($whm < $whe);
print "</td></tr></table>";


}

}


}


}

?>
