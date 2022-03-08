<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/95dc93da07.js"></script>
        <script src="https://kit.fontawesome.com/ad0d310a4a.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script type="text/javascript" src="/Js/custom.js"></script>
        <script type="text/javascript" src="/Js/jquery.convform.js"></script>
        <link rel="stylesheet" type="text/css" href="/assets/css/jquery.convform.css"/>
     
        
    <title>Document</title>
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







.text {
background-color:linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75));
color: #f2f2f2;
font-weight:bold;
font-size: 30px;
padding: 8px 12px;
position: absolute;
bottom: 8px;
width: 100%;
text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
color: #f2f2f2;
font-size: 12px;
padding: 8px 12px;
position: absolute;
top: 0;
}

/* The dots/bullets/indicators */
.dot {
cursor: pointer;
height: 15px;
width: 15px;
margin: 0 2px;
background-color: #bbb;
border-radius: 50%;
display: inline-block;
transition: background-color 0.6s ease;
}

.active, .dot:hover {
background-color: #717171;
}

/* Fading animation */
.fade {
-webkit-animation-name: fade;
-webkit-animation-duration: 1.5s;
animation-name: fade;
animation-duration: 1.5s;
}

@-webkit-keyframes fade {
from {opacity: .4}
to {opacity: 1}
}

@keyframes fade {
from {opacity: .4}
to {opacity: 1}
}

        </style>
</head>
<body>
    <div class="featured_properties">
         <div class="card">
                <div class="card-body">
                     <div class="slideshow-container">
                              <?php foreach($properties as $item):?> 
                                   <div class="mySlides fade">  
                                                </br>
                                             <img src="<?= "../uploads/".$item['files']; ?>" height="500px" width="100%"alt="Image">
                                   </div>
                      </div>
                    


                
                    
                <?php endforeach;?>      
                        
               
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
             </div><br>
      </div>
        
    </div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
showSlides(slideIndex = n);
}

function showSlides(n) {
var i;
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("dot");
if (n > slides.length) {slideIndex = 1}
if (n < 1) {slideIndex = slides.length}
for (i = 0; i < slides.length; i++) {
slides[i].style.display = "none";
}
for (i = 0; i < dots.length; i++) {
dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "block";
dots[slideIndex-1].className += " active";
}

</script>
</br></br>
</body>
</html>
<script>
      $(function () {
                let headerElem = $('header');
                let logo = $('#logo');
                let navMenu = $('#nav-menu');
                let navToggle = $('#nav-toggle');

            $('#properties-slider').slick({
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    prevArrow: '<a href="#" class="slick-arrow slick-prev">previous</a>',
                    nextArrow: '<a href="#" class="slick-arrow slick-next">next</a>',
                    responsive: [
                        {
                            breakpoint: 1100,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                                infinite: true,
                            }
                        },
                        {
                            breakpoint: 767,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                                infinite: true,
                            }
                        },
                        {
                            breakpoint: 530,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                infinite: true,
                            }
                        }
                    ]
            });

            $('#testimonials-slider').slick({
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    prevArrow: '<a href="#" class="slick-arrow slick-prev"><</a>',
                    nextArrow: '<a href="#" class="slick-arrow slick-next">></a>'
            });

            navToggle.on('click', () => {
                navMenu.css('right', '0');
            });

            $('#close-flyout').on('click', () => {
                    navMenu.css('right', '-100%');
            });

            $(document).on('click', (e) => {
                let target = $(e.target);
                if (!(target.closest('#nav-toggle').length > 0 || target.closest('#nav-menu').length > 0)) {
                    navMenu.css('right', '-100%');
                }
            });

            $(document).scroll(() => {
                let scrollTop = $(document).scrollTop();

                if (scrollTop > 0) {
                    navMenu.addClass('is-sticky');
                    logo.css('color', '#000');
                    headerElem.css('background', '#fff');
                    navToggle.css('border-color', '#000');
                    navToggle.find('.strip').css('background-color', '#000');
                } else {
                    navMenu.removeClass('is-sticky');
                    logo.css('color', '#fff');
                    headerElem.css('background', 'transparent');
                    navToggle.css('bordre-color', '#fff');
                    navToggle.find('.strip').css('background-color', '#fff');
                }

                headerElem.css(scrollTop >= 200 ? {'padding': '0.5rem', 'box-shadow': '0 -4px 10px 1px #999'} : {'padding': '1rem 0', 'box-shadow': 'none' });
            });

            $(document).trigger('scroll');
            });
    </script>