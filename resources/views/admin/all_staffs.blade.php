@extends('admin.includes.app')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">List of all staffs</h4>
                        <hr>
                        {{--  <p class="category">Here is a subtitle for this table</p>  --}}
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Gender</th>
                                <th>Phone Number</th>
                                <th>Role</th>
                                <th>Class Managed</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ayodele Johnson</td>
                                    <td>Male</td>
                                    <th>08123456543</th>
                                    <td>Teaching Staff</td>
                                    <td>Basic 4</td>
                                    <td><div class="avatar">
                                            <img src="{{ asset('assets/img/faces/face-3.jpg') }}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </td>
                                    <td><button class="btn btn-info btn-fill btn-wd">Action <b class="caret"></b></button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Emma Debby</td>
                                    <td>Female</td>
                                    <th>08234567654</th>
                                    <td>Non Teaching Staff</td>
                                    <td>None</td>
                                    <td><div class="avatar">
                                            <img src="{{ asset('assets/img/faces/face-3.jpg') }}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </td>
                                    <td><button class="btn btn-info btn-fill btn-wd">Action <b class="caret"></b></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection