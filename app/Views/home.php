    <!DOCTYPE html>
    <html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
    
        <link rel="stylesheet" type="text/css" href="/assets/css/home.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/95dc93da07.js"></script>
        <script src="https://kit.fontawesome.com/ad0d310a4a.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script type="text/javascript" src="/Js/custom.js"></script>
        <script type="text/javascript" src="/Js/jquery.convform.js"></script>
        <link rel="stylesheet" type="text/css" href="/assets/css/jquery.convform.css"/>
        
        <title>Glen Homes</title>

        <style>
            *{
    margin:0;
    padding:0;
    font-family: 'Raleway', cursive;
    background-size: cover;
	background-position: center;
}
.logo{
    width:90px;
    height:90px;
    cursor:pointer;
}

       .navbar ul li{
    list-style: none;
    display:inline-block;
    margin:0 20px;
    position:relative;
   

}
.btn {
  display: inline-block;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: center;
  text-decoration: none;
  vertical-align: middle;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.btn-primary {
  color: #fff;
  background-color: #0d6efd;
  border-color: #0d6efd;
}
.btn-primary:hover {
  color: #fff;
  background-color: #0b5ed7;
  border-color: #0a58ca;
}
header ul li a{
    text-decoration: none;
    color: #fff;
    text-transform: uppercase;
}
header ul li::after{
    content:'';
    height:3px;
    width:0;
    background:#009688 ;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.5s;
}
header ul li:hover::after{
    width:100%;
}
.content{
    width:100%;
    position:absolute;
    top: 50%;
    transform:translateY(-50%);
    text-align: center;
    color:#fff;

}
.content h1{
    font-size: 70px;
    margin-top: 80px;
}
.content p{
    margin: 20px auto;
    font-weight: bold;
    line-height: 25px;
}
button{
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
button:hover span{
    width:100%
}
button:hover{
    border:none;
}


#testimonials {
    margin-bottom: 8rem;
}

#testimonials h2 {
    text-align: center;
}

#testimonials-slider .slick-slide {
    text-align: center;
}

#testimonials-slider blockquote {
    font-size: 1.5rem;
    font-style: italic;
    margin: 1rem auto 3rem;
    max-width: 740px;
}

#testimonials-slider .testimonials-caption {
    width: 200px;
    margin: 0 auto;
}

#testimonials-slider .testimonials-caption img {
    float: left;
    border-radius: 30px;
    width: 60px;
}

.testimonials-caption p {
    position: relative;
    top: 13px;
    font-size: 1.2rem;
}

#testimonials-slider .slick-arrow {
    text-decoration: none;
    position: absolute;
    font-size: 40px;
    color: #222;
    top: 50%;
    margin-top: -35px;
    z-index: 1;
}
#testimonials-slider .slick-next {
    right: 0;
}
*:not(.slick-track):not(.slick-list) {
    transition: 0.4s;
}

.container {
    max-width: 1140px;
    margin: 0 auto;
    padding: 0 20px;
}

.flex {
    display: flex;
    justify-content: space-between;
}
    #header-hero-container {
    min-height: 600px;
    height: calc(100vh);
    position: relative;
}

header {
    background: transparent;
    padding: 1rem 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    position: fixed;
    width: 100%;
    z-index: 3;
    background: transparent;
    padding: 1rem 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    
        
        

}
@media (max-width: 991px) {
    #logo {
        top: 1px;
    }

    #nav-toggle {
        display: block;
    }

    nav ul {
        position: fixed;
        background: #fff;
        right: -100%;
        top: 0;
        margin: 0;
        padding: 2rem;
        height: 100%;
        width: 300px;
        box-sizing: border-box;
        box-shadow: 5px 0 10px 3px #999;
    }

    #close-flyout {
        position: absolute;
        right: 2rem;
        top: 1.5rem;
        font-size: 30px;
        color: #777;
        cursor: pointer;
        display: block;
        line-height: 1;
        margin: 0;
    }

    nav ul li {
        display: block;
        margin: 20px 0;
    }

    nav ul li:first-child {
        margin-top: 50px;
    }
    nav ul li a {
        font-size: 20px;
        color: #212529;
    }

    nav ul li a.active,
    nav ul li a:hover {
        color: #f69314;
    }
}

