@extends('layouts.app')


@section('content')
@include('includes.header')

<section style="background-color: white">
  <br><br>
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <img class="thumbnail" src="{{ asset('images/sunhill_school_building_2.jpg') }}">
      </div>

        <div class="col-sm-1"></div>

      <div class="col-sm-8" style="padding-right: 1%">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="text3 ta__center" style="color: orangered;"><span><i class="fa fa-paragraph"></i> </span>About Sunhill School</h1>
          </div>
            <br>
          <div class="panel-body">
            <div class="text-justify">
              <p>
                Sunhill School is a citadel of learning with the Montessori-approach, where each child is cherished,
                  respected and given equal opportunity regardless of their race, nationality and faith to learn,
                  explore and we nurture them to become a honest, responsible member of the society.
              </p>
              <p>
                  Our school caters for the physical, academic, social, emotional and spiritual needs of children in a
                  supportive and caring environment.
              </p>

              <p>
                The School was founded
                in the year 2013, and thriving till date. Annually, the School produces excellent
                school graduates, that are sound, not just academically, but also morally and emotionally.
              </p>
                <br>
            </div>
              <div class="col-sm-3">
                  <img src="{{ asset('images/students_in_computer_lab.jpg') }}" class="img-thumbnail">
              </div>
              <div class="col-sm-3">
                  <img src="{{ asset('images/students_painting.jpg') }}" class="img-thumbnail">
              </div>
              <div class="col-sm-3">
                  <img src="{{ asset('images/teaching_session.jpg') }}" class="img-thumbnail">
              </div>
              <div class="col-sm-3">
                  <img src="{{ asset('images/background_image.jpg') }}" class="img-thumbnail">
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <br>
    <hr>
    <br>
    <br>
</section>

<!--<time datetime="2014-01-01"><span class="count">05</span><strong>July</strong>2014</time>-->

<section style="background: url( {{ asset('images/Sunhill-Background.jpg') }} ) center repeat fixed;">
    <div class="container">
        <br>
        <br>
        <h2 class="ta__center">About us</h2>
        <br>
        <div class="row">
            <div class="col-sm-4"  style="padding: 1em">
                <div class="thumbnail vertical_slide" style="background: transparent">
                    <div class="card">
                        <div class="card header">
                            <h4 class="ta__center" style="font-size: 22px; color: white; padding: 15px; margin: 0px;">
                                <span style="color: white"><i class="fa fa-gears"></i> </span>Our Facilities
                            </h4>
                            <hr style="border-top: 1px solid gold;">
                        </div>
                        <div class="card content">
                            <li>Computers and Laboratory</li>
                            <li>School Bus</li>
                            <li>Musical Instruments</li>
                            <li>Educational Toys/Games</li>
                            <li>Attractive Playground</li>
                            <li>Well ventilated Classrooms</li>
                            <li>Audio-visuals including Video & T.V. sets</li>
                            <!--<li>Friendly Environment</li>-->
                            <li>Security and more</li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"  style="padding: 1em">
                <div class="thumbnail vertical_slide" style="background: transparent">
                    <div class="card">
                        <div class="card header">
                            <h4 class="ta__center" style="font-size: 22px; color: white; padding: 15px; margin: 0px;">
                                <span><i class="fa fa-automobile"></i> </span>Mission/Vision
                            </h4>
                            <hr style="border-top: 1px solid red">
                        </div>
                        <div class="card content">
                            <blockquote>
                                <p class="ta__center">
                                    To be the best school of choice for parents, where we prepare and build the future
                                    leaders for the future to meet up with the needs of our ever-changing society and
                                    be 21st century solutions provider.
                                    <br><br><br>
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"  style="padding: 1em">
                <div class="thumbnail vertical_slide" style="background: transparent">
                    <div class="card">
                        <div class="card header">
                            <h4 class="ta__center" style="font-size: 22px; color: white; padding: 15px; margin: 0px;">
                                <span><i class="fa fa-certificate"></i> </span>The Teachers
                            </h4>
                            <hr style="border-top: 1px solid violet">
                        </div>
                        <div class="card content">
                            <p class="ta__center">
                                At Sunhill School, we have committed, trained and qualified staff, who are passionate,
                                caring and disciplined. They plan, teach, and assess school children work together to
                                foster the development to ensure that we meet up or exceed national education standards.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4"  style="padding: 1em">
                <div class="thumbnail vertical_slide" style="background: transparent">
                    <div class="card">
                        <div class="card header">
                            <h4 class="ta__center" style="font-size: 22px; color: white; padding: 15px; margin: 0px;">
                                <span><i class="fa fa-music"></i> </span>School Anthem
                            </h4>
                            <hr style="border-top: 1px solid coral">
                        </div>
                        <div class="card content">
                            <p class="text-justify">
                                Sunhill forevermore, like a family you will always be, a part of my thinking and my heart,
                                as I walk through life I will shine your light, as I live my life I will always strive
                                to be all that I can be.
                                <br>
                                Throughout the World, throughout my life, your standards, I&apos;ll pursue, let your wisdom,
                                ring true.
                                <br>
                                Hail to thee Sunhill, Oh Oh Oh, thanks for shaping me (2×)
                            </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"  style="padding: 1em">
                <div class="thumbnail vertical_slide" style="background: transparent">
                    <div class="card">
                        <div class="card header">
                            <h4 class="ta__center" style="font-size: 22px; color: white; padding: 15px; margin: 0px;">
                                <span style="color: white;;"><i class="fa fa-legal"></i> </span>School Policies
                            </h4>
                            <hr style="border-top: 1px solid skyblue">
                        </div>
                        <div class="card content">
                            <p class="">
                                <span> &checkmark; &nbsp; School fees: &nbsp; <br></span>
                                At least 50 percent (%) of the School fee is to be paid to the bank before resumption
                                as the teller for payment will be requested at the School gate before entry.
                                <br>
                                <br>
                                <span> &checkmark; &nbsp; School Uniform: &nbsp; <br></span>
                                The School has provided customized school uniform, Sweater, Sports wear for a fee.
                                Pupils are expected to put on black shoes and white socks along with school uniform and
                                canvas with sports wear.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"  style="padding: 1em">
                <div class="thumbnail vertical_slide" style="background: transparent">
                    <div class="card">
                        <div class="card header">
                            <h4 class="ta__center" style="font-size: 22px; color: white; padding: 15px; margin: 0px;">
                                <span style="color: white;"><i class="fa fa-puzzle-piece"></i> </span>Our Philosophy
                            </h4>
                            <hr style="border-top: 1px solid chartreuse">
                        </div>
                        <div class="card content">
                            <p class="ta__center">
                                At Sunhill School we believe that all children are different and the pace at which
                                individuals learn and assimilate differs, because of these facts and more, our
                                curriculum is carefully designed to meet the academic need of our Students
                                interwoven with all the other disciplines—Maths, Science, Arts, etc.
                                Our Montessori approach and one-on-one method of teaching have really helped all our
                                students, and we get to know the strength and weakness of each child and improve
                                on them.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
</section>

@include('includes.footer')
@endsection
