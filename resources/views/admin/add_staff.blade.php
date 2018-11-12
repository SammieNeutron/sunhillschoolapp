@extends('admin.includes.app')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-9">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Add Staff</h4>
                        <hr>
                    </div>
                    <div class="content">
                        <form action="" method="">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control border-input" placeholder="FIrst Name" value="Ayodele">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Middle Name</label>
                                        <input type="text" class="form-control border-input" placeholder="Middle Name" value="Olumide">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control border-input" placeholder="Last Name" value="Balogun">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input type="date" class="form-control border-input" placeholder="Date of Birth" value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select class="form-control border-input">
                                            <option value="">Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Blood Group</label>
                                        <select class="form-control border-input">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nationality</label>
                                        <input type="text" class="form-control border-input" placeholder="Nationality" value="Nigerian">
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Religion</label>
                                        <input type="text" class="form-control border-input" placeholder="Religion" value="Christainity">
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
                                        <input type="text" class="form-control border-input" placeholder="Phone Number" value="0123456789">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control border-input" placeholder="Email Address" value="johndoe@gmail.com">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control border-input" placeholder="Home Address" value="Melbourne, Australia">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Local Govt.</label>
                                        <input type="text" class="form-control border-input" placeholder="LGA" value="Agege">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" class="form-control border-input" placeholder="State" value="Lagos State">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control border-input" placeholder="Country" value="Nigeria">
                                    </div>
                                </div>
                            </div>

                            <div class="header">
                                <h4 class="title">Assign Role</h4>
                                <hr>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="form-control border-input">
                                            <option value="">Select a role</option>
                                            <option value="teacher">Teacher</option>
                                            <option value="cleaner">Cleaner</option>
                                            <option value="caregiver">Care Giver</option>
                                            <option value="gateman">Gateman</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Class Managed</label>
                                        <select class="form-control border-input">
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

                                {{-- <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Admission Number</label>
                                        <input type="text" class="form-control border-input" placeholder="Generate admission number" value="KG24322">
                                    </div>
                                </div> --}}
                            </div>

                            <div class="header">
                                <h4 class="title">Upload Staff&apos;s Photo</h4>
                                <hr>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Upload Photo</label>
                                        <input type="file" class="form-control border-input">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-info btn-fill btn-wd">Save Staff</button>
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