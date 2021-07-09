<?php
session_start();
 
if(!isset($_SESSION['kp'])) {
  $_SESSION['kp'] = 12315236;
}
 
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $_SESSION['kp']++;
}
?>
<!DOCTYPE html>
<html>
<head>
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
      <meta name="google" value="notranslate">
      <meta charset="utf-8">
      <title>Новостная лента</title>
       <?php include ("config.php"); ?>
       <style>
       ::-webkit-scrollbar{
            display: none;
       }
            *{
                  margin: 0;
            }
            body{
      margin: 0; 
    height: 100%; 
    background: url(background.jpg) fixed;
    background-size: cover; 
    font-family: 'Roboto', sans-serif;
    color: #fff;
}
.prokrutka {
height: 104%; 
width: 1030px;
background: #ffffff00; 
overflow-x: scroll;
overflow-y: scroll; 
text-align: left;
}
      a{
            color: #71bafa;
            text-decoration: none;
      }
      .up-menu{
            position: relative;
            left: 35%;
            width: 65%;
            height: 45px;
            background: #17212b;

      }
      .hover{
            cursor: pointer;
            width: 100%;
            height: 70px;
            margin-top: 45px;
            background: #2b5278;
      }
      #hover{
            cursor: pointer;
            width: 100%;
            height: 70px;
      }
      #hover:hover{
            background: #203345;
      }


