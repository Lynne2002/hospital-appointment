<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/ad0d310a4a.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ad0d310a4a.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/assets/styles.css">
    <link rel= "stylesheet" href="/assets/css/calendar.css">
</head>
<body>

<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-h-plus-plus'></i>
      <span class="logo_name">HOPITAL</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="doctor">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
       
        <li>
          <a href="#"class="active">
            <i class='bx bx-box' ></i>
            <span class="links_name">Schedule</span>
          </a>
        </li>
        <li>
          <a href="appointments">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Appointments</span>
          </a>
        </li>
        <li>
          <a href="">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Patients</span>
          </a>
        </li>
       
       
       
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        
       
   
      </ul>
  </div>
  <div style="margin-left:300px;" class="col-lg-8">
	<div class="card card-outline card-primary">
		<div class="card-header">
			<h5 class="card-title">Clinic Schedule Settings</h5>
		</div>
		<div class="card-body">
			<form action="<?=base_url('schedule-store')?>" id="schedule_settings" method="post">
				<div id="msg" class="form-group"></div>
                <div class="row">
                <div class="col-lg-6">
                <div class="form-group">
                    <label for="" class="control-label">Weekly Schedule</label><br>
                    <div class="icheck-primary">
                        <input type="checkbox" id="checkboxPrimary1" name="day_schedule[]" value='Sunday' <?php echo isset($meta['day_schedule']) && in_array("Sunday",explode(",",$meta['day_schedule'])) ? "checked" : ''  ?>>
                        <label for="checkboxPrimary1">
                            Sunday
                        </label>
                    </div>
                    <div class="icheck-primary">
                        <input type="checkbox" id="checkboxPrimary2" name="day_schedule[]" value='Monday'  <?php echo isset($meta['day_schedule']) && in_array("Monday",explode(",",$meta['day_schedule'])) ? "checked" : ''  ?>>
                        <label for="checkboxPrimary2">
                            Monday
                        </label>
                    </div>
                    <div class="icheck-primary">
                        <input type="checkbox" id="checkboxPrimary3" name="day_schedule[]" value='Tuesday'  <?php echo isset($meta['day_schedule']) && in_array("Tuesday",explode(",",$meta['day_schedule'])) ? "checked" : ''  ?>>
                        <label for="checkboxPrimary3">
                            Tuesday
                        </label>
                    </div>
                    <div class="icheck-primary">
                        <input type="checkbox" id="checkboxPrimary4" name="day_schedule[]" value='Wednesday'  <?php echo isset($meta['day_schedule']) && in_array("Wednesday",explode(",",$meta['day_schedule'])) ? "checked" : ''  ?>>
                        <label for="checkboxPrimary4">
                            Wednesday
                        </label>
                    </div>
                    <div class="icheck-primary">
                        <input type="checkbox" id="checkboxPrimary5" name="day_schedule[]" value='Thursday'  <?php echo isset($meta['day_schedule']) && in_array("Thursday",explode(",",$meta['day_schedule'])) ? "checked" : ''  ?>>
                        <label for="checkboxPrimary5">
                            Thursday
                        </label>
                    </div>
                    <div class="icheck-primary">
                        <input type="checkbox" id="checkboxPrimary6" name="day_schedule[]" value='Friday'  <?php echo isset($meta['day_schedule']) && in_array("Friday",explode(",",$meta['day_schedule'])) ? "checked" : ''  ?>>
                        <label for="checkboxPrimary6">
                            Friday
                        </label>
                    </div>
                    <div class="icheck-primary">
                        <input type="checkbox" id="checkboxPrimary7" name="day_schedule[]" value='Saturday'  <?php echo isset($meta['day_schedule']) && in_array("Saturday",explode(",",$meta['day_schedule'])) ? "checked" : ''  ?>>
                        <label for="checkboxPrimary7">
                            Saturday
                        </label>
                    </div>
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="" class="control-label">Morning Time Schedule</label>
                            <div class="row row-cols-3">
                            <input type="time" class="form-control col" name="morning_schedule[]" value="<?php echo isset($meta['morning_schedule']) ? explode(',',$meta['morning_schedule'])[0] : "" ?>" required>
                            <span class="col-auto"> - </span>
                            <input type="time" class="form-control col" name="morning_schedule[]" value="<?php echo isset($meta['morning_schedule']) ? explode(',',$meta['morning_schedule'])[1] : "" ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Afternoon Time Schedule</label>
                        <div class="row row-cols-3">
                            <input type="time" class="form-control col" name="afternoon_schedule[]" value="<?php echo isset($meta['afternoon_schedule']) ? explode(',',$meta['afternoon_schedule'])[0] : "" ?>" required>
                            <span class="col-auto"> - </span>
                            <input type="time" class="form-control col" name="afternoon_schedule[]" value="<?php echo isset($meta['afternoon_schedule']) ? explode(',',$meta['afternoon_schedule'])[1] : "" ?>" required>
                        </div>
                    </div>
                </div>
                </div>
			</form>
		</div>
		<div class="card-footer">
			<div class="col-md-12">
				<div class="row">
					<button class="btn btn-sm btn-primary" form="schedule_settings">Update</button>
				</div>
			</div>
		</div>

	</div>
</div>
<script>
	
	$(function(){
        $('#schedule_settings').submit(function(e){
            e.preventDefault()
            start_loader()
            $.ajax({
                url:_base_url_+"classes/Master.php?f=save_sched_settings",
                data: $(this).serialize(),
                method:"POST",
                dataType:"json",
                error:err=>{
                    console.log(err)
                    alert_toast("An error occured",'error');
                    end_loader()
                },
                success:function(resp){
                    if(!!resp.status && resp.status == 'success'){
                        location.reload()
                    }else if(!!resp.status && resp.status == 'success' && !!resp.msg){
                        var err_el = $('<div>')
                            err_el.addClass('alert alert-danger')
                            err_el.text(resp.msg)
                            $('#msg').hide().append(err_el).show('slow')
                            $("html, body").animate({ scrollTop: 0 }, "fast");
                            
                    }else{
                        console.log(resp)
                        alert_toast("An error occured",'error');
                    }
                    end_loader();
                }
            })
        })
    })
</script>
    
</body>
</html>



