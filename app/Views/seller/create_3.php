<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <link rel= "stylesheet" href="/assets/css/seller.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>House details</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
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


 .container{
    background-color: #ffffff;
    width: 60%;
    min-width: 450px;
    position: relative;
    margin:  50px auto;
    padding: 50px 20px;
    border-radius: 7px;
    box-shadow: 0 20px 35px rgba(0,0,0,0.05);
}
input[type="file"]{
    display: none;
}
.container label{
    display: block;
    position: relative;
    background-color: #025bee;
    color: #ffffff;
    font-size: 18px;
    text-align: center;
    width: 300px;
    padding: 18px 0;
    margin: auto;
    border-radius: 5px;
    cursor: pointer;
}
.container p{
    text-align: center;
    margin: 20px 0 30px 0;
}
#images{
    width: 90%;
    position: relative;
    margin: auto;
    display: flex;
    justify-content: space-evenly;
    gap: 20px;
    flex-wrap: wrap;
}
figure{
    width: 45%;
}
img{
    width: 100%;
}
figcaption{
    text-align: center;
    font-size: 2.4vmin;
    margin-top: 0.5vmin;
}
@import url('https://fonts.googleapis.com/css?family=Muli&display=swap');  
 :root {  
  --line-border-fill: #3498db;  
  --line-border-empty: #e0e0e0;  
 }  
 * {  
  box-sizing: border-box;  
 }  
 
 
