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
 <link rel="stylesheet" href="/assets/css/login.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="/assets/js/main.js"></script>
   <style>
    .btn {
    outline: none;
    border: none;
    cursor: pointer;
    display: inline-block;
    margin: 0 auto;
    padding: 0.9rem 2.5rem;
    text-align: center;
    background-color: #009688;
    color: #fff;
    border-radius: 4px;
    box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
    font-size: 17px;
  }
  .btn:hover{
    background-color: #69e8dc;
}
    </style>
    <title>Login page</title>

  </head>
  <body>
        <!--Page Loader Starts-->
<div class="page-loader">
    <div></div>
    <div></div>
    <div></div>
</div>
      <!--Page Loader Ends-->
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
                                <a href="#"><button class="btn">Login<button></a>
                                <a href="/register"><button class="btn">Register</button></a>
                                <li id="close-flyout"><span class="fas fa-times"></span></li>
                            </ul>
                        </nav>
                    </div>
                </header>
    
    
    
    
        
            

</br></br></br></br></br>

  
        <h3 style=" color: white;
    text-align:center;">User Login</h3>
      </br></br>
        <?php if (session()->get('success')): ?>
          <div style="margin-left:25%;text-align:center;width:50%;" class="alert alert-success" role="alert">
            <?= session()->get('success') ?>
          </div>
        <?php endif; ?>
  <?php $validation = \Config\Services::validation(); ?>

  
    <form class="" action="/" method="post">
            
        <div class="form-field">
            <input type="email" name="email" placeholder="Email / Username" value="<?= set_value('email') ?>" required/>
        </div>
        <?php if($validation->getError('email')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('email'); ?>
            </div>
        <?php }?>
        
        <div class="form-field">
            <input type="password" name="password" placeholder="Password" required/>                         </div>
            <?php if($validation->getError('password')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('password'); ?>
            </div>
        <?php }?>
        <div class="form-field">
            <button class="btn" type="submit">Log in</button>
        </div>
        <a href="/register"><p style=text-align:center;>Don't have an account yet?</p></a>
       
      </form>
     </div>
    </div>
 
          
          </body>
</html>