#logo {
    font-family: "Roboto", "Helvetica", "Sans-serif";
    font-size: 1.7rem;
    font-weight: 800;
    color: #fff;
    text-decoration: none;
    position: relative;
    top: 4px;
}

.hamburger-menu {
    background-color: transparent;
    border: 1px solid #fff;
    padding: 3px 5px;
    width: 30px;
    cursor: pointer;
    margin-top: 10px;
    display: none;
}

.hamburger-menu .strip {
    display: block;
    height: 1px;
    background-color: #fff;
    margin: 4px 0;
}

header ul {
    list-style-type: none;
}

header ul li {
    display: inline-block;
    margin: 0 15px;
}

#close-flyout {
    display: none;
}

header ul li a {
    color: #999;
    font-size: 16px;
    text-decoration: none;
}

header ul.is-sticky li a {
    color: #000;
}
header ul li{
    list-style: none;
    display:inline-block;
    margin:0 20px;
    position:relative;


}
header ul li a{
    text-decoration: none;
    color: #fff;
    text-transform: uppercase;
}
header ul li::after{
    content:'';
    height:3px;
    width:0;
    background:#009688 ;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.5s;
}
header ul li:hover::after{
    width:100%;
}
header ul li a:hover,
header ul li a.active {
    color: #fff;
}

header ul.is-sticky li a:hover,
header ul.is-sticky li a.active {
    color: #f69314;
}


header ul li a.active::after{
    content:'';
    height:3px;
    width:100%;
    background:#009688 ;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.5s;
}

.banner{
    width:100%;
    height:100vh;
    background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url(/assets/Images/background_2.jpeg);
}
.FeaturesHighlights{
    margin-top: -300px;
    cursor: pointer;
}
.FeaturesHighlights table{
    background-color: black;
    color:  white;
}

.FeaturesHighlights h2{
    font-size: 30px;
    font-family: 'Raleway', cursive;
background-color: white;
margin-top: 250px;
}
.zoom{
    transition: transform 0.5s;
}
.zoom:hover{
    transform: scale(1.05);
}

.text mark{
background-color:white;
padding:0.1em 0.2em;
}
    #testimonials {
    margin-bottom: 8rem;
}


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

#testimonials h2 {
    text-align: center;
}

#testimonials-slider .slick-slide {
    text-align: center;
}

#testimonials-slider blockquote {
    font-size: 1.5rem;
    font-style: italic;
    margin: 1rem auto 3rem;
    max-width: 740px;
}

#testimonials-slider .testimonials-caption {
    width: 200px;
    margin: 0 auto;
}

#testimonials-slider .testimonials-caption img {
    float: left;
    border-radius: 30px;
    width: 60px;
}

.testimonials-caption p {
    position: relative;
    top: 13px;
    font-size: 1.2rem;
}

#testimonials-slider .slick-arrow {
    text-decoration: none;
    position: absolute;
    font-size: 40px;
    color: #222;
    top: 50%;
    margin-top: -35px;
    z-index: 1;
}
#testimonials-slider .slick-next {
    right: 0;
}
.chat_icon{
    position:fixed;
    right:30px;
    bottom:0;
    font-size:80px;
    color: blue;
    cursor: pointer;
    z-index: 1000;
}
.chat_box{
    position:fixed;
    right:20px;
    bottom:100px;
    width:400px;
    height:80vh;
    background: #dedede;
    z-index:1000;
    transition:all 0.3s ease-out;
    transform:scaleY(0);
}
.chat_box.active{
    transform: scaleY(1)
}
.hidden{
    display:none !important;
}
.conv-form-wrapper textarea{
    height:30px;
    overflow:hidden;
    resize:none;

}
#messages{
    padding: 20px;
}
footer{
    position: fixed;
    bottom: 0;
}
@media (max-height:800px){
    footer { position: static; }
    header { padding-top:40px; }
}



