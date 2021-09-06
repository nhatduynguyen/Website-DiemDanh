@extends('layouts.desktop')

@section('title','Thêm mới phòng học')

@section('content')
@include('client.blocks.navbar-index')

<div class="container mt-1 mb-2">
<div class="col">
      <div class="content_tkb">
		<div class="text_tkb" style="color:#0077ff"><h4>Cập nhật thông tin phòng học</h4></div>
		
<p>
	<a class="btn btn-dark far fa-arrow-alt-circle-left" style="font-size:20px" href="{{ url('room') }}"> Về danh sách</a>
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
	<form class= "loginForm" action="{{ url('room/update') }}" method="post">
    <input type="hidden" id="_token" name="_token" value="{!! csrf_token() !!}"/>
	<input type="hidden" id="id" name="id" value="{!! $getphonghocById[0]->id_room !!}" />
		<div class="form-group">
			<i class="fas fa-id-card"></i>
			<label for="id_room">STT</label>
			<input type="text" style="font-size:18px" class="form-control" id="id_room" name="id_room" autofocus maxlength="10" value="{{ $getphonghocById[0]->id_room }}" required />
		</div>
		<div class="form-group">
			<i class="fas fa-user-graduate"></i>
			<label for="ten_room">Tên phòng</label>
			<input type="text" style="font-size:18px" class="form-control" id="ten_room"  name="ten_room"  maxlength="100" value="{{ $getphonghocById[0]->ten_room}}" required />
		</div>
        <div class="form-group">
		<i class="fas fa-envelope-square"></i>
			<label for="toa_nha">Tòa nhà</label>
			<input type="text" style="font-size:18px" class="form-control" id="toa_nha"  name="toa_nha"  maxlength="100" value="{{ $getphonghocById[0]->toa_nha }}" required />
		</div>
        <div class="form-group">
			<i class="fas fa-phone-square"></i>
			<label for="id_cam">Mã cam</label>
			<input type="text" style="font-size:18px" class="form-control" id="id_cam"  name="id_cam"  maxlength="10" value="{{ $getphonghocById[0]->id_cam}}" required />
		</div>

		<button type="submit" class="btn btn-success" style="font-size:20px">Cập nhật</button>
	</form>
</div>
</div>
</div>
</div>


@endsection