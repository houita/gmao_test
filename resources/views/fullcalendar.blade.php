@extends('layouts.master')
@section('content')
    {{-- message --}}
    <div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
				<div class="container">
                        <br><br>
                    <div id="calendar"></div>
                </div>
			</div>
		</div>

<script>
  var site_url = "{{ url('/') }}";
  $(document).ready(function() {

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var calendar = $('#calendar').fullCalendar({
    editable: true,
    header:{
        left:'prev,next today',
        center:'title',
        right:'month,agendaWeek,agendaDay'
    },
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
    select: function(start, end, allDay) {

        var title = prompt('Event Title:');

        if (title) {
            var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
            var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
            $.ajax({
                url: site_url + "/eventAjax",
                data: {
                    title: title,
                    start: start,
                    end: end,
                    type: 'add'
                },
                type: "POST",
                success: function(data) {
                    displayMessage("Event Created Successfully");

                    calendar.fullCalendar('renderEvent', {
                        id: data.id,
                        title: title,
                        start: start,
                        end: end,
                        allDay: allDay
                    }, true);

                    calendar.fullCalendar('unselect');
                }
            });
        }
    },

    eventDrop: function(event, delta) {
        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");

        $.ajax({
            url: site_url + '/eventAjax',
            data: {
                title: event.title,
                start: start,
                end: end,
                id: event.id,
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

  
@endsection
