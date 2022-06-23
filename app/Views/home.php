<?php

$session = session('user');

?>
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
        <link rel="stylesheet" type="text/css" href="/assets/css/index.css"/>
       <title>Home</title>

    </head>
    <body>
        
        
    <!--Page Loader Starts-->
<div class="page-loader">
    <div></div>
    <div></div>
    <div></div>
</div>

  
      <!--Page Loader Ends-->
<div class="main ">
<section class="home-section">
    <div class="banner">
        
    <div id="header-hero-container">
            <header>
                <div class="flex container">
                    <a id="logo" href="#">HOPITAL.</a>
                    <nav>
                        <button id="nav-toggle" class="hamburger-menu">
                            <span class="strip"></span>
                            <span class="strip"></span>
                            <span class="strip"></span>
                        </button>

                        <ul id="nav-menu">
                            <li><a href="#" class="active">Home</a></li>
                            <li><a href="properties_view" target="_blank">About Us</a></li>
                            <li><a href="agents_view">Blogs</a></li>
                           
                            <li><a href="contact">Contact Us</a></li>
                            <?php if( isset($_SESSION['first_name']) && !empty($_SESSION['first_name']) )
                                    {
                                       ?>
                                 <div class="profile-details">
                                     <img src="/assets/Images/avatar.png" alt="">
                                    <div class="admin_name"><?= session()->get('first_name') ?>&nbsp;<?= session()->get('last_name') ?></div>
                                    <i class='bx bx-chevron-down' ></i>
		                             <a href="<?=base_url('Users/logout')?>" class="btn btn-primary btn-sm float-end" style="right:0;">Logout</a>
                                </div>
                                 <?php }else{ ?>
                                    <a href="/"><button class="btn-a">Login<button></a>
                                     <a href="/register"><button class="btn-a">Register</button></a>
                                    <?php } ?>
                           
                           
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
   

    <h1>BOOK AN APPOINTMENT</h1>
    <h3>
    In Hopital, you can search for the nearest hospital. <br>You can then schedule appointments accordingly.  
