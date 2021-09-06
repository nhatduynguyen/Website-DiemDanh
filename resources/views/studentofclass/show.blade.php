@extends('layouts.desktop')

@section('title','Danh sách học sinh')

@section('content')
@include('client.blocks.navbar-index')

<div class="container mt-1 mb-2">
	<div class="col">
		<div class="content_tkb">
			<div class="text_tkb">
				<h4 class="text_tkb" style="color:#0077ff">Thông tin lớp học</h4>
				<h4 class="text_tkb" style="color:#0077ff">{{$id_class}}</h4>
			</div>

			<p>
				<a class="btn btn-dark far fa-arrow-alt-circle-left" style="font-size:20px" href="{{ url('class') }}"> Về danh sách</a>
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
			@if (Auth::user()->level==0)
			<?php //Hiển thị form sửa học sinh
			?>
			<div class="content_tkb">
				<div class="text_addsv">
					<div class="wrapperLOGIN">
						<div>

						</div>

						<div class="col">
							<div class="content_tkb">
								<div class="text_tkb " style="color:#0077ff">
									<h1> Danh sách sinh viên</h1>
								</div>
								<p><a class="btn btn-success fas fa-user-plus" style="font-size:18px" href="show/createstudent"> Thêm mới sinh viên vào lớp</a></p>
								<table id="example" class="table table-responsive-sm table-striped table-bordered " style="margin-top:20px">
									<thead class="thead-dark">
										<tr>
											<th>STT</th>
											<th>MSSV</th>
											<th>Tên học sinh</th>
											<th>EMAIL</th>
											<th>SDT (+84)</th>
										</tr>
									</thead>
									<tbody>

										@foreach($getsinhvienByStudentofclassId as $key => $student)
										<tr>

											<td>{{ $key+1 }}</td>

											<td>{{ $student->mssv}}</td>

											<td>{{$student->name_sv}}</td>

											<td>{{ $student->mail}}</td>

											<td>{{ $student->sdt}}</td>

										</tr>

										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endif
			@if (Auth::user()->level==1)
			<?php //Hiển thị form sửa học sinh
			?>
			<div class="content_tkb">
				<div class="text_addsv">
					<div class="wrapperLOGIN">
						<div>

						</div>

						<div class="col">
							<div class="content_tkb">
								<div class="text_tkb " style="color:#0077ff">
									<h1> Danh sách sinh viên</h1>
								</div>
								<!-- <p><a class="btn btn-success fas fa-user-plus" style="font-size:18px" href="show/createstudent"> Thêm mới sinh viên vào lớp</a></p> -->
								<table id="example" class="table table-responsive-sm table-striped table-bordered " style="margin-top:20px">
									<thead class="thead-dark">
										<tr>
											<th>STT</th>
											<th>MSSV</th>
											<th>Tên học sinh</th>
											<th>EMAIL</th>
											<th>SDT (+84)</th>
										</tr>
									</thead>
									<tbody>

										@foreach($getsinhvienByStudentofclassId as $key => $student)
										<tr>

											<td>{{ $key+1 }}</td>

											<td>{{ $student->mssv}}</td>

											<td>{{$student->name_sv}}</td>

											<td>{{ $student->mail}}</td>

											<td>{{ $student->sdt}}</td>

										</tr>

										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endif
			<!-- </div>
</div>
</div> -->
			@endsection