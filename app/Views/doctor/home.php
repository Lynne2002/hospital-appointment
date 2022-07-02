<h1 class="text-light">Welcome to</h1>
<?php
 $sched_arr=array();
?>
<hr>
<div class="container">
  <div class="card">
    <div class="card-body">
        <div id="calendar"></div>
    </div>
  </div>
</div>
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
<?php
$sched_query = $conn->query("SELECT a.*,p.name FROM `appointments` a inner join `patient_list` p on a.patient_id = p.id");
$sched_arr = json_encode($sched_query->fetch_all(MYSQLI_ASSOC));
?>

<script>
    $(function(){
        $('.select2').select2()
        var Calendar = FullCalendar.Calendar;
        var date = new Date()
        var d    = date.getDate(),
            m    = date.getMonth(),
            y    = date.getFullYear()
        var scheds = $.parseJSON('<?php echo ($sched_arr) ?>');

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
                                if(scheds[k].status == 0)
                                    bg = 'var(--primary)';
                                if(scheds[k].status == 1)
                                    bg = 'var(--success)';
                                console.log(bg)
                                events.push({
                                    id          : scheds[k].id,
                                    title          : scheds[k].name,
                                    start          : moment(scheds[k].date_sched).format('YYYY-MM-DD[T]HH:mm'),
                                    backgroundColor: bg, 
                                    borderColor: bg, 
                                    });
                            })
                            console.log(events)
                            successCallback(events)

                        },
                        eventClick:(info)=>{
                            uni_modal("Appointment Details","appointments/view_details.php?id="+info.event.id)
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
</script>