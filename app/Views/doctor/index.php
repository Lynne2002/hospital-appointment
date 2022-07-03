<?php
 $sched_arr=array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css"/>
   
   
  
  
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!--fullcalendar plugin files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    
    <!-- for plugin notification -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  
    <title>Document</title>
    <style>
    .fc-event:hover, .fc-event-selected {
        color: black !important;
    }
    a.fc-list-day-text {
        color: black !important;
    }
    .fc-event:hover, .fc-event-selected {
        color: black !important;
        background: var(--light);
        cursor: pointer;
    }
</style>
</head>
<body>
<h1 class="text-light">Welcome to</h1>

<hr>




<?php
$db = db_connect();
$sched_query = $db->query("SELECT a.* FROM appointments a inner join `users` u on a.patient_id = u.user_id");
$sched_arr = json_encode($sched_query->getResult('array'));

?>
<div class="container">
  <div class="card">
    <div class="card-body">
        <div id="calendar"></div>
    </div>
  </div>
</div>

<script>
    $(document).ready(function(){
        var calendar = $('#calendar').fullCalendar({
          //editable:true,
           firstDay: 1,
            defaultView:'agendaWeek',
            height:650,
             contentHeight:"auto",
             expandRows: true,
            timeFormat: 'H:mm',
           slotLabelFormat:"H:mm",
            header:{
                left:'prev,next today',
                center:'first_name',
                right:'month,agendaWeek,agendaDay'
            },
            views : {
               agendaWeek : {
                  columnFormat : "ddd D/M"
               }
             },
             events:"<?php echo base_url('calendar-load') ?>",
           selectable:true,
            selectHelper:true,

             // $('#save_events').click(function(){
            select:function(date_scheduled)
            {

                var view=calendar.fullCalendar('getView')

            if(view.name=="month" || view.name=="agendaWeek"){
                   $('#cal_modal').modal('show');

                     var setstart = $.fullCalendar.formatDate(date_scheduled, "Y-MM-DD[T]HH:mm:ss");
                      //var setend = $.fullCalendar.formatDate(end, "Y-MM-DD");
                       //var setfrom = $.fullCalendar.formatDate(date_scheduled, "HH:mm:ss");
                      //  var setto = $.fullCalendar.formatDate(end, "HH:mm:ss");

                   
                   $('#datefrom').val(setstart);
                    // $('#dateto').val(setend);
                     $('#timefrom').val(setfrom);
                    // $('#timeto').val(setto);
               
            }else if( view.name=="agendaDay") 
            {
                 $('#day_modal').modal('show');

                  var start = $.fullCalendar.formatDate(date_scheduled, "Y-MM-DD HH:mm:ss");
              //  var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");

               $('#daystart').val(date_scheduled)
                // $('#dayend').val(end)
           
               
            }
            
        }
    });

           
   
                        
                     
    });

</script>