@extends('admin.includes.app')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">List of all students</h4>
                        <hr>
                        {{--  <p class="category">Here is a subtitle for this table</p>  --}}
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Gender</th>
                                <th>Class</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                            @forelse ($students as $key => $student)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $student->firstname }} {{ $student->lastname }}</td>
                                    <td>{{ $student->gender }}</td>
                                    <td>{{ $student->class }}</td>
                                    <td><div class="avatar">
                                            <img src="{{ asset($student->student_photo) }}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </td>
                                    <td>
                                    {{-- <ul> --}}
                                    <a style="color: white" class="dropdown-toggle" data-toggle="dropdown">
                                        <button class="dropdown btn btn-info btn-fill btn-wd">
                                                Action
                                                <b class="caret"></b>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#"><i class="ti-eye"></i> view</a></li>
                                                <li><a href="#"><i class="ti-pencil"></i> edit</a></li>
                                                <li><a href="{{ URL::route('student.delete', $student->id) }}"><i class="ti-trash"></i> delete</a></li>
                                            </ul>
                                        </button>
                                        {{-- </ul> --}}
                                    </td>
                                    {{-- <td><button class="btn btn-info btn-fill btn-wd">Action <b class="caret"></b></button></td> --}}
                                </tr>
                            @empty
                                No student recorded yet!
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection