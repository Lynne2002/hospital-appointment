<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/95dc93da07.js"></script>
        <script src="https://kit.fontawesome.com/ad0d310a4a.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .agents .box-container{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
    justify-content: center;
}

.agents .box-container .box{
    background:#fff;
    text-align: center;
    border:.1rem solid rgba(0,0,0,.2);
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
    border-radius: .5rem;
    padding:2rem;
    position: relative;
    width:26rem;
}

.agents .box-container .box .fa-envelope{
    position: absolute;
    top:1.8rem; left:2rem;
    color:#333;
    font-size: 2rem;
}

.agents .box-container .box .fa-envelope:hover{
    color:var(--red);
}

.agents .box-container .box .fa-phone{
    position: absolute;
    top:1.8rem; right:2rem;
    color:#333;
    font-size: 2rem;
}

.agents .box-container .box .fa-phone:hover{
    color:var(--red);
}

.agents .box-container .box img{
    border-radius: 50%;
    box-shadow: 0 0 0 .5rem rgba(0,0,0,.1);
    object-fit: cover;
    height:10rem;
    width:10rem;
    margin:1rem 0;
}

.agents .box-container .box h3{
    font-size: 2rem;
    color:#333;
}

.agents .box-container .box span{
    font-size: 1.7rem;
    color:var(--red);
}

.agents .box-container .box .share{
    padding-top: 2rem;
}

.agents .box-container .box .share a{
    margin:0 .3rem;
    height:4rem;
    width:4rem;
    line-height: 4rem;
    background:#f7f7f7;
    color:#666;
    border-radius: .5rem;
    font-size: 2rem;
}

.agents .box-container .box .share a:hover{
    background:var(--red);
    color:#fff;
}



        </style>
</head>
<body>
  

<section class="agents" id="agents">

<h1 class="heading">PROFESSIONAL<span>&nbsp;&nbsp;AGENTS</span> </h1>

<div class="box-container">
<?php foreach($agents as $item):?>
    <div class="box">
    
        <a href="https://mail.google.com<?=$item['email']?>" class="fas fa-envelope"></a>
        <a href="<?=$item['phone']?>" class="fas fa-phone"></a>
        <img src="<?= "../uploads/".$item['agent_image']; ?>"alt="">
        <h3><?=$item['first_name']?>&nbsp;<?=$item['last_name']?></h3>
        <span>agent</span>
        <div class="share">
            <a href="<?=$item['facebook']?>" class="fab fa-facebook-f"></a>
            <a href="<?=$item['twitter']?>" class="fab fa-twitter"></a>
            <a href="<?=$item['instagram']?>" class="fab fa-instagram"></a>
            <a href="<?=$item['LinkedIn']?>" class="fab fa-linkedin"></a>
        </div>
       
    </div>
    <?php endforeach?>
    
</section>


</body>
</html>