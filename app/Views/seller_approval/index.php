<!DOCTYPE html>
<html>
<head>

	<title>Sellers</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/productsdisplay.css">
  <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
        <script src="/assets/js/jquery-3.6.0.min.js"></script>
       <script src="/assets/js/popper.min.js"></script>
       <script src="/assets/bootstrap.min.js"></script>
    <style>
      #myInput {
        
 
  background-position: 10px 12px; 
  background-repeat: no-repeat; 
  width: 50%; 
  font-size: 16px; 
  padding: 12px 20px 12px 40px; 
  border: 1px solid #ddd;
  margin-bottom: 12px; 
}

#myUL {
  
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd; 
  margin-top: -1px;
  background-color: #f6f6f6; 
  padding: 12px; 
  text-decoration: none;
  font-size: 18px; 
  color: black;
  display: block; 
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
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
     
        
        .side-icons {
          cursor:pointer;
  position: absolute;
  right: 0;
  /*top: 30%;*/
  transform: translate(-200%, -300%);
  display: flex;
  flex-direction: column;
  padding: 1rem;
  transition: all 500ms ease-in-out;
}
.side-icons span:hover {

  background-color: var(--primary);
  color: var(--white);
}

        h1, h4{
    font-weight:bold;
    text-transform:capitalize;
    font-family: 'Raleway', cursive;
}
.addCart {
  cursor:pointer;
  position: absolute;
 right:0px;
  background-color: white;
  color:black;
  border-radius: 50%;
  padding: 1.3rem 1.6rem;
  box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1);
  transition: all 300ms ease-in-out;
}
.header{
  background-image:url(/assets/Images/prod.jpg);
}
.addCart:hover {
  background-color: lightblue;
  color: var(--white);
 
}
.description{
  font-family: 'Abel';font-size: 20px;
  font-style:italic;
}
i{
  cursor:pointer;
}




      
    </style>
  
		      
</head>
<body>
<div class="profile-details">
        <img src="/assets/Images/avatar.png" alt="">
        <span class="admin_name"><?= session()->get('first_name') ?>&nbsp;<?= session()->get('last_name') ?></span>
        <i class='bx bx-chevron-down' ></i>
		<a href="<?=base_url('Users/logout')?>" class="btn btn-primary btn-sm float-end" style="right:0;">Logout</a>
    </div>
    

    <div class="container mt-4">
        <div class="row">

      
           <div class="col-md-12">
                <h1>SELLERS </h1>
               <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for seller by name..">&nbsp; <i class="fas fa-search"></i>
                

  
    <div class="card">
                      
    <div class="card-body">
    <table id="myTable" class="table table-bordered">
  <thead>
       <tr>
      
    <th>First name</th>   
   
  <th>Last name</th>   
 <th>Legal property</th>
    <th>Property Type</th>
    <th>Property Image</th>
    <th>Status</th>
    <th>Action</th>

</tr>

</thead>
<tbody>
  <tr>
<?php  

  $rows=$sellers;
  ?>
 
<?php foreach ($rows as $row): ?>
  
  <?php foreach ($row as $key=>$value): {
    
  
    if($key=='home_image'){?>
   
   
      
    <td><img src="<?= "../uploads/".$value; ?>" width="250px" height="250px"></td>
   
<?php

    }
    else if($key=='user_id')
    {?>
      
      <td>
          <div>
          <a href="<?= site_url('seller_approval/approve/'.$value)?>"><button class='btn-success btn-sm' >Accept</button></a>
      <a href="<?= site_url('seller_approval/reject/'.$value)?>"><button class='btn-danger btn-sm' >Reject</button></a>
    </div>
</td>

    
    <?php
  }
    else{
      ?><td><?php
      echo $value;
      ?>
      
    </td>
      <?php
    }
  

   }
  
    
?>
 

<?php endforeach;?>
</tr>
<?php endforeach;?>
 
</tbody>
</table>
</br>

 
  


              
    </body>
    <script>
function myFunction() {
 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

 
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
 
    </html>