<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
  
    <script src="https://kit.fontawesome.com/ad0d310a4a.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ad0d310a4a.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    
<link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
<script src="/plugins/jquery/jquery.min.js"></script>
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
   
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
      <!-- DataTables -->
  <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="/plugins/datatables-select/css/select.bootstrap4.min.css">
   <!-- Select2 -->
  <link rel="stylesheet" href="/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.css">
    <link rel="stylesheet" href="/dist/css/custom.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.min.css">
     <!-- SweetAlert2 -->
  <link rel="stylesheet" href="/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="/plugins/fullcalendar/main.css">
    <style type="text/css">/* Chart.js */
      @keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}
    </style>

     <!-- jQuery -->
   
    <!-- jQuery UI 1.11.4 -->
    <script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="/plugins/toastr/toastr.min.js"></script>
    <!-- fullCalendar 2.2.5 -->
  <script src="/plugins/moment/moment.min.js"></script>
  <script src="/plugins/fullcalendar/main.js"></script>
    <script>
        var _base_url_ = 'http://localhost/doctor/';
    </script>
    <script src="/dist/js/script.js"></script>
    <link rel= "stylesheet" href="/assets/css/calendar.css">
   

  
    <title>Document</title>
    <style>
        body{
            background-color:grey;
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

}
.btn-a {
    outline: none;
    border: none;
    cursor: pointer;
    display: inline-block;
    margin: 0 auto;
    padding: 0.9rem 2.5rem;
    text-align: center;
    background-color: #009688;
    color: #fff;
    border-radius: 4px;
    box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
    font-size: 17px;
 
  }
  .btn-a:hover{
    background-color: #69e8dc;
}
a{
    color:black;
}

        </style>
    
   	
      

  
</head>
<body>


            <header>
                <div class="flex container">
                    <a id="logo" href="#">HOPITAL.</a>
                    <nav>
                        <button id="nav-toggle" class="hamburger-menu">
                            <span class="strip"></span>
                            <span class="strip"></span>
                            <span class="strip"></span>
                        </button>
</br>
                        <ul id="nav-menu">
                            <li  ><a style="color:black;" href="../../home">&nbsp;&nbsp;Home</a></li>
                            <li><a style="color:black;" href="#" class="active" target="_blank">My appointments</a></li>
                            <li><a style="color:black;" href="">About Us</a></li>
                           
                            <li><a style="color:black;" href="../../contact">Contact Us</a></li>
                            
                                 <div class="profile-details">
                                     <img src="/assets/Images/avatar.png" alt="">
                                    <div class="admin_name"><?= session()->get('first_name') ?>&nbsp;<?= session()->get('last_name') ?></div>
                                    <i class='bx bx-chevron-down' ></i>
		                             <a href="<?=base_url('Users/logout')?>" class="btn btn-primary btn-sm float-end" style="right:0;">Logout</a>
                                </div>
        
                           
                           
                            <li id="close-flyout"><span class="fas fa-times"></span></li>
                        </ul>
                    </nav>
              
            </header>
   
        
        
                                 </br></br>  </br></br>  </br></br>
   
 
  
        




<h2 style="text-align:center;">MY APPOINTMENTS</h2>
<div class="container">
  <div class="card">
    <div class="card-body">
        <div style=""id="calendar"></div>
    </div>
  </div>
</div>


<script>
  <?php foreach($appointment as $item):?>
  var site_url = "<?= base_url('/bookAppointment/view/'.$item['appointment_id'])?>";
</script>
<script>

    $(function(){
        $('.select2').select2()
        var Calendar = FullCalendar.Calendar;
        var date = new Date()
        var d    = date.getDate(),
            m    = date.getMonth(),
            y    = date.getFullYear()
        var scheds = $.parseJSON('<?= $appointments; ?>');

        var calendarEl = document.getElementById('calendar');

        var calendar = new Calendar(calendarEl, {
                        initialView:"dayGridMonth",
                        headerToolbar: {
                            right : "dayGridWeek,dayGridMonth,listDay prev,next"
                        },
                        buttonText:{
                            dayGridWeek :"Week",
                            dayGridMonth :"Month",
                            listDay :"Day",
                            listWeek :"Week",
                        },
                        themeSystem: 'bootstrap',
                        //Random default events
                        events:function(event,successCallback){
                            var days = moment(event.end).diff(moment(event.start),'days')
                            var events = []
                            Object.keys(scheds).map(k=>{
                                var bg = 'var(--primary)';
                                if(scheds[k].status == "pending")
                                    bg = 'var(--primary)';
                                if(scheds[k].status == "confirmed")
                                    bg = 'var(--success)';
                                console.log(bg)
                                events.push({
                                    id          : scheds[k].appointment_id,
                                    title          : scheds[k].status,
                                    start          : moment(scheds[k].date_scheduled).format('YYYY-MM-DD[T]HH:mm'),
                                    backgroundColor: bg, 
                                    borderColor: bg, 
                                    });
                            })
                            console.log(events)
                            successCallback(events)

                        },
                        eventClick:(info)=>{
                            
                            uni_modal("Appointment Details", site_url)
                            

                        },
                        editable  : false,
                        selectable: true,
                        selectAllow: function(select) {
                                console.log(moment(select.start).format('dddd'))
                            if(moment().subtract(1, 'day').diff(select.start) < 0 && (moment(select.start).format('dddd') != 'Saturday' && moment(select.start).format('dddd') != 'Sunday'))
                                return true;
                            else
                                return false;
                        }
                        });

                        calendar.render();
                        // $('#calendar').fullCalendar()
        $('#location').change(function(){
            location.href = "./?lid="+$(this).val();
        })
    })
    <?php endforeach?>