.container1 {  
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
 .form-input input {
  display:none;
}

.form-input label {
  display:block;
  width:45%;
  height:45px;
  margin-left: 25%;
  line-height:50px;
  text-align:center;
  background:#1172c2;
  color:#fff;
  font-size:15px;
  font-family:"Open Sans",sans-serif;
  text-transform:Uppercase;
  font-weight:600;
  border-radius:5px;
  cursor:pointer;
}
.form-input img {
  width:100%;
  display:none;
  margin-bottom:30px;
}
.center {
  height:100%;
  display:flex;
  align-items:center;
  justify-content:center;

}
.form-input {
  width:350px;
  padding:20px;
  background:#fff;
  box-shadow: -3px -3px 7px rgba(94, 104, 121, 0.377),
              3px 3px 7px rgba(94, 104, 121, 0.377);
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
                                     REGISTER YOUR PROPERTY WITH US
                                </h1></span></div>
<br><br>
   
           <form method="post" id="chef" action="<?=base_url('seller_homes-store')?>"accept-charset="utf-8" enctype="multipart/form-data" >
           
 
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
                                       House Details
                                        </h1>
                                    </div>
                             </div>
                             <a class="item_anchor" name="ItemAnchor4"></a>
                                   <label class="question top_question" for="address">House Address:
                                    <b class="icon_required" style="color:#FF0000">*</b>&nbsp;&nbsp;
                                      </label>
                                 
                                <input type="text" name="address" required class="text_field" id="Address_1" size="25" value="">&nbsp;&nbsp;&nbsp;
                                </br></br>
                                <a class="item_anchor" name="ItemAnchor4"></a>
                                   <label class="question top_question" for="address">Size:
                                    <b class="icon_required" style="color:#FF0000">*</b>&nbsp;&nbsp;
                                      </label>
                                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="size" required class="text_field" id="Address_1" size="25" value="">&nbsp;&nbsp;&nbsp;acres
                 
                 

                                <br><br> 

        
            
                    <a class="item_anchor" name="ItemAnchor11"></a>
                                     <label class="question top_question" for="district">District:
                                        <b class="icon_required" style="color:#FF0000">*</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </label>
                      <select id="district" name="district" class="drop_down">
                         <option></option>
                        <option value="Nairobi-West">Nairobi West</option>
                        <option value="Nairobi-East">Nairobi East</option>
                        <option value="Nairobi-North">Nairobi North</option>
                        <option value="Westlands">Westlands</option>
                    </select>

                    <input type="hidden"name="user_id" value="<?=session()->get('user_id')?>">
                    <a class="item_anchor" name="ItemAnchor11"></a>
                                     <label class="question top_question" for="constituency">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Constituency location:
                                        <b class="icon_required" style="color:#FF0000">*</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </label>
                      <select id="constituency" name="constituency" class="drop_down">
                         <option></option>
                        <option value="Dagorretti-North">Dagoretti North</option>
                        <option value="Dagorretti-South">Dagoretti South</option>
                        <option value="Langata"> Langata</option>
                        <option value="Kibera"> Kibera</option>
                        <option value="Roysambu"> Roysambu</option>
                        <option value="Kasarani">Kasarani</option>
                        <option value="Ruaraka"> Ruaraka</option>
                        <option value="Embakasi-North"> Embakasi North</option>
                        <option value="Embakasi-South"> Embakasi South</option>
                        <option value="Embakasi-Central"> Embakasi Central</option>
                        <option value="Embakasi-East"> Embakasi East</option>
                        <option value="Embakasi-West"> Embakasi West</option>
                        <option value="Makadara"> Makadara</option>
                        <option value="Kamukunji"> Kamukunji</option>
                        <option value="Starehe"> Starehe</option>
                        <option value="Mathare"> Mathare</option>
                        
                    </select>
                    </br>    </br> 
                   
                    <div class="center">
                    <label class="question top_question" for="district">Please upload a clear image of the property
                                     </br>
                        <div class="form-input">
  <div class="preview">
   <img id="file-ip-1-preview">
   <label for="file-ip-1">Upload Image</label>
 <input type="file" name="home_image" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
 
 </div>
    
  </div>

                                     </div>
                                   
                                     </br><br>   
       
      
    <div class="q input">
                    <a class="item_anchor" name="ItemAnchor2"></a>
                                    <label class="question top_question" for="bathrooms">Number of bathrooms:
                                        <b class="icon_required" style="color:#FF0000">*</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       
                                    </label>
                               <input type="text" name="bathrooms" required class="text_field" id="first_name" size="25" >&nbsp;&nbsp;&nbsp;
                                    </br>   </br>    </br> 
                     <a class="item_anchor" name="ItemAnchor3"></a>
                                   <label class="question top_question" for="bedrooms">Number of bedrooms:
                                    <b class="icon_required" style="color:#FF0000">*</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                      
                                    </label>
                                <input type="text" name="bedrooms" required class="text_field" id="last_name" size="25" ">
            <br><br>       
                  
           
            <a class="item_anchor" name="ItemAnchor3"></a>
                                   <label class="question top_question" for="bedrooms">Home price:
                                    <b class="icon_required" style="color:#FF0000">*</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                      
                                    </label>
                                <input type="text" name="home_price" required class="text_field" id="" size="25" ?>
            <br><br>    
                    
                                   
     
                               
                                   </br></br>
        <input type="hidden" name="user_id" value=<?=session()->get('user_id')?>>

        <div class="container1">  
    <div class="progress-container">  
     <div class="progress" id="progress"></div>  
     <div class="circle">1</div>  
     <div class="circle">2</div>  
     <div class="circle active">3</div>  
      
    </div>  
    <a href="upload_files"><button class="btn btn-primary" id="prev">Prev</button> </a>
    <button class="btn btn-primary" id="next">Submit</button>  


</div>    
                                   </div>

                                   
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
         <input type="hidden" name="first_name" value="<?= session()->get('first_name')?>" >
<input type="hidden" name="last_name" value="<?= session()->get('last_name')?>" >
<input type="hidden" name="user_id" value="<?= session()->get('user_id')?>" >    
         

       </form>

                                 
                                 
              </body>
<script>
    
   function showPreview(event){
  if(event.target.files.length > 0){
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("file-ip-1-preview");
    preview.src = src;
    preview.style.display = "block";
  }
}
   </script>