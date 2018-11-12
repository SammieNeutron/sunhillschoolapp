@extends('layouts.app')


@section('content')
@include('includes.header')

<section style="background: white;">
    <!--<div class="jumbotron" style="width: 100%;">-->
        <!--<h1 class="text-center" style="margin: 0px">Staff @ <a href="http://www.sunhillschool.com">Sunhill School</a></h1>-->
    <!--</div>-->

    <div class="container">
        <h3 class="text-center" style="font-family: 'Yu Gothic UI'; font-size: 24pt; line-height: 1px">OUR CORE TEAM</h3>
        <hr>
        <div class="col-sm-4 col-md-2">
            <div class="panel">
                <div class="panel-heading" style="background: coral; height: 50px">
                    <h4 class="text-center" style="font-family: 'Berlin Sans FB'; color: white; padding-top: 0px; font-size: 16pt">Miss. CELINA </h4>
                </div>
                <div class="panel-body">
                    <div class="col-sm-12">
                        <img src="images/staff/missCelina.jpg" class="img-thumbnail">
                        <br>
                        <h5 class="text-center">Head Teacher</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-2">
            <div class="panel">
                <div class="panel-heading" style="background: seagreen; height: 50px">
                    <h4 class="text-center" style="font-family: 'Berlin Sans FB'; color: white; padding-top: 0px; font-size: 16pt">Mr. SAM </h4>
                </div>
                <div class="panel-body">
                    <div class="col-sm-12">
                        <img src="images/staff/mrSam.jpg" class="img-thumbnail">
                        <br>
                        <h5 class="text-center">Sport/Game Master</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-2">
            <div class="panel">
                <div class="panel-heading" style="background: maroon; height: 50px">
                    <h4 class="text-center" style="font-family: 'Berlin Sans FB'; color: white; padding-top: 0px; font-size: 16pt">Miss. CHIDINMA </h4>
                </div>
                <div class="panel-body">
                    <div class="col-sm-12">
                        <img src="images/staff/missChidimma.jpg" class="img-thumbnail">
                        <br>
                        <h5 class="text-center">Class Manager</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-2">
            <div class="panel">
                <div class="panel-heading" style="background: rebeccapurple; height: 50px">
                    <h4 class="text-center" style="font-family: 'Berlin Sans FB'; color: white; padding-top: 0px; font-size: 16pt">Miss. DORIS </h4>
                </div>
                <div class="panel-body">
                    <div class="col-sm-12">
                        <img src="images/staff/missDoris.jpg" class="img-thumbnail">
                        <br>
                        <h5 class="text-center">Creative/Class Manager</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-2">
            <div class="panel">
                <div class="panel-heading" style="background: gray; height: 50px">
                    <h4 class="text-center" style="font-family: 'Berlin Sans FB'; color: white; padding-top: 0px; font-size: 16pt">Mrs. MATTHEW </h4>
                </div>
                <div class="panel-body">
                    <div class="col-sm-12">
                        <img src="images/staff/mrsMatthew.jpg" class="img-thumbnail">
                        <br>
                        <h5 class="text-center">Care Giver</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-2">
            <div class="panel">
                <div class="panel-heading" style="background: peru; height: 50px">
                    <h4 class="text-center" style="font-family: 'Berlin Sans FB'; color: white; padding-top: 0px; font-size: 16pt">Mrs. KEMI </h4>
                </div>
                <div class="panel-body">
                    <div class="col-sm-12">
                        <img src="images/staff/missKemi.jpg" class="img-thumbnail">
                        <br>
                        <h5 class="text-center">Playgroup/K.G. Supervisor</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <hr>
        <h3 class="text-center" style="font-family: 'Yu Gothic UI'; padding-top: 1px">One BIG Family</h3>
        <div class="col-sm-12 col-md-12">
            <div class="">
                <img src="images/staff/staff.jpg" class="img-thumbnail">
                <!--<h3 class="caption text-center" style="font-family: 'Berlin Sans FB'">One BIG family</h3>-->
            </div>
        </div>
    </div>
    <br><br>
</section>

@include('includes.footer')
@endsection