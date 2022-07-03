<!DOCTYPE html>
<html>
<head>
    <title>CodeIgniter 4 Fullcalender Tutorial - Online Web Tutor</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!--fullcalendar plugin files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    
    <!-- for plugin notification -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>
<body>
  
<div class="container">
    <h3 style="text-align: center">CodeIgniter 4 Fullcalendar Tutorial - Online Web Tutor</h3>
    <div style="background-color:white; " id="calendar"></div>
</div>
   
<script>
  var site_url = "<?= site_url() ?>";
</script>


</body>
</html>
<script>
  $(document).ready(function() {

var calendar = $('#calendar').fullCalendar({
    editable: true,
    events: site_url + "/event",
    displayEventTime: true,
    editable: true,
    eventRender: function(event, element, view) {
        if (event.allDay === 'true') {
            event.allDay = true;
        } else {
            event.allDay = false;
        }
    },
    selectable: true,
    selectHelper: true,
    select: function(date_scheduled, allDay) {

        var first_name = prompt('Event first_name:');

        if (first_name) {
            var date_scheduled = $.fullCalendar.formatDate(date_scheduled, "Y-MM-DD h:mm:ss");
            //var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
            $.ajax({
                url: site_url + "/eventAjax",
                data: {
                    first_name: first_name,
                    date_scheduled: date_scheduled,
                    //end: end,
                    type: 'add'
                },
                type: "POST",
                success: function(data) {
                    displayMessage("Event Created Successfully");

                    calendar.fullCalendar('renderEvent', {
                        appointment_id: data.appointment_id,
                        first_name: first_name,
                        date_scheduled: date_scheduled,
                        //end: end,
                        allDay: allDay
                    }, true);

                    calendar.fullCalendar('unselect');
                }
            });
        }
    },

    eventDrop: function(event, delta) {
        var date_scheduled = $.fullCalendar.formatDate(event.date_scheduled, "Y-MM-DD");
        //var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");

        $.ajax({
            url: site_url + '/eventAjax',
            data: {
                first_name: event.first_name,
                date_scheduled: date_scheduled,
                //end: end,
                appointment_id: event.appointment_id,
                type: 'update'
            },
            type: "POST",
            success: function(response) {

                displayMessage("Event Updated Successfully");
            }
        });
    },
    eventClick: function(event) {
        var deleteMsg = confirm("Do you really want to delete?");
        if (deleteMsg) {
            $.ajax({
                type: "POST",
                url: site_url + '/eventAjax',
                data: {
                    id: event.id,
                    type: 'delete'
                },
                success: function(response) {

                    calendar.fullCalendar('removeEvents', event.id);
                    displayMessage("Event Deleted Successfully");
                }
            });
        }
    }

});

});

function displayMessage(message) {
toastr.success(message, 'Event');
}
  </script>