.footer{
    color:white;
    background-color: black;
    box-sizing: border-box;
    width: 1200px;
    text-align: left;
    font: bold 16px sans-serif;
    padding: 50px 50px 60px 50px;
    margin-top: 100px;

}

.footer.f1,
.footer.f2,
.footer.f3{
    display: inline-block;
    vertical-align: top;
}



.footer.f1{
    width: 35%;
    
}

.footer h3{
    color:  white;
    font: normal 36px 'Cookie', cursive;
    margin: 0;
}

.footer h3 span{
    color:  #e0ac1c;
}



.footer.fl{
    color:  #ffffff;
    margin: 20px 0 12px;
}

.footer.fl a{
    display:inline-block;
    line-height: 1.8;
    text-decoration: none;
    color:  inherit;
}

.footer.name{
    color:  #8f9296;
    font-size: 14px;
    font-weight: normal;
    margin: 0;
}



.footer.f2{
    width: 35%;
}


.footer.f2 i{
    background-color:  #33383b;
    color: #ffffff;
    font-size: 25px;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    text-align: center;
    line-height: 42px;
    margin: 10px 15px;
    vertical-align: middle;
}

.footer.f2 i.email{
    font-size: 17px;
    line-height: 38px;
}

.footer.f2 p{
    display: inline-block;
    color: #ffffff;
    vertical-align: middle;
    margin:0;
}

.footer.f2 p span{
    display:block;
    font-weight: normal;
    font-size:14px;
    line-height:2;
}

.footer.f2 p a{
    color:  #e0ac1c;
    text-decoration: none;;
}




.footer.f3{
   width: 35%;
    
}

.footer.fa{
    line-height: 20px;
    color:  #92999f;
    font-size: 13px;
    font-weight: normal;
    margin: 0;
}

.footer.fa span{
    display: block;
    color:  #ffffff;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 20px;
}

.footer.fons{
    margin-top: 25px;
}

