@extends('layouts.app')


@section('content')
@include('includes.header')

<section style="background-color: white">
    <div class="container">
        <h3>Student Admission Form</h3>
        <div class="row" style="padding: 3%; padding-top: 3px">
            <form id="school_admission_form" action="school_admission_form_handler.php" method="POST" role="form">
                <hr>
                <fieldset>
                    <div class="alert alert-dismissable alert-warning">
                        <p class="text-center">Fields marked with red asterik (<span style="color: red;">* </span>) are <strong>compulsory</strong> to fill.</p>
                    </div>
                    <div class="col-md-3">
                        <hr style="border: 2px solid coral">
                        <legend><strong>SECTION A: </strong>Personal Data</legend>
                        <br>
                        <label for="name"><span style="color: red;">* </span>Child&apos;s Name:</label>
                        <br>
                        <input type="text" name="name" id="name" class="form-control" placeholder="(Surname)  (First-Name)  (Middle-Name)" required>
                        <br>
                        <label for="dob"><span style="color: red;">* </span>Date of Birth:</label>
                        <br>
                        <input id="dob" name="dob" type="date" class="form-control" required>
                        <br>
                        <label for="gender"><span style="color: red;">* </span>Gender:</label>
                        <br>
                        <select id="gender" name="gender" class="form-control" required>
                            <option value="">Select an option</option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                        </select>
                        <br>
                        <label for="religion">Religion:</label>
                        <br>
                        <input type="text" id="religion" name="religion" class="form-control" placeholder="E.g Christianity or Islam, etc.">
                        <br>
                        <label for="previous_class"><span style="color: red;">* </span>Present Class:</label>
                        <br>
                        <select id="previous_class" name="previous_class" class="form-control" required>
                            <option value="">Select the class</option>
                            <option value="creche">Creche</option>
                            <option value="preparatory">Preparatory</option>
                            <option value="nursery_1">Nursery One</option>
                            <option value="nursery_2">Nursery Two</option>
                            <option value="basic_1">Basic One</option>
                            <option value="basic_2">Basic Two</option>
                            <option value="basic_3">Basic Three</option>
                            <option value="basic_4">Basic Four</option>
                            <option value="basic_5">Basic Five</option>
                            <option value="jss_1">J.S.S. 1 / Basic 7</option>
                            <option value="jss_2">J.S.S. 2 / Basic 8</option>
                            <option value="jss_3">J.S.S. 3 / Basic 9</option>
                        </select>
                        <br>
                        <label for="admission_class" ><span style="color: red;">* </span>Class to which Admission is sought:</label>
                        <br>
                        <select id="admission_class" name="admission_class" class="form-control" required>
                            <option value="">Select the class</option>
                            <option value="creche">Creche</option>
                            <option value="preparatory">Preparatory</option>
                            <option value="nursery_1">Nursery One</option>
                            <option value="nursery_2">Nursery Two</option>
                            <option value="basic_1">Basic One</option>
                            <option value="basic_2">Basic Two</option>
                            <option value="basic_3">Basic Three</option>
                            <option value="basic_4">Basic Four</option>
                            <option value="basic_5">Basic Five</option>
                            <option value="jss_1">J.S.S. 1 / Basic 7</option>
                            <option value="jss_2">J.S.S. 2 / Basic 8</option>
                            <option value="jss_3">J.S.S. 3 / Basic 9</option>
                        </select>
                        <br>
                        <label for="former_school">Last School Attended & Address:</label>
                        <br>
                        <textarea rows="3" class="form-control" id="former_school" maxlength="150" style="resize:none"></textarea>
                        <br>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-md-3">
                        <hr style="border: 2px solid mediumpurple">
                        <legend><strong>SECTION B:</strong> Health Information</legend>
                        <br>
                        <label for="blood_group">Blood Group:</label>
                        <br>
                        <input type="text" id="blood_group" class="form-control">
                        <br>
                        <label for="genotype">Genotype:</label>
                        <br>
                        <input type="text" id="genotype" class="form-control">
                        <br>
                        <label for="info_about_physical_challenge">Specify Physical Challenge:</label>
                        <br>
                        <input type="text" id="info_about_physical_challenge" class="form-control" placeholder="If there is any">
                        <br>
                        <label for="child_allergy">Specify Child&apos;s Allergy:</label>
                        <br>
                        <input type="text" class="form-control" id="child_allergy" placeholder="If there is any">
                        <br><br><hr style="border: 2px solid deeppink">
                        <legend><strong>SECTION C:</strong> Parents/Guardian Info.</legend>
                        <br>
                        <label for="parent_name"><span style="color: red;">* </span>Name(s):</label>
                        <br>
                        <input type="text" name="parent_name" id="parent_name" class="form-control" placeholder="E.g Mr. Name & Mrs. Name" required>
                        <br>
                        <label for="home_address"><span style="color: red;">* </span>Home Address (include nearest Bus-stop)</label>
                        <br>
                        <input type="text" class="form-control" id="home_address" required>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <br>
                        <label for="parent_office_address">Office Address (include nearest Bus-stop)</label>
                        <br>
                        <input type="text" class="form-control" id="parent_office_address">
                        <br>
                        <label for="phone_number_1"><span style="color: red;">* </span>Active Phone Number:</label>
                        <br>
                        <input type="tel" class="form-control" id="phone_number_1" required>
                        <br>
                        <label for="phone_number_2">Other Phone Number:</label>
                        <br>
                        <input type="tel" class="form-control" id="phone_number_2">
                        <br><br><hr style="border: 2px solid mediumaquamarine">
                        <legend><strong>SECTION D:</strong> Interactive</legend>
                        <br>
                        <label for="description_about_new_student">
                            Briefly tell us about your Child&apos;s special qualities:
                        </label>
                        <br>
                        <textarea rows="3" maxlength="150" id="description_about_new_student" class="form-control" style="resize: none"></textarea>
                        <br>
                        <label for="desired_school_experiences">
                            What kind of School experiences do you hope your child will have:
                        </label>
                        <br>
                        <textarea rows="4" maxlength="150" id="desired_school_experiences" class="form-control" style="resize: none"></textarea>
                        <br>
                        <input type="submit" value="Submit" class="btn btn-primary btn-sm pull-right">
                    </div>
                    <br><br>
                </fieldset>
            </form>
            <hr>
        </div>
        <br>
    </div>
    <br>
    <br>
