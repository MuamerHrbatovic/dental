@extends('layouts.appv3')

@section('content')
    <div class="content">

        <div class="row">
            <div class="col-md-6">
                <div class="card  card-tasks">
                    <div class="card-header ">
                        <h4 class="card-title">Appointments</h4>
                    </div>
                    <div class="card-body ">
                        <div class="table-full-width table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <th>
                                    Date
                                </th>
                                <th>
                                    Start time
                                </th>
                                <th>
                                    End Time
                                </th>
                                </thead>
                                <tbody>
                                @foreach($appointments as $appointment)
                                    <tr>
                                        <td>
                                            {{ substr($appointment->start_time,0, 11) }}
                                        </td>
                                        <td>{{ str_replace('00:00', '00', substr($appointment->start_time, 11))  }}</td>
                                        <td>{{ str_replace('00:00', '00', substr($appointment->finish_time, 11)) }}</td>

                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Users</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    First Name
                                </th>
                                <th>
                                    Last Name
                                </th>
                                <th>
                                    Phone
                                </th>
                                <th>
                                    Email
                                </th>

                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>
                                            {{ $user->first_name }}
                                        </td>
                                        <td>
                                            {{ $user->last_name }}
                                        </td>
                                        <td>
                                            {{ $user->phone }}
                                        </td>
                                        <td>
                                            {{ $user->email }}
                                        </td>

                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
