<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * { padding:0px; margin:0px; }
body{font-family:arial;font-size:13px}
#chatBox
{
width:400px;
border:1px solid #000;
margin:5px;
}
#chat 
{
max-height:220px;
overflow-y:auto;
max-width:400px;
}
#chat > ul > li
{
padding:3px;
clear:both;
padding:4px;
margin:10px 0px 5px 0px;
overflow:auto
}
#chatMessages
{
list-style:none
}
#chatMessages > li > img
{ width:35px;float:left
}
#chatMessages > li > span
{
width:300px;
float:left;
margin-left:5px
}
#chatData 
{
padding:5px;
margin:5px;
border-radius:5px;
border:1px solid #999;
width:300px
}
#trig 
{
padding: 4px;
border: solid 1px #333;
background-color: #133783;
color:#fff;
font-weight:bold
}
        </style>
</head>
<body>
    

<div id='chatBox'>
<div id='chat'>
<ul id='chatMessages'>
//Old Messages
<li>
<img src="small.jpg"/><span>Hello Friends</span>
</li>
<li>
<img src="small.jpg"/><span>How are you?</span>
</li>

</ul>
</div>
<input type="text" id="chatData" placeholder="Message" />
<input type="button" value=" Send " id="trig" />
</div>
</body>
</html>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
$("#chatData").focus();
//Appending HTML5 Audio Tag in HTML Body
$('<audio id="chatAudio"><source src="notify.ogg" type="audio/ogg"><source src="notify.mp3" type="audio/mpeg"><source src="notify.wav" type="audio/wav"></audio>').appendTo('body');

$("#trig").on("click",function(){
var a = $("#chatData").val().trim();
if(a.length > 0)
{
$("#chatData").val('');
$("#chatData").focus();
$("<li></li>").html('<img src="small.jpg"/><span>'+a+'</span>').appendTo("#chatMessages");
// Scrolling Adjustment 
$("#chat").animate({"scrollTop": $('#chat')[0].scrollHeight}, "slow");
$('#chatAudio')[0].play();
}
});
});
</script>