.footer.fons a{
    display: inline-block;
    width: 35px;
    height: 35px;
    cursor: pointer;
    background-color:  #33383b;
    border-radius: 2px;

    font-size: 20px;
    color: #ffffff;
    text-align: center;
    line-height: 35px;

    margin-right: 3px;
    margin-bottom: 5px;
}

        </style>

    </head>
    <body>
        


    <div class="banner">
        
    <div id="header-hero-container">
            <header>
                <div class="flex container">
                    <a id="logo" href="#">GLEN.</a>
                    <nav>
                        <button id="nav-toggle" class="hamburger-menu">
                            <span class="strip"></span>
                            <span class="strip"></span>
                            <span class="strip"></span>
                        </button>

                        <ul id="nav-menu">
                            <li><a href="#" class="active">Home</a></li>
                            <li><a href="properties_view" target="_blank">Properties</a></li>
                            <li><a href="agents_view">Agents</a></li>
                           
                            <li><a href="contact">Contact Us</a></li>
                            <li><a href="users">Login</a></li>
                            <li id="close-flyout"><span class="fas fa-times"></span></li>
                        </ul>
                    </nav>
                </div>
            </header>




    
        

    <script>
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementbyId("navbar").style.padding = "30px 10px" ;
        document.getElementbyId("logo").style.fontSize = "25px";
    } else {
        document.getElementbyId("navbar").style.padding = "80px 10px";
        document.getElementbyId("logo").style.fontSize = "35px";
    }
    }
    </script>





    <div class="content">
    <h1>FIND YOUR DREAM HOME</h1>
    <p>
    In Homes Glen, you can buy, sell and rent properties. <br>You can also book AirBnBs and ask for mortgages.  
    </p>

    <div>
    <a href="<?=base_url('properties_view')?>"><button type="button"><span></span>Buy a property</button></a>
    <a href="<?=base_url('seller-add')?>"><button type="button"><span></span>Sell a property</button></a>

    </div>
    </div>
    </div>
    <div class="chat_icon">
        <i class="fa fa-comments" aria-hidden="true">
    </div>
    <div class="chat_box">
    <div class="conv-form-wrapper">
        <form action="" method="GET" class="hidden">
        <select name="category" data-conv-question="Hello, how can I help you?">
        <option value="Buyer">Buyer ?</option>
        <option value="Seller">Seller ?</option>
    </select>
    <div data-conv-fork="category">
        <div data-conv-case="Buyer">
        <select name="thought" data-conv-question="Do you want to buy or rent a property?">
                <option value="Rent">Rent</option>
                <option value="Buy">Buy</option>
            </select>
        </div>
        <div data-conv-case="Seller">
            <select name="thought" data-conv-question="Is your property officially registered by the government?">
                <option value="registered">Yes</option>
                <option value="unregistered">No..</option>
            </select>
        </div>
    </div>


    <div data-conv-fork="thought">
    <div data-conv-case="Rent">
            <select name="able" data-conv-question="Are you able to pay the entire home deposit in full amount?">
                <option value="Yes_rent">Yes</option>
                <option value="No_rent">No..</option>
            </select>
            </div> 
    <div data-conv-case="Buy">
    <select name="able" data-conv-question="Are you able to pay the entire home deposit in full amount?">
                <option value="Yes_buy">Yes</option>
                <option value="No_buy">No..</option>
            </select>

    </div>
    <div data-conv-case="registered">
            <select name="able" data-conv-question="Do you want to rent out or sell your property?">
                <option value="rent_out">Rent</option>
                <option value="sell">Sell</option>
            </select>
    </div> 
    <div data-conv-case="unregistered">
            <input type="text" data-conv-question="Sorry, you will need to register your property for us to be of service to you.">
            </div> 
    </div>


    <div data-conv-fork="able">
    <div data-conv-case="Yes_rent">
    <select name="proceed" data-conv-question="Please press Okay so we can redirect you to the rental properties page">
            <option value="google" data-callback="rental">Okay</option>
            <option value="bing" data-callback="chat">Need more help? Chat with us</option>
    </select>
    <script>
        
        function chat(stateWrapper, ready) {
            window.open("chat");
            ready();
        }
        function rental(stateWrapper, ready) {
            window.open("properties_view");
            ready();
        }
    </script>
    </div>

    <div data-conv-case="No_rent">
    <select name="proceed" data-conv-question="Want to check out the rental mortgages we offer?">
            <option value="google" data-callback="mortgage">Yes</option>
            <option value="bing" data-callback="rental">No, I want to check out the properties first</option>
    </select>
    <script>
        function mortgage(stateWrapper, ready) {
            window.open("ttps://www.quickenloans.com/");
            ready();
        }
        
        function rental(stateWrapper, ready) {
            window.open("properties_view");
            ready();
        }
    </script>
    </div>

    <div data-conv-case="Yes_buy">
    <select name="proceed" data-conv-question="Please press Okay so we can redirect you to the properties page">
            <option value="google" data-callback="rental">Okay</option>
            <option value="bing" data-callback="bing">Need more help?</option>
    </select>
    <script>
        function google(stateWrapper, ready) {
            window.open("https://google.com");
            ready();
        }
        function bing(stateWrapper, ready) {
            window.open("https://bing.com");
            ready();
        }
        function rental(stateWrapper, ready) {
            window.open("rental");
            ready();
        }
    </script>
    </div>

    <div data-conv-case="No_buy">
    <select name="proceed" data-conv-question="Want to check out the mortgages we offer?">
            <option value="google" data-callback="mortgage">Yes</option>
            <option value="bing" data-callback="rental">No, I want to check out the properties first</option>
    </select>
    <script>
        function mortgage(stateWrapper, ready) {
            window.open("mortgage");
            ready();
        }
        
        function rental(stateWrapper, ready) {
            window.open("properties_view");
            ready();
        }
    </script>
    </div>

    <div data-conv-case="rent_out">
    <select name="proceed" data-conv-question="Want to register your property?">
            <option value="google" data-callback="sellers">Yes</option>
            <option value="bing" data-callback="contact">No, I want to talk to the help desk</option>
    </select>
    <script>
        function sellers(stateWrapper, ready) {
            window.open("sellers");
            ready();
        }
        
        function contact(stateWrapper, ready) {
            window.open("contact");
            ready();
        }
    </script>
    </div>
    <div data-conv-case="sell">
    <select name="proceed" data-conv-question="Want to register your property?">
            <option value="google" data-callback="sellers">Yes</option>
            <option value="bing" data-callback="contact">No, I want to talk to the help desk</option>
    </select>
    <script>
        function sellers(stateWrapper, ready) {
            window.open("sellers");
            ready();
        }
        
        function contact(stateWrapper, ready) {
            window.open("contact");
            ready();
        }
    </script>
    </div>
    </div>



    </form>
    </div>
    </div>
    </br> </br>

    <div class="FeaturesHighlights">
	<h2 align="center"> FEATURE HIGHLIGHTS </h2>
    </br>
	
	<table border="3" width="100%" >
		<tr>
			<td width="25%" align="center" class="zoom"><img src="/assets/Images/feature_highlight1.jpg" width="85%"height="100%">
				<td width="25%" align="center" class="zoom"><img src="/assets/Images/feature_highlight2.jpg" width="85%"height="100%">
					<td width="25%" align="center" class="zoom"><img src="/assets/Images/feature_highlight3.jpg" width="85%"height="100%">
						<td width="25%" align="center" class="zoom"><img src="/assets/Images/feature_highlight4.jpg" width="85%"height="100%">
							</td>
						
		</tr>
		<tr>
			<td align="center"><b><font size="4">Good home designs</font></b></td>
			<td align="center"><b><font size="4">Beautiful homes</font></b></td>
			<td align="center"><b><font size="4">Affordable Rental homes</font></b></td>
			<td align="center"><b><font size="4">Good scenery</font></b></td>

		</tr>

