<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/assets/css/registration.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="/assets/js/jquery-3.6.0.min.js"></script>
       <script src="/assets/js/popper.min.js"></script>
       <script src="/assets/bootstrap.min.js"></script>
    

</head>
<body background="/assets/Images/background.jpg">


	
		<div class="logo">
					<img src="/assets/Images/logo.png">
				</div>
        <div class="website">
                    <h2 id="response"></h2>
         </div>

		<div class="Registration">


			<h2>Edit users 
            <a href="<?=base_url('admin')?>" class="btn btn-danger float-end">BACK</a>
         </h2>
               
               <form method="post" id="edit" action="<?=base_url('users/update/'.$users['user_id'])?>">
               
            <label>First Name: </label>
            <br>
            <input type="text" name="first_name" id="name"placeholder="first name" value="<?=$users['first_name']?>">
            <br><br>

            <label>Last Name: </label>
            <br>
            <input type="text" name="last_name" id="last_name"placeholder="last name" value="<?=$users['last_name']?>">
            <br><br>

            <label>Email address: </label>
            <br>
            <input type="email" name="email" id="email"placeholder="Email address"value="<?=$users['email']?>">
            <br><br>
           <label>Gender:<label>
               
            <label class="radio">Male
                      <input type="radio" checked="checked" name="gender" id="gender" value="male" />
                      <span class="radiocheckmark"></span>
                    </label>
                    <label class="radio">Female
                      <input type="radio" name="gender" value="female" />
                      <span class="radiocheckmark"></span>
                    </label>
                <br><br>

                
            <label>Change password: </label>
            <br>
            <input type="password" name="password" id="password"placeholder=".............................">
            <br><br>
            
            
            
            <br><br>

            <?php if (isset($validation)):?>
                <div class="col-12">
                    <div class="alert alert-danger" role="alert">
                        <?= $validation->listErrors()?>
            </div>
            </div>
            <?php endif;?>

           
               
			
            
            

            <button  type="submit" class="button" name="button">Update</button>
            
            
	<br><br><br><br>
			</form>
	
</table>
		</div>
    
	
	</body>
  
</html>