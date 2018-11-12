<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Staff;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['students'] = Student::all();
        $data['staffs'] = Staff::all();
        $data['users'] = User::all();

        return view('admin.dashboard')->with($data);
    }

    public function add_student()
    {
        return view('admin.add_student');
    }

    public function add_user()
    {
        return view('admin.add_user');
    }

    public function add_staff()
    {
        return view('admin.add_staff');
    }

    public function all_staffs()
    {
        return view('admin.all_staffs');
    }

    // public function notifications()
    // {
    //     return view('admin.notifications');
    // }
}