.dropdown-content {
    display: none;
    position: absolute;
    background-color: #17212b;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #0b141c;}

.dropdown:hover .dropdown-content {display: block;}

       </style>
</head>
<body>
      <div class="up-menu">
            <p style="color: #f5f5f5; font-size: 20px; margin-left: 0px;">Основной чат</p>

            <p style="color: #7f917f; font-size: 12px;margin-top:3px;margin-left: 10px;"><p style="background: #ffffff00;border: none;color: #7f917f; font-size: 12px;width: 203px;"><?=$_SESSION['kp']?> подписчиков</p></p>

             <form method="post">
    <button style="background:#203345; border:none; color:#fff; padding:10px; border-radius:20px; position:absolute; top:3px; right:10px;cursor:pointer; " type="submit">Подписаться</button>
  </form>
           
      </div>
      <div style="background: #17212b; position: fixed;width: 35%; height: 110%;top:0;">



<div class="dropdown">
      <svg style="position: absolute; left:10px; top:12px; cursor: pointer;"class="dropbtn"
 xmlns="http://www.w3.org/2000/svg"
 xmlns:xlink="http://www.w3.org/1999/xlink"
 width="0.306in" height="0.222in">
<image  x="0px" y="0px" width="22px" height="16px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAQBAMAAADgw5IVAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAD1BMVEX///9CTVdseINrd4L////ZRBlYAAAAAXRSTlMAQObYZgAAAAFiS0dEAIgFHUgAAAAHdElNRQflBhAWHh366A5qAAAAHElEQVQI12MQRAAGJQRAYZMKqGWOMQKgmIPkZgDslwr22fLVKAAAAABJRU5ErkJggg==" />
</svg>
  <div class="dropdown-content">
    <a style="color:#fff;" href="https://forms.gle/DA6tCZkenTCambg36">Запрос на свой чат</a>
    <a style="color:#fff;" href="https://www.youtube.com/channel/UCpSg_NBPjrI5c-g1BPFWg_w">Создатель: STAPE</a>
    <p style="color:#fff;">Версия: 1.0</a>
  </div>
</div>


            <div class="hover">
                  <svg style="position: absolute;top:58px;left: 65px;"
 xmlns="http://www.w3.org/2000/svg"
 xmlns:xlink="http://www.w3.org/1999/xlink"
 width="0.208in" height="0.194in">
<image  x="0px" y="0px" width="15px" height="14px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAOCAMAAADHVLbdAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAh1BMVEX///9KUVnY2du0t7qtsbTz8/Px8vKPlJn09PT19fVOVl22ubzt7e59g4i8vsG/wcO+wMPMztDv7++Rlprw8PDh4uPDxcjm5+jw8fHi4+SssLPm5udUW2JETFSeoqbn6Ol0eoDk5OVla3LS09Xy8vPg4eI9RU7Jy82gpKiGi5BPV17X2Nr////m0Jl8AAAAAXRSTlMAQObYZgAAAAFiS0dEAIgFHUgAAAAHdElNRQflBhAWCTXK3iIGAAAAZ0lEQVQI12NgQAKMTMzIXAYWVjZkLjsHJyeCx8XNwwni8/LxA4GAoBAnCDAIi3AiAwZRTvx8dPVA88TEOSUEJWF8IJDilJaRlZPngPEVOBWBpJIyjM+gogoi1dQ5VCB8DU0wpaXNDABajwc95mel7QAAAABJRU5ErkJggg==" />
</svg>
                  <p style="color: #f5f5f5; position: absolute; top:55px;left: 90px;">Основной чат</p>
                  <p style="color: #7f917f; position: absolute; top:80px;left: 65px;">Чат с основной информацией по сайту </p>
                  <img src="https://lh3.googleusercontent.com/a-/AOh14GjqZACjocwGSwfL0XGRVCa-EsZ89xgIiHFQGCovaw=s600-k-no-rp-mo" width="50px" style="border-radius: 50px;position: absolute; top:55px;">
            </div>

                        <a href="chat.php"><div id="hover">
                  <svg style="position: absolute;top:125px;left: 65px;"
 xmlns="http://www.w3.org/2000/svg"
 xmlns:xlink="http://www.w3.org/1999/xlink"
 width="0.208in" height="0.194in">
<image  x="0px" y="0px" width="15px" height="14px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAOCAMAAADHVLbdAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAh1BMVEX///9KUVnY2du0t7qtsbTz8/Px8vKPlJn09PT19fVOVl22ubzt7e59g4i8vsG/wcO+wMPMztDv7++Rlprw8PDh4uPDxcjm5+jw8fHi4+SssLPm5udUW2JETFSeoqbn6Ol0eoDk5OVla3LS09Xy8vPg4eI9RU7Jy82gpKiGi5BPV17X2Nr////m0Jl8AAAAAXRSTlMAQObYZgAAAAFiS0dEAIgFHUgAAAAHdElNRQflBhAWCTXK3iIGAAAAZ0lEQVQI12NgQAKMTMzIXAYWVjZkLjsHJyeCx8XNwwni8/LxA4GAoBAnCDAIi3AiAwZRTvx8dPVA88TEOSUEJWF8IJDilJaRlZPngPEVOBWBpJIyjM+gogoi1dQ5VCB8DU0wpaXNDABajwc95mel7QAAAABJRU5ErkJggg==" />
</svg>
                  <p style="color: #f5f5f5; position: absolute; top:122px;left: 90px;">Чат бот</p>
                  <p style="color: #7f917f; position: absolute; top:147px;left: 65px;">Ответит на все ваши вопросы</p>
                  <img src="https://lh3.googleusercontent.com/a-/AOh14GjqZACjocwGSwfL0XGRVCa-EsZ89xgIiHFQGCovaw=s600-k-no-rp-mo" width="50px" style="border-radius: 50px;position: absolute; top:122px;">
         </div></a>
      </div>




<div class="prokrutka" style="position: absolute; left: 38%;">

      <br><br>

<?php

if (file_exists("data/news.txt")){
$t = file("data/news.txt") or exit("");

}else{
$fp = @fopen("data/news.txt","w") or exit("ÎØÈÁÊÀ");
fclose($fp);
}
if (!empty($t)){

for($i=(count($t)-1);$i>=0;$i--){
echo $t[($i)];
}
}

?>
</div>

</body>
</html>

<?php require_once("include_options.php");?>
