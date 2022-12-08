@extends('base')
@section('content')
<table class="table table-hover">

   
        
        
            <!-- Card body -->
            <div class="card-body">    
                <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        {{-- <th>Description</th>
                        <th>Estimate Value</th> --}}
                        {{-- <th>Action</th> --}}
                    </tr>
                </thead>
                <tbody><?php $i=1; ?>
                    @foreach($user as $user)
                    <tr>
                        <td class="text-center">{{ $i++ }}</td>
                        <td>{{$user->ic}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            
                            <form method="POST" action="{{route ('regist.destroy',$user->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm float-right">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    
    
  
  </table>
  @endsection