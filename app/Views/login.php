<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
 *{
    margin:0;
    padding:0;
    font-family: 'Raleway', cursive;
    

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
@media (prefers-reduced-motion: reduce) {
  .btn {
    transition: none;
  }
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


.container .container{
  
    background-color: transparent;
    color:white;
    width:700px;
    height:410px;
   border-style: outset;
}
.container{
   
    background-color: transparent;
}
input[type="password"], [type="text"]{
    width: 350px;
    text-align: center;
    height: 20px;
    outline: none;
    color: #fff;
    font-size: 20px;
    background: transparent;
    border: none;
    margin-bottom: 40px;
    border-bottom: 1px solid #fff;
    }
    input::placeholder {
        color: white;
        opacity: 1;
      }

   
    .logo{
        width:90px;
        height:90px;
        cursor:pointer;
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
*{
    margin:0;
    padding:0;
    font-family: 'Raleway', cursive;
    background-size: cover;
    background-position: center;
}

.container .container{
    background-color: transparent;
    color:white;
    width:700px;
    height:410px;
   border-style: outset;
}
.container{
   
    background-color: transparent;
}
input[type="password"], [type="text"]{
    width: 350px;
    text-align: center;
    height: 20px;
    outline: none;
    color: #fff;
    font-size: 20px;
    background: transparent;
    border: none;
    margin-bottom: 40px;
    border-bottom: 1px solid #fff;
    }
    input::placeholder {
        color: white;
        opacity: 1;
      }

   
    .logo{
        width:90px;
        height:90px;
        cursor:pointer;
    }
    .navbar{
        width:85%;
        margin:auto;
        padding:35px 0;
        display:flex;
        align-items: center;
        justify-content: space-between;
    }
    .navbar ul li{
        list-style: none;
        display:inline-block;
        margin:0 20px;
        position:relative;
    
    }
    .navbar ul li a{
        text-decoration: none;
        color: #fff;
        text-transform: uppercase;
    }
    .navbar ul li::after{
        content:'';
        height:3px;
        width:0;
        background:#009688 ;
        position: absolute;
        left: 0;
        bottom: -10px;
        transition: 0.5s;
    }
    .navbar ul li:hover::after{
        width:100%;
    }
    
    
    
      </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="/assets/css/bootstrap.css"></script>
   
    <title></title>

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
                                <li><a href="#" class="">Home</a></li>
                                <li><a href="properties_view" target="_blank">Properties</a></li>
                                <li><a href="#">Agents</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="active">Login</a></li>
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
</br></br></br></br></br></br>

  <div class="container">
  <div class="row">
    
      <div class="container">
        <h3>Glen Homes Login</h3>
        <hr></br></br>
        <?php if (session()->get('success')): ?>
          <div class="alert alert-success" role="alert">
            <?= session()->get('success') ?>
          </div>
        <?php endif; ?>
        <form class="" action="/" method="post">
          <div class="form-group">
           <label for="email">Email address:</label>
           <input type="text" class="form-control" name="email" id="email" placeholder="Please enter your email here" value="<?= set_value('email') ?>">
          </div>
          <div class="form-group">
           <label for="password">Password</label>
           <input type="password" class="form-control"  placeholder="Please enter your password here"  name="password" id="password" value="">
          </div>
          <?php if (isset($validation)): ?>
            <div class="col-12">
              <div class="alert alert-danger" role="alert">
                <?= $validation->listErrors() ?>
              </div>
            </div>
          <?php endif; ?>
          <div class="row">
            <div class="col-12 col-sm-4">
              <button  type="submit" class="btn btn-primary">Login</button>
            </div>
            <div class="col-12 col-sm-8 text-right">
              <a style="color:white;" href="/register">Don't have an account yet?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
          </div>

          
          </body>
</html>