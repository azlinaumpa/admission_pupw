@extends('base')
@section('content')


<?php
  $now_year = date('Y');
  $card_year  = substr($user->ic,0,2);
  if ($card_year<50){
    $age = $now_year - intval("20".$card_year);
  }else{
    $age = $now_year - intval("19".$card_year);
  }

  $date = substr($user->ic, 0, 6);
  $date = str_split($date, 2);
  $currentCentury = floor(date('Y') / 100);
    if ($date[0] > date('y')){
        // year is in last century
      $date[0] = ($currentCentury - 1) . $date[0];
    } else {
      $date[0] = $currentCentury . $date[0];
    }
    
        
?>

<div class="az-content-header d-block d-md-flex">
    <div>
        <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Personal Information</h2>
        <p class="mg-b-0">Please complete all the information below.</p>
    </div>
</div><!-- az-content-header -->
<div class="az-content-body">
    <div class="row row-sm">
        <div class="col-md-12 col-lg-12 col-xl-10">
            <div class="card card-dashboard-seven">
                <div class="card-body">
                    <p class="mg-b-20"></p>
                    <form method="post" action="{{route('personal.update',$user->id)}}">
                        @method('PUT')
                        @csrf
                        <div class="row row-sm">
                            <div class="col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                                    <input id="" class="form-control" name="name" placeholder="Enter Full Name"
                                        value="{{$user->name}}" type="text" style="text-transform:uppercase">
                                </div><!-- form group -->
                            </div><!-- col -->
                        </div><!-- row -->
                        <div class="row row-sm">
                            <div class="col-md-5 col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">IC number/passport: <span
                                            class="tx-danger">*</span></label>
                                    <input id="" class="form-control" name="ic" type="text" value="{{$user->ic}}"
                                        readonly>
                                </div><!-- form group -->
                            </div>
                            <!--col-->
                            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                <div class="form-group">
                                    <label class="form-control-label">Nationality: <span
                                            class="tx-danger">*</span></label>
                                    <select name="nation" class="form-control select2">
                                        <option value="">SELECT</option>
                                        @foreach($nationality as $nation)
                                        <option value="{{ $nation->taraf_code }}"
                                            {{$student->nation == $nation->taraf_code  ? 'selected' : ''}}>
                                            {{ $nation->taraf_name}}</option>
                                        @endforeach
                                    </select>
                                </div><!-- form group -->
                            </div><!-- col-4 -->
                            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                <div class="form-group">
                                    <label class="form-control-label">Place Of Birth: <span
                                            class="tx-danger">*</span></label>
                                    <select name="pob" class="form-control select2">
                                        <option value="">SELECT</option>
                                        @foreach($states as $item)
                                        <option value="{{ $item->state_code }}"
                                            {{ ($item->state_code == $student->state) ? 'selected' : '' }}>
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
                                    <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                                    <input id="email" class="form-control" placeholder="ENTER EMAIL" name="email"
                                        type="text" value="{{$user->email}}" readonly>
                                </div><!-- form group -->
                            </div><!-- col -->
                            <div class="col-md-5 col-lg-4 mg-t-20 mg-md-t-0">
                                <div class="form-group">
                                    <label class="form-control-label">Home Tel Number: <span
                                            class="tx-danger">*</span></label>
                                    <input name="home" class="form-control" placeholder="ENTER HOME TEL NUMBER"
                                        value="{{$student->home}}" type="text">
                                </div><!-- form group -->
                            </div>
                            <!--col-->
                            <div class="col-md-5 col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                                    <input id="phone" class="form-control" placeholder="ENTER PHONE NUMBER" name="phone"
                                        type="text" value="{{$student->phone}}">
                                </div><!-- form group -->
                            </div><!-- col -->
                        </div><!-- row -->
                        <div class="row row-sm">
                            <div class="col-md-5 col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Gender: <span class="tx-danger">*</span></label>
                                    <select name="gender" class="form-control select2">
                                        <option value="">SELECT</option>
                                        @foreach($gender as $gender)
                                        <option value="{{ $gender->gender_code }}"
                                            {{$student->gender == $gender->gender_code  ? 'selected' : ''}}>
                                            {{ $gender->gender_name}}</option>
                                        @endforeach
                                    </select>
                                </div><!-- form group -->
                            </div><!-- col -->
                            <div class="col-md-5 col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Age: <span class="tx-danger">*</span></label>
                                    <input id="age" class="form-control" name="age" type="text"
                                        value="<?php echo $age?>" readonly>
                                </div><!-- form group -->
                            </div><!-- col -->
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label">Date of Birth: <span
                                            class="tx-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Date:</div>
                                        </div>
                                        <input id="dateMask" type="text" name="dob" class="form-control"
                                            value="<?php echo implode("-", $date); ?>" placeholder="MM/DD/YYYY"
                                            readonly>
                                    </div><!-- input-group -->
                                </div><!-- form group -->
                            </div><!-- col-4 -->
                        </div><!-- row -->
                        <div class="row row-sm">
                            <div class="col-md-5 col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Marital Status: <span
                                            class="tx-danger">*</span></label>
                                    <select name="marital" class="form-control select2">
                                        <option value="">SELECT</option>
                                        @foreach($marital as $marital)
                                        <option value="{{ $marital->status_code }}"
                                            {{$student->marital == $marital->status_code  ? 'selected' : ''}}>
                                            {{ $marital->status_name}}</option>
                                        @endforeach
                                    </select>
                                </div><!-- form group -->
                            </div><!-- col -->
                            <div class="col-md-5 col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Race: <span class="tx-danger">*</span></label>
                                    <select name="race" class="form-control select2">
                                        <option value="">SELECT</option>
                                        @foreach($race as $race)
                                        <option value="{{ $race->race_code }}"
                                            {{$student->race == $race->race_code  ? 'selected' : ''}}>
                                            {{ $race->race_name}}</option>
                                        @endforeach
                                    </select>
                                </div><!-- form group -->
                            </div><!-- col -->
                            <div class="col-md-5 col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Religion: <span class="tx-danger">*</span></label>
                                    <select name="religion" class="form-control select2">
                                        <option value="">SELECT</option>
                                        @foreach($religion as $religion)
                                        <option value="{{ $religion->religion_code }}"
                                            {{$student->religion == $religion->religion_code  ? 'selected' : ''}}>
                                            {{ $religion->religion_name}}</option>
                                        @endforeach
                                    </select>
                                </div><!-- form group -->
                            </div><!-- col -->
                        </div><!-- row -->
                        <div class="row row-sm">
                            <div class="col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Address: <span class="tx-danger">*</span></label>
                                    <input id="" class="form-control" style="text-transform:uppercase" name="add1"
                                        placeholder=" " value="{{$student->add1}}" type="text"><br>
                                    <input id="" class="form-control" style="text-transform:uppercase" name="add2"
                                        placeholder=" " value="{{$student->add2}}" type="text">
                                </div><!-- form group -->
                            </div><!-- col -->
                        </div><!-- row -->
                        <div class="row row-sm">
                            <div class="col-md-5 col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">City: <span class="tx-danger">*</span></label>
                                    <input id="city" class="form-control" style="text-transform:uppercase"
                                        placeholder="Enter City" name="city" type="text" value="{{$student->city}}">
                                </div><!-- form group -->
                            </div><!-- col -->
                            <div class="col-md-5 col-lg-4 mg-t-20 mg-md-t-0">
                                <div class="form-group">
                                    <label class="form-control-label">Postcode: <span class="tx-danger">*</span></label>
                                    <input id="" class="form-control" placeholder="ENTER POSTCODE" name="postcode"
                                        value="{{$student->postcode}}" type="text"
                                        onKeyPress="if(this.value.length==5) return false;">
                                </div><!-- form group -->
                            </div>
                            <!--col-->
                            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                <div class="form-group">
                                    <label class="form-control-label">State: <span class="tx-danger">*</span></label>
                                    <select name="state" class="form-control select2">
                                        <option value="NULL">SELECT</option>
                                        @foreach($states as $item)
                                        <option value="{{ $item->state_code }}"
                                            {{ ($item->state_code == $student->state) ? 'selected' : '' }}>
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
                                    <label class="form-control-label">OKU Number: <span class="tx-danger">if
                                            applicable</span></label>
                                    <input id="nooku" class="form-control" placeholder="ENTER OKU NUMBER" name="nooku"
                                        type="text" value="{{$student->nooku}}">
                                </div><!-- form group -->
                            </div><!-- col -->
                            <div class="col-lg-8 mg-t-20 mg-lg-t-0">
                                <div class="form-group">
                                    <label class="form-control-label">OKU Type: <span class="tx-danger">if
                                            applicable</span></label>
                                    <select name="okutype" class="form-control select2">
                                        <option value="NULL">SELECT</option>
                                        @foreach($okutype as $okutype)
                                        <option value="{{ $okutype->oku_code }}"
                                            {{ ($okutype->oku_code == $student->okutype) ? 'selected' : '' }}>
                                            {{ $okutype->oku_name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div><!-- form group -->
                            </div><!-- col-4 -->
                        </div><!-- row -->
                        <!--<input type="submit" name="submit" value="Update" class="btn btn-az-primary btn-block"> -->
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
                        <div style="width:;height: 30px;background-color: #4CAF50;text-align: center;line-height: 30px;color: white;"
                            role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- row -->
</div>

@endsection
