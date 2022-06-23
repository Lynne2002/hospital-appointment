<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
   <link rel="stylesheet" href="/assets/css/register.css">


 
      

   <style>
   body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  overflow:scroll;
  background-size: cover;
	background-position: center;
}
.banner{
    width:100%;
    height:900px;
    background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url(/assets/Images/login.png);
}
.btn:hover{
    background-color: #69e8dc;
}

    </style>
    <title></title>

  </head>
  <body>
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
                                <li><a href="homepage" class="">Home</a></li>
                              
                                <li><a href="agents_view" target="_blank">About Us</a></li>
                                <li><a href="contact" target="_blank">Contact Us</a></li>
                                <li><a href="properties_view" target="_blank">Blogs</a></li>
                                <a href="/"><button class="btn">Login<button></a>
                                <a href="#"><button class="btn">Register</button></a>
                                <li id="close-flyout"><span class="fas fa-times"></span></li>
                            </ul>
                        </nav>
                    </div>
                </header>
    
    
    
    
        
            
    
        <script>
       (function () {
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
</br></br></br> </br> </br>

  
        <h3 style=" color: white;
    text-align:center;">User Registration</h3>
      </br>
        <?php if (session()->get('success')): ?>
          <div class="alert alert-success" role="alert">
            <?= session()->get('success') ?>
          </div>
        <?php endif; ?>

        
        <?php $validation = \Config\Services::validation(); ?>
 <form class="" action="/register" method="post">

        <div class="form-field">
            <input type="text" id="first_name" name="first_name" placeholder="First name"  value="<?= set_value('first_name') ?>"required/>
        </div>
        <?php if($validation->getError('first_name')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('first_name'); ?>
            </div>
        <?php }?>
        <div class="form-field">
            <input type="text" id="last_name" name="last_name" placeholder="Last name"  value="<?= set_value('last_name') ?>" required/>
        </div> 
        <?php if($validation->getError('last_name')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('last_name'); ?>
            </div>
        <?php }?>
        <div class="form-field">
            <input type="email" id="email" placeholder="Email" name="email"  value="<?= set_value('email') ?>" required/>
        </div>
        <?php if($validation->getError('email')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('email'); ?>
            </div>
        <?php }?>
        <div class="form-field">
            <input type="password" id="password" placeholder="Password" name="password"  value="" required/>
        </div>
        <?php if($validation->getError('password')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('password'); ?>
            </div>
        <?php }?>
        <div class="form-field">
            <input type="password" placeholder="Confirm Password" name="password_confirm" value="" required/>                        
         </div>
         <?php if($validation->getError('password_confirm')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('password_confirm'); ?>
            </div>
        <?php }?>
        <div class="form-field">
            <button class="btn" type="submit">Sign up</button>
        </div>
        <a href="/"><p style="text-align:center">Already have an account?</p></a>
</form>
      </div>
    </div>
 
          
          </body>
</html>
<script src="/assets/js/main.js"></script>