</table>
						
</div>



   
  








    </br></br>
    <section id="Cities">
    <div class="homePageCities">
        <h2 align="center" lines="2" style="margin: 0px 0px 8px;">
         <div class="Text">Featured Homes </div></h2>
     </div>

                </section>

    <div class="featured_properties">
        <div class="card">
                <div class="card-body">
                      <div class="slideshow-container">
                                    <?php foreach($homes as $item):?>    
                                         <div class="mySlides fade">  
    
                    </br>
                    <a href="<?=base_url("properties")?>"><img src="<?= "../uploads/".$item['home_image']; ?>" height="500px" width="100%"alt="Image"></a>
                        
             <div class="text">

                       
                    
                        </br></br>
                        <mark>
                        $<?=$item['home_price']?>
                        </br></br>
                    
                    <i class="fa-solid fa-bed">&nbsp; <?=$item['bedrooms']?>
                    <i class="fa-solid fa-bath"></i>&nbsp;</i><?=$item['bathrooms']?>
                    </br></br>
                    <?=$item['address']?>&nbsp;<?=$item['size']?>acres
                    </br>
                        </mark>
                       
             </div>
           
                    </br>

       </div>
       <?php endforeach;?> 
                
                
                    
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    

   
            
               
            
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
<!-- featured section starts  -->

