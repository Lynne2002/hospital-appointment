<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <link rel= "stylesheet" href="/assets/css/seller.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <title>Application form</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="/assets/js/jquery-3.6.0.min.js"></script>
       <script src="/assets/js/popper.min.js"></script>
       <script src="/assets/bootstrap.min.js"></script>
       <script src="scripts.js"></script>
     
       <style>
           .column {
    float: left;
    width: 33.33%;
    padding: 5px;
  }
.row::after {
    content: "";
    clear: both;
    display: table;
  }
  @media screen and (max-width: 500px) {
  .column {
    width: 100%;
  }
  .segment_header {
    width: auto;
    margin: 1px;
    color: #FFFFFF;
    background: #2193b0; 
    background: -webkit-linear-gradient(to right, #6dd5ed, #2193b0); 
    background: linear-gradient(to right, #6dd5ed, #2193b0); 
    background-size: cover;
    background-repeat: repeat;
    background-position: 50% 50%;
    border-radius: 0;
}
.form_table a {
    background: #2193b0;  
    background: -webkit-linear-gradient(to right, #6dd5ed, #2193b0); 
    background: linear-gradient(to right, #6dd5ed, #2193b0); 
    
}
#profileDisplay{
    display:block;
    width:60%;
    margin: 10px auto;
    border-radius:50%
}
 
 
}
@import url('https://fonts.googleapis.com/css?family=Muli&display=swap');  
 :root {  
  --line-border-fill: #3498db;  
  --line-border-empty: #e0e0e0;  
 }  
 * {  
  box-sizing: border-box;  
 }  
 
 
.container {  
  text-align: center;  
 }  
 .progress-container {  
  display: flex;  
  justify-content: space-between;  
  position: relative;  
  margin-bottom: 30px;  
  max-width: 100%;  
  width: 350px;  
 }  
 .progress-container::before {  
  content: '';  
  background-color: var(--line-border-empty);  
  position: absolute;  
  top: 50%;  
  left: 0;  
  transform: translateY(-50%);  
  height: 4px;  
  width: 100%;  
  z-index: -1;  
 }  
 .progress {  
  background-color: var(--line-border-fill);  
  position: absolute;  
  top: 50%;  
  left: 0;  
  transform: translateY(-50%);  
  height: 4px;  
  width: 0%;  
  z-index: -1;  
  transition: 0.4s ease;  
 }  
 .circle {  
  background-color: #fff;  
  color: #999;  
  border-radius: 50%;  
  height: 30px;  
  width: 30px;  
  display: flex;  
  align-items: center;  
  justify-content: center;  
  border: 3px solid var(--line-border-empty);  
  transition: 0.4s ease;  
 }  
 .circle.active {  
  border-color: var(--line-border-fill);  
 }  
  
 .btn:active {  
  transform: scale(0.98);  
 }  
 .btn:focus {  
  outline: 0;  
 }  
 .btn:disabled {  
  background-color: var(--line-border-empty);  
  cursor: not-allowed;  
 }
</style>
</head>
<body style="background:transparent">
<div class="q full_width">
                                  <a class="item_anchor"></a>
                                       <div class="segment_header" style="
                                             width: 1300px;
                                             text-align:Left;
                                             background-repeat:repeat;
                                             background-color:transparent;
                                             background-image:url('/assets/Images/application.jpg');
                                             background-size: cover;
                                             background-position: 50% 50%;
                                            ">
                                     <h1 style="
                                     font-size:30px;
                                     font-family:'Cinzel',serif;
                                     padding:90px 1em 10px ;
                                     background-color: rgba(0, 0, 0, 0.08)">
                                     HOUSE TOURS
                                </h1></span></div>
<br><br>
   
           <form method="post" id="chef" action="<?=base_url('house_tour-store')?>" >
           
 
                        <div class="form_table" >
                            <div class="clear">
                          
                             
                             
                                <a class="item_anchor" name="ItemAnchor1"></a>
                                     <div class="segment_header" 
                                                 style="
                                                 width:auto;
                                                 text-align:Left;">
                                         <h1 style="
                                                 font-size:18px;
                                                 padding:20px 1em ;">
                                Registration
                                        </h1>
                                    </div>
                             </div>


        <div class="q input">
                    <a class="item_anchor" name="ItemAnchor2"></a>
                                    <label class="question top_question" for="first_name">First Name:
                                        <b class="icon_required" style="color:#FF0000">*</b>&nbsp;
                                       
                                    </label>
                               <input type="text" name="first_name" required class="text_field" id="first_name" size="25" value=" <?= session()->get('first_name')?>">&nbsp;&nbsp;&nbsp;
                              
                     <a class="item_anchor" name="ItemAnchor3"></a>
                                   <label class="question top_question" for="last_name">Last Name:
                                    <b class="icon_required" style="color:#FF0000">*</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                      
                                    </label>
                                <input type="text" name="last_name" required class="text_field" id="last_name" size="25" value="<?= session()->get('last_name')?>">
            <br><br>       
                    <a class="item_anchor" name="ItemAnchor4"></a>
                                   <label class="question top_question" for="time">Time and date scheduled for visit:
                                    <b class="icon_required" style="color:#FF0000">*</b>&nbsp;&nbsp;
                                      </label>
                                <input type="datetime-local" name="time" required class="text_field" id="time" size="25" value="">&nbsp;&nbsp;&nbsp;
                 
                 

                 
            <br><br>       
            
                    <a class="item_anchor" name="ItemAnchor11"></a>
                                     <label class="question top_question" for="agent">Preferred Agent:
                                        <b class="icon_required" style="color:#FF0000">*</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </label>
                      <select id="agent" name="agent" class="drop_down">
                         <option></option>
                        <option value="Kambua">Kambua</option>
                        <option value="Kainjii">Kainjii</option>
                        
                    </select>

                    <input type="hidden"name="user_id" value="<?=session()->get('user_id')?>">
                    
                     
                
        

                    
        
            <br><br>
                    <a class="item_anchor" name="ItemAnchor9"></a>
                                    <label class="question top_question" for="phone_number">Phone:
                                        <b class="icon_required" style="color:#FF0000">*</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       
                                    </label>
                                 <input type="text" name="phone_number" class="text_field" id="phone_number" size="25" value="">&nbsp;&nbsp;&nbsp;
          
                    <a class="item_anchor" name="ItemAnchor10"></a>
                                     <label class="question top_question" for="email">Email Address:
                                        <b class="icon_required" style="color:#FF0000">*</b>&nbsp;
                                        </label>
                                 <input type="email" name="email" class="text_field" id="email" size="25" value="<?= session()->get('email')?>">
            <br><br>
            <a class="item_anchor" name="ItemAnchor10"></a>
                                     <label class="question top_question" for="Age">Age:
                                        <b class="icon_required" style="color:#FF0000">*</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </label>
                                 <input type="age" name="age" class="text_field" id="age" size="25" value="">
            <br><br>
                    <a class="item_anchor" name="ItemAnchor11"></a>
                                     <label class="question top_question" for="gender">Gender:
                                        <b class="icon_required" style="color:#FF0000">*</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </label>
                      <select id="gender" name="gender" class="drop_down">
                         <option></option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
             <br><br>
        
             <button class="btn btn-primary" id="">Book</button>  

              

     </div>
          
                                     </div>
                                     </div>
                                     </form>
                                   
                                     </body>
        
                    
        
               





   </form>
    
              </body>
<script>
    const progress = document.getElementById('progress')  
 const prev = document.getElementById('prev')  
 const next = document.getElementById('next')  
 const circles = document.querySelectorAll('.circle')  
 let currentActive = 1  
 next.addEventListener('click', () => {  
   currentActive++  
   if(currentActive > circles.length) {  
     currentActive = circles.length  
   }  
   update()  
 })  
 prev.addEventListener('click', () => {  
   currentActive--  
   if(currentActive < 1) {  
     currentActive = 1  
   }  
   update()  
 })  
 function update() {  
   circles.forEach((circle, idx) => {  
     if(idx < currentActive) {  
       circle.classList.add('active')  
     } else {  
       circle.classList.remove('active')  
     }  
   })  
   const actives = document.querySelectorAll('.active')  
   progress.style.width = (actives.length - 1) / (circles.length - 1) * 100 + '%'  
   if(currentActive === 1) {  
     prev.disabled = true  
   } else if(currentActive === circles.length) {  
     next.disabled = true  
   } else {  
     prev.disabled = false  
     next.disabled = false  
   }  
 }  
    </script>