@extends('base')
@section('content')


    <div class="az-content-header d-block d-md-flex">
      <div>
        <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Upload Document</h2>
      </div>
      <div class="az-dashboard-header-right">
      </div><!-- az-dashboard-header-right -->
    </div><!-- az-content-header -->
    <div class="az-content-body">
    <div class="row row-sm">
    <div class="col-md-12 col-lg-12 col-xl-9">
      <div class="card card-dashboard-seven">
        <div class="card-body">
         
          <center>
            <form id="" method="POST" action="{{url('/document')}}" enctype="multipart/form-data">
              @csrf
          <label>Filename:</label>
          <div class="col-lg-6 mg-t-20 mg-lg-t-0">
          <div class="form-group">
          <select name="filename" class="form-control">
          <option value=" " selected disabled="" style="font-size:14px;">Please select</option>
          @foreach($document_type as $doc)
          <option value="{{ $doc->document_code }}">
            {{ $doc->document_name}}</option>
          @endforeach
          
          </select>
          </div><!-- form group -->
          </div><!-- col-4 -->
          <div style="margin-left: 9%">
          <label>File:</label>
          <input type="file" name="file"> <br/>
          </div>
          <div class="col-sm-4 col-md-2"><button class="btn btn-primary btn-rounded btn-block" type="submit" name="">Upload</button></div>
          
          </form>
          </center>
          
          <br>
          <div class="container">
          <table id="demo" class="table table-bordered">
          <thead>
          <tr>
          <td>Id</td>
          <td>FileName</td>
          <td>Download</td>
          <td>Delete</td>
          </tr>
          </thead>
          <tbody>
            <?php $i=1; ?>
            @foreach($document as $document)
            <tr>
                <td class="text-center">{{ $i++ }}</td>
                <td>{{$document->file_name}}</td>
                <td><a href="/storage/{{$document->location}}"> {{$document->location}}</a></td>
                <td>
                    
                    <form method="POST" action="/regist/{{$user->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm float-right">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
    
          </tbody>
          </table>
          </div>

          </body>
       </div><!-- card-body -->
      </div><!-- card -->
  </div><!-- col -->
  <div class="col-md-3 col-xl-3 mg-t-3 mg-md-t-3">
      <div class="card card-dashboard-seven">
          <div class="card-body">
          <p>Checklist</p>
       <?php
        //   $res = mysqli_query($dbconfig,"SELECT * FROM document WHERE file_code = 'D009' && stud_ic='$ic'") or die();
        //   $row = mysqli_fetch_row($res);
        //   $len = isset($row[0]) ? $row[0] : 0;
        //   if ($len > 0)
        //   {
        //   echo '<label class="ckbox">
        //   <input type="checkbox" checked ><span>Gambar Profil*</span>
        //   </label>';
        //   }
        //   else
        //   {
        //   echo '<label class="ckbox">
        //   <input type="checkbox"><span>Gambar Profil*</span>
        //   </label>';
        //   }
          ?>
          </br>

          <?php
        //   $res = mysqli_query($dbconfig,"SELECT * FROM document WHERE file_code = 'D001' && stud_ic='$ic'") or die();
        //   $row = mysqli_fetch_row($res);
        //   $len = isset($row[0]) ? $row[0] : 0;
        //   if ($len > 0)
        //   {
        //   echo '<label class="ckbox">
        //   <input type="checkbox" checked ><span>Kad Pengenalan*</span>
        //   </label>';
        //   }
        //   else
        //   {
        //   echo '<label class="ckbox">
        //   <input type="checkbox"><span>Kad Pengenalan*</span>
        //   </label>';
        //   }
          ?>
          </br>
          <?php
        //   $res = mysqli_query($dbconfig,"SELECT * FROM document WHERE file_code = 'D002' && stud_ic='$ic'") or die();
        //   $row = mysqli_fetch_row($res);
        //   $len = isset($row[0]) ? $row[0] : 0;
        //   if ($len > 0)
        //   {
        //   echo '<label class="ckbox">
        //   <input type="checkbox" checked><span>Sijil Kelahiran*</span>
        //   </label>';
        //   }
        //   else
        //   {
        //   echo '<label class="ckbox">
        //   <input type="checkbox"><span>Sijil Kelahiran*</span>
        //   </label>';
        //   }
        //   ?>
        //   </br>
        //   <?php
        //   $res = mysqli_query($dbconfig,"SELECT * FROM document WHERE file_code = 'D003' && stud_ic='$ic'") or die();
        //   $row = mysqli_fetch_row($res);
        //   $len = isset($row[0]) ? $row[0] : 0;
        //   if ($len > 0)
        //   {
        //   echo '<label class="ckbox">
        //   <input type="checkbox" checked><span>SPM/SPMV/SVM atau setaraf*</span>
        //   </label>';
        //   }
        //   else
        //   {
        //   echo '<label class="ckbox">
        //   <input type="checkbox"><span>SPM/SPMV/SVM*</span>
        //   </label>';
        //   }
          ?>
          </br>
          <?php
        //   $res = mysqli_query($dbconfig,"SELECT * FROM document WHERE file_code = 'D004' && stud_ic='$ic'") or die();
        //   $row = mysqli_fetch_row($res);
        //   $len = isset($row[0]) ? $row[0] : 0;
        //   if ($len > 0)
        //   {
        //   echo '<label class="ckbox">
        //   <input type="checkbox" checked><span>Sijil Berhenti Sekolah*</span>
        //   </label>';
        //   }
        //   else
        //   {
        //   echo '<label class="ckbox">
        //   <input type="checkbox"><span>Sijil Berhenti Sekolah*</span>
        //   </label>';
        //   }
          ?>
          </br>
          <?php
        //   $res = mysqli_query($dbconfig,"SELECT * FROM document WHERE file_code = 'D005' && stud_ic='$ic'") or die();
        //   $row = mysqli_fetch_row($res);
        //   $len = isset($row[0]) ? $row[0] : 0;
        //   if ($len > 0)
        //   {
        //   echo '<label class="ckbox">
        //   <input type="checkbox" checked><span>Matrikulasi/STPM/STAM/DVM/Dip</span>
        //   </label>';
        //   }
        //   else
        //   {
        //   echo '<label class="ckbox">
        //   <input type="checkbox"><span>Matrikulasi/STPM/STAM/DVM/Dip</span>
        //   </label>';
        //   }
          ?>
          </br>
          <?php
        //   $res = mysqli_query($dbconfig,"SELECT * FROM document WHERE file_code = 'D006' && stud_ic='$ic'") or die();
        //   $row = mysqli_fetch_row($res);
        //   $len = isset($row[0]) ? $row[0] : 0;
        //   if ($len > 0)
        //   {
        //   echo '<label class="ckbox">
        //   <input type="checkbox" checked><span>Sejarah Julai/Kod 1251</span>
        //   </label>';
        //   }
        //   else
        //   {
        //   echo '<label class="ckbox">
        //   <input type="checkbox"><span>Sejarah Julai/Kod 1251</span>
        //   </label>';
        //   }
          ?>
          </br>
          <?php
        //   $res = mysqli_query($dbconfig,"SELECT * FROM document WHERE file_code = 'D007' && stud_ic='$ic'") or die();
        //   $row = mysqli_fetch_row($res);
        //   $len = isset($row[0]) ? $row[0] : 0;
        //   if ($len > 0)
        //   {
        //   echo '<label class="ckbox">
        //   <input type="checkbox" checked><span>Bahasa Melayu Julai/ Kod 1104</span>
        //   </label>';
        //   }
        //   else
        //   {
        //   echo '<label class="ckbox">
        //   <input type="checkbox"><span>Bahasa Melayu Julai/ Kod 1104</span>
        //   </label>';
        //   }
          ?>
          </br>
          <?php
        //   $res = mysqli_query($dbconfig,"SELECT * FROM document WHERE file_code = 'D008' && stud_ic='$ic'") or die();
        //   $row = mysqli_fetch_row($res);
        //   $len = isset($row[0]) ? $row[0] : 0;
        //   if ($len > 0)
        //   {
        //   echo '<label class="ckbox">
        //   <input type="checkbox" checked><span>MUET</span>
        //   </label>';
        //   }
        //   else
        //   {
        //   echo '<label class="ckbox">
        //   <input type="checkbox"><span>MUET</span>
        //   </label>';
        //   }
          ?>
          </br></div>
          </div><!-- col-3 -->
        </div>
      </div>
  </div>

@endsection