<?php

namespace App\Http\Controllers\Admin;

use App\Appointment;
use App\Client;
use App\Employee;
use App\Service;
use App\WorkingHour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAppointmentsRequest;
use App\Http\Requests\Admin\UpdateAppointmentsRequest;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of Appointment.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('appointment_access')) {
            return abort(401);
        }

        $appointments = Appointment::all();

        return view('admin.appointments.index', compact('appointments'));
    }

    /**
     * Show the form for creating new Appointment.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('appointment_create')) {
            return abort(401);
        }
        $relations = [
            'clients' => Client::get(),
            'employees' => Employee::get(),
			'services' => Service::get(),
        ];

        return view('admin.appointments.create', $relations);
    }

    /**
     * Store a newly created Appointment in storage.
     *
     * @param StoreAppointmentsRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAppointmentsRequest $request)
    {

        if (! Gate::allows('appointment_create')) {
            return abort(401);
        }
        $employeeID = $request->get('employee_id') - 2;
        /** @var Employee $employee */
		$employee = Employee::find($employeeID);

		/** @var WorkingHour $working_hours */
		$working_hours = WorkingHour::where('employee_id', ($employeeID))->whereDay('date', '=', date("d", strtotime($request->date)))->whereTime('start_time', '<=', date("H:i", strtotime("".$request->starting_hour.":".$request->starting_minute.":00")))->whereTime('finish_time', '>=', date("H:i", strtotime("".$request->finish_hour.":".$request->finish_minute.":00")))->get();
		if(!$employee->provides_service($request->service_id)) return redirect()->back()->withErrors("This employee doesn't provide your selected service")->withInput();
        if($working_hours->isEmpty()) return redirect()->back()->withErrors("This employee isn't working at your selected time")->withInput();
		$appointment = new Appointment;
		$appointment->client_id = $request->client_id;
		$appointment->employee_id = $employeeID;
		$appointment->start_time = "".$request->date." ".$request->starting_hour .":".$request->starting_minute.":00";
		$appointment->finish_time = "".$request->date." ".$request->finish_hour .":".$request->finish_minute.":00";
		$appointment->comments = $request->comments;
		$appointment->save();

        return redirect()->route('admin.appointments.index');
    }


    /**
     * Show the form for editing Appointment.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('appointment_edit')) {
            return abort(401);
        }
        $relations = [
            'clients' => Client::get()->pluck('first_name', 'id')->prepend('Please select', ''),
            'employees' => Employee::get()->pluck('first_name', 'id')->prepend('Please select', ''),
        ];

        $appointment = Appointment::findOrFail($id);

        return view('admin.appointments.edit', compact('appointment') + $relations);
    }

    /**
     * Update Appointment in storage.
     *
     * @param  \App\Http\Requests\UpdateAppointmentsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAppointmentsRequest $request, $id)
    {
        if (! Gate::allows('appointment_edit')) {
            return abort(401);
        }
        $request->employee_id = $request->get('employee_id') - 2;

        $appointment = Appointment::findOrFail($id);
        $appointment->update($request->all());



        return redirect()->route('admin.appointments.index');
    }


    /**
     * Display Appointment.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('appointment_view')) {
            return abort(401);
        }
        $relations = [
            'clients' => Client::get()->pluck('first_name', 'id')->prepend('Please select', ''),
            'employees' => Employee::get()->pluck('first_name', 'id')->prepend('Please select', ''),
        ];

        $appointment = Appointment::findOrFail($id);

        return view('admin.appointments.show', compact('appointment') + $relations);
    }


    /**
     * Remove Appointment from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('appointment_delete')) {
            return abort(401);
        }
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();

        return redirect()->route('admin.appointments.index');
    }

    /**
     * Delete all selected Appointment at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('appointment_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Appointment::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
