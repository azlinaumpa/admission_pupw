@extends('base')
@section('content')

<div class="az-content-header d-block d-md-flex">
    <div>
      <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Application Information</h2>
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
        <form method="post" action="{{route('programme.update',$user->id)}}">
            @method('PUT')
            @csrf
  <div class="row row-sm">
    <div class="col-md-12 col-lg-12 col-xl-6">
      <div class="form-group">
      <label for="">First Choice:</label>
      <select class="form-control" id="" name="first_choice" >
      <option value="" selected disabled="" style="font-size:14px;">Please select</option>
      @foreach($programme as $programme1)
      <option value="{{ $programme1->pg_code }}"
          {{$programme_app->first_choice == $programme1->pg_code  ? 'selected' : ''}}>
          {{ $programme1->pg_name}}</option>
      @endforeach
      </select>
      </div>
    </div> 
    <div class="col-md-12 col-lg-12 col-xl-6">
    
  </div>
  </div><!-- row -->
  <div class="row row-sm">
    <div class="col-md-12 col-lg-12 col-xl-6">
      <div class="form-group">
      <label for="">Second Choice:</label>
      <select class="form-control" id="" name="second_choice" >
      <option value="" selected disabled="" style="font-size:14px;">Please select</option>
      @foreach($programme as $programme2)
      <option value="{{ $programme2->pg_code }}"
          {{$programme_app->second_choice == $programme2->pg_code  ? 'selected' : ''}}>
          {{ $programme2->pg_name}}</option>
      @endforeach      
                          
      </select>
      </div>
    </div>
    <div class="col-md-12 col-lg-12 col-xl-6">
    
  </div>
  </div><!-- row -->
  <div class="row row-sm">
    <div class="col-md-12 col-lg-12 col-xl-6">
      <div class="form-group">
      <label for="">Third Choice:</label>
      <select class="form-control" id="" name="third_choice" >
      <option value="" selected disabled="" style="font-size:14px;">Please select</option>
      @foreach($programme as $programme3)
      <option value="{{ $programme3->pg_code }}"
          {{$programme_app->third_choice == $programme3->pg_code  ? 'selected' : ''}}>
          {{ $programme3->pg_name}}</option>
      @endforeach        
                             
      </select>
      </div>
    </div>
    <div class="col-md-12 col-lg-12 col-xl-6">
      
  </div>
  </div><!-- row -->
  <input type="submit" name="submit" value="Update" class="btn btn-az-primary btn-block">   
  </form>  
  
  

        </div><!-- card-body -->
    </div><!-- card -->
</div><!-- col -->
<div class="col-md-2 col-xl-2 mg-t-2 mg-md-t-2">
        <div class="card card-dashboard-seven">
          <div class="card-body">
         
            <p>Complete</p>
          
            <div class="progress mg-b-20">
        <div style="width: ;height: 30px;background-color: #4CAF50;text-align: center;line-height: 30px;color: white;" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
</div>
</div>
</div>
</div>
@endsection