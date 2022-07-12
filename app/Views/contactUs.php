<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style media="screen">
  @import url('https://fonts.googleapis.com/css?family=Open+Sans');

*{
margin: 0;
padding: 0;
box-sizing: border-box;
outline: none;
text-decoration: none;
font-family: 'Open Sans', sans-serif;
}

body{
  background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url(/assets/Images/login.png);
background-size: cover;
width: 100%;
height: 100vh;
}

.wrapper{
max-width: 720px;
width: 100%;
height: auto;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
padding: 20px 20px;
box-shadow: -4px -4px 11px #c8c2c2a2,
            4px 4px 9px rgba(147, 149, 151, 0.871);
}

.wrapper h2{
color: #fff;
text-align: center;
margin-bottom: 30px;
text-transform: uppercase;
letter-spacing: 3px;
}

.wrapper .form .form_container{
display: flex;
justify-content: space-between;
margin-bottom: 30px;
}

.wrapper .form .form_container .form_left,
.wrapper .form .form_container .form_right{
width: 48%;
}

.wrapper .form .input_field input[type="text"],
.wrapper .form textarea{
width: 100%;
padding: 14px;
border: none;
border-radius: 5px;
margin-bottom: 15px;
border: 1.5px solid rgba(255, 255, 255, 0.438);
border-radius: 3px;
background: rgba(105, 105, 105, 0.25);
color:white;
}

.wrapper .form textarea{
height: 90%;
resize: none;
}

.wrapper .form .btn{
width: 200px;
background: rgba(255, 255, 255, 0.164);
backdrop-filter: blur(10px);
margin: 0 auto;
padding: 13px;
font-size: 18px;
border-radius: 4px;
letter-spacing: 3px;
text-align: center;
}

.wrapper .form .btn a{
color: #fff;
}
.btns{
    width: 200px;
    padding: 15px 0;
    text-align: center;
    margin: 20px 10px;
    border-radius: 25px;
    font-weight: bold;
    border: 2px solid #009688;
    background: transparent;
    color: #fff;
    cursor:pointer;
    position: relative;
    overflow: hidden;
}
span{
    background: #009688;
    height: 100%;
    width:0;
    border-radius: 25px;
    position: absolute;
    left:0;
    bottom:0;
    z-index: -1;
    transition: 0.5s;
}
.btns:hover span{
    width:100%
}
.btns:hover{
    border:none;
}

@media screen and (max-width: 460px){
.wrapper .form .form_container{
  flex-direction: column;
}
.wrapper .form .form_container .form_left,
.wrapper .form .form_container .form_right{
  width: 100%;
}
.wrapper .form textarea{
  height: 100px;
}

}

  </style>
</head>
<body>
  <form action="https://formspree.io/f/mjvlpkpg" method ="POST">
  <div class="wrapper">
    <h2>contact us form</h2>
    <div class="form">
      <div class="form_container">
        <div class="form_left">
        <div class="input_field">
          <input type="text" name="Name" placeholder="Your Name*">
        </div>
        <div class="input_field">
          <input type="text" name="Email" placeholder="Your Email*">
        </div>
        <div class="input_field">
          <input type="text" name="Subject"  placeholder="Subject*">
        </div>
      </div>
      <div class="form_right">
        <textarea name="Message" placeholder="Your Message*"></textarea>
      </div>
      </div>
      <button class="btns" name="submit" id="submit" type="submit"><span></span>SEND EMAIL</button>
    </div>
  </div>
  </form>
</body>
</html>