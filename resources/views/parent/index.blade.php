@extends('base')
@section('content')
<div class="az-content-header d-block d-md-flex">
    <div>
        <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Parent/Guardian Information</h2>
        <p class="mg-b-0">Please complete all the information below.</p>
    </div>
    <div class="az-dashboard-header-right">
    </div><!-- az-dashboard-header-right -->
</div><!-- az-content-header -->
<div class="az-content-body">
    <div class="row row-sm">
        <div class="col-md-12 col-lg-12 col-xl-10">
            <div class="card card-dashboard-seven">
                <div class="card-body">
                    <p class="mg-b-20"></p>
                    <form method="post" action="{{ route('parent.update',$user->id)}}">
                        @method('PUT')
                        @csrf
                        <p class="mg-b-20"></p>
                        <div class="row row-sm">
                            <div class="col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Name of Parent/Guardian 1: <span
                                            class="tx-danger">*</span></label>
                                    <input id="p1_name" class="form-control" style="text-transform:uppercase"
                                        name="p1_name" placeholder="Enter Full Name" value="{{$parents->p1_name}}"
                                        type="text" >
                                </div><!-- form group -->
                            </div><!-- col -->
                        </div><!-- row -->
                        <div class="row row-sm">
                            <div class="col-md-5 col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">IC/Passport Number: <span
                                            class="tx-danger">*</span></label>
                                    <input id="p1_ic" class="form-control" name="p1_ic"
                                        placeholder="ENTER IC PARENT/GUARDIAN 1" type="text" value="{{$parents->p1_ic}}"
                                        >
                                </div><!-- form group -->
                            </div>
                            <!--col-->
                            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                <div class="form-group">
                                    <label class="form-control-label">Nationality: <span
                                            class="tx-danger">*</span></label>
                                    <select name="p1_nation" class="form-control select2" >
                                        <option value="">SELECT</option>
                                        @foreach($nationality as $nation)
                                        <option value="{{ $nation->taraf_code }}"
                                            {{$parents->p1_nation == $nation->taraf_code  ? 'selected' : ''}}>
                                            {{ $nation->taraf_name}}</option>
                                        @endforeach
                                    </select>
                                </div><!-- form group -->
                            </div><!-- col-4 -->
                        </div><!-- row -->
                        <div class="row row-sm">
                            <div class="col-md-5 col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                                    <input id="email" class="form-control" placeholder="ENTER EMAIL" name="p1_email"
                                        type="text" value="{{$parents->p1_email}}" >
                                </div><!-- form group -->
                            </div><!-- col -->
                            <div class="col-md-5 col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                                    <input id="p1_phone" class="form-control" placeholder="ENTER PHONE" name="p1_phone"
                                        type="text" value="{{$parents->p1_phone}}" >
                                </div><!-- form group -->
                            </div><!-- col -->
                        </div><!-- row -->
                        <div class="row row-sm">
                            <div class="col-md-5 col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Marital Status: <span
                                            class="tx-danger">*</span></label>
                                    <select name="p1_marital" class="form-control select2" >
                                        <option value="">SELECT</option>
                                        @foreach($marital1 as $marital1)
                                        <option value="{{ $marital1->status_code }}"
                                            {{$parents->p1_marital == $marital1->status_code  ? 'selected' : ''}}>
                                            {{ $marital1->status_name}}</option>
                                        @endforeach
                                    </select>
                                </div><!-- form group -->
                            </div><!-- col -->
                            <div class="col-md-5 col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Race: <span class="tx-danger">*</span></label>
                                    <select name="p1_race" class="form-control select2" >
                                        <option value="">SELECT</option>
                                        @foreach($race as $race1)
                                        <option value="{{ $race1->race_code }}"
                                            {{$parents->p1_race == $race1->race_code  ? 'selected' : ''}}>
                                            {{ $race1->race_name}}</option>
                                        @endforeach
                                    </select>
                                </div><!-- form group -->
                            </div><!-- col -->
                            <div class="col-md-5 col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Religion: <span class="tx-danger">*</span></label>
                                    <select name="p1_religion" class="form-control select2" >
                                        <option value="">SELECT</option>
                                        @foreach($religion as $religion1)
                                        <option value="{{ $religion1->religion_code }}"
                                            {{$parents->p1_religion == $religion1->religion_code  ? 'selected' : ''}}>
                                            {{ $religion1->religion_name}}</option>
                                        @endforeach
                                    </select>
                                </div><!-- form group -->
                            </div><!-- col -->
                        </div><!-- row -->
                        <div class="row row-sm">
                            <div class="col-lg-8 mg-t-20 mg-lg-t-0">
                                <div class="form-group">
                                    <label class="form-control-label">Relation with applicant: <span
                                            class="tx-danger">*</span></label>
                                    <select name="p1_relation" class="form-control select2" >
                                        <option value="">SELECT</option>
                                        @foreach($relation as $relation1)
                                        <option value="{{ $relation1->guard_code }}"
                                            {{$parents->p1_relation == $relation1->guard_code  ? 'selected' : ''}}>
                                            {{ $relation1->guard_name}}</option>
                                        @endforeach
                                    </select>
                                </div><!-- form group -->
                            </div><!-- col-4 -->
                            <div class="col-md-5 col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">OKU Number: <span class="tx-danger">if
                                            applicable</span></label>
                                    <input id="nookup1" class="form-control" placeholder="ENTER OKU NUMBER"
                                        name="p1_nooku" type="text" value="{{$parents->p1_nooku}}">
                                </div><!-- form group -->
                            </div><!-- col -->
                            <div class="col-md-5 col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Income Parent/Guardian1: <span
                                            class="tx-danger"></span></label>
                                    <input id="" class="form-control" placeholder="ENTER INCOME PARENT1" name="p1_income"
                                        type="text" value="{{$parents->p1_income}}" >
                                </div><!-- form group -->
                            </div><!-- col -->

                        </div><!-- row -->
                        <p class="mg-b-20"></p>
                        <hr />
                        <div class="row row-sm">
                            <div class="col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Name of Parent/Guardian 2: <span
                                            class="tx-danger">*</span></label>
                                    <input id="name" class="form-control" style="text-transform:uppercase"
                                        name="p2_name" placeholder="Enter Full Name" value="{{$parents->p2_name}}"
                                        type="text" >
                                </div><!-- form group -->
                            </div><!-- col -->

                        </div><!-- row -->
                        <div class="row row-sm">
                            <div class="col-md-5 col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">IC/Passport Number: <span
                                            class="tx-danger">*</span></label>
                                    <input id="icp1" class="form-control" name="p2_ic"
                                        placeholder="ENTER IC PARENT/GUARDIAN 2" type="text" value="{{$parents->p2_ic}}"
                                        >
                                </div><!-- form group -->
                            </div>
                            <!--col-->
                            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                <div class="form-group">
                                    <label class="form-control-label">Nationality: <span
                                            class="tx-danger">*</span></label>
                                    <select name="p2_nation" class="form-control select2" >
                                        <option value="">SELECT</option>
                                        @foreach($nationality as $nation)
                                        <option value="{{ $nation->taraf_code }}"
                                            {{$parents->p2_nation == $nation->taraf_code  ? 'selected' : ''}}>
                                            {{ $nation->taraf_name}}</option>
                                        @endforeach
                                    </select>
                                </div><!-- form group -->
                            </div><!-- col-4 -->
                        </div><!-- row -->
                        <div class="row row-sm">
                            <div class="col-md-5 col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                                    <input id="p2_email" class="form-control" name="p2_email" placeholder="ENTER EMAIL"
                                        type="text" value="{{$parents->p2_email}}" >
                                </div><!-- form group -->
                            </div><!-- col -->
                            <div class="col-md-5 col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                                    <input id="p2_phone" class="form-control" name="p2_phone" placeholder="ENTER PHONE"
                                        type="text" value="{{$parents->p2_phone}}" >
                                </div><!-- form group -->
                            </div><!-- col -->
                        </div><!-- row -->
                        <div class="row row-sm">
                            <div class="col-md-5 col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Marital Status: <span
                                            class="tx-danger">*</span></label>
                                    <select name="p2_marital" class="form-control select2" >
                                        <option value="">SELECT</option>
                                        @foreach($marital as $marital2)
                                        <option value="{{ $marital2->status_code }}"
                                            {{$parents->p2_marital == $marital2->status_code  ? 'selected' : ''}}>
                                            {{ $marital2->status_name}}</option>
                                        @endforeach
                                    </select>
                                </div><!-- form group -->
                            </div><!-- col -->
                            <div class="col-md-5 col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Race: <span class="tx-danger">*</span></label>
                                    <select name="p2_race" class="form-control select2" >
                                        <option value="">SELECT</option>
                                        @foreach($race as $race2)
                                        <option value="{{ $race2->race_code }}"
                                            {{$parents->p2_race == $race2->race_code  ? 'selected' : ''}}>
                                            {{ $race2->race_name}}</option>
                                        @endforeach
                                    </select>
                                </div><!-- form group -->
                            </div><!-- col -->
                            <div class="col-md-5 col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Religion: <span class="tx-danger">*</span></label>
                                    <select name="p2_religion" class="form-control select2" >
                                        <option value="">SELECT</option>
                                        @foreach($religion as $religion2)
                                        <option value="{{ $religion2->religion_code }}"
                                            {{$parents->p2_religion == $religion2->religion_code  ? 'selected' : ''}}>
                                            {{ $religion2->religion_name}}</option>
                                        @endforeach
                                    </select>
                                </div><!-- form group -->
                            </div><!-- col -->
                        </div><!-- row -->
                        <div class="row row-sm">
                            <div class="col-lg-8 mg-t-20 mg-lg-t-0">
                                <div class="form-group">
                                    <label class="form-control-label">Relation with applicant: <span
                                            class="tx-danger">*</span></label>
                                    <select name="p2_relation" class="form-control select2" >
                                        @foreach($relation as $relation2)
                                        <option value="{{ $relation2->guard_code }}"
                                            {{$parents->p2_relation == $relation2->guard_code  ? 'selected' : ''}}>
                                            {{ $relation2->guard_name}}</option>
                                        @endforeach
                                    </select>


                                </div><!-- form group -->
                            </div><!-- col-4 -->
                            <div class="col-md-5 col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">OKU Number: <span class="tx-danger">if
                                            applicable</span></label>
                                    <input id="p2_nooku" class="form-control" placeholder="ENTER OKU NUMBER"
                                        name="p2_nooku" type="text" value="{{$parents->p2_nooku}}">
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
                                        type="text" value="{{$parents->p2_income}}" >
                                </div><!-- form group -->
                            </div><!-- col -->

                            <div class="col-md-5 col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Number of Household: <span
                                            class="tx-danger">*</span></label>
                                    <select name="household" class="form-control select2" >
                                        <option value="">SELECT</option>
                                        @foreach($household as $household2)
                                        <option value="{{ $household2->household_code }}"
                                            {{$parents->household == $household2->household_code  ? 'selected' : ''}}>
                                            {{ $household2->household_name}}</option>
                                        @endforeach
                                    </select>
                                </div><!-- form group -->
                            </div><!-- col -->
                        </div><!-- row -->
                        {{-- <input type="submit" name="submit" value="Update" class="btn btn-az-primary btn-block"> --}}
                        <button type="submit" class="btn btn-az-primary btn-block">Update</button>
                    </form>

                </div><!-- card-body -->
            </div><!-- card -->
        </div><!-- col -->
        <div class="col-md-2 col-xl-2 mg-t-2 mg-md-t-2">
            <div class="card card-dashboard-seven">
                <div class="card-body">

                    <p>Complete</p>

                    <div class="progress mg-b-20">
                        <div style="width: ;height: 30px;background-color: #4CAF50;text-align: center;line-height: 30px;color: white;"
                            role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- row -->

</div><!-- az-content -->
@endsection
