@extends('layouts.desktop')

@section('title','Thêm mới device')

@section('content')
@include('client.blocks.navbar-index')

<div class="container mt-1 mb-2">
<div class="col">
      <div class="content_tkb">
		<div class="text_tkb" style="color:#0077ff"><h4>Device mới</h4></div>
		
<p>
	<a class="btn btn-dark far fa-arrow-alt-circle-left" style="font-size:20px" href="{{ url('device') }}"> Về danh sách</a>
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

<?php //Form thêm mới device?>
<div class="content_tkb">
<div class="text_addsv">
<div class="wrapperLOGIN">
<div>
	<form class= "loginForm" action="{{ url('device/createdevice') }}" method="post">
		<input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
		<div class="form-group">
			<i class="fas fa-phone-square"></i>
			<label for="id">ID cam</label>
			<input type="text" style="font-size:18px" class="form-control" id="id"  name="id"  maxlength="10" required />
		</div>
		<div class="form-group">
			<i class="fas fa-id-card"></i>
			<label for="ma_cam">Mã cam</label>
			<input type="text" style="font-size:18px" class="form-control" id="ma_cam" name="ma_cam" autofocus maxlength="11" required />
		</div>
		<div class="form-group">
			<i class="fas fa-user-graduate"></i>
			<label for="action">Trạng thái</label>
			<input type="text" style="font-size:18px" class="form-control" id="action"  name="action"  maxlength="1" required />
		</div>
        <div class="form-group">
		<i class="fas fa-envelope-square"></i>
			<label for="name_room">Tên phòng</label>
			<input type="text" style="font-size:18px" class="form-control" id="name_room"  name="name_room"  maxlength="100" required />
		</div>
        <div class="form-group">
			<i class="fas fa-phone-square"></i>
			<label for="toanha">Tòa nhà</label>
			<input type="text" style="font-size:18px" class="form-control" id="toanha"  name="toanha"  maxlength="1" required />
		</div>
		
		<button type="submit" class="btn btn-success" style="font-size:20px">Thêm</button>
	</form>


</div>
</div>
</div>
</div>
@endsection

@section('js')
