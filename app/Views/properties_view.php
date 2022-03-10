<!DOCTYPE html>
<script src="https://kit.fontawesome.com/95dc93da07.js"></script>
        <script src="https://kit.fontawesome.com/ad0d310a4a.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<style>
    .featured .box-container{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
}

.featured .box-container .box{
    border:.1rem solid rgba(0,0,0,.2);
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
    border-radius: .5rem;
    overflow:hidden;
    background:#fff;
    flex:1 1 30rem;
}

.featured .box-container .box .image-container{
    overflow:hidden;
    position: relative;
    width: 100%;
    height: 25rem;
}

.featured .box-container .box .image-container img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: .2s linear;
}

.featured .box-container .box:hover .image-container img{
    transform: scale(1.1);
}

.featured .box-container .box .image-container .info{
    position: absolute;
    top:1rem; left:0;
    display: flex;
}

.featured .box-container .box .image-container .info h3{
    font-weight: 500;
    font-size: 1.4rem;
    color:#fff;
    background:rgba(0,0,0,.3);
    border-radius: .5rem;
    padding:.5rem 1.5rem;
    margin-left: 1rem;
}

.featured .box-container .box .image-container .icons{
    position: absolute;
    bottom:1rem; right:0;
    display: flex;
}

.featured .box-container .box .image-container .icons a{
    font-size: 1.4rem;
    color:#fff;
    display: flex;
    border-radius: .5rem;
    background: rgba(0,0,0,.3);
    margin-right: 1rem;
    padding:.7rem;
}

.featured .box-container .box .image-container .icons a h3{
    font-weight: 500;
    padding-left: .5rem;
}

.featured .box-container .box .image-container .icons a:hover{
    background:var(--red);
}

.featured .box-container .box .content{
    padding:1.5rem;
}

.featured .box-container .box .content .price{
    display: flex;
    align-items: center;
}

.featured .box-container .box .content .price h3{
    color:var(--red);
    font-size: 2rem;
    margin-right: auto;
}

.featured .box-container .box .content .price a{
    color:#666;
    font-size: 1.5rem;
    margin-right: .5rem;
    border-radius: .5rem;
    height:4rem;
    width:4rem;
    line-height: 4rem;
    text-align: center;
    background:#f7f7f7;
}

.featured .box-container .box .content .price a:hover{
    background:var(--red);
    color:#fff;
}

.featured .box-container .box .content .location{
    padding:1rem 0;
}

.featured .box-container .box .content .location h3{
    font-size: 2.5rem;
    color:#333;
}

.featured .box-container .box .content .location p{
    font-size: 1.5rem;
    color:#666;
    line-height: 1.5;
    padding-top: .5rem;
}

.featured .box-container .box .content .details{
    padding:.5rem 0;
    display: flex;
}

.featured .box-container .box .content .details h3{
    flex:1;
    padding:1rem;
    border:.1rem solid rgba(0,0,0,.1);
    color:#999;
    font-size: 1.3rem;
}

.featured .box-container .box .content .details h3 i{
    color:#333;
    padding-left: .5rem;
}

.featured .box-container .box .content .buttons{
    
    display: flex;
    gap:1rem;
}

.featured .box-container .box .content .buttons .btn{
    flex:1;
    font-size: 1.5rem;
}
    </style>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="featured" id="featured">

<div class="homePageCities"><h2 align="center" lines="2" style="margin: 0px 0px 8px;">
<div class="Text">PROPERTIES

</div>
</h2>
</div>


<div class="box-container">
<?php foreach($properties as $item):?>
    <div class="box">
        <div class="image-container">
            <img src="<?= "../uploads/".$item['home_image']; ?>" alt="">
            <div class="info">
                <h3>2 days ago</h3>
                <h3><?=$item['property_type']?></h3>
            </div>
            <div class="icons">
                <a href="#" class="fas fa-film"><h3>1</h3></a>
                <a href="#" class="fas fa-camera"><h3>4</h3></a>
            </div>
        </div>
        <div class="contents">
            <div class="price">
                <h3>Ksh <?=$item['home_price']?></h3>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-envelope"></a>
                <a href="#" class="fas fa-phone"></a>
            </div>
            <div class="location">
                <h3><?=$item['location']?></h3>
                <p><?=$item['address']?></p>
            </div>
            <div class="details">
                <h3> <i class="fas fa-expand"></i> <?=$item['size']?> acres </h3>
                <h3> <i class="fas fa-bed"></i> <?=$item['bedrooms']?> bedrooms </h3>
                <h3> <i class="fas fa-bath"></i> <?=$item['bathrooms']?> bathrooms </h3>
            </div>
            <div class="buttons">
                <a href="house_tour" class="btn btn-primary">Request for a house tour</a>
              
            </div>
        </div>
        
    </div>
    <?php endforeach;?>
    
    </div>

</div>

</section>

<!-- featured section ends -->
    
</body>
</html>