</section>

<section style="background-color: white" id="school_calendar">
    <div class="container vertical_slide">
        <h2 class="ta__center"><span><i class="fa fa-calendar"></i>&nbsp;</span>School Calendar<br><small class="text2">(First Term 2017/2018 Session)</small></h2>
        <div class="col-sm-3 thumbnail" style="border-radius: 0px">
            <div class="blog">
                <p class="caption">Resumption</p>
                <time><span class="count">11</span><i>September &nbsp;</i>2017</time>
            </div>
        </div>
        <div class="col-sm-3 thumbnail" style="border-radius: 0px">
            <div class="blog">
                <p class="caption">Independence Holiday</p>
                <time><span class="count">02</span><i>October &nbsp;</i>2017</time>
            </div>
        </div>
        <div class="col-sm-3 thumbnail" style="border-radius: 0px">
            <div class="blog">
                <p class="caption">Mid-Term Test</p>
                <time><span class="count">16</span><i>October &nbsp;</i>2017</time>
            </div>
        </div>
        <div class="col-sm-3 thumbnail" style="border-radius: 0px">
            <div class="blog">
                <p class="caption">Mid-Term Holiday</p>
                <time><span class="count">19</span><i>October &nbsp;</i>2017</time>
            </div>
        </div>
    </div>
    <div class="container vertical_slide">
        <div class="col-sm-3 thumbnail" style="border-radius: 0px">
            <div class="blog">
                <p class="caption">Open Day</p>
                <time><span class="count">25</span><i>October &nbsp;</i>2017</time>
            </div>
        </div>
        <div class="col-sm-3 thumbnail" style="border-radius: 0px">
            <div class="blog">
                <p class="caption">PTF</p>
                <time><span class="count">24</span><i>November &nbsp;</i>2017</time>
            </div>
        </div>
        <div class="col-sm-3 thumbnail" style="border-radius: 0px">
            <div class="blog">
                <p class="caption">Examination</p>
                <time><span class="count">27</span><i>November &nbsp;</i>2017</time>
            </div>
        </div>
        <div class="col-sm-3 thumbnail" style="border-radius: 0px">
            <div class="blog">
                <p class="caption">Christmas Party</p>
                <time><span class="count">14</span><i>December &nbsp;</i>2017</time>
            </div>
        </div>
    </div>
    <div class="container vertical_slide">
        <div class="col-sm-3 thumbnail" style="border-radius: 0px">
            <div class="blog">
                <p class="caption">1<sup>st</sup> Term Vacation</p>
                <time><span class="count">15</span><i>December &nbsp;</i>2017</time>
            </div>
        </div>
    </div>
    <br><br>
    <br><br>
</section>

@include('includes.footer')
@endsection