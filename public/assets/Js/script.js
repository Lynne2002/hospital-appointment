$(document).ready(function() {

    var calendar = $('#calendar').fullCalendar({
        editable: true,
        events: site_url + "/event",
        displayEventTime: false,
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
                var date_scheduled = $.fullCalendar.formatDate(date_scheduled, "Y-MM-DD");
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