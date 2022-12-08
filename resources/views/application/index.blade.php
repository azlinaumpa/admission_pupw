@extends('base')
@section('content')
<div class="az-content-header d-block d-md-flex">
    <div>
      <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">List of Application.</h2>
    </div>
    <div class="az-dashboard-header-right">
    </div><!-- az-dashboard-header-right -->
  </div><!-- az-content-header -->
  <div class="az-content-body">
  <div class="row row-sm">
  <div class="col-md-12 col-lg-12 col-xl-12">
    <div class="card card-dashboard-seven">
      <div class="card-body">
      
  <div class="col-sm-2 col-md-2 mg-t-10" ><button type="button" class="btn btn-outline-light btn-block" onclick="location.href='download2.php'">Download Excel</button></div>
  <p class="mg-b-20"></p>
  <div class="col-6 col-md-4 col-xl-11">
      <div>
        <table id="example1" class="table">
          <thead>
            <tr>
              <th class="wd-5p">ID</th>
              <th class="wd-25p">NAME</th>
              <th class="wd-20p">IC</th>
              <th class="wd-20p">EMAIL</th>
              <th class="wd-15p">PHONE</th>
              <th class="wd-20p">STATUS</th>
              <th class="wd-20p">ACTION</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=1; ?>
            @foreach($student as $student)
                        <tr>
                        <td>{{$i++}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->ic}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->phone}}</td>
                        <td>{{$student->app_status}}</td>
                        <td><a href="{{ route('application.edit',$student->user_id)}}" class="btn btn-primary">Edit</a></td>
                        </tr>
            @endforeach
          </tbody>
        </table>

     </div></div>
     </div><!-- card-body -->
    </div><!-- card -->
</div><!-- col --></div>


@endsection
