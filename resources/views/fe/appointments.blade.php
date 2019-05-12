@extends('layouts.appv2')

@section('content')

    <div class="container">
       @if(Auth::user())
            <p>
                <a href="{{ action('PageController@createAppointment') }}"
                   class="btn btn-success">@lang('quickadmin.qa_add_new')
                </a>
            </p>
        @endif
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

        <div id='calendar'></div>

        <br />


    </div>
@stop

@section('javascript')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script>
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                defaultView: 'agendaWeek',
                events : [
                        @foreach($appointments as $appointment)
                    {
                        title : 'Reserved',
                        start : '{{ $appointment->start_time }}',
                        @if ($appointment->finish_time)
                        end: '{{ $appointment->finish_time }}',
                        @endif
                    },
                    @endforeach
                ]
            })
        });
    </script>
@endsection
