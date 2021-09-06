@extends('layouts.desktop')

@section('title','Thêm mới học sinh')

@section('content')
@include('client.blocks.navbar-index')

<div class="container mt-1 mb-2">
<div class="col">
      <div class="content_tkb">
		<div class="text_tkb" style="color:#0077ff"><h4>Cập nhật thông tin sinh viên</h4></div>
		
<p>
	<a class="btn btn-dark far fa-arrow-alt-circle-left" style="font-size:20px" href="{{ url('sinhvien') }}"> Về danh sách</a>
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

<?php //Hiển thị form sửa học sinh?>
<div class="content_tkb">
<div class="text_addsv">
<div class="wrapperLOGIN">
<div>
	<form class= "loginForm" action="{{ url('sinhvien/update') }}" method="post">
    <input type="hidden" id="_token" name="_token" value="{!! csrf_token() !!}"/>
	<input type="hidden" id="id" name="id" value="{!! $getsinhvienById[0]->mssv !!}" />
		<div class="form-group">
			<i class="fas fa-id-card"></i>
			<label for="mssv">Mã sinh viên</label>
			<input type="text" style="font-size:18px" class="form-control" id="mssv" name="mssv" autofocus maxlength="10" value="{{ $getsinhvienById[0]->mssv }}" required />
		</div>
		<div class="form-group">
			<i class="fas fa-user-graduate"></i>
			<label for="name">Tên sinh viên</label>
			<input type="text" style="font-size:18px" class="form-control" id="name_sv"  name="name_sv"  maxlength="100" value="{{ $getsinhvienById[0]->name_sv}}" required />
		</div>
        <div class="form-group">
		<i class="fas fa-envelope-square"></i>
			<label for="email">Mail sinh viên</label>
			<input type="text" style="font-size:18px" class="form-control" id="mail"  name="mail"  maxlength="100" value="{{ $getsinhvienById[0]->mail }}" required />
		</div>
        <div class="form-group">
			<i class="fas fa-phone-square"></i>
			<label for="sdt">Điện thoại</label>
			<input type="text" style="font-size:18px" class="form-control" id="sdt"  name="sdt"  maxlength="10" value="{{ $getsinhvienById[0]->sdt}}" required />
		</div>
		<div class="form-group">
			<i class="fas fa-phone-square"></i>
			<label for="name_parents">Phụ huynh</label>
			<input type="text" style="font-size:18px" class="form-control" id="name_parents"  name="name_parents"  maxlength="100" value="{{ $getsinhvienById[0]->name_parents}}" required />
		</div>
		<div class="form-group">
			<i class="fas fa-phone-square"></i>
			<label for="sdt_parents">Điện thoại phụ huynh</label>
			<input type="text" style="font-size:18px" class="form-control" id="sdt_parents"  name="sdt_parents"  maxlength="10" value="{{ $getsinhvienById[0]->sdt_parents}}" required />
		</div>


		<button type="submit" class="btn btn-success" style="font-size:20px">Cập nhật</button>
	</form>
</div>
</div>
</div>
</div>


@endsection