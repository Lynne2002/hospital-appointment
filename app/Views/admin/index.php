<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/assets/css/dashboard.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="/assets/js/jquery-3.6.0.min.js"></script>
       <script src="/assets/js/popper.min.js"></script>
       <script src="/assets/bootstrap.min.js"></script>
       <style>
          body{
           
	background-size: cover;
	background-position: center;
	font-family: 'Raleway', cursive;
        }
         .table {
           color:black;
           background-color:transparent;
         }
         tr:hover{
          background-color: #0d6efd;
         }
         .sidebar{
  position: fixed;
  height: 100%;
  width: 240px;
  background: #0b0d0f;
  transition: all 0.5s ease;
}
         
        
             h4{
  margin-top:100px;
             }
         </style>
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Shop Haven</span>
    </div>
      <ul class="nav-links">
     
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="roles">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Roles</span>
          </a>
        </li>
        <li>
          <a href="categories">
            <i class='bx bx-box' ></i>
            <span class="links_name">Categories</span>
          </a>
        </li>
        <li>
          <a href="subcategories">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Subcategories</span>
          </a>
        </li>
        <li>
          <a href="products">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Products</span>
          </a>
        </li>
      
        <li>
          <a href="payment_types">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Payment Types</span>
          </a>
        </li>
        <li>
          <a href="purchaseHistory">
            <i class='bx bx-user' ></i>
            <span class="links_name">Orders Analytics</span>
          </a>
        </li>
        <li>
          <a href="viewmessage">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Favorites</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Settings</span>
          </a>
        </li>
        
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>


      <div class="search-box">
        <input onkeyup="myFunction()"  id ="myInput"type="text" placeholder="Search User...">
        <i class='bx bx-search' ></i>
      </div>


      <div class="profile-details">
        <img src="/assets/Images/avatar.png" alt="">
        <span class="admin_name"><?= session()->get('first_name') ?>&nbsp;<?= session()->get('last_name') ?></span>
       
        <a href="<?=base_url('Users/logout')?>" class="btn btn-primary btn-sm float-end" style="right:0;">Logout</a>
      </div>
    </nav>

    


 <div class="container">
     <div class="row">
          <div class="col-md-12 mt-5">
               <div class="card">
                    <div class="card-header">
                    <?php
             if(session()->getFlashdata('status')){
                    echo"<h4>".session()->getFlashdata('status')."</h4";
            }
            ?>

                          <h4>Registered users:
                             <a href="<?= base_url('user-add')?>" class="btn btn-primary float-right">Add User</a>
                          </h4>
                     </div>
                     <br><br>

<div class="card-body">
 <table id="myTable" class="table table-bordered">
      

<thead>
    <tr>
       
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Role</th>
        <th>Action</th>
</tr>
</thead>
</tbody>
</php>
<?php foreach($users as $row):?>
    <tr>
       
        <td><?=$row['first_name']?></td>
        <td><?=$row['last_name']?></td>
        <td><?=$row['email']?></td>
        <td><?=$row['gender']?></td>
        <td><?=$row['role']?></td>
        
        <td>
          <a href="<?= base_url('users/edit/'.$row['id'])?>" class="btn btn-success btn-sm">Edit</a>
          <a href="<?=base_url('users/delete/'.$row['id'])?>" class="btn btn-danger btn-sm">Delete</a>
</td>
    
</tr>
<?php endforeach;?>
                                                    </table>

                                            </div>
                                     </div>
                              </div>

                        </div>
                </div>



      
</body>
</html>
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
