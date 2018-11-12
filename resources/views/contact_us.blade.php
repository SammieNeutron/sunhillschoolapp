@extends('layouts.app')


@section('content')
@include('includes.header')

    <section id="content">
    <div class="container">
        <div class="row">
        <div class="col-sm-8">
            <h3 style="color: orangered; padding-top: 15px; margin-bottom: 0px; padding-bottom: 5px">Contact us</h3>
            <div class="map">
            <figure class="">
                <iframe src="https://maps.google.com/maps?q=36, Ofada Street Mushin, Lagos, &t=&z=16&ie=UTF8&iwloc=&output=embed" style="border:0"></iframe>
            </figure>
            </div>
        </div>
        <div class="col-sm-4" style="padding-left: 1em; padding-top: 0em;">
            <br><br>
            <h3></h3>
            <span style="color: orangered;;"><i class="fa fa-map-marker fa-2x"></i>&nbsp;</span>
            <address class="text3">
                36, Ofada GRA, <br>Palm-Avenue, Mushin <br>Lagos
            </address>
            <h3></h3>
            <span style="color: orangered;;"><i class="fa fa-phone fa-2x"></i>&nbsp;</span>
            <div class="text3">
                <a href="tel: +2348120304488">0812 030 4488</a>
                <br>
                <a href="tel: +2348120301100">0812 030 1100</a>
            </div>
            <h3></h3>
            <span style="color: orangered;;"><i class="fa fa-envelope fa-2x"></i>&nbsp;</span>
            <div class="text3">
                <a href="mailto: info@sunhillschool.com">info@sunhillschool.com</a>
            </div>
            <br>
        </div>
        </div>
    </div>
    </section>

    <section style="background: lightsteelblue">
        <br>
        <br>
        <div  class="container horizontal_slide">
            <h3 class="head__1 ta__center" style="color: midnightblue;">Send us a Message</h3>
            <div class="col-xs-12" style="padding-bottom: 30px;">
                <form id="contactForm" method="POST" role="form" action="contact_us.php">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                        <div class="control-group form-group">
                            <label for="name">Full Name:</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>

                        <div class="control-group form-group">
                            <label for="phone">Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required>
                        </div>

                        <div class="control-group form-group">
                            <label for="email">Email Address:</label>
                            <input type="email" class="form-control" id="email" placeholder="username@domain.com" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-offset-1 col-col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12" style="padding-bottom: 20px">
                        <label for="message">Message:</label>
                        <textarea rows="8" cols="100" class="form-control" id="message" required maxlength="999" style="resize:none"></textarea>
                    </div>
                    <br><br>
                    <input type="submit" class="btn btn-default pull-right" value="Send Message">
                    <br><br>
                </form>
                <br><br>
                <br><br>
            </div>
            <br>
        </div>
    </section>
    <section style="background: white;">
    </section>

    @include('includes.footer')
@endsection