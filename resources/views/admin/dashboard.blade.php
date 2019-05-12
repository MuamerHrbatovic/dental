@extends('admin.template')
@section('content')
    <div class="panel-header panel-header-lg">
        <canvas id="bigDashboardChart"></canvas>
    </div>
    <div class="content">

        <div class="row">
            <div class="col-md-6">
                <div class="card  card-tasks">
                    <div class="card-header ">
                        <h5 class="card-category">Backend development</h5>
                        <h4 class="card-title">Appointments</h4>
                    </div>
                    <div class="card-body ">
                        <div class="table-full-width table-responsive">
                            <table class="table">
                                <tbody>
                               @foreach($appointments as $appointment)
                                   <tr>
                                       <td>
                                           <div class="form-check">
                                               <label class="form-check-label">
                                                   <input class="form-check-input" type="checkbox" checked>
                                                   <span class="form-check-sign"></span>
                                               </label>
                                           </div>
                                       </td>
                                       <td class="text-left">Appointment</td>
                                       <td class="td-actions text-right">
                                           <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                                               <i class="now-ui-icons ui-2_settings-90"></i>
                                           </button>
                                           <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                                               <i class="now-ui-icons ui-1_simple-remove"></i>
                                           </button>
                                       </td>
                                   </tr>
                                   @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-category">All Persons List</h5>
                        <h4 class="card-title"> Users</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    Name
                                </th>
                                <th>
                                    Email
                                </th>

                                </thead>
                                <tbody>
                               @foreach($users as $user)
                                   <tr>
                                       <td>
                                           {{ $user->name }}
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
