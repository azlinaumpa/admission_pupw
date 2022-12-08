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
            <th class="wd-20p">OFFERED COURSE</th>
            <th class="wd-20p">ACTION</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=1; ?>
          @foreach($student2 as $student)
                      <tr>
                      <td>{{$i++}}</td>
                      <td>{{$student->name}}</td>
                      <td>{{$student->ic}}</td>
                      <td>{{$student->email}}</td>
                      <td>{{$student->phone}}</td>
                      <td>{{$student->app_status}}</td>
                      <td>{{$student->offered_course}}</td>
                      <td><a href="{{ route('application.edit',$student->user_id)}}" class="btn btn-primary">Edit</a></td>
                      </tr>
          @endforeach
        </tbody>
      </table>
      <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldemo1">View Live Demo</a>
        </div>
  
      
   </div></div>
   </div><!-- card-body -->
  </div><!-- card -->
</div><!-- col --></div>
     
           


 @endsection

    <!-- BASIC MODAL -->
    <div id="modaldemo1" class="modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
          <div class="modal-header">
            <h6 class="modal-title">Message Preview</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h6>Why We Use Electoral College, Not Popular Vote</h6>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-indigo">Save changes</button>
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->

   


    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>

    <script src="../js/azia.js"></script>
   