<section class="featured" id="featured">

    <div class="homePageCities"><h2 align="center" lines="2" style="margin: 0px 0px 8px;">
    <div class="Text">Explore homes on Glen

    </div>
    </h2>
    </div>
    <div class="Text" style="text-align: center; padding: 8px 0px;">Take a deep dive and browse homes for sale, original neighborhood photos, resident reviews and local insights 
    to find what is right for you.
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
    </br>
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
    
    
</br></br>

    <!--testiomonials sections starts -->
    <section id="testimonials">
            <div class="container">
                <h2>What Our Clients Are Saying</h2>
                <div id="testimonials-slider">
                    <div>
                        <blockquote>
                            <p>"This is an amazing real estate website! I love the fact that the pictures of the properties are in a very high quality and authentic. "</p>
                        </blockquote>
                        <div class="testimonials-caption">
                            <img src="/assets/Images/testimonial1.jpg" alt="Client 7" />
                            <p>Kambua</p>
                        </div>
                    </div>

                    <div>
                        <blockquote>
                            <p>"This is an amazing website! I recently  bought a house with a studio in it on this website. This will help me in my music career"</p>
                        </blockquote>
                        <div class="testimonials-caption">
                            <img src="/assets/Images/testimonial2.jpg" alt="Client 7" />
                            <p>Kainjii Mbugua</p>
                        </div>
                    </div>

                    <div>
                        <blockquote>
                            <p>"I found the perfect home for me and my family using this website! I could never thank Home Glens enough for your services"</p>
                        </blockquote>
                        <div class="testimonials-caption">
                            <img src="/assets/Images/testimonial3.jpg" alt="Client 7" />
                            <p>Alice Kimanzi</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="Partnerships">
	<h1>Partnerships</h1>
	
	
	<table border="3" width="100%">
		<tr>
			<td width="16%" align="center" ><img src="/assets/Images/partner1.jpg" width="25%" height="60%">
				<td width="16%" align="center"><img src="/assets/Images/partner2.png" width="25%"height="60%">
					<td width="16%" align="center"><img src="/assets/Images/partner3.jpg" width="25%" height="60%">
						<td width="16%" align="center"><img src="/assets/Images/partner4.jpg" width="25%" height="60%">
							<td width="16%" align="center"><img src="/assets/Images/partner5.jpg" width="25%" height="60%">
								<td width="16%" align="center"><img src="/assets/Images/partner6.png" width="25%" height="60%">
							

							</td>
							
						
		</tr>
	</table>
</div>
        <footer class="footer">

			
				<h3>About Home Glens</h3>

				<div class="fl">
					<a href="#">Blog Articles</a>
					|
					<a href="#">Recommendations</a>
					|
					<a href="#">Tools&Tips</a>
					|
					<a href="#">Announcements</a>
					|
					<a href="#">Coupons</a>
					|
				
					
				</p>

				<p class="name">© 2021 Shop Haven</p>
			</div>

			<div class="f2">
				<div>
					<i class="address"></i>
					  <p><span>12483-20200 - Jogoo Road,
						 Kencom Building</span>
						Nairobi, Kenya</p>
				</div>

				<div>
					<i class="phone"></i>
					<p>+254 222 778 218</p>
				</div>
				
				<div>
					<i class="email"></i>
					<p><a href="ShopHaven@gmail.com">ShopHaven@gmail.com</a></p>
				</div>
				
			</div>
			<div class="f3">
				<p class="fa">
					<span>© All rights preserved</span>
					Shop Haven</p>
			
				
			</div>
			
	
		<a href=""> <i class="fab fa-instagram-square"></i>
				<a href=""><i class="fab fa-facebook-square"></i>
					<a href=""><i class="fab fa-twitter-square"></i>
						<a href=""><i class="fab fa-pinterest-square"></i>
						<a href=""><i class="fab fa-youtube-square"></i>
									<a href=""><i class="fab fa-linkedin"></i>

							
						
		
		</footer>

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