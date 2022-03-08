<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="/assets/css/Registration.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="/assets/js/jquery-3.6.0.min.js"></script>
       <script src="/assets/js/popper.min.js"></script>
       <script src="/assets/bootstrap.min.js"></script>
    <style>
         .profile-details{
		float:right;
  display: flex;
  align-items: center;
  background: #F5F6FA;
  border: 2px solid #EFEEF1;
  border-radius: 6px;
  height: 50px;
  min-width: 190px;
  padding: 0 15px 0 2px;
}
.profile-details img{
  height: 40px;
  width: 40px;
  border-radius: 6px;
  object-fit: cover;
}
.profile-details .admin_name{
  font-size: 15px;
  font-weight: 500;
  color: #333;
  margin: 0 10px;
  white-space: nowrap;
}
.profile-details i{
  font-size: 25px;
  color: #333;
}
        </style>

</head>
<body background="/assets/Images/background.jpg">


	
		
<div class="profile-details">
        <img src="/assets/Images/avatar.png" alt="">
        <span class="admin_name"><?= session()->get('first_name') ?>&nbsp;<?= session()->get('last_name') ?></span>
       
        <a href="<?=base_url('Users/logout')?>" class="btn btn-primary btn-sm float-end" style="right:0;">Logout</a>
      </div>
    <div class="container mt-4">
        <div class="row justify-content-center">
        
           <div class="col-md-7">
                   <div class="card">
                      <div class="card-header">
                      <h5>Edit and Update Agents</h5>
                                <a href="<?= base_url('agents')?>" class="btn btn-danger btn-sm float-end">BACK</a>
                              </h5>
                       </div>
                       <div class="card-body">
                       <form action="<?=base_url('agents/update/'.$agents['agent_id'])?>" name="ajax_form" id="ajax_form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                               
                               
                                <div class="form-group">

			
               
               <form method="post" id="edit" action="<?=base_url('users/update/'.$agents['agent_id'])?>">
               <div class="form-group">
            <label>First Name: </label>
            <br>
            <input type="text" name="first_name" id="name"placeholder="first name" value="<?=$agents['first_name']?>">
</div>
</br>
            <div class="form-group">
            <label>Last Name: </label>
            <br>
            <input type="text" name="last_name" id="last_name"placeholder="last name" value="<?=$agents['last_name']?>">
</div>
</br>

            <div class="form-group">
                                         <label for="formGroupExampleInput">Profile Image</label>
                                           <input type="file" name="agent_image"  class="form-control" id="file"/>
                                 </div> 
                                 <div class="col-md-5">
                                        <img src="<?=base_url('../uploads/'.$agents['agent_image'])?>" class="w-100" alt="agent_Image">
                                   </div>
                                   </br>
                                   <div class="form-group">
            <label>Email address: </label>
            <br>
            <input type="email" name="email" id="email"placeholder="Email address"value="<?=$agents['email']?>">
            </div>
            </br>
           
            
            <div class="form-group">
            <label>Phone Number: </label>
            <br>
            <input type="number" name="phone" id="phone"placeholder="Phone number"value="<?=$agents['phone']?>">
            </div>
            </br>
           
           
            <div class="form-group">
                
            <label>LinkedIn Profile: </label>
            <br>
            <input type="url" name="LinkedIn" id="LinkedIn"placeholder="LinkedIn"value="<?=$agents['LinkedIn']?>">
            </div>
            </br>
            <div class="form-group">
            <label>Instagram Profile: </label>
            <br>
            <input type="url" name="instagram" id="instagram"placeholder="instagram"value="<?=$agents['instagram']?>">
           
</div>
</br>
            <div class="form-group">
            <label>Facebook Profile: </label>
            <br>
            <input type="url" name="facebook" id="facebook"placeholder="facebook"value="<?=$agents['facebook']?>">
           
</div>
</br>
            <div class="form-group">
            <label>Twitter Profile: </label>
            <br>
            <input type="url" name="twitter" id="twitter"placeholder="twitter"value="<?=$agents['twitter']?>">
            </br>
</div>
            
            
           

            <?php if (isset($validation)):?>
                <div class="col-12">
                    <div class="alert alert-danger" role="alert">
                        <?= $validation->listErrors()?>
            </div>
            </div>
            <?php endif;?>

           
               
			
            
            
<div class="form-group">
            <button  type="submit" class="button" name="button">Update</button>
            </div>
            
	<br><br><br><br>
			</form>
	
</table>
		</div>
    
	
	</body>
 
</html>