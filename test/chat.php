<?php
session_start();
 
if(!isset($_SESSION['kp'])) {
  $_SESSION['kp'] = 999999999;
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
   
       <style>
       ::-webkit-scrollbar{
            display: none;
       }
            *{
                  outline: none;
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
height: 90%; 
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
                        background: #2b5278;
      }
      #hover{
            cursor: pointer;
            width: 100%;
            height: 70px;
            margin-top:45px;
      }
      #hover:hover{
            background: #203345;
      }
       </style>

<style>


.container {
      width: 1000px;
}

.chat {
      
      height: 570px;
      overflow-y: scroll;
      border-radius: 10px 0 0 0;
}

.chat div {
      margin: 10px 12px 15px;
      line-height: 20px;
}

.chat .party {
      font-weight: bold;
}

.chat .you {
      color: red;
}

.chat .other {
      color: blue;
}

.chat .text {
      
}

.busy {
      position: absolute;
      padding: 3px 0;
      color: #fff;
      display: none;
      font-size: 11px;
}

.input {
      position: absolute;
      bottom:0px;
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
            <p style="color: #f5f5f5; font-size: 20px; margin-left: 0px;">Чат бот</p>

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

           <a href="index.php"> <div id="hover">
                  <svg style="position: absolute;top:58px;left: 65px;"
 xmlns="http://www.w3.org/2000/svg"
 xmlns:xlink="http://www.w3.org/1999/xlink"
 width="0.208in" height="0.194in">
<image  x="0px" y="0px" width="15px" height="14px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAOCAMAAADHVLbdAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAh1BMVEX///9KUVnY2du0t7qtsbTz8/Px8vKPlJn09PT19fVOVl22ubzt7e59g4i8vsG/wcO+wMPMztDv7++Rlprw8PDh4uPDxcjm5+jw8fHi4+SssLPm5udUW2JETFSeoqbn6Ol0eoDk5OVla3LS09Xy8vPg4eI9RU7Jy82gpKiGi5BPV17X2Nr////m0Jl8AAAAAXRSTlMAQObYZgAAAAFiS0dEAIgFHUgAAAAHdElNRQflBhAWCTXK3iIGAAAAZ0lEQVQI12NgQAKMTMzIXAYWVjZkLjsHJyeCx8XNwwni8/LxA4GAoBAnCDAIi3AiAwZRTvx8dPVA88TEOSUEJWF8IJDilJaRlZPngPEVOBWBpJIyjM+gogoi1dQ5VCB8DU0wpaXNDABajwc95mel7QAAAABJRU5ErkJggg==" />
</svg>
                  <p style="color: #f5f5f5; position: absolute; top:55px;left: 90px;">Основной чат</p>
                  <p style="color: #7f917f; position: absolute; top:80px;left: 65px;">Чат с основной информацией по сайту </p>
                  <img src="https://lh3.googleusercontent.com/a-/AOh14GjqZACjocwGSwfL0XGRVCa-EsZ89xgIiHFQGCovaw=s600-k-no-rp-mo" width="50px" style="border-radius: 50px;position: absolute; top:55px;">
            </div></a>

                        <div class="hover">
                  <svg style="position: absolute;top:125px;left: 65px;"
 xmlns="http://www.w3.org/2000/svg"
 xmlns:xlink="http://www.w3.org/1999/xlink"
 width="0.208in" height="0.194in">
<image  x="0px" y="0px" width="15px" height="14px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAOCAMAAADHVLbdAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAh1BMVEX///9KUVnY2du0t7qtsbTz8/Px8vKPlJn09PT19fVOVl22ubzt7e59g4i8vsG/wcO+wMPMztDv7++Rlprw8PDh4uPDxcjm5+jw8fHi4+SssLPm5udUW2JETFSeoqbn6Ol0eoDk5OVla3LS09Xy8vPg4eI9RU7Jy82gpKiGi5BPV17X2Nr////m0Jl8AAAAAXRSTlMAQObYZgAAAAFiS0dEAIgFHUgAAAAHdElNRQflBhAWCTXK3iIGAAAAZ0lEQVQI12NgQAKMTMzIXAYWVjZkLjsHJyeCx8XNwwni8/LxA4GAoBAnCDAIi3AiAwZRTvx8dPVA88TEOSUEJWF8IJDilJaRlZPngPEVOBWBpJIyjM+gogoi1dQ5VCB8DU0wpaXNDABajwc95mel7QAAAABJRU5ErkJggg==" />
</svg>
                  <p style="color: #f5f5f5; position: absolute; top:122px;left: 90px;">Чат бот</p>
                  <p style="color: #7f917f; position: absolute; top:147px;left: 65px;">Ответит на все ваши вопросы</p>
                  <img src="https://lh3.googleusercontent.com/a-/AOh14GjqZACjocwGSwfL0XGRVCa-EsZ89xgIiHFQGCovaw=s600-k-no-rp-mo" width="50px" style="border-radius: 50px;position: absolute; top:122px;">
            </div>
      </div>




<div class="prokrutka" style="position: absolute; left: 38%;">

      <br><br>

 <div class="container">

  <div class="chat"></div>
  <div class="busy"></div>
  <div class="input" >
    <input type="text" placeholder="Пообщаться со мной!" style="width: 750px; padding:15px; border-radius: 10px; border:none; background: #17212b; color:#fff;" />
    <a style=""><img title="Отправить" style="position: absolute; cursor: pointer;" src="send.png"/></a>
  </div>
</div>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-8216c69d01441f36c0ea791ae2d4469f0f8ff5326f00ae2d00e4bb7d20e24edb.js"></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
      <script id="rendered-js" >

function chatBot() {

  
  this.input;

  
  this.respondTo = function (input) {

    this.input = input.toLowerCase();

    if (this.match('(привет|ку|здарова)'))
    return "Привет";

    if (this.match('(как дела|как жизнь)'))
      return "Хорошо, у тебя как?";

            if(this.match('help'))
                  return "Чем тебе помочь?";

            if(this.match('command|команды'))
                  return "Я не cmd что бы давать тебе команды";

            if(this.match('suck my dick|соси мой член|сука|бля|пошел нахуй|fuck|bitch|заебал|лох'))
                  return "Выражайся культурно";

            if(this.match('сам такой'))
                  return "Я вообщето робот";

                        if(this.match('и что'))
                  return "И все";

                        if(this.match('Ты слава мэрлоу'))
                  return "Ты Егор вкид?";

                              if(this.match('Играть|давай поиграем|игра|game'))
                  return "Я не умею играть не во что";

                  if(this.match('осуждаю, асуждаю'))
                  return "Кого, меня?";

                  if(this.match('Да'))
                  return "Провода";
                  if(this.match('Нет/не'))
                  return "Ответ";

                        if(this.match('Кто твой любимый исполнитель?'))
                  return "MORGENSHTERN конечно же";

                  if(this.match('Дальше'))
                  return "Больше";

                  if(this.match('Ок'))
                  return "Хорошо";

          

                  if(this.match('ты лучший|ты хороший|умный|лучший|хороший'))
                  return "Спасибо ты тоже";

                  if(this.match('я пошутил'))
                  return "хахахах, я тоже!";

                  if(this.match('Как меня зовут'))
                  return "Незнаю, но думаю имя классное";

    if (this.input == 'noop')
    return;

    return input + ", Я не понимаю что это";
  };

  
  this.match = function (regex) {

    return new RegExp(regex).test(this.input);
  };
}


$(function () {

 
  var you = 'You';
  var robot = 'Chatbot';

 
  var delayStart = 400;
  var delayEnd = 800;

  
  var bot = new chatBot();
  var chat = $('.chat');
  var waiting = 0;
  $('.busy').text(robot + ' is typing...');

 
  var submitChat = function () {

    var input = $('.input input').val();
    if (input == '') return;

    $('.input input').val('');
    updateChat(you, input);

    var reply = bot.respondTo(input);
    if (reply == null) return;

    var latency = Math.floor(Math.random() * (delayEnd - delayStart) + delayStart);
    $('.busy').css('display', 'block');
    waiting++;
    setTimeout(function () {
      if (typeof reply === 'string') {
        updateChat(robot, reply);
      } else {
        for (var r in reply) {
          updateChat(robot, reply[r]);
        }
      }
      if (--waiting == 0) $('.busy').css('display', 'none');
    }, latency);
  };

  var updateChat = function (party, text) {

    var style = 'you';
    if (party != you) {
      style = 'other';
    }

    var line = $('<div><span class="party"></span> <span class="text"></span></div>');
    line.find('.party').addClass(style).text(party + ':');
    line.find('.text').text(text);

    chat.append(line);

    chat.stop().animate({ scrollTop: chat.prop("scrollHeight") });

  };


  $('.input').bind('keydown', function (e) {
    if (e.keyCode == 13) {
      submitChat();
    }
  });
  $('.input a').bind('click', submitChat);


  updateChat(robot, 'Привет, напиши мне что нибудь');

});

    </script>

  
</body></html>

