
<!DOCTYPE Male>
<Male>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v2 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="/assets/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="/assets/css/booking.css">
        <style>
            button {
    border: none;
    width: 152px;
    height: 40px;
    margin: auto;
    margin-top: 29px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    background: #009688;
    font-size: 13px;
    color: #fff;
    text-transform: uppercase;
    font-family: "Muli-SemiBold";
    border-radius: 20px;
    overflow: hidden;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px rgba(0, 0, 0, 0);
    position: relative;
    -webkit-transition-property: color;
    transition-property: color;
    -webkit-transition-duration: 0.5s;
    transition-duration: 0.5s; }
    button:before {
      content: "";
      position: absolute;
      z-index: -1;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: #23897e;
      -webkit-transform: scaleX(0);
      transform: scaleX(0);
      -webkit-transform-origin: 0 50%;
      transform-origin: 0 50%;
      -webkit-transition-property: transform;
      transition-property: transform;
      -webkit-transition-duration: 0.5s;
      transition-duration: 0.5s;
      -webkit-transition-timing-function: ease-out;
      transition-timing-function: ease-out; }
            .inner {
    min-width: 850px;
    margin: auto;
    padding-top: 68px;
    padding-bottom: 48px;
    background: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url(/assets/Images/appointment.png); 
  }
  input, textarea, select, button {
    font-family: "Muli-Regular";
    color: white;
    font-size: 13px; }
    body {
    background-size: cover;
	background-position: center;
    font-family: "Muli-Regular";
    color: white;
    font-size: 13px;
    margin: 0; }
    .inner {
    min-width: 850px;
    margin: auto;
    padding-top: 68px;
    padding-bottom: 48px;
    background: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url(/assets/Images/appointment.png); 
    background-size: cover;
	background-position: center;
  }
            </style>
	</head>

	<body>

		<div class="wrapper" style="background-image: url('/assets/Images/bg-registration-form-2.jpg');">
			<div class="inner">
				<form action="">
					<h3 style="color:white; text-align:center;">WELCOME TO:</h3>
                    <h1 style="color:white; text-align:center;"><?=$hospitals['hospital_name']?></h1>
                     </br> </br> </br>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">First Name</label>
							<input type="text" class="form-control" name="first_name" value="<?= session()->get('first_name') ?>">
						</div>
						<div class="form-wrapper">
							<label for="">Last Name</label>
							<input type="text" class="form-control" name="last_name" value="<?= session()->get('last_name') ?>">
						</div>
					</div>
					<div class="form-wrapper">
						<label for="">Email</label>
						<input type="text" class="form-control"name="email" value="<?= session()->get('email') ?>">
					</div>
					<div class="form-wrapper">
						<label for="">Preferred Appointment Date and time</label>
						<input type="datetime-local" name="date_scheduled" class="form-control">
					</div>
          <div class="form-wrapper">
						<label for="">Phone number</label>
						<input type="tel" name="phone" name="phone" class="form-control">
					</div>
          
          <label for="">Gender:</label></br>
              <label for="Male">Male</label> <input type="radio" id="Male" name="gender" value="Male">&nbsp;
           <label for="Female">Female</label> <input type="radio" id="Female" name="gender" value="Female">
</br></br></br>
        <div class="form-wrapper">
						<label for="">ID/Passport Number</label>
						<input type="number" name="ID_No"  class="form-control">
					</div>
                          
          <input type="text" class="form-control"name="email" value="<?= session()->get('email') ?>">
					
         <div class="form-wrapper">
						<label for="">Reason for appointment</label>
						<textarea style=" border-radius: 20px; background:transparent;"id="appointment_reason" name="appointment_reason" rows="4" cols="50"></textarea>
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox"> I accept the Terms of Use & Privacy Policy.
							<span class="checkmark"></span>
						</label>
					</div>
					<button>Book now</button>
				</form>
			</div>
		</div>
		
	</body>
</html>