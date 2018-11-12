<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;
use Validator;


class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Students fields validation
    protected function StudentValidation(array $data){
        return Validator::make($data, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'dob' => 'required',
            'gender' => 'required',
            'telephone' => 'required',
            'address' => 'required',
            'state' => 'required',
            'class' => 'required',
            'batch' => 'required',
        ]);
        
    }

    //student registration
    public function add_student(Request $data) {

        //Students fields validation
        $validate = $this->StudentValidation($data->except('_token'));
        if($validate->fails()) {
            \Session::flash('error',  $validate->errors());
            return redirect()->back()->withErrors($validate->errors());
        }
        
        $student = new Student();

        $student->firstname = $data['firstname'];
        $student->middlename = $data['middlename'];
        $student->lastname = $data['lastname'];
        $student->dob = $data['dob'];
        $student->gender = $data['gender'];
        $student->blood_group = $data['blood_group'];
        $student->nationality = $data['nationality'];
        $student->category = $data['category'];
        $student->religion = $data['religion'];
        $student->telephone = $data['telephone'];
        $student->email = $data['email'];
        $student->address = $data['address'];
        $student->lga = $data['lga'];
        $student->state = $data['state'];
        $student->country = $data['country'];
        $student->class = $data['class'];
        $student->batch = $data['batch'];
        $student->admission_number = $data['admission_number'];

        if($data->hasFile('student_photo'))
        {
            $student_photo = $data['student_photo'];

            $student_photo_new_name = time().$student_photo->getClientOriginalName();

            $student_photo->move('uploads/student-photos', $student_photo_new_name);

            $student->student_photo = 'uploads/student-photos/'.$student_photo_new_name;
        }
        $student->save();

        return redirect()->back();
    }

    public function all_students() {
        $data['students'] = Student::all();

        return view('admin.all_students')->with($data);
    }

    public function delete_student($id) {
        $student = Student::find($id);

        $student->delete();

        return redirect()->back();
    }
        
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
