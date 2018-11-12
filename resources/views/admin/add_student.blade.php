@extends('admin.includes.app')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-9">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Add Student</h4>
                        <hr>
                    </div>
                    <div class="content">
                        <form action="{{ route('student.add') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="firstname" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }} border-input" placeholder="First Name" value="{{ old('firstname') }}">
                                        @if ($errors->has('firstname'))
                                            <span class="alert alert-danger" role="alert">
                                                <strong>{{ $errors->first('firstname') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Middle Name</label>
                                        <input type="text" name="middlename" class="form-control border-input" placeholder="Middle Name" value="{{ old('middlename') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="lastname" class="form-control border-input" placeholder="Last Name" value="{{ old('lastname') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input type="date" name="dob" class="form-control border-input" placeholder="Date of Birth" value="{{ old('dob') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select name="gender" class="form-control border-input">
                                            <option value="">Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Blood Group</label>
                                        <select name="blood_group" class="form-control border-input">
                                            <option value="">Unknown</option>
                                            <option value="AA">AA</option>
                                            <option value="AB">AB</option>
                                            <option value="AS">AS</option>
                                            <option value="SS">SS</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nationality</label>
                                        <input type="text" name="nationality" class="form-control border-input" placeholder="Nationality" value="{{ old('nationality') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-control border-input" name="category">
                                            <option value="">Select a category</option>
                                            <option value="staff_child">Staff Child</option>
                                            <option value="financially_weak_student">Financially weak student</option>
                                            <option value="sibling_in_Institution">Sibling in Institution</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Religion</label>
                                        <input type="text" class="form-control border-input" name="religion" placeholder="Religion" value="{{ old('religion') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="header">
                                <h4 class="title">Contact Details</h4>
                                <hr>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control border-input" name="telephone" placeholder="Phone Number" value="{{ old('telephone') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control border-input" name="email" placeholder="Email Address" value="{{ old('email') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control border-input" name="address" placeholder="Home Address" value="{{ old('address') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Local Govt.</label>
                                        <input type="text" class="form-control border-input" name="lga" placeholder="LGA" value="{{ old('lga') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" class="form-control border-input" name="state" placeholder="State" value="{{ old('state') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control border-input" name="country" placeholder="Country" value="{{ old('country') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="header">
                                <h4 class="title">Class & Batch Details</h4>
                                <hr>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Class</label>
                                        <select class="form-control border-input" name="class">
                                            <option value="">Select a class</option>
                                            <option value="creche">Creche</option>
                                            <option value="playgroup">Playgroup</option>
                                            <option value="Kg1">KG-1</option>
                                            <option value="Kg2">KG-2</option>
                                            <option value="nursery1">Nursery-1</option>
                                            <option value="nursery2">Nursery-2</option>
                                            <option value="basic1">Basic-1</option>
                                            <option value="basic2">Basic-2</option>
                                            <option value="basic3">Basic-3</option>
                                            <option value="basic4">Basic-4</option>
                                            <option value="basic5">Basic-5</option>
                                            <option value="basic6">Basic-6</option>
                                            <option value="jss1">JSS-1</option>
                                            <option value="jss2">JSS-2</option>
                                            <option value="jss3">JSS-3</option>
                                            <option value="sss1">SSS-1</option>
                                            <option value="sss2">SSS-2</option>
                                            <option value="sss3">SSS-3</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Batch</label>
                                        <select class="form-control border-input" name="batch">
                                            <option value="">Select a batch</option>
                                            <option value="2018/2019">2018/2019</option>
                                            <option value="2019/2020">2019/2020</option>
                                            <option value="2020/2021">2020/2021</option>
                                            <option value="2021/2022">2021/2022</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Admission Number</label>
                                        <input type="text" class="form-control border-input" name="admission_number" placeholder="Generate admission number" value="{{ old('admission_number') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="header">
                                <h4 class="title">Upload Student&apos;s Photo</h4>
                                <hr>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Upload Photo</label>
                                        <input type="file" class="form-control border-input" name="student_photo">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-info btn-fill btn-wd">Save Student</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </form>     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection