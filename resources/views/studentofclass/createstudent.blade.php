@extends('layouts.desktop')

@section('title','Thêm mới sinh viên vào lớp')

@section('content')
@include('client.blocks.navbar-index')

<div class="container mt-1 mb-2">
<div class="col">
      <div class="content_tkb">
		<div class="text_tkb" style="color:#0077ff"><h4>Sinh viên mới</h4></div>
		
<p>
	<a class="btn btn-dark far fa-arrow-alt-circle-left" style="font-size:20px" href="javascript:history.back()"> Về danh sách</a>
</p>
<?php //Hiển thị thông báo thành công?>
@if ( Session::has('success') )
	<div class="alert alert-success alert-dismissible" role="alert">
		<strong>{{ Session::get('success') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif

<?php //Hiển thị thông báo lỗi?>
@if ( Session::has('error') )
	<div class="alert alert-danger alert-dismissible" role="alert">
		<strong>{{ Session::get('error') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif

<?php //Form thêm mới sinh viên vào lớp?>
<div class="content_tkb">
<div class="text_addsv">
<div class="wrapperLOGIN">
<div>
	<form class= "loginForm" action="{{ url('lop/{id}/show/createstudent') }}" method="post">
		<input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
        
        <div class="form-group">
			<i class="fas fa-id-card"></i>
			<label for="mssv_student">MSSV</label>
			<input type="text" style="font-size:18px" class="form-control" id="mssv_student" name="mssv_student" autofocus maxlength="8" required />
		</div>
        <div class="form-group">
			<i class="fas fa-id-card"></i>
			<label for="id_class">Mã lớp</label>
			<input type="text" style="font-size:18px" class="form-control" id="id_class" name="id_class" autofocus maxlength="10" required />
		</div>
		<button type="submit" class="btn btn-success" style="font-size:20px">Thêm</button>
	</form>


</div>
</div>
</div>
</div>
@endsection

@section('js')
