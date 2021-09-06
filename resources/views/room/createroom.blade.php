@extends('layouts.desktop')

@section('title','Thêm mới phòng room')

@section('content')
@include('client.blocks.navbar-index')

<div class="container mt-1 mb-2">
<div class="col">
      <div class="content_tkb">
		<div class="text_tkb" style="color:#0077ff"><h4>Phòng room mới</h4></div>
		
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

<?php //Form thêm mới phòng room?>
<div class="content_tkb">
<div class="text_addsv">
<div class="wrapperLOGIN">
<div>
	<form class= "loginForm" action="{{ url('room/createroom') }}" method="post">
		<input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
		<div class="form-group">
			<i class="fas fa-id-card"></i>
			<label for="id_room">STT</label>
			<input type="text" style="font-size:18px" class="form-control" id="id_room" name="id_room" autofocus maxlength="10" required />
		</div>
		<div class="form-group">
			<i class="fas fa-id-card"></i>
			<label for="toa_nha">Tòa nhà</label>
			<input type="text" style="font-size:18px" class="form-control" id="toa_nha" name="toa_nha" autofocus maxlength="1" required />
		</div>
		<div class="form-group">
			<i class="fas fa-user-graduate"></i>
			<label for="ten_room">Tên phòng</label>
			<input type="text" style="font-size:18px" class="form-control" id="ten_room"  name="ten_room"  maxlength="100" required />
		</div>
        <div class="form-group">
		<i class="fas fa-envelope-square"></i>
			<label for="id_cam">Mã cam</label>
			<input type="text" style="font-size:18px" class="form-control" id="id_cam"  name="id_cam"  maxlength="10" required />
		</div>
		<button type="submit" class="btn btn-success" style="font-size:20px">Thêm</button>
	</form>
</div>
</div>
</div>
</div>
<Form open(array(url = "null" file = "true" method = "post" id = "imageImage" name = "saveImage")>
            <label for="imgInp" class="clone">
                <Html::image('../resources/assets/img/images.png' upload= "photo" array(class = "image_rounded imgId" id = "imgId" width = "400px" height = "280px"))>
            </label>
           	<Form::hidden('pathPhoto', null, array(class = "pathPhoto", id = "pathPhoto"))>
            <Form::file('image_path', array(style= "display:none", id = "imgInp", accept = "image/x-png, image/jpeg"))>
            <Form::hidden('_token', csrf_token())>
            <br>
            <Form::submit('save')>
</Form>
@endsection

@section('js')
