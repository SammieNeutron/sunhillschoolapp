
@extends('layouts.app')


@section('content')
@include('includes.header')

<section style="background: transparent; background: url(images/Sunhill-Background.jpg) center repeat fixed;">

    <div class="container">
        <div class="row">
            <br><br>
            <p style="font-size: 40px; color: skyblue">Gallery</p>
            <hr style="opacity: 0.1"><br>

            <div class="col-sm-12">
                <div class="col-lg-2 col-sm-4 col-xs-6" style="padding: 3px">
                    <a href="#graduation_day" style="background-color: lightpink; color:white" class="btn btn-default btn-sm"><strong>Graduation</strong></a>
                </div>
                <div class="col-lg-2 col-sm-4 col-xs-6" style="padding: 3px">
                    <a href="#career_day" class="btn btn-default btn-sm" style="">Career Day</a>
                </div>
                <div class="col-lg-2 col-sm-4 col-xs-6" style="padding: 3px">
                    <a href="#cultural_day" class="btn btn-default btn-sm" style="background-color: orange; color:white">Cultural Day</a>
                </div>
                <div class="col-lg-2 col-sm-4 col-xs-6" style="padding: 3px">
                    <a href="#Excursion" class="btn btn-default btn-sm" style="background-color: violet; color:white">Excursions</a>
                </div>
                <div class="col-lg-2 col-sm-4 col-xs-6" style="padding: 3px">
                    <a href="#general_events" class="btn btn-default btn-sm" style="background-color: lightgreen; color:white">General Activities</a>
                </div>
                <div class="col-lg-2 col-sm-4 col-xs-6" style="padding: 3px">
                    <a href="#interhouse_sport" class="btn btn-default btn-sm "style="background-color: skyblue; color:white">Inter-House Sports</a>
                </div>
                <br><br>
                <hr style="opacity: 0.1">
            </div>


            <div class="carousel col-xs-12 slide">
                <br><br>
                <p class="text-center"style="color: pink; font-size: 30px" id="graduation_day"> Graduation Day</p>
                <br>
                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Graduation/6.jpg" class="img-responsive img-thumbnail" data-toggle="modal" data-target="#grad1" style="border-radius: 0px">-->
                <!--</div>-->


                <!--<div class="modal fade" id="grad1" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Graduation/6.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->


                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Graduation/7.jpg" class="img-responsive img-thumbnail" data-toggle="modal" data-target="#grad2" style="border-radius: 0px">
                </div>

                <div class="modal fade" id="grad2" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Graduation/7.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Graduation/13.jpg" class="img-responsive img-thumbnail" data-toggle="modal" data-target="#grad3" style="border-radius: 0px">
                </div>

                <div class="modal fade" id="grad3" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Graduation/13.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Graduation/19.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#grad4">
                </div>

                <div class="modal fade" id="grad4" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Graduation/19.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Graduation/8.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#grad5">-->
                <!--</div>-->

                <!--<div class="modal fade" id="grad5" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Graduation/8.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Graduation/9.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#grad6">
                </div>

                <div class="modal fade" id="grad6" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Graduation/9.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Graduation/21.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px"data-toggle="modal" data-target="#grad7">
                </div>

                <div class="modal fade" id="grad7" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Graduation/21.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Graduation/14.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px"data-toggle="modal" data-target="#grad8">
                </div>

                <div class="modal fade" id="grad8" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Graduation/14.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Graduation/18.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#grad9">-->
                <!--</div>-->

                <!--<div class="modal fade" id="grad9" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Graduation/18.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Graduation/17.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#grad10">-->
                <!--</div>-->

                <!--<div class="modal fade" id="grad10" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Graduation/17.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Graduation/21.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#grad11">-->
                <!--</div>-->

                <!--<div class="modal fade" id="grad11" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Graduation/21.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Graduation/24.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#grad12">-->
                <!--</div>-->

                <!--<div class="modal fade" id="grad12" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Graduation/24.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Graduation/12.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#grad13">-->
                <!--</div>-->

                <!--<div class="modal fade" id="grad13" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Graduation/12.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Graduation/10.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#grad14">
                </div>

                <div class="modal fade" id="grad14" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Graduation/10.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Graduation/5.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#grad15">-->
                <!--</div>-->

                <!--<div class="modal fade" id="grad15" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Graduation/5.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Graduation/1.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#grad16">
                </div>

                <div class="modal fade" id="grad16" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Graduation/1.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Graduation/3.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#grad17">
                </div>

                <div class="modal fade" id="grad17" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Graduation/3.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Graduation/2.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#grad18">-->
                <!--</div>-->

                <!--<div class="modal fade" id="grad18" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Graduation/2.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            </div>

            <br><br>

            <div class="col-xs-12 slide"><br><br>
                <p class="text-center" style="color: yellow; font-size: 30px" id="career_day">Career Day</p>
                <br>
                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Career Day/1.jpg" class="img-thumbnail img-responsive" style="border-radius: 0px" data-toggle="modal" data-target="#career1">
                </div>

                <div class="modal fade" id="career1" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Career Day/1.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Career Day/2.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#career2">
                </div>

                <div class="modal fade" id="career2" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Career Day/2.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Career Day/female-engineer.jpg" class="img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#career3">-->
                <!--</div>-->

                <!--<div class="modal fade" id="career3" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Career Day/female-engineer-big.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Career Day/3.jpg" class="img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#career4">
                </div>

                <div class="modal fade" id="career4" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Career Day/3.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Career Day/male-police.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#career5">-->
                <!--</div>-->

                <!--<div class="modal fade" id="career5" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Career Day/male-police-big.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Career Day/4.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#career6">
                </div>

                <div class="modal fade" id="career6" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Career Day/4.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Career Day/6.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#career7">-->
                <!--</div>-->

                <!--<div class="modal fade" id="career7" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Career Day/6.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Career Day/female-sailor.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#career8">-->
                <!--</div>-->

                <!--<div class="modal fade" id="career8" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Career Day/female-sailor-big.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Career Day/male-doctor-small.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#career9">-->
                <!--</div>-->

                <!--<div class="modal fade" id="career9" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Career Day/male-doctor.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Career Day/8.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#career10">-->
                <!--</div>-->

                <!--<div class="modal fade" id="career10" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Career Day/8.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Career Day/5.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#career11">
                </div>

                <div class="modal fade" id="career11" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Career Day/5.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Career Day/7.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#career12">
                </div>

                <div class="modal fade" id="career12" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Career Day/7.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <br>
            <div class="col-xs-12 slide"><br><br>
                <p class="text-center"style="color: orange; font-size: 30px" id="cultural_day"> Cultural Day</p>
                <br>
                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Cultural Day/1.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#cultural1">-->
                <!--</div>-->

                <!--<div class="modal fade" id="cultural1" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Cultural Day/1-big.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Cultural Day/3.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#cultural2">
                </div>

                <div class="modal fade" id="cultural2" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Cultural Day/3.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Cultural Day/4.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#cultural3">-->
                <!--</div>-->

                <!--<div class="modal fade" id="cultural3" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Cultural Day/4.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Cultural Day/6.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#cultural4">
                </div>

                <div class="modal fade" id="cultural4" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Cultural Day/6-big.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Cultural Day/8.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#cultural5">
                </div>

                <div class="modal fade" id="cultural5" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Cultural Day/8.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Cultural Day/10.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#cultural6">
                </div>

                <div class="modal fade" id="cultural6" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Cultural Day/10.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Cultural Day/11.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#cultural7">-->
                <!--</div>-->

                <!--<div class="modal fade" id="cultural7" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Cultural Day/11.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Cultural Day/14.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#cultural8">
                </div>

                <div class="modal fade" id="cultural8" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Cultural Day/14.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Cultural Day/15.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#cultural9">-->
                <!--</div>-->

                <!--<div class="modal fade" id="cultural9" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Cultural Day/15.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Cultural Day/16.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#cultural10">-->
                <!--</div>-->

                <!--<div class="modal fade" id="cultural10" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Cultural Day/16.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Cultural Day/17.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#cultural11">
                </div>

                <div class="modal fade" id="cultural11" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Cultural Day/17.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Cultural Day/13.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#cultural12">-->
                <!--</div>-->

                <!--<div class="modal fade" id="cultural12" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Cultural Day/13.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Cultural Day/5.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#cultural13">-->
                <!--</div>-->

                <!--<div class="modal fade" id="cultural13" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Cultural Day/5-big.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Cultural Day/7.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#cultural14">-->
                <!--</div>-->

                <!--<div class="modal fade" id="cultural14" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Cultural Day/7-big.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Cultural Day/9.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#cultural15">
                </div>

                <div class="modal fade" id="cultural15" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Cultural Day/9-big.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Cultural Day/12.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#cultural16">-->
                <!--</div>-->

                <!--<div class="modal fade" id="cultural16" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Cultural Day/12-big.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Cultural Day/2.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#cultural17">-->
                <!--</div>-->

                <!--<div class="modal fade" id="cultural17" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Cultural Day/2-big.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Cultural Day/18.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#cultural18">
                </div>

                <div class="modal fade" id="cultural18" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Cultural Day/18-big.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <div class="col-xs-12 slide"><br><br>
                <p class="text-center" style="color: violet; font-size: 30px" id="Excursion">Excursions</p>
                <br>
                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Children's day/1.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#children1">
                </div>

                <div class="modal fade" id="children1" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Children's day/1.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Children's day/2.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#children2">-->
                <!--</div>-->

                <!--<div class="modal fade" id="children2" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Children's day/2.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Children's day/3.jpg" class="img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#children3">-->
                <!--</div>-->

                <!--<div class="modal fade" id="children3" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Children's day/3.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Children's day/4.jpg" class="img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#children4">
                </div>

                <div class="modal fade" id="children4" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Children's day/4.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Children's day/5.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#children5">-->
                <!--</div>-->

                <!--<div class="modal fade" id="children5" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Children's day/5.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Children's day/6.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#children6">
                </div>

                <div class="modal fade" id="children6" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Children's day/6.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Children's day/7.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#children7">-->
                <!--</div>-->
                <!--<div class="modal fade" id="children7" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Children's day/7.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Children's day/8.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#children8">
                </div>

                <div class="modal fade" id="children8" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Children's day/8.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Children's day/9.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#children9">-->
                <!--</div>-->

                <!--<div class="modal fade" id="children9" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Children's day/9.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Children's day/10.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#children10">
                </div>

                <div class="modal fade" id="children10" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Children's day/10.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Children's day/11.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#children11">-->
                <!--</div>-->

                <!--<div class="modal fade" id="children11" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Children's day/11.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Children's day/12.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#children12">
                </div>

                <div class="modal fade" id="children12" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Children's day/12.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Children's day/13.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#children13">-->
                <!--</div>-->

                <!--<div class="modal fade" id="children13" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Children's day/13.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Children's day/14.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#children14">
                </div>

                <div class="modal fade" id="children14" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Children's day/14.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Children's day/15.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#children15">
                </div>

                <div class="modal fade" id="children15" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Children's day/15.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Children's day/16.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#children16">
                </div>

                <div class="modal fade" id="children16" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Children's day/16.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Children's day/17.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#children17">-->
                <!--</div>-->

                <!--<div class="modal fade" id="children17" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Children's day/17.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Children's day/18.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#children18">
                </div>

                <div class="modal fade" id="children18" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Children's day/18.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xs-12 slide"><br><br>
                <p class="text-center" style="color: lightgreen; font-size: 30px" id="general_events">General Activities</p>
                <br>
                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Independence/1.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#independence1">
                </div>

                <div class="modal fade" id="independence1" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Independence/1.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Independence/2.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px"  data-toggle="modal" data-target="#independence2">
                </div>

                <div class="modal fade" id="independence2" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Independence/2.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Independence/3.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#independence3">-->
                <!--</div>-->

                <!--<div class="modal fade" id="independence3" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Independence/3.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Independence/4.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#independence4">-->
                <!--</div>-->

                <!--<div class="modal fade" id="independence4" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Independence/4.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Independence/5.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#independence5">
                </div>

                <div class="modal fade" id="independence5" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Independence/5.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Independence/6.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#independence6">-->
                <!--</div>-->

                <!--<div class="modal fade" id="independence6" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Independence/6.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Independence/7.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#independence7">
                </div>

                <div class="modal fade" id="independence7" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Independence/7.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Independence/8.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#independence8">
                </div>

                <div class="modal fade" id="independence8" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Independence/8.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Independence/9.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#independence9">
                </div>

                <div class="modal fade" id="independence9" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Independence/9.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Independence/10.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#independence10">-->
                <!--</div>-->

                <!--<div class="modal fade" id="independence10" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Independence/10.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Independence/11.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#independence11">-->
                <!--</div>-->

                <!--<div class="modal fade" id="independence11" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Independence/11.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <!--<div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">-->
                    <!--<img src="images/Gallery/Independence/12.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#independence12">-->
                <!--</div>-->

                <!--<div class="modal fade" id="independence12" role="dialog">-->
                    <!--<div class="modal-dialog">-->
                        <!--<div  class="carousel" data-ride="carousel" data-interval="0000">-->
                            <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                            <!--<div class="carousel-inner" role="listbox">-->
                                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                                <!--<div class="modal-content" style="border-radius: 0">-->
                                    <!--&lt;!&ndash; <button type="button" class="close" data-dismiss="modal">&times;</button> &ndash;&gt;-->
                                    <!--<div class="modal-header">-->
                                        <!--<div class="item">-->
                                            <!--<img src="images/Gallery/Independence/12.jpg">-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="modal-footer">-->
                                        <!--&lt;!&ndash; <button id="prev-btn" class="btn btn-warning">Prev</button> &ndash;&gt;-->
                                        <!--&lt;!&ndash; <button id="next-btn" class="btn btn-primary">Next</button> &ndash;&gt;-->
                                        <!--<button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>-->
                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

            </div>

            <div class="col-xs-12 slide"><br><br>
                <p class="text-center" style="color: Orangered; font-size: 30px" id="interhouse_sport">Inter-House Sports</p>
                <br>
                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Inter-House sport/1.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#ihs1">
                </div>

                <div class="modal fade" id="ihs1" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Inter-House sport/1.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Inter-House sport/2.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#ihs2">
                </div>

                <div class="modal fade" id="ihs2" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Inter-House sport/2.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Inter-House sport/3.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#ihs3">
                </div>

                <div class="modal fade" id="ihs3" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Inter-House sport/3.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Inter-House sport/4.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#ihs4">
                </div>

                <div class="modal fade" id="ihs4" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Inter-House sport/4.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Inter-House sport/5.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#ihs5">
                </div>

                <div class="modal fade" id="ihs5" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Inter-House sport/5.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Inter-House sport/6.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#ihs6">
                </div>

                <div class="modal fade" id="ihs6" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Inter-House sport/6.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Inter-House sport/7.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#ihs7">
                </div>

                <div class="modal fade" id="ihs7" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Inter-House sport/7.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Inter-House sport/8.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#ihs8">
                </div>

                <div class="modal fade" id="ihs8" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Inter-House sport/8.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Inter-House sport/9.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#ihs9">
                </div>

                <div class="modal fade" id="ihs9" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Inter-House sport/9.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Inter-House sport/10.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#ihs10">
                </div>

                <div class="modal fade" id="ihs10" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Inter-House sport/10.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Inter-House sport/11.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#ihs11">
                </div>

                <div class="modal fade" id="ihs11" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Inter-House sport/11.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-4 col-xs-4" style="padding: 2px">
                    <img src="images/Gallery/Inter-House sport/12.jpg" class="img-responsive img-thumbnail" style="border-radius: 0px" data-toggle="modal" data-target="#ihs12">
                </div>

                <div class="modal fade" id="ihs12" role="dialog">
                    <div class="modal-dialog">
                        <div  class="carousel" data-ride="carousel" data-interval="0000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Modal content-->
                                <div class="modal-content" style="border-radius: 0">
                                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                    <div class="modal-header">
                                        <div class="item">
                                            <img src="images/Gallery/Inter-House sport/12.jpg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button id="prev-btn" class="btn btn-warning">Prev</button> -->
                                        <!-- <button id="next-btn" class="btn btn-primary">Next</button> -->
                                        <button class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
</section>

@include('includes.footer')
@endsection