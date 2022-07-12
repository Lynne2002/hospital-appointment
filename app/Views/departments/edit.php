<!DOCTYPE html>
<html>
<head>

	<title>Hopital</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
        <script src="/assets/js/jquery-3.6.0.min.js"></script>
       <script src="/assets/js/popper.min.js"></script>
       <script src="/assets/bootstrap.min.js"></script>
    <style>
      body{
        font-family: 'Raleway', cursive;
        background-size: cover;
	      background-position: center;
        background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url(/assets/Images/login.png);
      }
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
        .error{
            color:red;
            font-style: italic;
        }
       
    </style>
  
		      
</head>
<body>
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
                      <h1 style="text-align:center"><?=$hospital['hospital_name']?></h1>
                           <h5>Add Department</h5>
                                <a href="<?= base_url('departments')?>" class="btn btn-danger btn-sm float-end">BACK</a>
                              </h5>
                       </div>
                       <div class="card-body">
                       <form action="<?=base_url('departments/update/'.$department['department_id'])?>" name="ajax_form" id="ajax_form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                
                            
                            
                               
                                 <div class="form-group">
                                       <label for="usr">Department Name</label>
                                            <input type="text" name="department_name" value="<?=$department['department_name']?>" class="form-control" id="usr">
                               </div>
                               
                                   <div class="form-group">
                                        <label for="pwd">Department description</label>
                                        <textarea name="department_description" style=" border-radius: 20px; background:transparent;"id="w3review" name="w3review" rows="4" cols="50"><?=$department['department_description']?></textarea>
                                   </div>
                                  
                                
                                    <input type="hidden" name="added_by" id="added_by"  value="<?=session()->get('user_id')?>">
                                    <input type="hidden" name="hospital" id="hospital"  value="<?=$hospital['hospital_id']?>">
                                         <div class="form-group">
                                                 <button type="submit" id="send_form" class="btn btn-primary px-4 float-end">SAVE</button>
                                        </div>


    </div>
                  </div>
             </div>
        
    </div>
    </div>
    </body>
    </html>