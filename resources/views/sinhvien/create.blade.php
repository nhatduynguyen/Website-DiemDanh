@extends('layouts.desktop')

@section('title','Thêm mới học sinh')

@section('content')
@include('client.blocks.navbar-index')

<div class="container mt-1 mb-2">
	<div class="col">
		<div class="content_tkb">
			<div class="text_tkb" style="color:#0077ff">
				<h4>Sinh viên mới</h4>
			</div>

			<p>
				<a class="btn btn-dark far fa-arrow-alt-circle-left" style="font-size:20px" href="{{ url('sinhvien') }}"> Về danh sách</a>
			</p>
			<?php //Hiển thị thông báo thành công
			?>
			@if ( Session::has('success') )
			<div class="alert alert-success alert-dismissible" role="alert">
				<strong>{{ Session::get('success') }}</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
			</div>
			@endif

			<?php //Hiển thị thông báo lỗi
			?>
			@if ( Session::has('error') )
			<div class="alert alert-danger alert-dismissible" role="alert">
				<strong>{{ Session::get('error') }}</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
			</div>
			@endif

			<?php //Form thêm mới sinhvien
			?>
			<div class="content_tkb">
				<div class="text_addsv">
					<div class="wrapperLOGIN">
						<div>
							<form class="loginForm" action="{{ url('sinhvien/create') }}" method="post">
								<input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}" />
								<div class="form-group">
									<i class="fas fa-id-card"></i>
									<label for="mssv">Mã sinh viên</label>
									<input type="text" style="font-size:18px" class="form-control" id="mssv" name="mssv" autofocus maxlength="10" required />
								</div>
								<div class="form-group">
									<i class="fas fa-user-graduate"></i>
									<label for="name">Tên sinh viên</label>
									<input type="text" style="font-size:18px" class="form-control" id="name_sv" name="name_sv" maxlength="100" required />
								</div>
								<div class="form-group">
									<i class="fas fa-envelope-square"></i>
									<label for="email">Mail sinh viên</label>
									<input type="text" style="font-size:18px" class="form-control" id="mail" name="mail" maxlength="100" required />
								</div>
								<div class="form-group">
									<i class="fas fa-phone-square"></i>
									<label for="sdt">Điện thoại (+84)</label>
									<input type="text" style="font-size:18px" class="form-control" id="sdt" name="sdt" maxlength="9" required />
								</div>
								<div class="form-group">
									<i class="fas fa-phone-square"></i>
									<label for="name_parents">Phụ huynh</label>
									<input type="text" style="font-size:18px" class="form-control" id="name_parents" name="name_parents" maxlength="100" required />
								</div>
								<div class="form-group">
									<i class="fas fa-phone-square"></i>
									<label for="sdt_parents">Điện thoại phụ huynh (+84)</label>
									<input type="text" style="font-size:18px" class="form-control" id="sdt_parents" name="sdt_parents" maxlength="9" required />
								</div>
								<!-- <div class="form-group">
									<i class="fas fa-envelope-square"></i>
									<label for="email">link_file_dat</label>
									<input type="text" style="font-size:18px" class="form-control" id="link_file_dat" name="link_file_dat" maxlength="10" required />
								</div> -->
								<button type="submit" class="btn btn-success" style="font-size:20px">Thêm</button>
							</form>


						</div>
					</div>
				</div>
			</div>
			@endsection

			@section('js')