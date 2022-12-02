@extends('base')
@section('content')
<div class="az-content-header d-block d-md-flex">
    <div>
        <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Academic Information</h2>
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
                    <form method="post" action="{{ route('academic.update',$user->id)}}">
                        @method('PUT')
                        @csrf
                        <div class="row row-sm">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">SPM Candidate Number: <span
                                            class="tx-danger">*</span></label>
                                    <input id="" class="form-control" name="spm_number" placeholder="Enter SPM Number"
                                        value="{{$academic->spm_number}}" type="text" style="text-transform:uppercase" >
                                </div><!-- form group -->
                            </div><!-- col -->
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Year of SPM: <span
                                            class="tx-danger">*</span></label>
                                    <input id="" class="form-control" name="spm_year" placeholder="Enter Year of SPM"
                                        value="{{$academic->spm_year}}" type="number" min='1989' max='2099' style="text-transform:uppercase"
                                        >
                                </div><!-- form group -->
                            </div><!-- col -->
                        </div><!-- row -->
                        <div class="row row-sm">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label for="seeAnotherField" class="form-control-label">Stream: <span
                                            class="tx-danger">*</span></label>
                                    <select name="spm_aliran" class="form-control select2 something1" id="aliran" >
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
                                    <select name="exam_type" class="form-control select2 " >
                                        <option selected disabled="" style="font-size:14px;">Select</option>
                                        <option value="TRIAL" {{$academic->exam_type == 'TRIAL'  ? 'selected' : ''}}>TRIAL</option>
                                        <option value="SPM" {{$academic->exam_type == 'SPM'  ? 'selected' : ''}}>SPM</option>
                                    </select>
                                </div><!-- form group -->
                            </div><!-- col -->
                        </div><!-- row -->
                        <div class="row row-sm">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Type of School: <span
                                            class="tx-danger">*</span></label>
                                    <select name="school_type" class="form-control select2" >
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
                                    <label class="form-control-label">School Name: <span
                                            class="tx-danger">*</span></label>
                                    <input id="" class="form-control" name="school_name" placeholder="Enter School Name"
                                        value="{{$academic->school_name}}" type="text" style="text-transform:uppercase" >
                                </div><!-- form group -->
                            </div><!-- col -->
                        </div><!-- row -->
                        <p class="mg-b-30"></p>
                        <p class="mg-b-20">Core Subjects</p>
                        <p class="mg-b-20"></p>
                        <div class="table-responsive">

                            <table class="table table-bordered mg-b-0" id="tableID">
                                <thead>
                                    <tr>
                                        <th class="wd-5p">ID</th>
                                        <th class="wd-30p">Subjects</th>
                                        <th class="wd-40p">Gred</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr class="something1 A">
                                        <td>1</td>
                                        <td width="200">
                                            <input id="" class="form-control" name="sub1A"
                                                placeholder="Enter School Name" value="BAHASA MELAYU" type="text"
                                                style="text-transform:uppercase" readonly></td>
                                        <td>

                                            <select name="gred1_A" class="form-control select2">
                                                <option value="">Select</option>
                                                @foreach($spm_grade as $spm_grade1)
                                                <option value="{{ $spm_grade1->spm_code }}"
                                                    {{$academic->gredspm1 == $spm_grade1->spm_code  ? 'selected' : ''}}>
                                                    {{ $spm_grade1->spm_grade}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr class="something1 A">
                                        <td>2</td>
                                        <td><input id="" class="form-control" name="sub2A"
                                                placeholder="Enter School Name" value="MATEMATIK" type="text"
                                                style="text-transform:uppercase" readonly></td>
                                        <td>
                                            <select name="gred2_A" class="form-control select2">
                                                <option value=" ">Select</option>
                                                @foreach($spm_grade as $spm_grade1)
                                                <option value="{{ $spm_grade1->spm_code }}"
                                                    {{$academic->gredspm2 == $spm_grade1->spm_code  ? 'selected' : ''}}>
                                                    {{ $spm_grade1->spm_grade}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr class="something1 A">
                                        <td>3</td>
                                        <td><input id="" class="form-control" name="sub3A"
                                                placeholder="Enter School Name" value="SAINS" type="text"
                                                style="text-transform:uppercase" readonly></td>
                                        <td>
                                            <select name="gred3_A" class="form-control select2">
                                                <option value=" ">Select</option>
                                                @foreach($spm_grade as $spm_grade1)
                                                <option value="{{ $spm_grade1->spm_code,$spm_grade1->value_grade }}"
                                                    {{$academic->gredspm3 == $spm_grade1->spm_code  ? 'selected' : ''}}>
                                                    {{ $spm_grade1->spm_grade}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr class="something1 A">
                                        <td>4</td>
                                        <td><input id="" class="form-control" name="sub4A"
                                                placeholder="Enter School Name" value="SEJARAH" type="text"
                                                style="text-transform:uppercase" readonly></td>
                                        <td>
                                            <select name="gred4_A" class="form-control select2">
                                                <option value=" ">Select</option>
                                                @foreach($spm_grade as $spm_grade1)
                                                <option value="{{ $spm_grade1->spm_code,$spm_grade1->value_grade }}"
                                                    {{$academic->gredspm4 == $spm_grade1->spm_code  ? 'selected' : ''}}>
                                                    {{ $spm_grade1->spm_grade}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>

                                    <tr class="something1 B">
                                        <td>1</td>
                                        <td><input id="" class="form-control" name="sub1B"
                                                placeholder="Enter School Name" value="MATEMATIK" type="text"
                                                style="text-transform:uppercase" readonly></td>
                                        <td>
                                            <select name="gred1_B" class="form-control select2">
                                                <option value=" ">Select</option>
                                                @foreach($spm_grade as $spm_grade1)
                                                <option value="{{ $spm_grade1->spm_code,$spm_grade1->value_grade }}"
                                                    {{$academic->gredspm1 == $spm_grade1->spm_code  ? 'selected' : ''}}>
                                                    {{ $spm_grade1->spm_grade}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr class="something1 B">
                                        <td>2</td>
                                        <td><input id="" class="form-control" name="sub2B"
                                                placeholder="Enter School Name" value="MATEMATIK TAMBAHAN" type="text"
                                                style="text-transform:uppercase" readonly></td>
                                        <td>
                                            <select name="gred2_B" class="form-control select2">
                                                <option value=" ">Select</option>
                                                @foreach($spm_grade as $spm_grade1)
                                                <option value="{{ $spm_grade1->spm_code,$spm_grade1->value_grade }}"
                                                    {{$academic->gredspm2 == $spm_grade1->spm_code  ? 'selected' : ''}}>
                                                    {{ $spm_grade1->spm_grade}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr class="something1 B">
                                        <td>3</td>
                                        <td><input id="" class="form-control" name="sub3B"
                                                placeholder="Enter School Name" value="FIZIK" type="text"
                                                style="text-transform:uppercase" readonly></td>
                                        <td>
                                            <select name="gred3_B" class="form-control select2">
                                                <option value=" ">Select</option>
                                                @foreach($spm_grade as $spm_grade1)
                                                <option value="{{ $spm_grade1->spm_code,$spm_grade1->value_grade }}"
                                                    {{$academic->gredspm3 == $spm_grade1->spm_code  ? 'selected' : ''}}>
                                                    {{ $spm_grade1->spm_grade}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr class="something1 B">
                                        <td>4</td>
                                        <td><input id="" class="form-control" name="sub4B"
                                                placeholder="Enter School Name" value="KIMIA" type="text"
                                                style="text-transform:uppercase" readonly></td>
                                        <td>
                                            <select name="gred4_B" class="form-control select2">
                                                <option value=" ">Select</option>
                                                @foreach($spm_grade as $spm_grade1)
                                                <option value="{{ $spm_grade1->spm_code,$spm_grade1->value_grade }}"
                                                    {{$academic->gredspm4 == $spm_grade1->spm_code  ? 'selected' : ''}}>
                                                    {{ $spm_grade1->spm_grade}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>

                                    <tr class="something1 A">
                                        <td>5</td>
                                        <td><select name="sub5A" class="form-control select2">
                                                <option value=" ">Select</option>
                                                @foreach($subA as $subA)
                                                <option value="{{ $subA->subject_code_no }}"
                                                    {{$academic->kodspm5 == $subA->subject_code_no  ? 'selected' : ''}}>
                                                    {{ $subA->subject_name}}</option>
                                                @endforeach
                                            </select><span class="tx-danger">*select subject with highest gred</span>
                                        </td>
                                        <td><select name="gred5_A" class="form-control select2">
                                                <option value=" ">Select</option>
                                                @foreach($spm_grade as $spm_grade1)
                                                <option value="{{ $spm_grade1->spm_code,$spm_grade1->value_grade }}"
                                                    {{$academic->gredspm5 == $spm_grade1->spm_code  ? 'selected' : ''}}>
                                                    {{ $spm_grade1->spm_grade}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr class="something1 B">
                                        <td>5</td>
                                        <td><select name="sub5B" class="form-control select2">
                                                <option value=" ">Select</option>
                                                @foreach($subB as $subB)
                                                <option value="{{ $subB->subject_code_no }}"
                                                    {{$academic->kodspm5 == $subB->subject_code_no  ? 'selected' : ''}}>
                                                    {{ $subB->subject_name}}</option>
                                                @endforeach
                                            </select><span class="tx-danger">*select subject with highest gred</span>
                                        </td>
                                        <td><select name="gred5_B" class="form-control select2">
                                                <option value=" ">Select</option>
                                                @foreach($spm_grade as $spm_grade1)
                                                <option value="{{ $spm_grade1->spm_code,$spm_grade1->value_grade }}"
                                                    {{$academic->gredspm5 == $spm_grade1->spm_code  ? 'selected' : ''}}>
                                                    {{ $spm_grade1->spm_grade}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr class="something1 B">
                                        <td>6</td>
                                        <td><input id="" class="form-control" name="sub6B"
                                                placeholder="Enter School Name" value="BAHASA MELAYU" type="text"
                                                style="text-transform:uppercase" readonly></td>
                                        </td>
                                        <td><select name="gred6_B" class="form-control select2">
                                                <option value=" ">Select</option>
                                                @foreach($spm_grade as $spm_grade1)
                                                <option value="{{ $spm_grade1->spm_code,$spm_grade1->value_grade }}"
                                                    {{$academic->gredspm6 == $spm_grade1->spm_code  ? 'selected' : ''}}>
                                                    {{ $spm_grade1->spm_grade}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr class="something1 B">
                                        <td>7</td>
                                        <td><input id="" class="form-control" name="sub7B"
                                                placeholder="Enter School Name" value="SEJARAH" type="text"
                                                style="text-transform:uppercase" readonly></td>
                                        </td>
                                        <td><select name="gred7_B" class="form-control select2">
                                                <option value=" ">Select</option>
                                                @foreach($spm_grade as $spm_grade1)
                                                <option value="{{ $spm_grade1->spm_code,$spm_grade1->value_grade }}"
                                                    {{$academic->gredspm7 == $spm_grade1->spm_code  ? 'selected' : ''}}>
                                                    {{ $spm_grade1->spm_grade}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr class="something1 A">
                                        <td>6</td>
                                        <td><select name="sub6A" class="form-control select2">
                                                <option value=" ">Select</option>
                                                @foreach($spm_subject as $spm_subject1)
                                                <option value="{{ $spm_subject1->subject_code_no }}"
                                                    {{$academic->kodspm6 == $spm_subject1->subject_code_no  ? 'selected' : ''}}>
                                                    {{ $spm_subject1->subject_name}}</option>
                                                @endforeach
                                            </select></td>
                                        <td><select name="gred6_A" class="form-control select2">
                                                <option value=" ">Select</option>
                                                @foreach($spm_grade as $spm_grade1)
                                                <option value="{{ $spm_grade1->spm_code,$spm_grade1->value_grade }}"
                                                    {{$academic->gredspm6== $spm_grade1->spm_code  ? 'selected' : ''}}>
                                                    {{ $spm_grade1->spm_grade}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr class="something1 A">
                                        <td>7</td>
                                        <td><select name="sub7A" class="form-control select2">
                                                <option value=" ">Select</option>
                                                @foreach($spm_subject as $spm_subject1)
                                                <option value="{{ $spm_subject1->subject_code_no }}"
                                                    {{$academic->kodspm7 == $spm_subject1->subject_code_no  ? 'selected' : ''}}>
                                                    {{ $spm_subject1->subject_name}}</option>
                                                @endforeach
                                            </select></td>
                                        <td><select name="gred7_A" class="form-control select2">
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
                                        <td> <select name="sub8" class="form-control select2">
                                                <option value=" ">Select</option>
                                                @foreach($spm_subject as $spm_subject1)
                                                <option value="{{ $spm_subject1->subject_code_no }}"
                                                    {{$academic->kodspm8 == $spm_subject1->subject_code_no  ? 'selected' : ''}}>
                                                    {{ $spm_subject1->subject_name}}</option>
                                                @endforeach
                                            </select></td>
                                        <td><select name="gred8" class="form-control select2">
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
                                        <td> <select name="sub9" class="form-control select2">
                                                <option value=" ">Select</option>
                                                @foreach($spm_subject as $spm_subject1)
                                                <option value="{{ $spm_subject1->subject_code_no }}"
                                                    {{$academic->kodspm9 == $spm_subject1->subject_code_no  ? 'selected' : ''}}>
                                                    {{ $spm_subject1->subject_name}}</option>
                                                @endforeach
                                            </select></td>
                                        <td><select name="gred9" class="form-control select2">
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
                                        <td> <select name="sub10" class="form-control select2">
                                                <option value=" ">Select</option>
                                                @foreach($spm_subject as $spm_subject1)
                                                <option value="{{ $spm_subject1->subject_code_no }}"
                                                    {{$academic->kodspm10 == $spm_subject1->subject_code_no  ? 'selected' : ''}}>
                                                    {{ $spm_subject1->subject_name}}</option>
                                                @endforeach
                                            </select></td>
                                        <td><select name="gred10" class="form-control select2">
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
                                        <td> <select name="sub11" class="form-control select2">
                                                <option value=" ">Select</option>
                                                @foreach($spm_subject as $spm_subject1)
                                                <option value="{{ $spm_subject1->subject_code_no }}"
                                                    {{$academic->kodspm11 == $spm_subject1->subject_code_no  ? 'selected' : ''}}>
                                                    {{ $spm_subject1->subject_name}}</option>
                                                @endforeach
                                            </select></td>
                                        <td><select name="gred11" class="form-control select2">
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
                                        <td> <select name="sub12" class="form-control select2">
                                                <option value=" ">Select</option>
                                                @foreach($spm_subject as $spm_subject1)
                                                <option value="{{ $spm_subject1->subject_code_no }}"
                                                    {{$academic->kodspm12 == $spm_subject1->subject_code_no  ? 'selected' : ''}}>
                                                    {{ $spm_subject1->subject_name}}</option>
                                                @endforeach
                                            </select></td>
                                        <td><select name="gred12" class="form-control select2">
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
                                        <td> <select name="sub13" class="form-control select2">
                                                <option value=" ">Select</option>
                                                @foreach($spm_subject as $spm_subject1)
                                                <option value="{{ $spm_subject1->subject_code_no }}"
                                                    {{$academic->kodspm13 == $spm_subject1->subject_code_no  ? 'selected' : ''}}>
                                                    {{ $spm_subject1->subject_name}}</option>
                                                @endforeach
                                            </select></td>
                                        <td><select name="gred13" class="form-control select2">
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
                                        <td> <select name="sub14" class="form-control select2">
                                                <option value=" ">Select</option>
                                                @foreach($spm_subject as $spm_subject1)
                                                <option value="{{ $spm_subject1->subject_code_no }}"
                                                    {{$academic->kodspm14 == $spm_subject1->subject_code_no  ? 'selected' : ''}}>
                                                    {{ $spm_subject1->subject_name}}</option>
                                                @endforeach
                                            </select></td>
                                        <td><select name="gred14" class="form-control select2">
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
                                        <td> <select name="sub15" class="form-control select2">
                                                <option value=" ">Select</option>
                                                @foreach($spm_subject as $spm_subject1)
                                                <option value="{{ $spm_subject1->subject_code_no }}"
                                                    {{$academic->kodspm15 == $spm_subject1->subject_code_no  ? 'selected' : ''}}>
                                                    {{ $spm_subject1->subject_name}}</option>
                                                @endforeach
                                            </select></td>
                                        <td><select name="gred15" class="form-control select2">
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