</h3>

    <div>
    <a href=""><button class="btns" type="button"><span></span>Find nearest hospital</button></a>
    
    </div>
    </div>
    </div>

    <section class="features" id="features">
      <h2>Why Choose Us?</h2>
      <p style="font-size:20px; color:#676a8b" class="section-desc">
        We at Hopital provide you access to the best healthcare hospitals with the
       best doctors.
      </p>
      <div class="row">
        <div class="column">
        
        <i class="fa-solid fa-user-check"></i>
          <h3>Easy to use</h3>
          <p>
            Hopital has a very easy to use interface, to enable 
            you to search for an hospital nearest to you with ease, 
            and schedule appointments with the best doctors.
          </p>
        </div>
        <div class="column">
        <i class="fa-solid fa-user-doctor"></i>
          <h3>Best healthcare</h3>
          <p>
            With our partnerships with the best medical centres and 
            doctors, we provide our clients with the best healthcare in 
            Kenya.
          </p>
        </div>
        <div class="column">
          <i class="fas fa-lock"></i>
          <h3>Secure</h3>
          <p>
            We ensure your medical and personal information is secured
            and protected from any persons other than the doctors who 
            will treat you. We care so much about the privacy of our 
            patients.
          </p>
        </div>
      </div>
    </section>

     <!------ Section: hospitals ------>
     <section class="hospitals" id="hospitals">
      <h2>Our Popular hospitals</h2>
      <p style="font-size:20px; color:#676a8b" class="section-desc">
        With over 30,000 hospitals to choose from, check out out most popular
        medical centres.
      </p>
      <div class="row">
        <div class="column">
          <img src="/assets/Images/hospital1.jpg" />
          <h3>Aga Khan Referral Hospital</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos facere
            voluptatibus natus. Amet, cupiditate illo?
          </p>
          <div class="hospitals-btn">
            <button class="btn secondary-btn">Learn More</button>
          </div>
        </div>
        <div class="column">
          <img src="/assets/Images/hospital2.jpg" />
          <h3>Kenyatta Hospital</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit nulla
            dolor nostrum animi veniam rem.
          </p>
          <div class="hospitals-btn">
            <button class="btn secondary-btn">Learn More</button>
          </div>
        </div>
        <div class="column">
          <img src="/assets/Images/hospital3.jpg" />
          <h3>Nairobi Hospital</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores
            voluptatibus temporibus dolorem sit ipsam adipisci?
          </p>
          <div class="hospitals-btn">
            <button class="btn secondary-btn">Learn More</button>
          </div>
        </div>
      </div>
    </section>

     <!------ Section: Testimonial ------>
     <section class="testimonial" id="testimonial">
      <h2>What Our Clients Say</h2>
      <p class="section-desc">
        We provide access to medical care that is not available elsewhere. We
        have over 50,000 happy clients.
      </p>
      <div class="row">
        <div class="column">
          <div class="testimonial-image">
            <img src="/assets/Images/testimonial.jpg" />
          </div>
          <p>
            I loved the website! I previously had a problem with appointments.
            I found it hard going to the hospital and not getting my doctor unavailable, 
            but all these problems left when I started using this website.
          </p>
          <h3>Chunkz Omollo</h3>
        </div>
        <div class="column">
          <div class="testimonial-image">
            <img src="/assets/Images/testimonial2.jpg" />
          </div>
          <p>
            This is an amazing website, very easy to use and efficient. 
            I can now manage my appointments very easily.
          </p>
          <h3>Kambua Marua</h3>
        </div>
      </div>
    </section>

 <!------ Section: ussd App ------>
 <section class="ussd-app" id="ussd-app">
      <h2>Our USSD App</h2>
      <p class="section-desc">
        Unloack all new amazing features with our USSD application.
      </p>
      <div class="row">
        <div class="column">
          <img src="/assets/Images/ussd-app.png" />
        </div>
        <div class="column">
          <div class="app-feature">
            <div>
              <i class="fas fa-star"></i>
              <h3>Offline</h3>
            </div>
            <p>
              Our USSD application is solely meant for users who may have no access to internet connection.
            </p>
          </div>
          <div class="app-feature">
            <div>
              <i class="fas fa-star"></i>
              <h3>Fast</h3>
            </div>
            <p>
              Book your appointment within a split of a second!
            </p>
          </div>
          <div class="app-feature">
            <div>
              <i class="fas fa-star"></i>
              <h3>Reliable</h3>
            </div>
            <p>
              Available and free to use anywhere, any time. Book your appointment absolutely any time
            </p>
          </div>
         

        </div>
      </div>
    </section>

</br></br>
    <footer>
      <div class="row footer-about">
        <h3>Hopital</h3>
        <p>
          We are located in Parklands, Nairobi at Diamond Plaza, second floor.
        </p>
        <div class="social-links">
          <a href="#">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>
      </div>
      <div class="row footer-contact">
        <div class="column">
          <h4>Phone No</h4>
          <p>+254 12345678</p>
        </div>
        <div class="column">
          <h4>Email</h4>
          <p>hopital@gmail.com</p>
        </div>
      </div>
      <p class="footer-copyright">
        Copyright &copy; 2022 Hopital. All rights reserved.
      </p>
    </footer>

    </body>
    </html>
    <script>
    window.addEventListener("load", () =>{
    document.querySelector(".main").classList.remove("hidden");
    document.querySelector(".home-section").classList.add("active");
    /*-----------------Page loader-------------*/
    document.querySelector(".page-loader").classList.add("fade-out");
    setTimeout(()=>{
        document.querySelector(".page-loader").style.display="none";

    },600);

});
            $(function () {
                let headerElem = $('header');
                let logo = $('#logo');
                let navMenu = $('#nav-menu');
                let navToggle = $('#nav-toggle');

            

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