</script>
</div>
</div> 
</div>
</div>
</section>

        <!-- /.content -->
  <div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal_right" role='dialog'>
    <div class="modal-dialog modal-full-height  modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fa fa-arrow-right"></span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="viewer_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
              <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
              <img src="" alt="">
      </div>
    </div>
  </div>
      </div>
      <!-- /.content-wrapper -->
      <script>
  $(document).ready(function(){
     window.viewer_modal = function($src = ''){
      start_loader()
      var t = $src.split('.')
      t = t[1]
      if(t =='mp4'){
        var view = $("<video src='"+$src+"' controls autoplay></video>")
      }else{
        var view = $("<img src='"+$src+"' />")
      }
      $('#viewer_modal .modal-content video,#viewer_modal .modal-content img').remove()
      $('#viewer_modal .modal-content').append(view)
      $('#viewer_modal').modal({
              show:true,
              backdrop:'static',
              keyboard:false,
              focus:true
            })
            end_loader()  

  }
    window.uni_modal = function($title = '' , $url='',$size=""){
        start_loader()
        $.ajax({
            url:$url,
            error:err=>{
                console.log()
                alert("An error occured")
            },
            success:function(resp){
                if(resp){
                    $('#uni_modal .modal-title').html($title)
                    $('#uni_modal .modal-body').html(resp)
                    if($size != ''){
                        $('#uni_modal .modal-dialog').addClass($size+'  modal-dialog-centered')
                    }else{
                        $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md modal-dialog-centered")
                    }
                    $('#uni_modal').modal({
                      show:true,
                      backdrop:'static',
                      keyboard:false,
                      focus:true
                    })
                    end_loader()
                }
            }
        })
    }
    window._conf = function($msg='',$func='',$params = []){
       $('#confirm_modal #confirm').attr('onclick',$func+"("+$params.join(',')+")")
       $('#confirm_modal .modal-body').html($msg)
       $('#confirm_modal').modal('show')
    }
  })
</script>


    </div>
    
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
 
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  
    <script src="/plugins/chart.js/Chart.min.js"></script>
    
    <script src="/plugins/sparklines/sparkline.js"></script>
   
    
    <script src="/plugins/select2/js/select2.full.min.js"></script>
  
    <script src="/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
 
    <script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
   
    <script src="/plugins/moment/moment.min.js"></script>
    <script src="/plugins/daterangepicker/daterangepicker.js"></script>
  
    <script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
   
    <script src="/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/plugins/datatables-select/js/select.bootstrap4.min.js"></script>
   
    <script src="/dist/js/adminlte.js"></script>
    <div class="daterangepicker ltr show-ranges opensright">
      <div class="ranges">
        <ul>
          <li data-range-key="Today">Today</li>
          <li data-range-key="Yesterday">Yesterday</li>
          <li data-range-key="Last 7 Days">Last 7 Days</li>
          <li data-range-key="Last 30 Days">Last 30 Days</li>
          <li data-range-key="This Month">This Month</li>
          <li data-range-key="Last Month">Last Month</li>
          <li data-range-key="Custom Range">Custom Range</li>
        </ul>
      </div>
      <div class="drp-calendar left">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
      </div>
      <div class="drp-calendar right">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
      </div>
      <div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div>
    </div>
    <div class="jqvmap-label" style="display: none; left: 1093.83px; top: 394.361px;">Idaho</div>  </body>
</html>
</body>
<script>
     $(function () {
                let headerElem = $('header');
                let logo = $('#logo');
                let navMenu = $('#nav-menu');
                let navToggle = $('#nav-toggle');

            

            navToggle.on('click', () => {
                navMenu.css('right', '0');
            });

            $('#close-flyout').on('click', () => {
                    navMenu.css('right', '-100%');
            });

            $(document).on('click', (e) => {
                let target = $(e.target);
                if (!(target.closest('#nav-toggle').length > 0 || target.closest('#nav-menu').length > 0)) {
                    navMenu.css('right', '-100%');
                }
            });

            $(document).scroll(() => {
                let scrollTop = $(document).scrollTop();

                if (scrollTop > 0) {
                    navMenu.addClass('is-sticky');
                    logo.css('color', '#000');
                    headerElem.css('background', '#fff');
                    navToggle.css('border-color', '#000');
                    navToggle.find('.strip').css('background-color', '#000');
                } else {
                    navMenu.removeClass('is-sticky');
                    logo.css('color', '#fff');
                    headerElem.css('background', 'transparent');
                    navToggle.css('bordre-color', '#fff');
                    navToggle.find('.strip').css('background-color', '#fff');
                }

                headerElem.css(scrollTop >= 200 ? {'padding': '0.5rem', 'box-shadow': '0 -4px 10px 1px #999'} : {'padding': '1rem 0', 'box-shadow': 'none' });
            });

            $(document).trigger('scroll');
            });
   
        </script>
