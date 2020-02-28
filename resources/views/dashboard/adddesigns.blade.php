@extends('dashboard.dashboard')
@section('content')
<form method="POST" action="{{route('submit.design')}}" enctype="multipart/form-data">
	@csrf
	@if(Session::has('success'))
	<div class="alert alert-success" role="alert">
	  {{Session::get('success')}}
	</div>
	@endif	
  <div class="form-group" style="margin-top:40px;">
    <h5>Upload Your Design</h5>
    <small style="color:red;">{{$errors->first('designs')}}</small>
    <input type="file" class="form-control" name="designs" >
  </div>
  <button type="submit" class="btn btn-primary">Upload</button>
</form>
@endsection