<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Client;
use App\Employee;
use App\Http\Requests;
use App\Service;
use App\User;
use Illuminate\Http\Request;

class PageController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('welcome',compact('users','appointments'));
    }

    public function appointment(){
        $appointments = Appointment::all();
        return view('fe.appointments',compact('appointments'));
    }

    public function createAppointment(){
        $relations = [
            'clients' => Client::get(),
            'employees' => Employee::get(),
            'services' => Service::get(),
        ];

        return view('fe.create', $relations);
    }
}
