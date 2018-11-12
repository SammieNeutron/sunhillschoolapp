<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar&apos;s background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                <i class="ti-user"></i>
                    {{ Auth::user()->name }} 
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile') }}">
                        <i class="ti-user"></i>
                        <p>My Profile</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('add.student') }}">
                        <i class="ti-user"></i>
                        <p>Add Student</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('all.students') }}">
                        <i class="fa fa-group"></i>
                        <p>All Students</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('add.user') }}">
                        <i class="ti-user"></i>
                        <p>Add User</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('add.staff') }}">
                        <i class="ti-pencil"></i>
                        <p>Add staffs</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('all.staffs') }}">
                        <i class="fa fa-group"></i>
                        <p>All Staffs</p>
                    </a>
                </li>
                {{--  <li>
                    <a href="{{ route('map') }}">
                        <i class="ti-map"></i>
                        <p>Maps</p>
                    </a>
                </li>  --}}
            </ul>
    	</div>
    </div>