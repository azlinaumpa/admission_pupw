@extends('base')
@section('content')
<div class="az-content-header d-block d-md-flex">
</div><!-- az-content-header -->
<div class="col-md-12 col-lg-12 col-xl-10">
    <div class="card card-dashboard-seven">
        <div class="card-body print">
            <p class="mg-b-20"></p>
            <div class="row row-sm">
                <div>
                    <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Personal Information</h2>
                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label">Name: </label>
                        <input id="firstname" class="form-control" name="name" placeholder="Enter firstname"
                            value="{{$application->name}}" type="text" style="text-transform:uppercase" readonly>
                    </div><!-- form group -->
                </div><!-- col -->
            </div><!-- row -->
            <div class="row row-sm">
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">IC number/passport: </label>
                        <input id="firstname" class="form-control" name="ic" type="text" value="{{$application->ic}}"
                            readonly>
                    </div><!-- form group -->
                </div>
                <!--col-->
                <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                    <div class="form-group">
                        <label class="form-control-label">Nationality: </label>
                        <select name="nation" class="form-control select2" disabled>
                            <option value="">SELECT</option>
                            @foreach($nationality as $nation)
                            <option value="{{ $nation->taraf_code }}"
                                {{$application->nation == $nation->taraf_code  ? 'selected' : ''}}>
                                {{ $nation->taraf_name}}</option>
                            @endforeach
                        </select>
                    </div><!-- form group -->
                </div><!-- col-4 -->
                <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                    <div class="form-group">
                        <label class="form-control-label">Place Of Birth: </label>
                        <select name="pob" class="form-control select2" disabled>
                            <option value="">SELECT</option>
                            @foreach($states as $item)
                            <option value="{{ $item->state_code }}"
                                {{ ($item->state_code == $application->state) ? 'selected' : '' }}>
                                {{ $item->state_name }}
                            </option>
                            @endforeach
                        </select>
                    </div><!-- form group -->
                </div><!-- col-4 -->
            </div><!-- row -->
            <div class="row row-sm">
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Email: </label>
                        <input id="email" class="form-control" name="email" type="text" value="{{$application->email}}"
                            readonly>
                    </div><!-- form group -->
                </div><!-- col -->
                <div class="col-md-5 col-lg-4 mg-t-20 mg-md-t-0">
                    <div class="form-group">
                        <label class="form-control-label">Home Tel Number: </label>
                        <input id="hometel" class="form-control" name="hometel" value="{{$application->home}}"
                            type="text" readonly>
                    </div><!-- form group -->
                </div>
                <!--col-->
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Phone: </label>
                        <input id="phone" class="form-control" name="phone" type="text" value="{{$application->phone}}"
                            readonly>
                    </div><!-- form group -->
                </div><!-- col -->
            </div><!-- row -->
            <div class="row row-sm">
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Gender: </label>
                        <select name="gender" class="form-control select2" disabled>
                            <option value="">SELECT</option>
                            @foreach($gender as $gender)
                            <option value="{{ $gender->gender_code }}"
                                {{$application->gender == $gender->gender_code  ? 'selected' : ''}}>
                                {{ $gender->gender_name}}</option>
                            @endforeach
                        </select>
                    </div><!-- form group -->
                </div><!-- col -->
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Age: </label>
                        <input id="age" class="form-control" name="age" type="text" value="{{$application->age}}"
                            readonly>
                    </div><!-- form group -->
                </div><!-- col -->
                <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-control-label">Date of Birth: </label>
                        <div class="input-group">

                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    Date:
                                </div>
                            </div>
                            <input id="dateMask" type="text" name="dob" class="form-control"
                                value="{{$application->dob}}" placeholder="MM/DD/YYYY" readonly>
                        </div><!-- input-group -->
                    </div><!-- form group -->
                </div><!-- col-4 -->
            </div><!-- row -->
            <div class="row row-sm">
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Marital Status: </label>
                        <select name="marital" class="form-control select2" disabled>
                            <option value="">SELECT</option>
                            @foreach($marital as $marital1)
                            <option value="{{ $marital1->status_code }}"
                                {{$application->marital == $marital1->status_code  ? 'selected' : ''}}>
                                {{ $marital1->status_name}}</option>
                            @endforeach
                        </select>
                    </div><!-- form group -->
                </div><!-- col -->
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Race: </label>
                        <select name="race" class="form-control select2" disabled>
                            <option value="">SELECT</option>
                            @foreach($race as $race1)
                            <option value="{{ $race1->race_code }}"
                                {{$application->race == $race1->race_code  ? 'selected' : ''}}>
                                {{ $race1->race_name}}</option>
                            @endforeach
                        </select>
                    </div><!-- form group -->
                </div><!-- col -->
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Religion: </label>
                        <select name="religion" class="form-control select2" disabled>
                            <option value="">SELECT</option>
                            @foreach($religion as $religion1)
                            <option value="{{ $religion1->religion_code }}"
                                {{$application->religion == $religion1->religion_code  ? 'selected' : ''}}>
                                {{ $religion1->religion_name}}</option>
                            @endforeach
                        </select>
                    </div><!-- form group -->
                </div><!-- col -->
            </div><!-- row -->
            <div class="row row-sm">
                <div class="col-md-12 col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label">Address1: </label>
                        <input id="" class="form-control" style="text-transform:uppercase" name="add1"
                            placeholder="Enter Address1" value="{{$application->add1}}" type="text" READONLY>
                    </div><!-- form group -->
                </div><!-- col -->
            </div><!-- row -->
            <div class="row row-sm">
                <div class="col-md-12 col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label">Address2: </label>
                        <input id="" class="form-control" style="text-transform:uppercase" name="add2"
                            placeholder="Enter Address2" value="{{$application->add2}}" type="text" readonly>
                    </div><!-- form group -->
                </div><!-- col -->
            </div><!-- row -->
            <div class="row row-sm">
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">City: </label>
                        <input id="city" class="form-control" name="city" type="text" value="{{$application->city}}"
                            readonly>
                    </div><!-- form group -->
                </div><!-- col -->
                <div class="col-md-5 col-lg-4 mg-t-20 mg-md-t-0">
                    <div class="form-group">
                        <label class="form-control-label">Postcode: </label>
                        <input id="" class="form-control" name="postcode" value="{{$application->postcode}}" type="text"
                            readonly>
                    </div><!-- form group -->
                </div>
                <!--col-->
                <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                    <div class="form-group">
                        <label class="form-control-label">State: </label>
                        <select name="state" class="form-control select2" disabled>
                            <option value="NULL">SELECT</option>
                            @foreach($states as $item)
                            <option value="{{ $item->state_code }}"
                                {{ ($item->state_code == $application->state) ? 'selected' : '' }}>
                                {{ $item->state_name }}
                            </option>
                            @endforeach

                        </select>
                    </div><!-- form group -->
                </div><!-- col-4 -->
            </div><!-- row -->
            <div class="row row-sm">
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">No OKU: <span class="tx-danger">if relatable</span></label>
                        <input id="nooku" class="form-control" name="nooku" type="text"
                            value="{{$application->postcode}}" readonly>
                    </div><!-- form group -->
                </div><!-- col -->
                <div class="col-lg-8 mg-t-20 mg-lg-t-0">
                    <div class="form-group">
                        <label class="form-control-label">OKU Type: <span class="tx-danger">if relatable</span></label>
                        <select name="okutype" class="form-control select2" disabled>
                            <option value="NULL">SELECT</option>
                            @foreach($okutype as $okutype)
                            <option value="{{ $okutype->oku_code }}"
                                {{ ($okutype->oku_code == $application->okutype) ? 'selected' : '' }}>
                                {{ $okutype->oku_name }}
                            </option>
                            @endforeach

                        </select>
                    </div><!-- form group -->
                </div><!-- col-4 -->
            </div><!-- row -->

            </br>
            <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Parent/Guardian Information</h2>



            <p class="mg-b-20"></p>
            <div class="row row-sm">
                <div class="col-md-12 col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label">Name Parent1/Guardian: </label>
                        <input id="namep1" class="form-control" style="text-transform:uppercase" name="namep1"
                            placeholder="Enter firstname" value="{{$application2->p1_name}}" type="text" readonly>
                    </div><!-- form group -->
                </div><!-- col -->
            </div><!-- row -->
            <div class="row row-sm">
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">IC number/passport: </label>
                        <input id="icp1" class="form-control" name="icp1" placeholder="Enter IC parent1/guardian"
                            type="text" value="{{$application2->p1_ic}}" readonly>
                    </div><!-- form group -->
                </div>
                <!--col-->
                <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                    <div class="form-group">
                        <label class="form-control-label">Nationality: </label>
                        <select name="nationp1" class="form-control select2" disabled>
                            <option value="">SELECT</option>
                            @foreach($nationality as $nation)
                            <option value="{{ $nation->taraf_code }}"
                                {{$application2->p1_nation == $nation->taraf_code  ? 'selected' : ''}}>
                                {{ $nation->taraf_name}}</option>
                            @endforeach
                        </select>
                    </div><!-- form group -->
                </div><!-- col-4 -->
            </div><!-- row -->
            <div class="row row-sm">
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Email: </label>
                        <input id="emailp1" class="form-control" name="emailp1" type="text"
                            value="{{$application2->p1_email}}" readonly>
                    </div><!-- form group -->
                </div><!-- col -->
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Phone: </label>
                        <input id="phonep1" class="form-control" name="phonep1" type="text"
                            value="{{$application2->p1_phone}}" readonly>
                    </div><!-- form group -->
                </div><!-- col -->
            </div><!-- row -->
            <div class="row row-sm">
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Marital Status: </label>
                        <select name="p1_marital" class="form-control select2" disabled>
                            <option value="">SELECT</option>
                            @foreach($marital as $marital2)
                            <option value="{{ $marital2->status_code }}"
                                {{$application2->p1_marital == $marital2->status_code  ? 'selected' : ''}}>
                                {{ $marital2->status_name}}</option>
                            @endforeach
                        </select>
                    </div><!-- form group -->
                </div><!-- col -->
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Race: </label>
                        <select name="racep1" class="form-control select2" disabled>
                            <option value="">SELECT</option>
                            @foreach($race as $race2)
                            <option value="{{ $race2->race_code }}"
                                {{$application2->p1_race == $race2->race_code  ? 'selected' : ''}}>
                                {{ $race2->race_name}}</option>
                            @endforeach

                        </select>
                    </div><!-- form group -->
                </div><!-- col -->
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Religion: </label>
                        <select name="religionp1" class="form-control select2" disabled>
                            <option value="">SELECT</option>
                            @foreach($religion as $religion2)
                            <option value="{{ $religion2->religion_code }}"
                                {{$application2->p1_religion == $religion2->religion_code  ? 'selected' : ''}}>
                                {{ $religion2->religion_name}}</option>
                            @endforeach
                        </select>
                    </div><!-- form group -->
                </div><!-- col -->
            </div><!-- row -->
            <div class="row row-sm">
                <div class="col-lg-8 mg-t-20 mg-lg-t-0">
                    <div class="form-group">
                        <label class="form-control-label">Relation with applicant: </label>
                        <select name="p1_relation" class="form-control select2" disabled>
                            <option value="">SELECT</option>
                            @foreach($relation as $relation2)
                            <option value="{{ $relation2->guard_code }}"
                                {{$application2->p1_relation == $relation2->guard_code  ? 'selected' : ''}}>
                                {{ $relation2->guard_name}}</option>
                            @endforeach
                        </select>
                    </div><!-- form group -->
                </div><!-- col-4 -->
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">No OKU: <span class="tx-danger">if relatable</span></label>
                        <input id="nookup1" class="form-control" name="nookup1" type="text"
                            value="{{$application2->p1_nooku}}" readonly>
                    </div><!-- form group -->
                </div><!-- col -->
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Income Parent/Guardian1: <span
                                class="tx-danger"></span></label>
                        <input id="" class="form-control" placeholder="ENTER INCOME PARENT1" name="p1_income"
                            type="text" value="{{$application2->p1_income}}" readonly>
                    </div><!-- form group -->
                </div><!-- col -->
            </div><!-- row -->
            <p class="mg-b-20"></p>
            <hr />
            <div class="row row-sm">
                <div class="col-md-12 col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label">Name Parent2: </label>
                        <input id="namep1" class="form-control" style="text-transform:uppercase" name="namep2"
                            placeholder="Enter firstname" value="{{$application2->p2_name}}" type="text" readonly>
                    </div><!-- form group -->
                </div><!-- col -->
            </div><!-- row -->
            <div class="row row-sm">
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">IC number/passport: </label>
                        <input id="icp1" class="form-control" name="icp2" placeholder="Enter IC parent2" type="text"
                            value="{{$application2->p2_ic}}" readonly>
                    </div><!-- form group -->
                </div>
                <!--col-->
                <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                    <div class="form-group">
                        <label class="form-control-label">Nationality: </label>
                        <select name="nationp2" class="form-control select2" disabled>
                            <option value="">SELECT</option>
                            @foreach($nationality as $nation2)
                            <option value="{{ $nation2->taraf_code }}"
                                {{$application2->p2_nation == $nation2->taraf_code  ? 'selected' : ''}}>
                                {{ $nation2->taraf_name}}</option>
                            @endforeach
                        </select>
                    </div><!-- form group -->
                </div><!-- col-4 -->
            </div><!-- row -->
            <div class="row row-sm">
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Email: </label>
                        <input id="emailp2" class="form-control" name="emailp2" type="text"
                            value="{{$application2->p2_email}}" readonly>
                    </div><!-- form group -->
                </div><!-- col -->
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Phone: </label>
                        <input id="phonep1" class="form-control" name="phonep2" type="text"
                            value="{{$application2->p2_phone}}" readonly>
                    </div><!-- form group -->
                </div><!-- col -->
            </div><!-- row -->
            <div class="row row-sm">
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Marital Status: </label>
                        <select name="maritalp2" class="form-control select2" disabled>
                            <option value="">SELECT</option>
                            @foreach($marital as $marital3)
                            <option value="{{ $marital3->status_code }}"
                                {{$application2->p2_marital == $marital3->status_code  ? 'selected' : ''}}>
                                {{ $marital3->status_name}}</option>
                            @endforeach
                        </select>
                    </div><!-- form group -->
                </div><!-- col -->
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Race: </label>
                        <select name="racep2" class="form-control select2" disabled>
                            <option value="">SELECT</option>
                            @foreach($race as $race3)
                            <option value="{{ $race3->race_code }}"
                                {{$application2->p2_race == $race3->race_code  ? 'selected' : ''}}>
                                {{ $race3->race_name}}</option>
                            @endforeach

                        </select>
                    </div><!-- form group -->
                </div><!-- col -->
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Religion: </label>
                        <select name="religionp2" class="form-control select2" disabled>
                            <option value="">SELECT</option>
                            @foreach($religion as $religion3)
                            <option value="{{ $religion3->religion_code }}"
                                {{$application2->p2_religion == $religion3->religion_code  ? 'selected' : ''}}>
                                {{ $religion3->religion_name}}</option>
                            @endforeach
                        </select>
                    </div><!-- form group -->
                </div><!-- col -->
            </div><!-- row -->
            <div class="row row-sm">
                <div class="col-lg-8 mg-t-20 mg-lg-t-0">
                    <div class="form-group">
                        <label class="form-control-label">Relation with applicant: </label>
                        <select name="relationp2" class="form-control select2" disabled>
                            <option value="">SELECT</option>
                            @foreach($relation as $relation3)
                            <option value="{{ $relation3->guard_code }}"
                                {{$application2->p2_relation == $relation3->guard_code  ? 'selected' : ''}}>
                                {{ $relation3->guard_name}}</option>
                            @endforeach

                        </select>
                    </div><!-- form group -->
                </div><!-- col-4 -->
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">No OKU: <span class="tx-danger">if relatable</span></label>
                        <input id="nookup2" class="form-control" name="nookup2" type="text"
                            value="{{$application2->p2_nooku}}" readonly>
                    </div><!-- form group -->
                </div><!-- col -->
            </div><!-- row -->
            <p class="mg-b-20"></p>
            <hr />
            <div class="row row-sm">
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Income Parent/Guardian2: <span
                                class="tx-danger"></span></label>
                        <input id="" class="form-control" placeholder="ENTER INCOME PARENT2" name="p2_income"
                            type="text" value="{{$application2->p2_income}}" readonly>
                    </div><!-- form group -->
                </div><!-- col -->
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Household: </label>
                        <select name="household" class="form-control select2" disabled>
                            <option value="">SELECT</option>
                            @foreach($household as $household2)
                            <option value="{{ $household2->household_code }}"
                                {{$application2->household == $household2->household_code  ? 'selected' : ''}}>
                                {{ $household2->household_name}}</option>
                            @endforeach

                        </select>
                    </div><!-- form group -->
                </div><!-- col -->



            </div><!-- card -->





            <p class="mg-b-30"></p>
            <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Application</h2>
            <p class="mg-b-20"></p>

            <div class="row row-sm">
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">First Choice: </label>
                        <input id="" class="form-control" name="fc" value="" type="text"
                            style="text-transform:uppercase" readonly>
                    </div><!-- form group -->
                </div><!-- col -->
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">Second Choice: </label>
                        <input id="" class="form-control" name="fc" value="" type="text"
                            style="text-transform:uppercase" readonly>
                    </div><!-- form group -->
                </div><!-- col -->
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">Third Choice: </label>
                        <input id="" class="form-control" name="fc" value="" type="text"
                            style="text-transform:uppercase" readonly>
                    </div><!-- form group -->
                </div><!-- col -->
            </div>
            <!--row-->


            <p class="mg-b-30"></p>
            <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Academic Information</h2>
            <p class="mg-b-20"></p>

            <hr />
            <div class="row row-sm">
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">SPM Number: </label>
                        <input id="" class="form-control" name="spmnumber" placeholder="Enter SPM Number"
                            value="{{$academic->spm_number}}" type="text" style="text-transform:uppercase" readonly>
                    </div><!-- form group -->
                </div><!-- col -->
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">Year of SPM: </label>
                        <input id="" class="form-control" name="spmyear" placeholder="Enter Year of SPM"
                            value="{{$academic->spm_year}}" type="number"
                            onKeyPress="if(this.value.length==4) return false;" style="text-transform:uppercase"
                            readonly>
                    </div><!-- form group -->
                </div><!-- col -->
            </div><!-- row -->
            <div class="row row-sm">
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">Type of School: </label>
                        <select name="schooltype" class="form-control select2" disabled>
                            <option value=" ">Select</option>
                            @foreach($school_type as $school_types)
                            <option value="{{ $school_types->school_type_code }}"
                                {{$academic->school_type == $school_types->school_type_code  ? 'selected' : ''}}>
                                {{ $school_types->school_type_name}}</option>
                            @endforeach
                        </select>
                    </div><!-- form group -->
                </div><!-- col -->
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">School Name: </label>
                        <input id="" class="form-control" name="schoolname" placeholder="Enter School Name"
                            value="{{$academic->school_name}}" type="text" style="text-transform:uppercase" readonly>
                    </div><!-- form group -->
                </div><!-- col -->
            </div><!-- row -->
            <div class="row row-sm">
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label for="seeAnotherField" class="form-control-label">Stream: <span
                                class="tx-danger">*</span></label>
                        <select name="spm_aliran" class="form-control select2 something1" id="aliran" disabled>
                            <option value="0" {{$academic->spm_aliran == '0'  ? 'selected' : ''}}>Select</option>
                            <option value="A" {{$academic->spm_aliran == 'A'  ? 'selected' : ''}}>SASTERA</option>
                            <option value="S" {{$academic->spm_aliran == 'S'  ? 'selected' : ''}}>SAINS</option>

                        </select>
                    </div><!-- form group -->
                </div><!-- col -->
                <div class="col-md-12 col-lg-6">
                    <div class="form-group">
                        <label for="seeAnotherField" class="form-control-label">Examination Type: <span
                                class="tx-danger">*</span></label>
                        <select name="exam_type" class="form-control select2 " disabled>
                            <option selected disabled="" style="font-size:14px;">Select</option>
                            <option value="TRIAL" {{$academic->exam_type == 'TRIAL'  ? 'selected' : ''}}>TRIAL</option>
                            <option value="SPM" {{$academic->exam_type == 'SPM'  ? 'selected' : ''}}>SPM</option>

                        </select>
                    </div><!-- form group -->
                </div><!-- col -->
            </div><!-- row -->
            <p class="mg-b-30"></p>

            <div class="table-responsive">
                <table class="table table-bordered mg-b-0">
                    <thead>
                        <tr>
                            <th class="wd-5p">ID</th>
                            <th class="wd-30p">Subjects</th>
                            <th class="wd-40p">Gred</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td> <select name="sub8" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_subject as $spm_subject1)
                                    <option value="{{ $spm_subject1->subject_code_no }}"
                                        {{$academic->kodspm1 == $spm_subject1->subject_code_no  ? 'selected' : ''}}>
                                        {{ $spm_subject1->subject_name}}</option>
                                    @endforeach
                                </select></td>
                            <td><select name="gred8" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_grade as $spm_grade1)
                                    <option value="{{ $spm_grade1->spm_code,$spm_grade1->value_grade }}"
                                        {{$academic->gredspm1 == $spm_grade1->spm_code  ? 'selected' : ''}}>
                                        {{ $spm_grade1->spm_grade}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td> <select name="sub8" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_subject as $spm_subject1)
                                    <option value="{{ $spm_subject1->subject_code_no }}"
                                        {{$academic->kodspm2 == $spm_subject1->subject_code_no  ? 'selected' : ''}}>
                                        {{ $spm_subject1->subject_name}}</option>
                                    @endforeach
                                </select></td>
                            <td><select name="gred8" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_grade as $spm_grade1)
                                    <option value="{{ $spm_grade1->spm_code,$spm_grade1->value_grade }}"
                                        {{$academic->gredspm2 == $spm_grade1->spm_code  ? 'selected' : ''}}>
                                        {{ $spm_grade1->spm_grade}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td> <select name="sub8" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_subject as $spm_subject1)
                                    <option value="{{ $spm_subject1->subject_code_no }}"
                                        {{$academic->kodspm3 == $spm_subject1->subject_code_no  ? 'selected' : ''}}>
                                        {{ $spm_subject1->subject_name}}</option>
                                    @endforeach
                                </select></td>
                            <td><select name="gred8" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_grade as $spm_grade1)
                                    <option value="{{ $spm_grade1->spm_code,$spm_grade1->value_grade }}"
                                        {{$academic->gredspm3 == $spm_grade1->spm_code  ? 'selected' : ''}}>
                                        {{ $spm_grade1->spm_grade}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td> <select name="sub8" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_subject as $spm_subject1)
                                    <option value="{{ $spm_subject1->subject_code_no }}"
                                        {{$academic->kodspm4 == $spm_subject1->subject_code_no  ? 'selected' : ''}}>
                                        {{ $spm_subject1->subject_name}}</option>
                                    @endforeach
                                </select></td>
                            <td><select name="gred8" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_grade as $spm_grade1)
                                    <option value="{{ $spm_grade1->spm_code,$spm_grade1->value_grade }}"
                                        {{$academic->gredspm4 == $spm_grade1->spm_code  ? 'selected' : ''}}>
                                        {{ $spm_grade1->spm_grade}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td> <select name="sub8" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_subject as $spm_subject1)
                                    <option value="{{ $spm_subject1->subject_code_no }}"
                                        {{$academic->kodspm5 == $spm_subject1->subject_code_no  ? 'selected' : ''}}>
                                        {{ $spm_subject1->subject_name}}</option>
                                    @endforeach
                                </select></td>
                            <td><select name="gred8" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_grade as $spm_grade1)
                                    <option value="{{ $spm_grade1->spm_code,$spm_grade1->value_grade }}"
                                        {{$academic->gredspm5 == $spm_grade1->spm_code  ? 'selected' : ''}}>
                                        {{ $spm_grade1->spm_grade}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td> <select name="sub8" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_subject as $spm_subject1)
                                    <option value="{{ $spm_subject1->subject_code_no }}"
                                        {{$academic->kodspm6 == $spm_subject1->subject_code_no  ? 'selected' : ''}}>
                                        {{ $spm_subject1->subject_name}}</option>
                                    @endforeach
                                </select></td>
                            <td><select name="gred8" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_grade as $spm_grade1)
                                    <option value="{{ $spm_grade1->spm_code,$spm_grade1->value_grade }}"
                                        {{$academic->gredspm6 == $spm_grade1->spm_code  ? 'selected' : ''}}>
                                        {{ $spm_grade1->spm_grade}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td> <select name="sub8" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_subject as $spm_subject1)
                                    <option value="{{ $spm_subject1->subject_code_no }}"
                                        {{$academic->kodspm7 == $spm_subject1->subject_code_no  ? 'selected' : ''}}>
                                        {{ $spm_subject1->subject_name}}</option>
                                    @endforeach
                                </select></td>
                            <td><select name="gred8" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_grade as $spm_grade1)
                                    <option value="{{ $spm_grade1->spm_code,$spm_grade1->value_grade }}"
                                        {{$academic->gredspm7 == $spm_grade1->spm_code  ? 'selected' : ''}}>
                                        {{ $spm_grade1->spm_grade}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td> <select name="sub8" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_subject as $spm_subject1)
                                    <option value="{{ $spm_subject1->subject_code_no }}"
                                        {{$academic->kodspm8 == $spm_subject1->subject_code_no  ? 'selected' : ''}}>
                                        {{ $spm_subject1->subject_name}}</option>
                                    @endforeach
                                </select></td>
                            <td><select name="gred8" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_grade as $spm_grade1)
                                    <option value="{{ $spm_grade1->spm_code,$spm_grade1->value_grade }}"
                                        {{$academic->gredspm8 == $spm_grade1->spm_code  ? 'selected' : ''}}>
                                        {{ $spm_grade1->spm_grade}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td> <select name="sub9" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_subject as $spm_subject1)
                                    <option value="{{ $spm_subject1->subject_code_no }}"
                                        {{$academic->kodspm9 == $spm_subject1->subject_code_no  ? 'selected' : ''}}>
                                        {{ $spm_subject1->subject_name}}</option>
                                    @endforeach
                                </select></td>
                            <td><select name="gred9" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_grade as $spm_grade1)
                                    <option value="{{ $spm_grade1->spm_code,$spm_grade1->value_grade }}"
                                        {{$academic->gredspm9 == $spm_grade1->spm_code  ? 'selected' : ''}}>
                                        {{ $spm_grade1->spm_grade}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td> <select name="sub10" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_subject as $spm_subject1)
                                    <option value="{{ $spm_subject1->subject_code_no }}"
                                        {{$academic->kodspm10 == $spm_subject1->subject_code_no  ? 'selected' : ''}}>
                                        {{ $spm_subject1->subject_name}}</option>
                                    @endforeach
                                </select></td>
                            <td><select name="gred10" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_grade as $spm_grade1)
                                    <option value="{{ $spm_grade1->spm_code,$spm_grade1->value_grade }}"
                                        {{$academic->gredspm10 == $spm_grade1->spm_code  ? 'selected' : ''}}>
                                        {{ $spm_grade1->spm_grade}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td> <select name="sub11" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_subject as $spm_subject1)
                                    <option value="{{ $spm_subject1->subject_code_no }}"
                                        {{$academic->kodspm11 == $spm_subject1->subject_code_no  ? 'selected' : ''}}>
                                        {{ $spm_subject1->subject_name}}</option>
                                    @endforeach
                                </select></td>
                            <td><select name="gred11" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_grade as $spm_grade1)
                                    <option value="{{ $spm_grade1->spm_code,$spm_grade1->value_grade }}"
                                        {{$academic->gredspm11 == $spm_grade1->spm_code  ? 'selected' : ''}}>
                                        {{ $spm_grade1->spm_grade}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td> <select name="sub12" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_subject as $spm_subject1)
                                    <option value="{{ $spm_subject1->subject_code_no }}"
                                        {{$academic->kodspm12 == $spm_subject1->subject_code_no  ? 'selected' : ''}}>
                                        {{ $spm_subject1->subject_name}}</option>
                                    @endforeach
                                </select></td>
                            <td><select name="gred12" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_grade as $spm_grade1)
                                    <option value="{{ $spm_grade1->spm_code,$spm_grade1->value_grade }}"
                                        {{$academic->gredspm12 == $spm_grade1->spm_code  ? 'selected' : ''}}>
                                        {{ $spm_grade1->spm_grade}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td> <select name="sub13" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_subject as $spm_subject1)
                                    <option value="{{ $spm_subject1->subject_code_no }}"
                                        {{$academic->kodspm13 == $spm_subject1->subject_code_no  ? 'selected' : ''}}>
                                        {{ $spm_subject1->subject_name}}</option>
                                    @endforeach
                                </select></td>
                            <td><select name="gred13" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_grade as $spm_grade1)
                                    <option value="{{ $spm_grade1->spm_code,$spm_grade1->value_grade }}"
                                        {{$academic->gredspm13 == $spm_grade1->spm_code  ? 'selected' : ''}}>
                                        {{ $spm_grade1->spm_grade}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td> <select name="sub14" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_subject as $spm_subject1)
                                    <option value="{{ $spm_subject1->subject_code_no }}"
                                        {{$academic->kodspm14 == $spm_subject1->subject_code_no  ? 'selected' : ''}}>
                                        {{ $spm_subject1->subject_name}}</option>
                                    @endforeach
                                </select></td>
                            <td><select name="gred14" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_grade as $spm_grade1)
                                    <option value="{{ $spm_grade1->spm_code,$spm_grade1->value_grade }}"
                                        {{$academic->gredspm14 == $spm_grade1->spm_code  ? 'selected' : ''}}>
                                        {{ $spm_grade1->spm_grade}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td> <select name="sub15" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_subject as $spm_subject1)
                                    <option value="{{ $spm_subject1->subject_code_no }}"
                                        {{$academic->kodspm15 == $spm_subject1->subject_code_no  ? 'selected' : ''}}>
                                        {{ $spm_subject1->subject_name}}</option>
                                    @endforeach
                                </select></td>
                            <td><select name="gred15" class="form-control select2" disabled>
                                    <option value=" ">Select</option>
                                    @foreach($spm_grade as $spm_grade1)
                                    <option value="{{ $spm_grade1->spm_code,$spm_grade1->value_grade }}"
                                        {{$academic->gredspm15 == $spm_grade1->spm_code  ? 'selected' : ''}}>
                                        {{ $spm_grade1->spm_grade}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div><!-- table-responsive -->


            <p class="mg-b-30"></p>
            <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Uploaded Document</h2>
            <p class="mg-b-20"></p>
            <div class="table-responsive">
                <div class="container">
                    <table id="demo" class="table table-bordered">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>FileName</td>
                                <td>Download</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; ?>
                            @foreach($document as $document1)
                            <tr>
                                <td class="text-center">{{ $i++ }}</td>
                                <td>{{$document1->file_name}}</td>
                                <td><a href="/storage/{{$document1->location}}"> {{$document1->location}}</a></td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div><!-- row -->

            <div class="col-md-5 col-lg-3">
                <p>Do you register through any agent?</p>
                <td><input type="text" class="form-control" value="" readonly></td>
            </div>
        </div>

        <p class="mg-b-20"></p>
        <center>
            <div class="outer">
                <!-- <form action="save_process.php" method="post"> -->
                <!-- <input type="hidden" name="ic" value=""> -->
                <div class="inner" style="height:50px;">
                    <input class="btn btn-success" style="height:50px; width:200px;" data-toggle="modal"
                        data-target="#exampleModal" type="submit" value="Process" name="process">
                    <input class="btn btn-danger" style="height:50px; width:200px;" data-toggle="modal"
                        data-target="#exampleModal2" type="submit" value="Reject" name="reject">
                    <input class="btn btn-warning" style="height:50px; width:200px;" data-toggle="modal"
                        data-target="#exampleModal3" type="submit" value="KIV" name="kiv">
                </div>
                <!-- </form> -->
        </center><br>
 

        <center>
            <div class="outer">
                <div><input class="btn btn-az-primary" type="button" onclick="printInvoice();"
                        style="height:50px; width:200px" value="Print"></div>
            </div>
    </div>

    <script>
        function printInvoice()
     {
         printDiv = ".print"; // id of the div you want to print
         $("*").addClass("no-print");
         $(printDiv+" *").removeClass("no-print");
         $(printDiv).removeClass("no-print");
    
         parent =  $(printDiv).parent();
         while($(parent).length)
         {
             $(parent).removeClass("no-print");
             parent =  $(parent).parent();
         }
         window.print();
    
     }
     
  
     </script>
@endsection

